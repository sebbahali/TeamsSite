<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TeamMange;
use App\Models\TeamMangeMember;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TeamMangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $manges = TeamMange::paginate(12);

        return view('frontend.team-manges.index', ['manges' => $manges]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('frontend.team-manges.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $this->validateDate($request);

        if (TeamMange::existActiveMange()) {
            session()->flash('error_message', 'عذرا هناك ادارة نشطة لا يمكن اضافة ادارة اخرى');

            return to_route('frontend.team-manges.index');
        }

        $mange = TeamMange::create([
            'start' => $request->start_date,
            'end' => $request->end_date,
        ]);

        session()->flash('success_message', 'تم اضافة الادارة بنجاح');

        return to_route('frontend.team-manges.show', $mange);
    }

    /**
     * Display the specified resource.
     *
     * @param TeamMange $teamMange
     * @return View
     */
    public function show(TeamMange $teamMange): View
    {
        $members = TeamMangeMember::where('team_mange_id', $teamMange->id)->paginate(12);

        return view('frontend.team-manges.show', ['teamMange' => $teamMange, 'members' => $members]);
    }



    private function validateDate(Request $request)
    {
        return $request->validate([
            'start_date' => ['required'],
            'end_date' => ['required'],
        ]);
    }
}
