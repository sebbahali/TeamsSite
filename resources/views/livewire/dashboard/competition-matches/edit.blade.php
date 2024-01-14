<div class="container">
    <div class="row">
        <div class="col">
            <div class="col-12">
                <x-card.main title="اضافة مبارة">
                    <div class="form-inline d-flex align-items-center border-bottom mb-2">
                        <div class="form-check mx-sm-2 align-self-end">
                            <a href="{{ route('dashboard.competition-matches.index', ['competition' => $competition]) }}"
                                class="btn btn-danger btn-sm" title="رجوع">
                                <i class="mdi mdi-arrow-right-bold"></i>
                            </a>
                        </div>
                    </div>

                    <form wire:submit.prevent="submitForm" method="POST" class="forms-sample mt-4 mb-4">
                        @csrf

                        <x-form.group label="الفريق الاول" for="home" :error="$errors->first('home')">
                            <div class="row">
                                <x-form.select wire:model.defer="home" id="home" name="home" placeholder="الفريق الاول">
                                    <option value="">اختر الفريق</option>
                                    @foreach ($teams as $team)
                                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                                    @endforeach
                                </x-form.select>
                            </div>
                        </x-form.group>

                        <x-form.group label="الفريق الثاني" for="away" :error="$errors->first('away')">
                            <div class="row">
                                <x-form.select wire:model.defer="away" id="away" name="away"
                                    placeholder="الفريق الثاني">
                                    <option value="">اختر الفريق</option>
                                    @foreach ($teams as $team)
                                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                                    @endforeach
                                </x-form.select>
                            </div>
                        </x-form.group>

                        <x-form.group label="مكان المبارة" for="location" :error="$errors->first('location')">
                            <x-form.input type="text" wire:model.defer="location" id="location" name="location"
                                placeholder="مكان المبارة" />
                        </x-form.group>

                        <x-form.group label="تاريخ المبارة" for="date" :error="$errors->first('date')">
                            <x-form.input type="date" wire:model.defer="date" id="date"
                                name="date" placeholder="تاريخ المبارة" />
                        </x-form.group>

                        <x-form.group label="وقت المبارة المبارة" for="time" :error="$errors->first('time')">
                            <x-form.input type="time" wire:model.defer="time" id="time"
                                name="time" placeholder="تاريخ المبارة" />
                        </x-form.group>

                        <x-form.group label="الحكم الاول" for="first_refree" :error="$errors->first('first_refree')">
                            <x-form.input type="text" wire:model.defer="first_refree" id="first_refree"
                                name="first_refree" placeholder="الحكم الاول" />
                        </x-form.group>

                        <x-form.group label="الحكم الثاني" for="second_refree" :error="$errors->first('second_refree')">
                            <x-form.input type="text" wire:model.defer="second_refree" id="second_refree"
                                name="second_refree" placeholder="الحكم الثاني" />
                        </x-form.group>

                        <x-form.group label="الحكم الثالث" for="theree_refree" :error="$errors->first('theree_refree')">
                            <x-form.input type="text" wire:model.defer="theree_refree" id="theree_refree"
                                name="theree_refree" placeholder="الحكم الثالث" />
                        </x-form.group>

                        <x-form.group label="الحكم الرابع" for="four_refree" :error="$errors->first('four_refree')">
                            <x-form.input type="text" wire:model.defer="four_refree" id="four_refree" name="four_refree"
                                placeholder="الحكم الرابع" />
                        </x-form.group>

                        <x-form.group label="المراقب" for="five_refree" :error="$errors->first('five_refree')">
                            <x-form.input type="text" wire:model.defer="five_refree" id="five_refree" name="five_refree"
                                placeholder="المراقب" />
                        </x-form.group>

                        <x-card.main title="نتيجة المبارة">
                            <div class="row mt-3">
                                <div class="col">
                                    <x-form.group label="الفريق الاول" for="home_goals" :error="$errors->first('home_goals')">
                                        <x-form.input type="text" wire:model.defer="home_goals" id="home_goals" name="home_goals"
                                            placeholder="الفريق الاول" />
                                    </x-form.group>
                                </div>
                                <div class="col">
                                    <x-form.group label="الفريق الثاني" for="away_goals" :error="$errors->first('away_goals')">
                                        <x-form.input type="text" wire:model.defer="away_goals" id="away_goals" name="away_goals"
                                            placeholder="الفريق الثاني" />
                                    </x-form.group>
                                </div>
                            </div>
                        </x-card.main>

                        <x-form.group label="الحالة" for="status" :error="$errors->first('status')">
                            <div class="row">
                                <x-form.select wire:model.defer="status" id="status" name="status" placeholder="الحالة">
                                    <option value="{{ \App\Enums\MatchStatus::NotStart->value }}">{{ \App\Enums\MatchStatus::NotStart->value }}</option>
                                    <option value="{{ \App\Enums\MatchStatus::Started->value }}">{{ \App\Enums\MatchStatus::Started->value }}</option>
                                    <option value="{{ \App\Enums\MatchStatus::End->value }}">{{ \App\Enums\MatchStatus::End->value }}</option>
                                </x-form.select>
                            </div>
                        </x-form.group>

                        <button wire:loading.attr="disabled" type="submit" class="btn btn-primary me-2">حفظ
                            المبارة</button>
                    </form>
                </x-card.main>
            </div>
        </div>
    </div>
</div>
