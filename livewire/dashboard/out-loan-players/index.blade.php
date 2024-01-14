<div class="container">
    <div class="row">
        <div class="col-12">
            <x-card.main title="طلبات الاستعارة الخارجية">

                <div class="form-inline d-flex align-items-center border-bottom mb-2">
                    <div class="form-check mx-sm-2">
                        <label class="form-check-label" for="send_to_club">
                            <input class="form-check-input" type="radio" id="send_to_club" value="{{ \App\Enums\LoanOutPlayerStatus::SendToClub->value }}" wire:model="status" /> في انتظار الموافقة
                            <i class="input-helper"></i>
                        </label>
                    </div>
                    <div class="form-check mx-sm-2">
                        <label class="form-check-label" for="club_approve">
                            <input class="form-check-input" type="radio" id="club_approve" value="{{ \App\Enums\LoanOutPlayerStatus::ClubApprove->value }}" wire:model="status" /> في انتظار السداد
                            <i class="input-helper"></i>
                        </label>
                    </div>
                    <div class="form-check mx-sm-2">
                        <label class="form-check-label" for="done">
                            <input class="form-check-input" type="radio" id="done" value="{{ \App\Enums\LoanOutPlayerStatus::Done->value }}" wire:model="status" /> سارية
                            <i class="input-helper"></i>
                        </label>
                    </div>
                </div>

                <div class="preview-list mt-3">
                    <div class="row">
                        @forelse ($outLoanPlayers as $outLoanPlayer)
                            <div class="col-md-4 mb-5">
                                <section class="player-card mt-5">
                                    <div class="card">
                                        <header>
                                            <a class="profile">
                                                <img src="{{ $outLoanPlayer->sport_image }}" alt="Profile Image">
                                            </a>
                                        </header>

                                        <article>
                                            <h1>{{ $outLoanPlayer->name }}</h1>
                                            <div class="info">
                                                <div>
                                                    <span><i class="mdi mdi-account-card-details"></i></span>
                                                    <span>{{ $outLoanPlayer->card_id }}</span>
                                                </div>
                                                <div>
                                                    <span><i class="mdi mdi-calendar-multiple"></i></span>
                                                    <span>{{ $outLoanPlayer->birthdate }}</span>
                                                </div>
                                            </div>
                                            <div class="info mt-3">
                                                <a href="{{ route('dashboard.out-loan-players.show', $outLoanPlayer) }}" class="btn btn-primary btn-sm">عرض</a>
                                            </div>
                                        </article>
                                    </div>
                                </section>
                            </div>
                        @empty
                            <div class="alert alert-info text-center">لا توجد طلبات لعرضها</div>
                        @endforelse
                    </div>
                </div>

                <x-slot name="paginate">
                    {{ $outLoanPlayers->links() }}
                </x-slot>
            </x-card.main>
        </div>
    </div>
</div>
