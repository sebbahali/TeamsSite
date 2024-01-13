<?php

namespace App\Http\Controllers\Dashboard;

use App\Actions\OpenYearUpdate;
use App\Enums\PlayerApproveStatus;
use App\Enums\PlayerJoinStatus;
use App\Enums\PlayerYearStatus;
use App\Enums\YearUpdateStatus;
use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Team;
use App\Models\YearUpdate;
use App\Models\YearUpdateTeam;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class YearUpdateController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $yearUpdate = YearUpdate::where('status', 1)->first();
        $teams = Team::all();

        return view('dashboard.year-updates.create', ['teams' => $teams, 'yearUpdate' => $yearUpdate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request, OpenYearUpdate $openYearUpdate): RedirectResponse
    {
        $request->validate([
            'start' => ['required', 'date'],
            'end' => ['required', 'date'],
            'teams' => ['required'],
        ]);

        $yearUpdate = YearUpdate::create([
            'start' => $request->start,
            'end' => $request->end,
        ]);
        $teams = Team::whereIn('id', $request->teams)->get();

        $openYearUpdate($yearUpdate, $teams);

        session()->flash('success_message', 'تم فتح التجديد بنجاح');
        return to_route('dashboard.index'); //refactor
    }

    public function edit(YearUpdate $yearUpdate)
    {
        return view('dashboard.year-updates.edit', ['yearUpdate' => $yearUpdate]);
    }

    /**
     * Display the specified resource.
     *
     * @return View
     */
    public function show()
    {
        $yearUpdate = YearUpdate::where('status', 1)->first();

        if (!$yearUpdate) {
            session()->flash('error_message', 'عذرا التجديد غير مفتوح');
            return to_route('dashboard.index');
        }

        $yearUpdateTeams = YearUpdateTeam::where('year_update_id', $yearUpdate->id)->with('team')->get();

        return view('dashboard.year-updates.show', [
            'yearUpdate' => $yearUpdate,
            'yearUpdateTeams' => $yearUpdateTeams,
        ]);
    }
    
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  Team  $team
     * @return View
     */
    public function teamPlayer(Team $team)
    {
        $players = Player::where('team_id', $team->id)
            ->where('approve_status', PlayerApproveStatus::Approved->value)
            ->where('join_status', '!=', PlayerJoinStatus::Stoped)
            ->where('year_status', PlayerYearStatus::Active)
            ->with('team')
            ->paginate();

        return view('dashboard.year-updates.players', ['players' => $players, 'team' => $team]);
    }
  
}
