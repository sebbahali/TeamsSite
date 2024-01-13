<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TeamNotefication;
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
        return view('frontend.notefications.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  TeamNotefication $notefication
     * @return View
     */
    public function show(TeamNotefication $notefication): View
    {
        if ($notefication->status == 0) {
            $notefication->status = 1;
            $notefication->save();
        }

        return view('frontend.notefications.show', ['notefication' => $notefication]);
    }
}
