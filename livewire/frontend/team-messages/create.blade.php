<div class="container">
    <div class="row">
        <div class="col-12">
                     <x-card.main title="ارسال رسالة الى فريق">

                    <form wire:submit.prevent="submitForm" method="POST" class="forms-sample mt-4">
                        @csrf

                        <x-form.group label="اختر الفريق" for="team" :error="$errors->first('team')">
                            <x-form.select wire:model.defer="team" id="team" name="team" placeholder="الرجاء اختيار الفريق المستلم">
                                <option value="">اختر الفريق</option>
                                @foreach ($teams as $team)
                                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                                @endforeach
                            </x-form.select>
                        </x-form.group>

                        <x-form.group label="المرسل اليه" for="target" :error="$errors->first('target')">
                            <x-form.select wire:model.defer="target" id="target" name="target" placeholder="الرجاء اختيار الشخص المستلم">
                                <option selected value="{{ \App\Enums\TeamMessageTarget::TeamSecretary->value }}">{{ \App\Enums\TeamMessageTarget::TeamSecretary->value }}</option>
                                <option value="{{ \App\Enums\TeamMessageTarget::TeamLeader->value }}">{{ \App\Enums\TeamMessageTarget::TeamLeader->value }}</option>
                            </x-form.select>
                        </x-form.group>

                        <x-form.group label="العنوان" for="subject" :error="$errors->first('subject')">
                            <x-form.input type="text" wire:model.defer="subject" id="subject" name="subject" placeholder="العنوان" />
                        </x-form.group>

                        <x-form.group-upload name="file" label="ملف مرفق" :error="$errors->first('file')" placeholder="الرجاء اختيار الملف" />

                        <x-form.group label="الرسالة" for="body" :error="$errors->first('body')">
                            <livewire:trix />
                        </x-form.group>

                        <button wire:loading.attr="disabled" type="submit" class="btn btn-primary me-2">ارسال الرسالة</button>
                    </form>
                 </x-card.main>
        </div>
    </div>
</div>
