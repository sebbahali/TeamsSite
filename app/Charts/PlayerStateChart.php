<?php

namespace App\Charts;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use App\Enums\PlayerJoinStatus;

class PlayerStateChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

}
