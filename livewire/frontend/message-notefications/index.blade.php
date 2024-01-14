<div class="container">
    <div class="row">
        <div class="col-12">
            <x-card.main title="تنبيهات الرسائل">

                <div class="form-inline d-flex align-items-center border-bottom mb-2">
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
                </div>

                <div class="preview-list">
                    @forelse ($notefications as $notefication)
                        <a href="{{ route('frontend.message-notefications.show', $notefication->id) }}"
                            class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="mdi mdi-bell"></i>
                                </div>
                            </div>
                            <div
                                class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-1">{{ $notefication->title }}
                                </h6>
                                <p class="text-gray ellipsis mb-0">
                                    @if ($notefication->status)
                                        <i class="mdi mdi-checkbox-multiple-marked-circle"></i> مقروء
                                    @else
                                        <i class="mdi mdi-checkbox-multiple-blank-circle"></i> غير مقروء
                                    @endif
                                    <i class="mdi mdi-clock"></i>
                                    {{ $notefication->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                    @empty
                        <div class="alert alert-info">لا يوجد اشعارات لعرضها</div>
                    @endforelse
                </div>

                <x-slot name="paginate">
                    {{ $notefications->links() }}
                </x-slot>
            </x-card.main>
        </div>
    </div>
</div>
