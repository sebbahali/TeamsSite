<?php

namespace App\View\Components\Dashboard\Includes;

use App\Models\Club;
use App\Models\ClubMessageNotefication;
use App\Models\ClubNotefication;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $notefications;

    public $messages;

    public $club;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->notefications = ClubNotefication::whereClubId(auth()->guard('web')->user()->club->id)
                ->unReaded()
                ->take(5)
                ->get();

        $this->messages = ClubMessageNotefication::whereUserId(auth()->guard('web')->user()->id)
                ->unReaded()
                ->take(5)
                ->get();

        $this->club = Club::first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.includes.navbar');
    }
}
