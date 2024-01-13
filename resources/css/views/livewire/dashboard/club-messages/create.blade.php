<div class="container">
    <div class="row">
        <div class="col-12">
                   <x-card.main title="ارسال رسالة">

                    <form wire:submit.prevent="submitForm" method="POST" class="forms-sample mt-4">
                        @csrf


                        @if (auth('web')->user()->hasRole('superadministrator'))
                            <x-form.group label="اختر المرسل اليه" for="user" :error="$errors->first('user')">
                                <x-form.select wire:model.defer="user" id="user" name="user" placeholder="الرجاء اختيار المرسل اليه">
                                    <option value="">اختر المرسل اليه</option>
                                    @foreach ($usersList as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </x-form.select>
                            </x-form.group>
                        @endif

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
                    <br>
            </x-card.main>
        </div>
    </div>

    <x-text-editor id="messageBody"/>
</div>
