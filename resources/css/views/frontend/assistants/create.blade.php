<x-frontend.layouts.app>
    <x-slot name="title">اضافة عضو جديد</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="اضافة عضو جديد">
                    <form class="my-4" action="{{ route('frontend.assistants.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <x-form.group label="الرقم المدني" for="card_id" :error="$errors->first('card_id')" >
                            <x-form.input type="text" id="card_id" name="card_id" value="{{ old('card_id') }}" placeholder="الرقم المدني" />
                        </x-form.group>
                        <x-form.group label="الاسم" for="name" :error="$errors->first('name')">
                            <x-form.input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="الاسم" />
                        </x-form.group>
                        <x-form.group label="تاريخ الميلاد" for="birthdate" :error="$errors->first('birthdate')">
                            <x-form.input type="date" id="birthdate" name="birthdate" value="{{ old('birthdate') }}" placeholder="تاريخ الميلاد" />
                        </x-form.group>

                        <x-form.group label="الصفة" for="role" :error="$errors->first('role')">
                            <x-form.select id="role" name="role">
                                <option disabled selected value="">اختر</option>
                                <option @selected(\App\Enums\AssistantsRole::Coach->value == old('role')) value="{{ \App\Enums\AssistantsRole::Coach->value }}">
                                    {{ \App\Enums\AssistantsRole::Coach->value }}
                                </option>
                                <option @selected(\App\Enums\AssistantsRole::CoachAssistant->value == old('role')) value="{{ \App\Enums\AssistantsRole::CoachAssistant->value }}">
                                    {{ \App\Enums\AssistantsRole::CoachAssistant->value }}
                                </option>
                                <option @selected(\App\Enums\AssistantsRole::Therapist->value == old('role')) value="{{ \App\Enums\AssistantsRole::Therapist->value }}">
                                    {{ \App\Enums\AssistantsRole::Therapist->value }}
                                </option>
                                <option @selected(\App\Enums\AssistantsRole::TeamManager->value == old('role')) value="{{ \App\Enums\AssistantsRole::TeamManager->value }}">
                                    {{ \App\Enums\AssistantsRole::TeamManager->value }}
                                </option>
                                <option @selected(\App\Enums\AssistantsRole::Administrative->value == old('role')) value="{{ \App\Enums\AssistantsRole::Administrative->value }}">
                                    {{ \App\Enums\AssistantsRole::Administrative->value }}
                                </option>
                                <option @selected(\App\Enums\AssistantsRole::GoalkeeperCoach->value == old('role')) value="{{ \App\Enums\AssistantsRole::GoalkeeperCoach->value }}">
                                    {{ \App\Enums\AssistantsRole::GoalkeeperCoach->value }}
                                </option>
                                <option @selected(\App\Enums\AssistantsRole::MissionOfficer->value == old('role')) value="{{ \App\Enums\AssistantsRole::MissionOfficer->value }}">
                                    {{ \App\Enums\AssistantsRole::MissionOfficer->value }}
                                </option>
                                <option @selected(\App\Enums\AssistantsRole::Media->value == old('role')) value="{{ \App\Enums\AssistantsRole::Media->value }}">
                                    {{ \App\Enums\AssistantsRole::Media->value }}
                                </option>
                                <option @selected(\App\Enums\AssistantsRole::PublicOfficial->value == old('role')) value="{{ \App\Enums\AssistantsRole::PublicOfficial->value }}">
                                    {{ \App\Enums\AssistantsRole::PublicOfficial->value }}
                                </option>
                                <option @selected(\App\Enums\AssistantsRole::FitnessTrainer->value == old('role')) value="{{ \App\Enums\AssistantsRole::FitnessTrainer->value }}">
                                    {{ \App\Enums\AssistantsRole::FitnessTrainer->value }}
                                </option>
                                <option @selected(\App\Enums\AssistantsRole::Massager->value == old('role')) value="{{ \App\Enums\AssistantsRole::Massager->value }}">
                                    {{ \App\Enums\AssistantsRole::Massager->value }}
                                </option>
                            </x-form.select>
                        </x-form.group>

                        <x-form.group label="الصورة الرياضية" for="sport_image" :error="$errors->first('sport_image')">
                            <x-form.input type="file" id="sport_image" value="{{ old('sport_image') }}" name="sport_image" placeholder="الصورة الرياضية" />
                        </x-form.group>

                        <x-form.group label="صورة البطاقة الشخصية الوجه الامامي" for="front_image" :error="$errors->first('front_image')">
                            <x-form.input type="file" id="front_image" value="{{ old('front_image') }}" name="front_image" placeholder="صورة البطاقة الشخصية الوجه الامامي" />
                        </x-form.group>

                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-plus"></i> اضافة العضو</button>
                    </form>
                </x-card.main>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>
