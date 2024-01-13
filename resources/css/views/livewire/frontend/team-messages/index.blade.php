<div class="container">
    <div class="row">
        <div class="col-12">
            <x-card.main title="رسائل الفرق">
                <div class="form-inline d-flex align-items-center border-bottom mb-2">
                    <div class="form-check mx-sm-2">
                        <label class="form-check-label" for="sended">
                            <input class="form-check-input" type="radio" id="sended" name="state" wire:model="state"
                                value="sended" /> صادرة
                            <i class="input-helper"></i>
                        </label>
                    </div>
                    <div class="form-check mx-sm-2">
                        <label class="form-check-label" for="received">
                            <input class="form-check-input" type="radio" id="received" name="state" wire:model="state"
                                value="received" /> واردة
                            <i class="input-helper"></i>
                        </label>
                    </div>
                    <div class="form-check mx-sm-2">
                        <label class="form-check-label" for="readed">
                            <input class="form-check-input" type="checkbox" id="readed" wire:model="readed" /> مقروء
                            <i class="input-helper"></i>
                        </label>
                    </div>
                    <div class="form-check mx-sm-2">
                        <label class="form-check-label" for="unReaded">
                            <input class="form-check-input" type="checkbox" id="unReaded" wire:model="unReaded" /> غير
                            مقروء
                            <i class="input-helper"></i>
                        </label>
                    </div>
                    <div class="form-check mx-sm-2 align-self-end">
                        <a href="{{ route('frontend.team-messages.create') }}" class="btn btn-primary btn-sm" title="ارسال رسالة جديدة">
                            <i class="mdi mdi-message-plus"></i>
                        </a>
                    </div>
                </div>

               <div style=background-color:GhostWhite>
                <div class="preview-list">
                    @forelse ($messages as $message)
                        <a href="{{ route('frontend.team-messages.show', $message->id) }}"
                            class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="{{  $message->senderTeam()->logo }}"
                                    class="d-inline-block border rounded-circle" style="width: 60px; height: 60px;">
                            </div>
                            <div
                                class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-1 mt-2">{{ $message->subject }}</h6>
                                <p style=font-size:12px class="text-gray ellipsis mb-0">
                                <i style=font-size:12px class="mdi mdi-account-circle"> من: {{ $message->senderTeam()->name }}</i>
                                    @if ($message->status)
                                        <i  class="mdi mdi-checkbox-multiple-marked-circle"></i> مقروء
                                    @else
                                        <i  class="mdi mdi-checkbox-multiple-blank-circle"></i> غير مقروء
                                    @endif
                                    <i class="mdi mdi-clock"></i>
                                    {{ $message->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                    @empty
                        <div class="alert alert-info mt-3">لا يوجد رسائل لعرضها </div>
                    @endforelse
                </div>
                  </div>
                <x-slot name="paginate">
                    {{ $messages->links() }}
                </x-slot>
            </x-card.main>
        </div>
    </div>
</div>
