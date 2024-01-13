<x-frontend.layouts.app>
    <x-slot name="title">الاعارات الخارجية</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="الاعارات الخارجية">
                    <div class="form-inline d-flex align-items-center border-bottom mb-2">
                        <a class="btn btn-danger btn-sm mb-2" href="{{ route('frontend.index') }}" title="رجوع">
                            <i class="mdi mdi-arrow-right-bold"></i>
                        </a>

                        <a class="btn btn-primary btn-sm mb-2 mx-2" href="{{ route('frontend.out-loan-players.create') }}" title="اضافة مسابقة">
                            <i class="mdi mdi-plus"></i>
                        </a>
                    </div>

                    <div class="row mt-4 mb-5">
                        @forelse ($outLoanPlayers as $outLoanPlayer)
                        <div class="col-md-4">
                            <section class="player-card mt-5">
                                <div class="card">
                                    <header>
                                        <a class="profile">
                                            <img src="{{ $outLoanPlayer->sport_image }}" alt="Profile Image">
                                        </a>
                                    </header>
                                    <article>
                                        <h1>{{ $outLoanPlayer->name }}</h1>
                                        <div class="text-center">
                                            @switch($outLoanPlayer->status)
                                                @case(\App\Enums\LoanOutPlayerStatus::Draft)
                                                    <span class="badge bg-danger">مسودة</span>
                                                    @break
                                                @case(\App\Enums\LoanOutPlayerStatus::SendToClub)
                                                    <span class="badge bg-warning">تم الارسال الى النادي</span>
                                                    @break
                                                @case(\App\Enums\LoanOutPlayerStatus::ClubApprove)
                                                    <span class="badge bg-warning">وافق عليه النادي</span>
                                                    @break
                                                @case(\App\Enums\LoanOutPlayerStatus::Done)
                                                    <span class="badge bg-warning">جارية</span>
                                                    @break
                                                @case(\App\Enums\LoanOutPlayerStatus::Expired)
                                                    <span class="badge bg-warning">منتهية</span>
                                                    @break
                                                @default
                                            @endswitch
                                        </div>
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
                                            <a href="{{ route('frontend.out-loan-players.show', $outLoanPlayer) }}" class="btn btn-primary btn-sm">عرض</a>
                                            @if ($outLoanPlayer->status == \App\Enums\LoanOutPlayerStatus::Draft)
                                                <a href="{{ route('frontend.out-loan-players.edit', $outLoanPlayer) }}" class="btn btn-info btn-sm">تعديل</a>
                                            @endif
                                            <form action="{{ route('frontend.out-loan-players.destroy', $outLoanPlayer) }}" method="POST"
                                                style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm delete-confirmation">حذف</button>
                                            </form>
                                        </div>
                                    </article>
                                </div>
                            </section>
                        </div>
                        @empty
                            <div class="alert alert-info text-center">لا توجد بيانات لعرضها</div>
                        @endforelse
                    </div>

                    <x-slot name="paginate">
                        {{ $outLoanPlayers->links() }}
                    </x-slot>
                </x-card.main>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>
