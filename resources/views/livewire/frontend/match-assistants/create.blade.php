<div class="container">
    <div class="row">
        <div class="col">
            <x-card.main class="pb-5" title="اضافة عضو جهاز فني">
                <div class="form-inline d-flex align-items-center border-bottom mb-2">
                    <a class="btn btn-danger btn-sm mb-2" href="{{ route('frontend.competition-matches.show', [
                        'competition' => $this->match->competition_id,
                        'match' => $this->match->id
                    ]) }}" title="رجوع">
                        <i class="mdi mdi-arrow-right-bold"></i>
                    </a>
                </div>

                <form wire:submit.prevent="addAssistant" method="POST" class="forms-sample mt-4">
                    @csrf

                    <x-form.group label="عضو الجهاز الفني" for="assistant" :error="$errors->first('assistant')">
                        <x-form.select wire:model.defer="assistant" id="assistant" name="assistant" placeholder="عضو الجهاز الفني">
                            <option value="">الرجاء اختيار عضو الجهاز الفني</option>
                            @foreach ($assistants as $assistant)
                                <option value="{{ $assistant->id }}">
                                    {{ $assistant->name }}
                                </option>
                            @endforeach
                        </x-form.select>
                    </x-form.group>
                    
                    <button wire:loading.attr="disabled" type="submit" class="btn btn-primary me-2">حفظ</button>
                </form>
            </x-card.main>
        </div>
    </div>
</div>