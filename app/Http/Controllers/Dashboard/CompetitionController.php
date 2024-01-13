<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\CompetitionStatus;
use App\Enums\CompetitionTeamStatus;
use App\Http\Controllers\Controller;
use App\Models\Assistant;
use App\Models\Competition;
use App\Models\CompetitionTeam;
use App\Models\OutLoanPlayer;
use App\Models\Team;
use App\Models\TeamNotefication;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Symfony\Component\Console\Input\Input;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $competitions = Competition::generalConditions()->paginate(12);

        if (auth('web')->user()->hasRole('competition_manger')) {
            $competitions = Competition::where('status', CompetitionStatus::SendToMange)
                ->paginate(12);
        }

        return view('dashboard.competitions.index', [
            'competitions' => $competitions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $teams = Team::all();

        return view('dashboard.competitions.create', ['teams' => $teams]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'logo' => ['required', 'image', 'max:5000'],
            'type' => ['required'],
            'location' => ['required', 'string'],
            'start_date' => ['required', 'date'],
            'register_end' => ['required', 'date'],
            'mange_member_count' => ['required'],
            'player_count' => ['required'],
            'subscription_price' => ['required'],
            'insurance_price' => ['required'],
            'teams' => ['required'],
        ]);

        $imagePath = $request->file('logo')->store('logos', 'competitions');

        $exists = Storage::disk('competitions')->exists($imagePath);

        if (!$exists) {
            return back()->with('error_message', 'فشل رفع الصورة الرجاء المحاولة مرة اخرى');
        }

        $data = array_merge($request->except('teams'), ['status' => CompetitionStatus::Draft]);
        $data['allow_loan_in'] = ("on" == "$request->allow_loan_in") ? true : false;
        $data['allow_loan_out'] = ("on" == "$request->allow_loan_out") ? true : false;
        $data['allow_player_age'] = ("on" == "$request->allow_player_age") ? true : false;
        $data['logo'] = $imagePath;

        try {
            $competition = Competition::create($data);
        } catch (Exception) {
            session()->flash('error_message', 'عذرا لم يتم تسجيل المسابقة الرجاء المحاولة مرة اخرى');
            return back()->withInput();
        }

        $teams = $request->teams;

        foreach ($teams as $team) {
            CompetitionTeam::create([
                'competition_id' => $competition->id,
                'team_id' => $team,
                'status' => CompetitionTeamStatus::Draft,
                'mange_members' => [],
                'loan_out_players' => [],
                'loan_in_players' => [],
                'players' => [],
            ]);
        }

        session()->flash('success_message', 'تم تسجيل المسابقة بنجاح');

        return to_route('dashboard.competitions.show', $competition);
    }

    /**
     * Display the specified resource.
     *
     * @param Competition $competition
     * @return View
     */
    public function show(Competition $competition): View
    {
        return view('dashboard.competitions.show', ['competition' => $competition]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Competition $competition
     * @return \Illuminate\Http\Response
     */
    public function edit(Competition $competition)
    {
        return view('dashboard.competitions.edit', [
            'competition' => $competition,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Competition $competition
     * @return RedirectResponse
     */
    public function update(Request $request, Competition $competition): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string'],
            'type' => ['required'],
            'location' => ['required', 'string'],
            'start_date' => ['required', 'date'],
            'register_end' => ['required', 'date'],
            'mange_member_count' => ['required'],
            'player_count' => ['required'],
            'subscription_price' => ['required'],
            'insurance_price' => ['required'],
        ]);

        $data = $request->all();
        $data['allow_loan_in'] = ("on" == "$request->allow_loan_in") ? true : false;
        $data['allow_loan_out'] = ("on" == "$request->allow_loan_out") ? true : false;
        $data['allow_player_age'] = ("on" == "$request->allow_player_age") ? true : false;

        try {
            $competition->update($data);
        } catch (Exception) {
            session()->flash('error_message', 'عذرا لم يتم تسجيل المسابقة الرجاء المحاولة مرة اخرى');
            return back()->withInput();
        }

        session()->flash('success_message', 'تم تحديث المسابقة بنجاح');

        return to_route('dashboard.competitions.show', $competition);
    }

    public function active(Competition $competition)
    {
        $competition->status = CompetitionStatus::Active;

        $competition->save();

        $teams = Team::all();

        foreach ($teams as $team) {
            TeamNotefication::create([
                'team_id' => $team->id,
                'title' => 'تم فتح المسابقة',
                'body' => "تم فتح مسابقة $competition->name",
                'link' => route('frontend.competitions.show', $competition->id),
            ]);
        }

        session()->flash('success_message', 'تم تنشيط المسابقة بنجاح');
        return to_route('dashboard.competitions.show', $competition);
    }

    public function unActive(Competition $competition)
    {
        $competition->status = CompetitionStatus::Draft;

        $competition->save();

        session()->flash('success_message', 'تم الغاء التنشيط المسابقة بنجاح');
        return to_route('dashboard.competitions.show', $competition);
    }

    public function sendToMange(Competition $competition)
    {
        $competition->status = CompetitionStatus::SendToMange;

        $competition->save();

        session()->flash('success_message', 'تم الارسال الى لجنة المسابقات');
        return to_route('dashboard.competitions.show', $competition);
    }

    public function display(Competition $competition)
    {
        $competition->load('competitionTeams');

        return view('dashboard.competitions.display', ['competition' => $competition]);
    }

    public function teamShow(Competition $competition, CompetitionTeam $competitionTeam)
    {
        if ($competitionTeam->competition_id != $competition->id) {
            session()->flash('error_message', 'عذرا لا يمكنك عرض الصفحة');
            return to_route('dashboard.competitions.display', $competition);
        }

        return view('dashboard.competitions.team-show', ['competition' => $competition, 'competitionTeam' => $competitionTeam]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Competition $competition
     * @return RedirectResponse
     */
    public function destroy(Competition $competition): RedirectResponse
    {
        $competition->delete();

        session()->flash('success_message', 'تم حذف المسابقة بنجاح');

        return to_route('dashboard.competitions.index');
    }

    public function storeArchive(Competition $competition)
    {
        $competition->archive_at = now();
        $competition->save();
        session()->flash('success_message', 'تم أرشفة المسابقة بنجاح');
        return to_route('dashboard.competitions.index');
    }
    public function indexArchive()
    {
        $competitions = Competition::archive()->paginate(12);
        return view('dashboard.competitions.archive', [
            'competitions' => $competitions,
        ]);
    }

    public function pdf(CompetitionTeam $competitionTeam)
    {
        $team = Team::find($competitionTeam->team_id);
        $players = $team->players()->whereIn('card_id', $competitionTeam->players)
            ->get();

        $loanInPlayers = $team->players()->whereIn('card_id', $competitionTeam->loan_in_players)
            ->get();

        $loanOutPlayers = OutLoanPlayer::where('team_id', $team->id)
            ->whereIn('card_id', $competitionTeam->loan_out_players)
            ->get();

        $assistants = Assistant::where('team_id', $team->id)
            ->whereIn('id', $competitionTeam->mange_members)
            ->get();

        return view('pdf.competion', [
            'players' => $players,
            'loanInPlayers' => $loanInPlayers,
            'loanOutPlayers' => $loanOutPlayers,
            'team' => $team,
            'assistants' => $assistants,
        ]);
    }
}
