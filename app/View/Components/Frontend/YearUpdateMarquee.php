<?php

namespace App\View\Components\Frontend;

use App\Models\YearUpdate;
use App\Models\YearUpdateTeam;
use Illuminate\View\Component;

class YearUpdateMarquee extends Component
{
    public $yearUpdate;

    public $yearUpdateTeam;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->yearUpdate = YearUpdate::where('status', 1)->first();
        if ($this->yearUpdate) {
            $this->yearUpdateTeam = YearUpdateTeam::where('team_id', team()->id)
                ->where('year_update_id', $this->yearUpdate->id)
                ->first();
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.year-update-marquee');
    }
}
