<div class="container">
    <div class="row">
        <div class="col-12">
            <x-card.main title="المراسلات">
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
                    <div class="form-check mx-sm-2 align-self-end">
                        <a href="{{ route('dashboard.competition-issues.message-create', ['competition' => $competition]) }}" class="btn btn-primary btn-sm" title="اضافة احتجاج">
                            <i class="mdi mdi-plus"></i>
                        </a>
                    </div>
                </div>


                <div class="preview-list">
                    @forelse ($issues as $issue)
                        <a href="{{ route('dashboard.competition-issues.show', ['competition' => $competition, 'competitionIssue' => $issue]) }}"
                            class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="{{$issue->sender()->logo}}"
                                    class="d-inline-block border rounded-circle"
                                    style="width: 60px; height: 60px;"
                                />
                            </div>
                            <div
                                class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-1 mt-2">{{ $issue->subject }}</h6>
                                <p class="text-gray ellipsis mb-0">
                                    @if ($issue->status == \App\Enums\CompetitionIssueStatus::Open)
                                        <i class="mdi mdi-checkbox-multiple-marked-circle"></i> {{ \App\Enums\CompetitionIssueStatus::Open->value }}
                                    @else
                                        <i class="mdi mdi-checkbox-multiple-blank-circle"></i> {{ \App\Enums\CompetitionIssueStatus::Close->value }}
                                    @endif
                                    <i class="mdi mdi-clock"></i>
                                    {{ $issue->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                    @empty
                        <div class="alert alert-info mt-3">لا يوجد رسائل لعرضها </div>
                    @endforelse
                </div>

                <x-slot name="paginate">
                    {{ $issues->links() }}
                </x-slot>
            </x-card.main>
        </div>
    </div>
</div>
