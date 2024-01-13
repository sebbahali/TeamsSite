<?php

namespace App\Jobs;

use App\Models\YearUpdate;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class EndYearUpdate implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $yearUpdate;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->yearUpdate = YearUpdate::where('status', 1)->first();
        if ($this->yearUpdate) {
            $now = date('Y-m-d');
            if ($now >= $this->yearUpdate->end) {
                $this->yearUpdate->status = 0;
                $this->yearUpdate->save();
            }
        }
    }
}
