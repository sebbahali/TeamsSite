<x-frontend.layouts.app>
    <x-slot name="title">بيانات اللاعب</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="بيانات اللاعب">
                    <div class="row mt-4">
                        <div class="col-lg-4">
                            <div class="text-center pb-4">
                                <img src="{{ $player->player_img }}" alt="profile" class="img-lg rounded-circle mb-3">
                                <h4>{{ $player->name }}</h4>
                                <p>{{ $player->team->name }}</p>
                              
                                <div class="d-flex justify-content-center my-4">
           
                                    @if ($player->approve_status == \App\Enums\PlayerApproveStatus::Draft)
                                        <a href="{{ route('frontend.players.send-to-club', $player->card_id) }}" class="btn btn-primary btn-sm mx-1" title="ارسال الطلب الى النادي">
                                            <i class="mdi mdi-send"></i>
                                        </a>
                                    @endif

                                    @if ($player->approve_status == \App\Enums\PlayerApproveStatus::ClubApprove)
                                        <a href="{{ route('frontend.players.checkout', $player->card_id) }}" class="btn btn-success btn-sm mx-1" title="دفع رسوم التسجيل">
                                            <i class="mdi mdi-cash"></i> دفع
                                        </a>
                                    @endif

                                    @if ($player->approve_status == \App\Enums\PlayerApproveStatus::Draft)
                                        <a href="{{ route('frontend.players.edit', $player->card_id) }}" class="btn btn-info btn-sm mx-1" title="تعديل بيانات اللاعب">
                                            <i class="mdi mdi-grease-pencil"></i>
                                        </a>
                                        
                                        <form id='delteForm'
                                            action="{{ route('frontend.players.destroy', $player) }}" method="post"
                                            style="display:inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm mx-1 delete-confirmation">
                                                <i class="mdi mdi-delete" title="حذف اللاعب"></i>
                                            </button>
                                        </form>  
                                        
                                    @endif
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-lg-8">
                            <div class="pb-2">
                                <table class="table table-bordered mb-3">
                                    <tr>
                                        <td>حالة الانضمام</td>
                                        <td>{{ $player->join_status->value }}</td>
                                    </tr>
                                    <tr>
                                        <td>الرقم المدني</td>
                                        <td>{{ $player->card_id }}</td>
                                    </tr>
                                    @if (! is_null($player->register_number))
                                        <tr>
                                            <td>رقم القيد</td>
                                            <td>{{ $player->register_number }}</td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td>تاريخ الميلاد</td>
                                        <td>{{ $player->birth_date }}</td>
                                    </tr>
                                    <tr>
                                        <td>العمر</td>
                                        <td>{{ calcAge($player->birth_date) }} عام</td>
                                    </tr>
                                    <tr>
                                        <td>مكان الاقامة</td>
                                        <td>{{ $player->location }}</td>
                                    </tr>
                                    <tr>
                                        <td>رقم الهاتف</td>
                                        <td>{{ $player->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td style=background:Ivory>تاريخ تقديم الطلب</td>
                                        <td style=background:Ivory>{{ $player->created_at->format('Y-m-d') }}</td>
                                    </tr>
                                </table>

                                @if ($player->join_status == \App\Enums\PlayerJoinStatus::Loan)
                                    <x-card.main class="p-0" title="بيانات الاعارة">
                                        <table class="table table-bordered mb-3">
                                            <tr>
                                                <td>تاريخ الطلب</td>
                                                <td>{{ $player->runingLoan()->created_at->format('Y-m-d') }}</td>
                                            </tr>
                                            <tr>
                                                <td>الحالة</td>
                                                <td>{{ $player->runingLoan()->status->value }}</td>
                                            </tr>
                                            <tr>
                                                <td>الفريق الاساسي</td>
                                                <td>{{ $player->runingLoan()->basic->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>الفريق المعار اليه اللاعب</td>
                                                <td>{{ $player->runingLoan()->sender->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>تاريخ البداية</td>
                                                <td>{{ $player->runingLoan()->start }}</td>
                                            </tr>
                                            <tr>
                                                <td>تاريخ النهاية</td>
                                                <td>{{ $player->runingLoan()->end }}</td>
                                            </tr>
                                        </table>
                                    </x-card.main>
                                @endif
                            </div>
                            <hr>
                            <div>
                            
                                <span style="background-color: #34495e ;font-size:14px ;color:orange ;">موافقة اللاعب</span>
                                <div class="form-check">
                                    <label class="form-check-label terms-text">
                                        <input class="form-check-input" type="checkbox" checked disabled>
                                        اوافق انا اللاعب المسجل اعلاه ان البيانات الواردة صحيحة ، واني غير مسجل في اي فريق اخر.
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                            </div>
                            <div>
                            <hr>
                                <span style="background-color: #34495e ;font-size:14px ;color:orange ;">موافقة امين السر </span>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" checked disabled>
                                        أوافق انا امين سر الفريق على انضمام اللاعب المذكور اعلاه وأن كافة البيانات المذكورة اعلاه صحيحة، كما ويتحمل الفريق المسؤولية التامة في حالة ظهور ما يخالف ذلك.
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5"></div>
                        <div class="col-md-4 mb-5">
                            @if ($player->player_img)
                                <x-card.image-view :src=" $player->player_img" title="صورة اللاعب" />
                            @endif
                        </div>

                        <div class="col-md-4 mb-5">
                            @if ($player->card_identy_front)
                                <x-card.image-view :src="$player->card_identy_front" title="الوجه الامامي للبطاقة" />
                            @endif
                        </div>

                        <div class="col-md-4 mb-5">
                            @if ($player->card_identy_back)
                                <x-card.image-view :src="$player->card_identy_back" title="الوجه الخلفي للبطاقة" />
                            @endif
                        </div>

                        <div class="col-md-4 mb-5">
                            @if ($player->birth_doc)
                                <x-card.image-view :src="$player->birth_doc" title="شهادة الميلاد" />
                            @endif
                        </div>

                        <div class="col-md-4 mb-5">
                            @if ($player->father_check_doc)
                                <x-card.image-view :src="$player->father_check_doc" title="موافقة ولى الامر" />
                            @endif
                        </div>

                        <div class="col-md-4 mb-5">
                            @if ($player->father_identy_card)
                                <x-card.image-view :src="$player->father_identy_card" title="البطاقة الشخصية لولي الامر" />
                            @endif
                        </div>
                    </div>
                </x-card.main>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>
