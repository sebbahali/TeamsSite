<div class="container">
    <div class="row">
        <div class="col-12">
                  <x-card.main title="ارسال رسالة الى النادي">
                    <form wire:submit.prevent="submitForm" method="POST" id="clubTeamForm" class="forms-sample mt-4">
                        @csrf

                        <x-form.group label="المرسل اليه" for="target" :error="$errors->first('target')">
                            <x-form.select wire:model.defer="target" id="target" name="target" placeholder="الرجاء اختيار الشخص المستلم">
                                <option value="">اختر المرسل اليه</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">
                                        {{ $user->roles()->first()->display_name }} - {{ $user->name }}
                                    </option>
                                @endforeach
                            </x-form.select>
                        </x-form.group>

                        <x-form.group label="العنوان" for="subject" :error="$errors->first('subject')">
                            <x-form.input type="text" wire:model.defer="subject" id="subject" name="subject" placeholder="العنوان" />
                        </x-form.group>

                        <x-form.group-upload name="file" label="ملف مرفق" :error="$errors->first('file')" placeholder="الرجاء اختيار الملف" />

                        <x-form.group label="الرسالة" for="body" :error="$errors->first('body')">
                            <x-form.textarea id="body" name="body" class="d-none"></x-form.textarea>
                            <livewire:trix />
                        </x-form.group>

                        <button wire:loading.attr="disabled" type="submit" class="btn btn-primary me-2">ارسال الرسالة</button>
                    </form>
                </x-card.main>
        </div>
    </div>
</div>
