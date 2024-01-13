<?php

namespace App\View\Components\Dashboard;

use App\Models\ClubMessageNotefication;
use App\Models\ClubNotefication;
use Illuminate\View\Component;

class PoupNoteficationMenu extends Component
{
    public $notefications;

    public $messages;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->notefications = ClubNotefication::whereClubId(auth()->guard('web')->user()->club->id)
                ->unReaded()
                ->count();

        $this->messages = ClubMessageNotefication::whereUserId(auth()->guard('web')->user()->id)
                ->unReaded()
                ->count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.poup-notefication-menu');
    }
}
