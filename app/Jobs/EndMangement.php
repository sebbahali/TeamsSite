<?php

namespace App\Jobs;

use App\Models\ClubMange;
use App\Models\TeamMange;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class EndMangement implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $menegment;

    public $teamMangement;

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
        $this->menegment = ClubMange::where('status', 1)->first();

        if ($this->menegment) {
            if ($this->menegment->start >= $this->menegment->end) {
                $this->menegment->status = 0;
                $this->menegment->save();
            }
        }

        $this->teamMangement = TeamMange::where('status', 1)->get();

        if ($this->teamMangement) {
            foreach ($this->teamMangement as $mange) {
                if ($mange->start >= $mange->end) {
                    $mange->status = 0;
                    $mange->save();
                }
            }
        }
    }
}
