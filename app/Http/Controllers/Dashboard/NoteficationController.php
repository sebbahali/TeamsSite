<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ClubNotefication;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NoteficationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('dashboard.notefications.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  ClubNotefication $notefication
     * @return View
     */
    public function show(ClubNotefication $notefication): View
    {

        if ($notefication->status == 0) {
            $notefication->status = 1;
            $notefication->save();
        }

        return view('dashboard.notefications.show', ['notefication' => $notefication]);
    }
}
