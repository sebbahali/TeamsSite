<div>
    <x-card.main title="التجديد السنوي">

        @if (!empty($yearUpdate) || !empty($yearUpdateTeam))

            @if ($yearUpdateTeam->status == \App\Enums\YearUpdateStatus::UnApprove)
                <div class="preview-list mt-3">
                    <div class="row">
                        @forelse ($players as $player)
                            <div class="col-md-4">
                                <x-card.player :player="$player" panel="frontend">
                                    <x-slot name="link">
                                        <div>
                                            <a href="{{ route('frontend.players.show', $player->card_id); }}"
                                               class="btn btn-primary mt-3 btn-sm">عرض</a>
                                            <a href="{{ route('frontend.year-updates.cancel-player', $player->card_id); }}"
                                               class="btn btn-danger mt-3 btn-sm">حذف</a>
                                        </div>
                                    </x-slot>
                                </x-card.player>
                            </div>
                        @empty
                            <div class="alert alert-info">لا يوجد بيانات لعرضها</div>
                        @endforelse
                    </div>
                </div>
                @if(empty($yearUpdate))
                    <button class="btn btn-danger my-3">برجاء التواصل مع ادارة النادي لاستكمال التجديد</button>
                @else
                    <button class="btn btn-success my-3" wire:click="approve">اعتماد</button>

                @endif
            @elseif($yearUpdateTeam->status == \App\Enums\YearUpdateStatus::Approve)
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <table class="table table-bordered text-center my-4">
                            <tr>
                                <td colspan="2">دفع مبلغ التجديد السنوي</td>
                            </tr>
                            <tr>
                                <td>عدد اللاعبين المجددين</td>
                                <td>{{ $players->count() }}</td>
                            </tr>
                        </table>
                        @if(empty($yearUpdate))
                            <button class="btn btn-danger my-3">برجاء التواصل مع ادارة النادي لاستكمال التجديد</button>
                        @else
                            <a href="{{ route('frontend.year-updates.checkout', $yearUpdateTeam->id) }}" class="btn btn-success mb-4" title="دفع رسوم التجديد"><i class="mdi mdi-cash"></i> دفع</a>
                        @endif
                    </div>
                </div>
            @elseif($yearUpdateTeam->status == \App\Enums\YearUpdateStatus::Updated)
                <div class="alert alert-success mt-3">تم التجديد بنجاح</div>
            @endif
        @else
            <div class="alert alert-info text-center">التجديد السنوي غير مفتوح حاليا</div>
        @endif
    </x-card.main>
</div>
