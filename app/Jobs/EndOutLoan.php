<?php

namespace App\Jobs;

use App\Enums\LoanOutPlayerStatus;
use App\Models\OutLoanPlayer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class EndOutLoan implements ShouldQueue
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
        $this->loans = OutLoanPlayer::where('status', LoanOutPlayerStatus::Done)->get();

        if ($this->loans) {
            foreach ($this->loans as $loan) {
                if (date('Y-m-d') >= $loan->end) {
                    $loan->status = LoanOutPlayerStatus::Expired;
                    $loan->save();
                }
            }
        }
    }
}
