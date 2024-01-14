<x-frontend.layouts.app>
    <x-slot name="title">المسابقات</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="مسابقة - {{ $competition->name }}">
                    <div class="form-inline d-flex align-items-center border-bottom mb-2">
                        <a class="btn btn-danger btn-sm mb-2" href="{{ route('frontend.competitions.index') }}" title="رجوع">
                            <i class="mdi mdi-arrow-right-bold">Back</i>
                        </a>
                    </div>

                    <div class="card-body">
                        <h4 class="card-title mb-5">بيانات المسابقة</h4>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="text-center pb-4">
                                    <x-card.image-view :src="$competition->logo" title="شعار المسابقة" />
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h3>{{ $competition->name }}</h3>
                                        <div class="d-flex align-items-center">
                                            <h5 class="mb-0 mr-2 text-muted"><i class="mdi mdi-map-marker-radius"></i>
                                                {{ $competition->location }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 py-2">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>نوع المسابقة</td>
                                            <td>{{ $competition->type->value }}</td>
                                        </tr>
                                        <tr>
                                            <td>تاريخ الانطلاق</td>
                                            <td>{{ $competition->start_date }}</td>
                                        </tr>
                                        <tr>
                                            <td>اخر موعد للتسجيل</td>
                                            <td>{{ $competition->register_end }}</td>
                                        </tr>
                                        <tr>
                                            <td>عدد الاداريين</td>
                                            <td>{{ $competition->mange_member_count }}</td>
                                        </tr>
                                        <tr>
                                            <td>عدد اللاعبين</td>
                                            <td>{{ $competition->player_count }}</td>
                                        </tr>
                                        <tr>
                                            <td>مبلغ الاشتراك</td>
                                            <td>{{ $competition->subscription_price }}</td>
                                        </tr>
                                        <tr>
                                            <td>مبلغ التأمين</td>
                                            <td>{{ $competition->insurance_price }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            @if ($competition->allow_loan_in)
                                <div class="col-md-6">
                                    <x-card.main class="p-0" title="مسموح بالاعارة الداخلية">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>العدد المسموح به</td>
                                                <td>{{ $competition->loan_in_count }}</td>
                                            </tr>
                                        </table>
                                    </x-card.main>
                                </div>
                            @endif

                            @if ($competition->allow_loan_out)
                                <div class="col-md-6">
                                    <x-card.main class="p-0" title="مسموح بالاعارة الخارجية">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>العدد المسموح به</td>
                                                <td>{{ $competition->loan_out_count }}</td>
                                            </tr>
                                        </table>
                                    </x-card.main>
                                </div>
                            @endif

                            @if ($competition->allow_player_age)
                                <div class="col-md-6">
                                    <x-card.main class="p-0" title="مسموح بعمر محدد">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>من</td>
                                                <td>الى</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $competition->player_age_from }}</td>
                                                <td>{{ $competition->player_age_to }}</td>
                                            </tr>
                                            <tr>
                                                <td>اقل عدد مسموح به</td>
                                                <td>اكثر عدد مسموح به</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $competition->min_player_age_count }}</td>
                                                <td>{{ $competition->max_player_age_count }}</td>
                                            </tr>
                                        </table>
                                    </x-card.main>
                                </div>
                            @endif
                        </div>
                    </div>
                </x-card.main>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>
