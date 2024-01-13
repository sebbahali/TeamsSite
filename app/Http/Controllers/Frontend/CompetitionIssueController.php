<?php

namespace App\Http\Controllers\Frontend;

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
        return view('frontend.competition-issues.index', ['competition' => $competition]);
    }

    /**
     * Display a listing of the resource.
     *
     * @param Competition $competition
     * @return View
     */
    public function messageIndex(Competition $competition): View
    {
        return view('frontend.competition-issues.message-index', ['competition' => $competition]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Competition $competition
     * @return View
     */
    public function create(Competition $competition): View
    {
        return view('frontend.competition-issues.create', ['competition' => $competition]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Competition $competition
     * @return View
     */
    public function messageCreate(Competition $competition): View
    {
        return view('frontend.competition-issues.message-create', ['competition' => $competition]);
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

        if ($competitionIssue->team_id != team()->id) {
            abort(403);
        }

        return view('frontend.competition-issues.show', [
            'competitionIssue' => $competitionIssue,
            'competition' => $competition,
        ]);
    }
}
