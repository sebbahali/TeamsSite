<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-5">
                <div class="card-body">
               <div class="card-header bg-primary">
                    <h4 style="text-align: center" class="card-title">ارسال احتجاج</h4>
                    </div>  
                    <form wire:submit.prevent="submitForm" method="POST" class="forms-sample mt-4">
                        @csrf

                        <x-form.group label="العنوان" for="subject" :error="$errors->first('subject')">
                            <x-form.input type="text" wire:model.defer="subject" id="subject" name="subject" placeholder="العنوان" />
                        </x-form.group>

                        <x-form.group-upload name="file" label="ملف مرفق" :error="$errors->first('file')" placeholder="الرجاء اختيار الملف" />

                        <x-form.group label="الرسالة" for="body" :error="$errors->first('body')">
                            <livewire:trix />
                        </x-form.group>

                        <button wire:loading.attr="disabled" type="submit" class="btn btn-primary me-2">ارسال الاحتجاج</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
