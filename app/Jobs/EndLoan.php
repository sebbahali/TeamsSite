<?php

namespace App\Jobs;

use App\Enums\LoanStatus;
use App\Enums\PlayerJoinStatus;
use App\Models\LoanPlayer;
use App\Models\Player;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class EndLoan implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $loans;

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
        $this->loans = LoanPlayer::where('status', LoanStatus::Done)->with('player')->get();

        if ($this->loans) {
            foreach ($this->loans as $loan) {
                if (date('Y-m-d') >= $loan->end) {
                    $player = Player::find($loan->player_id);
                    $player->team_id = $loan->basic_team_id;
                    $player->join_status = PlayerJoinStatus::Affiliated;
                    $player->save();
                    $loan->status = LoanStatus::Expired;
                    $loan->save();
                }
            }
        }
    }
}
