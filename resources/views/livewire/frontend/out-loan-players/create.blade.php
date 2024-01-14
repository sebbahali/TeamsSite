<div>
    <form class="my-4" wire:submit.prevent='save' method="POST" enctype="multipart/form-data">
        <x-form.group label="الرقم المدني" for="card_id" :error="$errors->first('card_id')">
            <x-form.input type="text" id="card_id" wire:model="card_id" name="card_id" value="{{ old('card_id') }}" placeholder="الرقم المدني" />
        </x-form.group>
        <x-form.group label="الاسم" for="name" :error="$errors->first('name')">
            <x-form.input type="text" id="name" wire:model="name" name="name" value="{{ old('name') }}" placeholder="الاسم" />
        </x-form.group>
        <x-form.group label="تاريخ الميلاد" for="birthdate" :error="$errors->first('birthdate')">
            <x-form.input type="date" id="birthdate" wire:model="birthdate" name="birthdate" value="{{ old('birthdate') }}" placeholder="تاريخ الميلاد" />
        </x-form.group>
        <x-form.group label="تاريخ البداية" for="start" :error="$errors->first('start')">
            <x-form.input type="date" id="start" wire:model="start" name="start" value="{{ old('start') }}" placeholder="تاريخ البداية" />
        </x-form.group>
        <x-form.group label="تاريخ النهاية" for="end" :error="$errors->first('end')">
            <x-form.input type="date" id="end" wire:model="end" name="end" value="{{ old('end') }}" placeholder="تاريخ النهاية" />
        </x-form.group>

        <x-form.group-upload wire:model="sport_image" name="sport_image" label="الصورة الرياضية" :error="$errors->first('sport_image')" placeholder="الصورة الرياضية" />

        <x-form.group-upload wire:model="front_image" name="front_image" label="صورة البطاقة الامامية" :error="$errors->first('front_image')" placeholder="صورة البطاقة الامامية" />

        <x-form.group-upload wire:model="letter_image" name="letter_image" label="رسالة الاعارة" :error="$errors->first('letter_image')" placeholder="رسالة الاعارة" />

        <button class="btn btn-primary" type="submit"><i class="mdi mdi-plus"></i> حفظ</button>
    </form>
</div>
