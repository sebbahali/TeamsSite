<x-dashboard.layouts.app>
    <x-slot name="title">المسابقات</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="المسابقات">
                    <div class="form-inline d-flex align-items-center border-bottom mb-2">
                        @ableTo('read-competitions')
                            <a class="btn btn-danger btn-sm mb-2" href="{{ route('dashboard.competitions.index') }}" title="رجوع">
                                <i class="mdi mdi-arrow-right-bold"></i>
                            </a>
                        @endableTo

                        @ableTo('create-competitions')
                            <a class="btn btn-primary btn-sm mb-2 mx-2" href="{{ route('dashboard.competitions.create') }}" title="اضافة">
                                <i class="mdi mdi-plus"></i>
                            </a>
                        @endableTo
                    </div>

                    <form action="{{ route('dashboard.competitions.update', $competition) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <x-form.group label="اسم المسابقة" for="name" :error="$errors->first('name')">
                                    <x-form.input type="text" id="name" value="{{ old('name') ?? $competition->name}}" name="name" placeholder="اسم المسابقة" />
                                </x-form.group>

                                <x-form.group label="نوع المسابقة" for="type" :error="$errors->first('type')">
                                    <x-form.select id="type" name="type">
                                        <option disabled selected value="">اختر</option>
                                        <option @selected(\App\Enums\CompetitionType::FootBall->value == (old('type') ?? $competition->type->value)) value="{{ \App\Enums\CompetitionType::FootBall->value }}">
                                            {{ \App\Enums\CompetitionType::FootBall->value }}
                                        </option>
                                        <option @selected(\App\Enums\CompetitionType::HandBall->value == (old('type') ?? $competition->type->value)) value="{{ \App\Enums\CompetitionType::HandBall->value }}">
                                            {{ \App\Enums\CompetitionType::HandBall->value }}
                                        </option>
                                        <option @selected(\App\Enums\CompetitionType::VelleyBool->value == (old('type') ?? $competition->type->value)) value="{{ \App\Enums\CompetitionType::VelleyBool->value }}">
                                            {{ \App\Enums\CompetitionType::VelleyBool->value }}
                                        </option>
                                        <option @selected(\App\Enums\CompetitionType::BasketBall->value == (old('type') ?? $competition->type->value)) value="{{ \App\Enums\CompetitionType::BasketBall->value }}">
                                            {{ \App\Enums\CompetitionType::BasketBall->value }}
                                        </option>
                                        <option @selected(\App\Enums\CompetitionType::Hokey->value == (old('type') ?? $competition->type->value)) value="{{ \App\Enums\CompetitionType::Hokey->value }}">
                                            {{ \App\Enums\CompetitionType::Hokey->value }}
                                        </option>
                                        <option @selected(\App\Enums\CompetitionType::Tenis->value == (old('type') ?? $competition->type->value)) value="{{ \App\Enums\CompetitionType::Tenis->value }}">
                                            {{ \App\Enums\CompetitionType::Tenis->value }}
                                        </option>
                                        <option @selected(\App\Enums\CompetitionType::Cultural->value == (old('type') ?? $competition->type->value)) value="{{ \App\Enums\CompetitionType::Cultural->value }}">
                                            {{ \App\Enums\CompetitionType::Cultural->value }}
                                        </option>
                                    </x-form.select>
                                </x-form.group>

                                <x-form.group label="مكان المسابقة" for="location" :error="$errors->first('location')">
                                    <x-form.input type="text" id="location" value="{{ old('location') ?? $competition->location }}" name="location" placeholder="مكان المسابقة" />
                                </x-form.group>

                                <x-form.group label="تاريخ المسابقة" for="start_date" :error="$errors->first('start_date')">
                                    <x-form.input type="date" id="start_date" value="{{ old('start_date') ?? $competition->start_date }}" name="start_date" placeholder="تاريخ المسابقة" />
                                </x-form.group>

                                <x-form.group label="اخر موعد للتقديم" for="register_end" :error="$errors->first('register_end')">
                                    <x-form.input type="date" id="register_end" value="{{ old('register_end') ?? $competition->register_end }}" name="register_end" placeholder="اخر موعد للتقديم" />
                                </x-form.group>

                                <x-form.group label="عدد الاداريين" for="mange_member_count" :error="$errors->first('mange_member_count')">
                                    <x-form.input type="number" id="mange_member_count" value="{{ old('mange_member_count') ?? $competition->mange_member_count }}" name="mange_member_count" placeholder="عدد الاداريين" />
                                </x-form.group>

                                <x-form.group label="عدد اللاعبين" for="player_count" :error="$errors->first('player_count')">
                                    <x-form.input type="number" id="player_count" value="{{ old('player_count') ?? $competition->player_count }}" name="player_count" placeholder="عدد اللاعبين" />
                                </x-form.group>
                            </div>

                            <div class="col-md-6 mt-2">
                                <x-form.group label="مبلغ الاشتراك" for="subscription_price" :error="$errors->first('subscription_price')">
                                    <x-form.input type="number" id="subscription_price" value="{{ old('subscription_price') ?? $competition->subscription_price }}" name="subscription_price" placeholder="مبلغ الاشتراك" />
                                </x-form.group>

                                <x-form.group label="مبلغ التأمين" for="insurance_price" :error="$errors->first('insurance_price')">
                                    <x-form.input type="number" id="insurance_price" value="{{ old('insurance_price') ?? $competition->insurance_price }}" name="insurance_price" placeholder="مبلغ التأمين" />
                                </x-form.group>

                                <div class="form-check mx-sm-2" x-data="{show: {{ old('allow_loan_in') ?? $competition->allow_loan_in }}}">
                                    <label class="form-check-label" for="allow_loan_in">
                                        <input class="form-check-input" @checked(old('allow_loan_in') ?? $competition->allow_loan_in)  @click="show = !show" type="checkbox" name="allow_loan_in" id="allow_loan_in"/> السماح بالاعارة الداخلية
                                        <i class="input-helper"></i>
                                    </label>

                                    <input x-show="show" type="number" name="loan_in_count" value="{{ old('loan_in_count') ?? $competition->loan_in_count }}" class="form-control mt-2" placeholder="العدد المسموح به">
                                </div>

                                <div class="form-check mx-sm-2" x-data="{show: {{ old('allow_loan_out') ?? $competition->allow_loan_out }}}">
                                    <label class="form-check-label" for="allow_loan_out">
                                        <input class="form-check-input" @checked(old('allow_loan_out') ?? $competition->allow_loan_out) @click="show = !show" type="checkbox" name="allow_loan_out" id="allow_loan_out"/> السماح بالاعارة الخارجية
                                        <i class="input-helper"></i>
                                    </label>

                                    <input x-show="show" type="number" name="loan_out_count" value="{{ old('loan_out_count') ?? $competition->loan_out_count }}" class="form-control mt-2" placeholder="العدد المسموح به">
                                </div>

                                <div class="form-check mx-sm-2" x-data="{show: {{ old('allow_player_age') ?? $competition->allow_player_age }}}">
                                    <label class="form-check-label" for="allow_player_age">
                                        <input class="form-check-input" @checked(old('allow_player_age') ?? $competition->allow_player_age)  @click="show = !show" type="checkbox" name="allow_player_age" id="allow_player_age"/> السماح بعمر محدد
                                        <i class="input-helper"></i>
                                    </label>

                                    <div x-show="show">
                                        <label>من</label>
                                        <input type="date" name="player_age_from" value="{{ old('player_age_from') ?? $competition->player_age_from }}" class="form-control mt-2">
                                        <label>الى</label>
                                        <input type="date" name="player_age_to" value="{{ old('player_age_to') ?? $competition->player_age_to }}" class="form-control mt-2">
                                        <label>اقل عدد</label>
                                        <input type="number" name="min_player_age_count" value="{{ old('min_player_age_count') ?? $competition->min_player_age_count }}" class="form-control mt-2" placeholder="اقل عدد">
                                        <label>اكبر عدد</label>
                                        <input type="number" name="max_player_age_count" value="{{ old('max_player_age_count') ?? $competition->max_player_age_count }}" class="form-control mt-2" placeholder="اكبر عدد">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary mb-4" type="submit">تعديل المسابقة</button>
                    </form>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
