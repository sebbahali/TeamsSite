<x-dashboard.layouts.app>
    <x-slot name="title">طلب استعارة لاعب</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main class="px-3" title="طلب استعارة لاعب">
                    @if ($loan->status == \App\Enums\LoanStatus::BasicTeamApprov)
                        <div class="alert alert-info text-center mt-3">في انتظار الموافقة عليه</div>
                    @else
                        <div class="alert alert-info text-center mt-3">{{ $loan->status->value }}</div>
                    @endif
                    <div class="row mt-4">
                        <div class="col-lg-4">
                            <div class="text-center pb-4">
                                <img src="{{ $loan->player->player_img }}" alt="profile" class="img-lg rounded-circle mb-3">
                                <hr>
                                <h4>{{ $loan->player->name }}</h4>
                                <p> <i class="mdi mdi-flag"></i> - {{ $loan->player->team->name }}</p>
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
                                <table class="table table-bordered mb-3">
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
                                            <h6 style=font-size:12px>الملاحظة :</h6>
                                            <p style=font-size:12px>{{ $loan->note }}</p>
                                        </td>
                                    </tr>
                                </table>

                                <div class="mt-3 border-bottom">
                                    <span style=background-color:#ffb366 >موافقة الفريق الراغب</span>
                                    <div class="form-check">
                                        <label class="form-check-label terms-text">
                                            <input class="form-check-input" type="checkbox" checked disabled>
                                            نود إفادتكم بأنه لا مانع لدينا من قبول اللاعب المذكور أعلاه للمشاركة في هذه المسابقة وفق الفترة المحددة أعلاه ، وبعد انتهاء الفترة المذكورة يتم عودة اللاعب مباشرة إلى فريقه ألأصلي دون قيد أو شرط وتعتبر الإعارة منتهية
                                            <i class="input-helper"></i>
                                        </label>
                                    </div>
                                </div>

                                @if($loan->status != \App\Enums\LoanStatus::SendToBasicTeam)
                                    <div class="mt-3 mb-3 border-bottom">
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

                                @if ($loan->status == \App\Enums\LoanStatus::BasicTeamApprov)
                                    <form action="{{ route('dashboard.loan-players.change-state', $loan->id) }}" method="POST">
                                        @csrf

                                        <x-form.group label="تعليق النادي" for="note" :error="$errors->first('note')">
                                            <x-form.textarea name="note" id="note" value="{{ old('note') ?? '' }}" placeholder="تعليق النادي" />
                                        </x-form.group>

                                        <button type="submit" name="agree" value="agree" class="btn btn-success me-2 mt-3">
                                            <i class="mdi mdi-check"></i>
                                        </button>
                                        <button type="submit" name="cancel" value="cancel" class="btn btn-danger me-2 mt-3">
                                            <i class="mdi mdi-close"></i>
                                        </button>
                                    </form>
                                @endif

                            </x-card.main>
                        </div>
                    </div>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
