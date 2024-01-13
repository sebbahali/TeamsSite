<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Matche;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $matches = Matche::when(request('search'), function ($query) {
            return $query->where('competition_name', 'like', '%' . request('search') . '%');
        })->paginate(12);

        return view('dashboard.match.index', ['matches' => $matches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('dashboard.match.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'competition_name' => ['required', 'string', 'unique:matches'],
            'match_place' => ['required', 'string'],
            'main_team' => ['required', 'string'],
            'opponent_team' => ['required', 'string'],
            'opponent_team_logo' => ['required', 'image', 'max:5000'],
            'match_time' => ['required'],
            'match_date' => ['required', 'date'],
        ]);

        $imagePath = $request->file('opponent_team_logo')->store('posts', 'clubs');
        $match = new Matche();
        $match->user_id = auth()->user()->id;
        $match->opponent_team_logo = $imagePath;
        $match->competition_name = $request->input('competition_name');
        $match->match_place = $request->input('match_place');
        $match->main_team = $request->input('main_team');
        $match->opponent_team = $request->input('opponent_team');
        $match->match_time = $request->input('match_time');
        $match->match_date = $request->input('match_date');
        $match->save();

        session()->flash('success_message', 'تم اضافة المباراة بنجاح');

        return to_route('dashboard.matches.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Matche $match
     * @return View
     */
    public function show(Matche $match): View
    {
        return view('dashboard.match.show', ['match' => $match]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Matche $match
     * @return \Illuminate\Http\Response
     */
    public function edit(Matche $match)
    {
        return view('dashboard.match.edit', ['match' => $match]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Matche $match
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matche $match)
    {
        $request->validate([
            'competition_name' => ['required', 'string', "unique:matches,id,$match->id"],
            'match_place' => ['required', 'string'],
            'main_team' => ['required', 'string'],
            'opponent_team' => ['required', 'string'],
            'opponent_team_logo' => ['nullable', 'image', 'max:5000'],
            'match_time' => ['required'],
            'match_date' => ['required', 'date'],
        ]);
        if ($request->hasFile('opponent_team_logo')) {
            $imagePath = $request->file('opponent_team_logo')->store('posts', 'clubs');
        } else {
            $imagePath = $match->opponent_team_logo;
        }
        $match->opponent_team_logo = $imagePath;
        $match->competition_name = $request->input('competition_name');
        $match->match_place = $request->input('match_place');
        $match->main_team = $request->input('main_team');
        $match->opponent_team = $request->input('opponent_team');
        $match->match_time = $request->input('match_time');
        $match->match_date = $request->input('match_date');
        $match->save();

        session()->flash('success_message', 'تم تعديل المبارلة بنجاح');

        return to_route('dashboard.matches.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Matche $match
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matche $match)
    {
        $match->delete();

        session()->flash('success_message', 'تم حذف المباراة بنجاح');

        return to_route('dashboard.matches.index');
    }
}
