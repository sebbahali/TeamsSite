<div class="d-inline">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addLoanInPlayer">
        <i class="mdi mdi-plus"></i>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addLoanInPlayer" tabindex="-1" aria-labelledby="addLoanInPlayerLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form wire:submit.prevent="savePlayer" method='POST'>
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="addLoanInPlayerLabel">اضافة لاعب</h5>
                    </div>
                    <div class="modal-body">
                        <x-form.group label="اضافة لاعب" for="player" :error="$errors->first('player')">
                            <x-form.select wire:model.defer="player" id="player" name="player" required placeholder="اضافة لاعب">
                                <option value="">اختر</option>
                                @foreach ($players as $player)
                                    <option value="{{ $player->card_id }}">
                                        {{ $player->name }}
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
