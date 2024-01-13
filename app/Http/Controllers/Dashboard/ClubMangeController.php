<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\ClubMange;
use App\Models\ClubMangeMember;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClubMangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $manges = ClubMange::paginate(12);

        return view('dashboard.club-manges.index', ['manges' => $manges]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('dashboard.club-manges.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateDate($request);

        if (ClubMange::existActiveMange()) {
            session()->flash('error_message', 'عذرا هناك ادارة نشطة لا يمكن اضافة ادارة اخرى');

            return to_route('dashboard.club-manges.index');
        }

        $mange = ClubMange::create([
            'start' => $request->start_date,
            'end' => $request->end_date,
        ]);

        session()->flash('success_message', 'تم اضافة الادارة بنجاح');

        return to_route('dashboard.club-manges.show', $mange);
    }

    /**
     * Display the specified resource.
     *
     * @param  ClubMange  $clubMange
     * @return View
     */
    public function show(ClubMange $clubMange)
    {
        $members = ClubMangeMember::where('club_mange_id', $clubMange->id)->paginate(12);

        return view('dashboard.club-manges.show', ['clubMange' => $clubMange, 'members' => $members]);
    }



    private function validateDate(Request $request)
    {
        return $request->validate([
            'start_date' => ['required'],
            'end_date' => ['required'],
        ]);
    }
}
