<x-dashboard.layouts.app>
    <x-slot name="title">تقييد محضر الاجتماع</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="تقييد محضر الاجتماع">
                    <form class="my-3" action="{{ route('dashboard.mettings.store') }}" method="POST">
                        @csrf

                        <x-form.group label="رقم المحضر" for="number" :error="$errors->first('number')">
                            <x-form.input type="text" id="number" name="number" value="{{ old('number') }}" placeholder="رقم المحضر" />
                        </x-form.group>

                        <x-form.group label="اليوم" for="day" :error="$errors->first('day')">
                            <x-form.select id="day" name="day" placeholder="اليوم">
                                <option selected disabled>اختر اليوم</option>
                                <option value="{{ \App\Enums\WeekDays::Saturday->value }}">{{ \App\Enums\WeekDays::Saturday->value }}</option>
                                <option value="{{ \App\Enums\WeekDays::Sunday->value }}">{{ \App\Enums\WeekDays::Sunday->value }}</option>
                                <option value="{{ \App\Enums\WeekDays::Monday->value }}">{{ \App\Enums\WeekDays::Monday->value }}</option>
                                <option value="{{ \App\Enums\WeekDays::Tuesday->value }}">{{ \App\Enums\WeekDays::Tuesday->value }}</option>
                                <option value="{{ \App\Enums\WeekDays::Wednesday->value }}">{{ \App\Enums\WeekDays::Wednesday->value }}</option>
                                <option value="{{ \App\Enums\WeekDays::Thursday->value }}">{{ \App\Enums\WeekDays::Thursday->value }}</option>
                                <option value="{{ \App\Enums\WeekDays::Friday->value }}">{{ \App\Enums\WeekDays::Friday->value }}</option>
                            </x-form.select>
                        </x-form.group>

                        <x-form.group label="التاريخ" for="date" :error="$errors->first('date')">
                            <x-form.input type="date" id="date" name="date" value="{{ old('date') }}" placeholder="التاريخ" />
                        </x-form.group>

                        <x-form.group label="الوقت" for="time" :error="$errors->first('time')">
                            <x-form.input type="time" id="time" name="time" value="{{ old('time') }}" placeholder="الوقت" />
                        </x-form.group>

                        <x-form.group label="المكان" for="location" :error="$errors->first('location')">
                            <x-form.input type="text" id="location" name="location" value="{{ old('location') }}" placeholder="المكان" />
                        </x-form.group>

                        <x-form.group label="الحضور" for="attendees" :error="$errors->first('attendees')">
                            <div class="row">

                               @foreach ($users as $user)
                                    <div class="col-md-6">
                                        <div class="form-check mx-sm-2">
                                            <label class="form-check-label" for="attendees-{{ $user->id }}">
                                                <input class="form-check-input" name="attendees[]" value="{{ $user->id }}" type="checkbox" id="attendees-{{ $user->id }}" /> {{ $user->name }}
                                                <i class="input-helper"></i>
                                            </label>
                                        </div>
                                    </div>
                               @endforeach

                            </div>
                        </x-form.group>

                        <x-form.group label="القرارات" for="mettingBody" :error="$errors->first('body')">
                            <livewire:trix id="body"/>
                        </x-form.group>

                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-plus"></i> حفظ المحضر</button>
                    </form>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
