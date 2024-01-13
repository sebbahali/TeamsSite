<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\CompetitionIssueStatus;
use App\Http\Controllers\Controller;
use App\Models\Competition;
use App\Models\CompetitionIssue;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CompetitionIssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Competition $competition
     * @return View
     */
    public function index(Competition $competition): View
    {
        return view('dashboard.competition-issues.index', ['competition' => $competition]);
    }

    /**
     * Display a listing of the resource.
     *
     * @param Competition $competition
     * @return View
     */
    public function messageIndex(Competition $competition): View
    {
        return view('dashboard.competition-issues.message-index', ['competition' => $competition]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Competition $competition
     * @return View
     */
    public function create(Competition $competition): View
    {
        return view('dashboard.competition-issues.create', ['competition' => $competition]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Competition $competition
     * @return View
     */
    public function messageCreate(Competition $competition): View
    {
        return view('dashboard.competition-issues.message-create', ['competition' => $competition]);
    }

    /**
     * Display the specified resource.
     *
     * @param CompetitionIssue $competitionIssu
     * @param Competition $competition
     * @return View
     */
    public function show(Competition $competition, CompetitionIssue $competitionIssue): View
    {
        $competitionIssue->load('replys');

        return view('dashboard.competition-issues.show', [
            'competitionIssue' => $competitionIssue,
            'competition' => $competition,
        ]);
    }

    public function close(Competition $competition, CompetitionIssue $competitionIssue)
    {
        $competition = $competition;

        $competitionIssue->update([
            'status' => CompetitionIssueStatus::Close,
        ]);

        session()->flash('success_message', 'تم اغلاق الشكوى بنجاح');

        return back();
    }
}
