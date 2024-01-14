<div class="container">
    <div class="row">
        <div class="col-12">
            <x-card.main class="px-3" title="طلب نقل لاعب">
                <div class="row mt-4">
                    <div class="col-lg-4">
                        <div class="text-center pb-4">
                            <img src="{{ $player->player_img }}" alt="profile" class="img-lg rounded-circle mb-3">
                            <h4>{{ $player->name }}</h4>
                            <p>{{ $player->team->name }}</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <x-card.main class="p-3 mb-4" title="بيانات اللاعب">
                            <table class="table table-bordered">
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
                                    <td>مكان الاقامة</td>
                                    <td>{{ $player->location }}</td>
                                </tr>
                                <tr>
                                    <td>رقم الهاتف</td>
                                    <td>{{ $player->phone }}</td>
                                </tr>
                            </table>
                        </x-card.main>
                        <x-card.main class="p-3 mb-4" title="بيانات الطلب">
                            <form wire:submit.prevent='save' method="POST" class="mt-3">
                                @csrf

                                @if (calcAge($player->birth_date) >= 16)
                                    <x-form.group-upload name="player_approve_doc" label="استمارة موافقة اللاعب" :error="$errors->first('player_approve_doc')" placeholder="الرجاء اختيار الملف" />
                                @else
                                    <x-form.group-upload name="father_approve_doc" label="استمارة موافقة ولي الامر" :error="$errors->first('father_approve_doc')" placeholder="الرجاء اختيار الملف" />
                                    <x-form.group-upload name="father_identy_doc" label="بطاقة ولي الامر" :error="$errors->first('father_identy_doc')" placeholder="الرجاء اختيار الملف" />
                                @endif

                                <button type="submit" class="btn btn-primary me-2 mt-3">ارسال</button>
                            </form>
                        </x-card.main>
                    </div>
                </div>
            </x-card.main>
        </div>
    </div>
</div>
