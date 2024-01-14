<div class="my-4">
    <form wire:submit.prevent='save'>
        <x-form.group label="تاريخ البداية" for="start" :error="$errors->first('start')">
            <x-form.input type="date" id="start" name="start" wire:model="start" placeholder="تاريخ البداية" />
        </x-form.group>
        <x-form.group label="تاريخ النهاية" for="end" :error="$errors->first('end')">
            <x-form.input type="date" id="end" name="end" wire:model="end" placeholder="تاريخ النهاية" />
        </x-form.group>

        <button type="submit" class="btn btn-primary">تعديل</button>
    </form>
</div>
