<?php

namespace App\View\Components\Frontend\Includes;

use App\Models\TeamMessageNotefication;
use App\Models\TeamNotefication;
use Illuminate\View\Component;

class Navbar extends Component
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
        $this->notefications = TeamNotefication::whereTeamId(team()->id)
                ->unReaded()
                ->take(5)
                ->get();

        $this->messages = TeamMessageNotefication::whereTeamId(team()->id)
                ->unReaded()
                ->take(5)
                ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.includes.navbar');
    }
}
