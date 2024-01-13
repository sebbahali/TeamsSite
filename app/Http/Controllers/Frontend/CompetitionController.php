<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\CompetitionStatus;
use App\Enums\CompetitionTeamStatus;
use App\Http\Controllers\Controller;
use App\Models\ClubNotefication;
use App\Models\Competition;
use App\Models\CompetitionTeam;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $competitions = Competition::generalConditions()->where('status', '!=', CompetitionStatus::Draft)->paginate(12);

        return view('frontend.competitions.index', [
            'competitions' => $competitions,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Competition  $competition
     * @return View
     */
    public function show(Competition $competition): View
    {
        return view('frontend.competitions.show', ['competition' => $competition]);
    }

    /**
     * Subscripe in competition
     *
     * @param Competition $competition
     * @return RedirectResponse
     */
    public function subscripe(Competition $competition): RedirectResponse
    {
        $competitionTeam = CompetitionTeam::where('competition_id', $competition->id)
            ->where('team_id', team()->id)
            ->first();
        if ($competitionTeam->team_id != team()->id || $competitionTeam->status == CompetitionTeamStatus::Unsubscripe) {
            session()->flash('error_message', 'عذرا ليس لديك الصلاحيات');
            return to_route('frontend.competitions.index');
        }

        $competitionTeam->update([
            'status' => CompetitionTeamStatus::Subscripe,
        ]);

        ClubNotefication::create([
            'club_id' => team()->club_id,
            'title' => 'تم الاشتراك في المسابقة',
            'body' => 'لقد قام فريق' . team()->name . ' بالاشتراك في مسابقة ' . $competition->name,
            'link' => route('dashboard.competitions.show-team', [
                'competition' => $competition,
                'competitionTeam' => $competitionTeam,
            ]),
        ]);

        session()->flash('success_message', 'تم الاشتراك في المسابقة');
        return to_route('frontend.competitions.index');
    }

    /**
     * UnSubscripe from competition
     *
     * @param Competition $competition
     * @return RedirectResponse
     */
    public function unSubscripe(Competition $competition): RedirectResponse
    {
        $competitionTeam = CompetitionTeam::where('competition_id', $competition->id)
            ->where('team_id', team()->id)
            ->first();

        if ($competitionTeam->team_id != team()->id || $competitionTeam->status != CompetitionTeamStatus::Draft) {
            session()->flash('error_message', 'عذرا ليس لديك الصلاحيات');
            return to_route('frontend.competitions.index');
        }

        $competitionTeam->update([
            'status' => CompetitionTeamStatus::Unsubscripe,
        ]);

        ClubNotefication::create([
            'club_id' => team()->club_id,
            'title' => 'تم الغاء الاشتراك في المسابقة',
            'body' => 'لقد قام فريق ' . team()->name . ' بالغاء الاشتراك في مسابقة ' . $competition->name,
            'link' => route('dashboard.competitions.display', ['competition' => $competition]),
        ]);

        session()->flash('success_message', 'تم الغاء الاشتراك في المسابقة');
        return to_route('frontend.competitions.index');
    }

    /**
     * Setup Competition Subscription
     *
     * @param Competition $competition
     * @return RedirectResponse|View
     */
    public function setup(Competition $competition): RedirectResponse|View
    {
        $competitionTeam = CompetitionTeam::where('competition_id', $competition->id)
            ->where('team_id', team()->id)
            ->first();

        if ($competitionTeam->team_id != team()->id ||
            $competitionTeam->status == CompetitionTeamStatus::Draft ||
            $competitionTeam->status == CompetitionTeamStatus::Unsubscripe) {
            session()->flash('error_message', 'عذرا ليس لديك الصلاحيات');
            return to_route('frontend.competitions.index');
        }

        return view('frontend.competitions.setup', [
            'competition' => $competition,
            'competitionTeam' => $competitionTeam,
        ]);
    }
}
