<?php

namespace App\Actions;

use App\Enums\PlayerYearStatus;
use App\Enums\YearUpdateStatus;
use App\Models\YearUpdate;
use App\Models\YearUpdateTeam;
use Illuminate\Support\Facades\DB;

class OpenYearUpdate
{
    public function __invoke(YearUpdate $yearUpdate, $teams)
    {
        DB::transaction(function () use ($teams, $yearUpdate) {
            foreach ($teams as $team) {
                $players = $team->subscribePlayer();
                $players->update(['year_status' => PlayerYearStatus::UnActive]);

                YearUpdateTeam::create([
                    'year_update_id' => $yearUpdate->id,
                    'team_id' => $team->id,
                    'status' => YearUpdateStatus::UnApprove,
                    'cost' => ($players->count() * 3),
                ]);
            }
        });
    }
}
