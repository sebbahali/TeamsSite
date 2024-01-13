<?php

namespace App\Jobs;

use App\Enums\CompetitionStatus;
use App\Enums\MatchStatus;
use App\Models\CompetitionMatch;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CompetitionMatchStatusJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

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
        $notStartMatches = CompetitionMatch::where('status', MatchStatus::NotStart)
            ->where('match_time', '<=', now())
            ->get();

        foreach ($notStartMatches as $match) {
            $match->update(['status' => MatchStatus::Started]);
        }

        $startedMatches = CompetitionMatch::where('status', MatchStatus::Started)
            ->where('match_time', '<=', now()->subMinutes(90))
            ->get();

        foreach ($startedMatches as $match) {
            $match->update(['status' => MatchStatus::End]);
        }
    }
}
