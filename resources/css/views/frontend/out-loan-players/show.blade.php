<x-frontend.layouts.app>
    <x-slot name="title">لاعب معار خارجيا</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="لاعب معار خارجيا">
                    <div class="form-inline d-flex align-items-center border-bottom mb-2">
                        <a class="btn btn-danger btn-sm mb-2" href="{{ route('frontend.out-loan-players.index') }}" title="رجوع">
                            <i class="mdi mdi-arrow-right-bold"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title mb-5">لاعب معار خارجيا</h4>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="text-center pb-4">
                                    <x-card.image-view :src=" $outLoanPlayer->sport_image" title="الصورة الرياضية"/>
                                </div>

                                <div class="d-flex justify-content-center mb-2">
                                    @if ($outLoanPlayer->status == \App\Enums\LoanOutPlayerStatus::Draft)
                                        <a href="{{ route('frontend.out-loan-players.send-to-club', $outLoanPlayer) }}" class="btn btn-primary btn-sm mx-1" title="ارسال الطلب الى النادي">
                                            <i class="mdi mdi-send"></i>
                                        </a>
                                    @endif

                                    @if ($outLoanPlayer->status == \App\Enums\LoanOutPlayerStatus::ClubApprove)
                                        <a href="{{ route('frontend.out-loan-players.checkout', $outLoanPlayer) }}" class="btn btn-success btn-sm mx-1" title="دفع">
                                            <i class="mdi mdi-credit-card"></i> دفع
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h3>{{ $outLoanPlayer->name }}</h3>
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
                                </div>
                                <div class="mt-4 py-2">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>تاريخ تقديم الطلب</td>
                                            <td>{{ $outLoanPlayer->created_at->format('Y-m-d') }}</td>
                                        </tr>
                                        <tr>
                                            <td>الرقم المدني</td>
                                            <td>{{ $outLoanPlayer->card_id }}</td>
                                        </tr>
                                        <tr>
                                            <td>تاريخ الميلاد</td>
                                            <td>{{ $outLoanPlayer->birthdate }}</td>
                                        </tr>
                                        <tr>
                                            <td>تاريخ البداية</td>
                                            <td>{{ $outLoanPlayer->start }}</td>
                                        </tr>
                                        <tr>
                                            <td>تاريخ النهاية</td>
                                            <td>{{ $outLoanPlayer->end }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <x-card.image-view :src=" $outLoanPlayer->front_card_image" title="البطاقة"/>
                            </div>
                            <div class="col-md-6">
                                <x-card.image-view :src="$outLoanPlayer->loan_letter" title="رسالة الاعارة"/>
                            </div>
                        </div>
                    </div>
                </x-card.main>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>
