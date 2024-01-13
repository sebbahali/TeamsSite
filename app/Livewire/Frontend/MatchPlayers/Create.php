<?php

namespace App\Http\Livewire\Frontend\MatchPlayers;

use App\Models\CompetitionMatch;
use App\Models\CompetitionTeam;
use App\Models\MatchPlayer;
use App\Models\OutLoanPlayer;
use App\Models\Player;
use Livewire\Component;

class Create extends Component
{
    public $join_type = 'player';

    public CompetitionMatch $match;

    public CompetitionTeam $team;

    public $type;

    public $player;

    public $number;

    private $register_players = [];

    private $loan_out_players = [];

    protected $rules = [
        'player' => ['required'],
        'type' => 'required',
        'number' => 'required'
    ];

    public function mount(CompetitionMatch $match)
    {
        $this->match = $match;

        $this->team = CompetitionTeam::where('competition_id', $match->competition_id)
            ->where('team_id', team()->id)->first();

        $this->register_players = MatchPlayer::select('player_id')
            ->where('join_type', 'player')
            ->OrWhere('join_type', 'loan_in')
            ->where('team_id', $this->team->team_id)
            ->where('match_id', $this->match->id)
            ->get();

        $this->loan_out_players = MatchPlayer::select('player_id')
            ->where('join_type', 'lona_out')
            ->where('team_id', $this->team->team_id)
            ->where('match_id', $this->match->id)
            ->get();
    }

    public function getPlayers()
    {
        if (!in_array($this->join_type, ['player', 'loan_in', 'loan_out'])) {
            session()->flash('error_message', 'هناك خطاء الرجاء المحاولة مرة اخرة');
        }

        if ($this->join_type == 'player') {
            return Player::whereIn('card_id', $this->team->players)
                ->whereNotIn('card_id', $this->register_players)
                ->get();
        } elseif ($this->join_type == 'loan_in') {
            return Player::whereIn('card_id', $this->team->loan_in_players)
                ->whereNotIn('card_id', $this->register_players)
                ->get();
        } elseif ($this->join_type == 'loan_out') {
            return OutLoanPlayer::whereIn('card_id', $this->team->loan_out_players)
                ->whereNotIn('card_id', $this->loan_out_players)
                ->get();
        }
    }

    public function addPlayer()
    {
        $this->validate();

        $checkPlayer = MatchPlayer::where('team_id', $this->team->team_id)
            ->where('match_id', $this->match->id)
            ->where('player_id', $this->player)
            ->first();

        if ($checkPlayer) {
            session()->flash("error_message", "عذرا هذا اللاعب تمت اضافته");
            return redirect()->route('frontend.match-players.create', ['match' => $this->match->id]);
        }

        $playersNumbers = empty($tmpP = MatchPlayer::select('number')
            ->where('team_id', $this->team->team_id)
            ->where('match_id', $this->match->id)
            ->get()->toArray()) ? [] : array_values($tmpP[0]);

        if (in_array($this->number, $playersNumbers)) {
            session()->flash("error_message", "عذرا رقم القميص تم استخدامه من قبل");
            return redirect()->route('frontend.match-players.create', ['match' => $this->match->id]);
        }

        if (!$this->match->isOpenForTeam()) {
            session()->flash("error_message", "عذر تم اغلاق التسجيل للمباراة");
            return redirect()->route('frontend.match-players.create', ['match' => $this->match->id]);
        }

        MatchPlayer::create([
            'match_id' => $this->match->id,
            'team_id' => $this->team->team_id,
            'join_type' => $this->join_type,
            'player_id' => $this->player,
            'type' => $this->type,
            'number' => $this->number,
            'g' => [],
            'r' => ['time' => '', 'resone' => ''],
            'y' => ['time' => '', 'resone' => ''],
            's' => ['time' => '', 'player' => ''],
        ]);

        session()->flash('success_message', 'تم اضافة اللاعب بنجاح');
        return redirect()->route('frontend.match-players.create', ['match' => $this->match->id]);
    }

    public function render()
    {
        return view('livewire.frontend.match-players.create', [
            'players' => $this->getPlayers(),
        ]);
    }
}
