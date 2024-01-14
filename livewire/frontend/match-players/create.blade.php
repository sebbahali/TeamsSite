<div class="container">
    <div class="row">
        <div class="col">
            <x-card.main class="pb-5" title="اضافة لاعب">
                <div class="form-inline d-flex align-items-center border-bottom mb-2">
                    <a class="btn btn-danger btn-sm mb-2" href="{{ route('frontend.competition-matches.show', [
                        'competition' => $this->match->competition_id,
                        'match' => $this->match->id
                    ]) }}" title="رجوع">
                        <i class="mdi mdi-arrow-right-bold"></i>
                    </a>
                </div>

                <form wire:submit.prevent="addPlayer" method="POST" class="forms-sample mt-4">
                    @csrf

                    <x-form.group label="نوع المشاركة" for="join_type" :error="$errors->first('join_type')">
                        <x-form.select wire:model="join_type" id="join_type" name="join_type" placeholder="نوع المشاركة">
                            <option value="player">منتسب</option>
                            <option value="loan_in">اعارة داخلية</option>
                            <option value="loan_out">اعارة خارجية</option>
                        </x-form.select>
                    </x-form.group>

                    <x-form.group label="اللاعب" for="player" :error="$errors->first('player')">
                        <x-form.select wire:model="player" id="player" name="player" placeholder="الرجاء اختيار اللاعب">
                            <option value="">الرجاء اختيار اللاعب</option>
                            @foreach ($players as $player)
                                <option value="{{ $player->card_id }}">
                                    {{ $player->name }}
                                </option>
                            @endforeach
                        </x-form.select>
                    </x-form.group>

                    <x-form.group label="رقم القميص" for="number" :error="$errors->first('number')">
                        <x-form.input type="number" wire:model.defer="number" id="number" name="number" placeholder="رقم القميص" />
                    </x-form.group>

                    <x-form.group label="حالة اللاعب في المبارة" for="type" :error="$errors->first('type')">
                        <x-form.select wire:model="type" id="type" name="type" placeholder="الحالة">
                            <option value="">الرجاء الاختيار</option>
                            <option value="in">لاعب اساسي</option>
                            <option value="out">لاعب احتياط</option>
                        </x-form.select>
                    </x-form.group>
                    
                    <button wire:loading.attr="disabled" type="submit" class="btn btn-primary me-2">اضافة اللاعب</button>
                </form>
            </x-card.main>
        </div>
    </div>
</div>