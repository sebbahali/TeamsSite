<?php

namespace App\View\Components\Frontend;

use App\Models\TeamMessageNotefication;
use App\Models\TeamNotefication;
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
        $this->notefications = TeamNotefication::whereTeamId(team()->id)
                ->unReaded()
                ->count();

        $this->messages = TeamMessageNotefication::whereTeamId(team()->id)
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
        return view('components.frontend.poup-notefication-menu');
    }
}
