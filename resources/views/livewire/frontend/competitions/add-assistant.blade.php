<div class="d-inline">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addAssistant">
        <i class="mdi mdi-plus"></i>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addAssistant" tabindex="-1" aria-labelledby="addAssistantLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form wire:submit.prevent="saveAssistant" method='POST'>
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="addAssistantLabel">اضافة فني</h5>
                    </div>
                    <div class="modal-body">
                        <x-form.group label="اضافة عضو جهاز الفني" for="assistant" :error="$errors->first('assistant')">
                            <x-form.select wire:model.defer="assistant" id="assistant" name="assistant" required placeholder="عضو الجهاز الفنى">
                                <option value="">اختر</option>
                                @foreach ($assistants as $assistant)
                                    <option value="{{ $assistant->id }}">
                                        {{ $assistant->name }}
                                    </option>
                                @endforeach
                            </x-form.select>
                        </x-form.group>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                        <button type="submit" class="btn btn-primary">اضافة</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
