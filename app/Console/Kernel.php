<?php

namespace App\Console;

use App\Jobs\CompetitionMatchStatusJob;
use App\Jobs\EndLoan;
use App\Jobs\EndMangement;
use App\Jobs\EndOutLoan;
use App\Jobs\EndYearUpdate;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->job(new EndYearUpdate())->everyFiveMinutes();
        $schedule->job(new EndLoan())->everyFiveMinutes();
        $schedule->job(new EndMangement())->everyFiveMinutes();
        $schedule->job(new EndOutLoan())->everyFiveMinutes();
        $schedule->job(new CompetitionMatchStatusJob())->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
