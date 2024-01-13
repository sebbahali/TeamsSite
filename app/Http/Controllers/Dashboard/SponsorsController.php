<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class SponsorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $sponsors = Sponsor::when(request('search'), function ($query) {
            return $query->where('name', 'like', '%' . request('search') . '%');
        })->paginate(12);

        return view('dashboard.sponsors.index', ['sponsors' => $sponsors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('dashboard.sponsors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string'],
            'image' => ['required', 'image', 'max:5000'],
        ]);

        $imagePath = $request->file('image')->store('sponsors', 'clubs');
        $request['user_id'] = auth()->user()->id;
        Sponsor::create([
            'name' => $request->input('name'),
            'user_id' =>$request['user_id'],
            'image' => $imagePath,
        ]);

        session()->flash('success_message', 'تم اضافة بيانات الراعي بنجاح');

        return to_route('dashboard.sponsors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Sponsor  $sponsor
     * @return View
     */
    public function show(Sponsor $sponsor): View
    {
        return view('dashboard.sponsors.show', ['sponsor' => $sponsor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function edit(Sponsor $sponsor)
    {
        return view('dashboard.sponsors.edit', ['sponsor' => $sponsor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sponsor $sponsor)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'image' => ['nullable', 'image', 'max:5000'],
        ]);


        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('sponsors', 'clubs');
        } else {
            $imagePath = $sponsor->image;
        }

        $sponsor->name = $request->input('name');
        $sponsor->image = $imagePath;
        $sponsor->save();

        session()->flash('success_message', 'تم تعديل بيانات الراعي بنجاح');

        return to_route('dashboard.sponsors.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponsor $sponsor)
    {
        $sponsor->delete();

        session()->flash('success_message', 'تم حذف الراعي بنجاح');

        return to_route('dashboard.sponsors.index');
    }
}
