<x-frontend.layouts.app>
    <x-slot name="title">طلب نقل لاعب</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main class="px-3" title="طلب نقل لاعب">

                    @if ($transfer->status == \App\Enums\TransferStatus::SendToBasicTeam && team()->id == $transfer->basic_team_id)
                        <div class="alert alert-info text-center mt-3">مرسل من فريق {{ $transfer->sender->name }}</div>
                    @else
                        <div class="alert alert-info text-center mt-3">{{ $transfer->status->value }}</div>
                    @endif

                    <div class="row mt-4">
                        <div class="col-lg-4">
                            <div class="text-center pb-4">
                                <img src="{{ $transfer->player->player_img }}" alt="profile" class="img-lg rounded-circle mb-3">
                                <h3>{{ $transfer->player->name }}</h3>
                                <p>{{ $transfer->player->team->name }}</p>
                            </div>

                            @if ($transfer->player_approve_doc)
                                <div class="mb-3">
                                    <x-card.image-view :src="$transfer->player_approve_doc" title="موافقة اللاعب" />
                                </div>
                            @endif

                            @if ($transfer->father_approve_doc)
                                <div class="mb-3">
                                    <x-card.image-view :src="$transfer->father_approve_doc" title="موافقة ولي الامر" />
                                </div>
                            @endif

                            @if ($transfer->father_identy_doc)
                                <div class="mb-3">
                                    <x-card.image-view :src="$transfer->father_identy_doc" title="بطاقة ولي الامر" />
                                </div>
                            @endif
                        </div>
                        <div class="col-lg-8">
                            <x-card.main class="p-3 mb-4" title="بيانات اللاعب">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>الرقم المدني</td>
                                        <td>{{ $transfer->player->card_id }}</td>
                                    </tr>
                                    @if (! is_null($transfer->player->register_number))
                                        <tr>
                                            <td>رقم القيد</td>
                                            <td>{{ $transfer->player->register_number }}</td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td>مكان الاقامة</td>
                                        <td>{{ $transfer->player->location }}</td>
                                    </tr>
                                    <tr>
                                        <td>رقم الهاتف</td>
                                        <td>{{ $transfer->player->phone }}</td>
                                    </tr>
                                </table>
                            </x-card.main>
                            <x-card.main class="p-3 mb-4" title="بيانات الطلب">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>الفريق الراغب</td>
                                        <td>{{ $transfer->sender->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>الفريق الاساسي</td>
                                        <td>{{ $transfer->basic->name }}</td>
                                    </tr>
                                </table>

                                @if($transfer->status != \App\Enums\TransferStatus::SendToBasicTeam)
                                    <div class="mt-3 border-bottom">
                                        <span class="text-muted">موافقة الفريق الاساسي</span>
                                        <div class="form-check">
                                            <label class="form-check-label terms-text">
                                                <input class="form-check-input" type="checkbox" checked disabled>
                                                بناء علي طلب المذكور اعلاه . فانه لا مانع لدينا من قبول طلبه و أنه لا يخضع حاليا لأي عقوبات أو توقيف صادر من الفريق أو النادي و غير مطالب بأي التزامات إدارية أو مالية كما أن البيانات الموضحة صحيحة و عليه أعطيت له هذه الشهادة 
                                                <i class="input-helper"></i>
                                            </label>
                                        </div>
                                    </div>
                                @endif

                                @if($transfer->status == \App\Enums\TransferStatus::SendToBasicTeam  && $transfer->basic_team_id == team()->id)
                                    <form action="{{ route('frontend.transfer-players.basic-approve', $transfer->id) }}" method="POST">
                                        @csrf

                                        <div class="form-check mx-sm-2">
                                            <label class="form-check-label" for="terms">
                                                <input class="form-check-input" type="checkbox" name="terms" id="terms" required /> بناء علي طلب المذكور اعلاه . فانه لا مانع لدينا من قبول طلبه و أنه لا يخضع حاليا لأي عقوبات أو توقيف صادر من الفريق أو النادي و غير مطالب بأي التزامات إدارية أو مالية كما أن البيانات الموضحة صحيحة و عليه أعطيت له هذه الشهادة
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

                                    <form action="{{ route('frontend.transfer-players.basic-cancel', $transfer->id) }}" method="POST">
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

                                @if($transfer->status == \App\Enums\TransferStatus::ClubApprove  && $transfer->send_team_id == team()->id)
                                    <a href="{{ route('frontend.transfer-players.checkout', $transfer->id) }}" class="btn btn-success mt-3" title="دفع">
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
