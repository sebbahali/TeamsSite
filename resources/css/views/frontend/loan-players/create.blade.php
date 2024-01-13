<x-frontend.layouts.app>
    <x-slot name="title">طلب استعارة لاعب</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main class="px-3" title="طلب استعارة لاعب">
                    <div class="row mt-4">
                        <div class="col-lg-4">
                            <div class="text-center pb-4">
                                <img src="{{ $player->player_img }}" alt="profile" class="img-lg rounded-circle mb-3">
                                <h3>{{ $player->name }}</h3>
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
                                <form action="{{ route('frontend.loan-players.store', $player) }}" method="POST" class="mt-3">
                                    @csrf

                                    <x-form.group label="تاريخ البداية" for="start" :error="$errors->first('start')">
                                        <x-form.input type="date" id="start" name="start" value="{{ old('start') ?? '' }}" placeholder="تاريخ البداية" />
                                    </x-form.group>
                                    <x-form.group label="تاريخ النهاية" for="end" :error="$errors->first('end')">
                                        <x-form.input type="date" id="end" name="end" value="{{ old('end') ?? '' }}" placeholder="تاريخ النهاية" />
                                    </x-form.group>
                                    <x-form.group label="الملاحظة" for="note" :error="$errors->first('note')">
                                        <x-form.textarea wire:model.defer="note" name="note" id="note" value="{{ old('note') ?? '' }}" placeholder="الملاحظة" />
                                    </x-form.group>

                                    <div class="form-check mx-sm-2">
                                        <label class="form-check-label" for="terms">
                                            <input class="form-check-input" type="checkbox" name="terms" id="terms" required /> نود إفادتكم بأنه لا مانع لدينا من قبول اللاعب المذكور أعلاه للمشاركة في هذه المسابقة وفق الفترة المحددة أعلاه ، وبعد انتهاء الفترة المذكورة يتم عودة اللاعب مباشرة إلى فريقه ألأصلي دون قيد أو شرط وتعتبر الإعارة منتهية
                                            <i class="input-helper"></i>
                                        </label>
                                    </div>

                                    <button type="submit" class="btn btn-primary me-2 mt-3">ارسال</button>
                                </form>
                            </x-card.main>
                        </div>
                    </div>
                </x-card.main>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>
