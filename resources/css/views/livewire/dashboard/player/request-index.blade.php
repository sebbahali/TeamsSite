<div class="container">
    <div class="row">
        <div class="col-12">
            <x-card.main title="طلبات تسجيل اللاعبين">

                <div class="form-inline d-flex align-items-center border-bottom mb-2">
                    <div class="form-check mx-sm-2">
                        <label class="form-check-label" for="send_to_club">
                            <input class="form-check-input" type="radio" id="send_to_club" value="{{ \App\Enums\PlayerApproveStatus::SendToClub->value }}" wire:model="status" /> مرسلة للنادي
                            <i class="input-helper"></i>
                        </label>
                    </div>
                    <div class="form-check mx-sm-2">
                        <label class="form-check-label" for="club_approve">
                            <input class="form-check-input" type="radio" id="club_approve" value="{{ \App\Enums\PlayerApproveStatus::ClubApprove->value }}" wire:model="status" /> تم الموافقة عليها من النادي
                            <i class="input-helper"></i>
                        </label>
                    </div>
                    <div class="form-check mx-sm-2">
                        <label class="form-check-label" for="paid">
                            <input class="form-check-input" type="radio" id="paid" value="{{ \App\Enums\PlayerApproveStatus::Paid->value }}" wire:model="status" /> مدفوعة
                            <i class="input-helper"></i>
                        </label>
                    </div>
                </div>
                
                <div class="preview-list my-4">
                    <div class="row">
                        @forelse ($players as $player)
                            <div class="col-md-4">
                                <x-card.player :player="$player" panel="dashboard"/>
                            </div>
                        @empty
                            <div class="alert alert-info">لا يوجد بيانات لعرضها</div>
                        @endforelse
                    </div>
                </div>
          
                <x-slot name="paginate">
                    {{ $players->links() }}
                </x-slot>
     
            </x-card.main>
        </div>
    </div>
</div>
