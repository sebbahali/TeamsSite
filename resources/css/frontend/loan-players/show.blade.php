<x-frontend.layouts.app>
    <x-slot name="title">طلب استعارة لاعب</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main class="px-3" title="طلب استعارة لاعب">

                    @if ($loan->status == \App\Enums\LoanStatus::SendToBasicTeam && team()->id == $loan->basic_team_id)
                        <div class="alert alert-info text-center mt-3">مرسل من فريق {{ $loan->sender->name }}</div>
                    @else
                        <div class="alert alert-info text-center mt-3">{{ $loan->status->value }}</div>
                    @endif

                    <div class="row mt-4">
                        <div class="col-lg-4">
                            <div class="text-center pb-4">
                                <img src="{{ $loan->player->player_img }}" alt="profile" class="img-lg rounded-circle mb-3">
                                <hr>
                                <h3 style=font-size:18px>{{ $loan->player->name }}</h3>
                                <p>{{ $loan->player->team->name }}</p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <x-card.main class="p-3 mb-4" title="بيانات اللاعب">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>الرقم المدني</td>
                                        <td>{{ $loan->player->card_id }}</td>
                                    </tr>
                                    @if (! is_null($loan->player->register_number))
                                        <tr>
                                            <td>رقم القيد</td>
                                            <td>{{ $loan->player->register_number }}</td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td>تاريخ الميلاد</td>
                                        <td>{{ $loan->player->birth_date }}</td>
                                    </tr>
                                    <tr>
                                        <td>مكان الاقامة</td>
                                        <td>{{ $loan->player->location }}</td>
                                    </tr>
                                    <tr>
                                        <td>رقم الهاتف</td>
                                        <td>{{ $loan->player->phone }}</td>
                                    </tr>
                                </table>
                            </x-card.main>
                            <x-card.main class="p-3 mb-4" title="بيانات الطلب">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>تاريخ البداية</td>
                                        <td>{{ $loan->start }}</td>
                                    </tr>
                                    <tr>
                                        <td>تاريخ النهاية</td>
                                        <td>{{ $loan->end }}</td>
                                    </tr>
                                    <tr>
                                        <td>الفريق الراغب</td>
                                        <td>{{ $loan->sender->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>الفريق الاساسي</td>
                                        <td>{{ $loan->basic->name }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6>الملاحظة</h6>
                                            <p>{{ $loan->note }}</p>
                                        </td>
                                    </tr>
                                </table>

                                <div class="mt-3 border-bottom">
                                    <span style=background-color:#ffb366>موافقة الفريق الراغب</span>
                                    <div class="form-check">
                                        <label class="form-check-label terms-text">
                                            <input class="form-check-input" type="checkbox" checked disabled>
                                            نود إفادتكم بأنه لا مانع لدينا من قبول اللاعب المذكور أعلاه للمشاركة في هذه المسابقة وفق الفترة المحددة أعلاه ، وبعد انتهاء الفترة المذكورة يتم عودة اللاعب مباشرة إلى فريقه ألأصلي دون قيد أو شرط وتعتبر الإعارة منتهية
                                            <i class="input-helper"></i>
                                        </label>
                                    </div>
                                </div>

                                @if($loan->status != \App\Enums\LoanStatus::SendToBasicTeam)
                                    <div class="mt-3 border-bottom">
                                        <span style=background-color:#ffb366>موافقة الفريق الاساسي</span>
                                        <div class="form-check">
                                            <label class="form-check-label terms-text">
                                                <input class="form-check-input" type="checkbox" checked disabled>
                                                بناء على طلب المذكور أعلاه ، فأنه لا مانع لدينا من إعارة اللاعب وفق المدة المشار إليها أعلاه وأنه لا يخضع حاليا لأي عقوبات رياضية أو توقيف صادر من النادي ، كما أن البيانات الموضحة صحيحة وعليه أعطيت له هذه الشهادة 
                                                <i class="input-helper"></i>
                                            </label>
                                        </div>
                                    </div>
                                @endif
                                 
                                @if($loan->status == \App\Enums\LoanStatus::SendToBasicTeam  && $loan->basic_team_id == team()->id)
                                    <form action="{{ route('frontend.loan-players.basic-approve', $loan->id) }}" method="POST">
                                        @csrf

                                        <div class="form-check mx-sm-2">
                                            <label class="form-check-label" for="terms">
                                                <input class="form-check-input" type="checkbox" name="terms" id="terms" required /> بناء على طلب المذكور أعلاه ، فأنه لا مانع لدينا من إعارة اللاعب وفق المدة المشار إليها أعلاه وأنه لا يخضع حاليا لأي عقوبات رياضية أو توقيف صادر من النادي ، كما أن البيانات الموضحة صحيحة وعليه أعطيت له هذه الشهادة
                                                <i class="input-helper"></i>
                                            </label>
                                        </div>

                                        <button type="submit" class="btn btn-success me-2 mt-3">
                                            <i class="mdi mdi-check"></i>
                                        </button>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#cancelRequest" class="btn btn-danger me-2 mt-3">
                                            <i class="mdi mdi-close"></i>
                                        </button>
                                    </form>

                                    <form action="{{ route('frontend.loan-players.basic-cancel', $loan->id) }}" method="POST">
                                        @csrf

                                        <div class="modal fade" id="cancelRequest" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary">
                                                        <h5 class="modal-title text-white" id="cancelRequestLabel">سبب الالغاء</h5>
                                                    </div>
                                                    <div class="modal-body bg-white">
                                                        <x-form.textarea name="note" rows="4" required placeholder="سبب الالغاء" />

                                                        <div class="mt-3">
                                                            <button type="submit" class="btn btn-primary">موافق</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @endif

                                @if($loan->status == \App\Enums\LoanStatus::ClubApprove  && $loan->send_team_id == team()->id)
                                    <a href="{{ route('frontend.loan-players.checkout', $loan->id) }}" class="btn btn-success mt-3" title="دفع">
                                        <i class="mdi mdi-cash"></i> دفع
                                    </a>
                                @endif
                            </x-card.main>
                        </div>
                    </div>
                </x-card.main>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>
