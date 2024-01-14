<form wire:submit.prevent="save" method="POST">
    <div class="card">
        <div class="card-body">
            <x-form.group label="التعليق على المحضر" for="body" :error="$errors->first('body')">
                <x-form.textarea wire:model.defer="body" name="body" id="body" placeholder="اكتب هنا" />
            </x-form.group>

            <button wire:loading.attr="disabled" type="submit" class="btn btn-primary me-2">ارسال</button>
        </div>
    </div>
</form>
