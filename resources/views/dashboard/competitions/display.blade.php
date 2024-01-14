<x-dashboard.layouts.app>
    <x-slot name="title">المسابقات</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="المسابقات - {{ $competition->name }}" >
                    <div class="form-inline d-flex align-items-center border-bottom mb-2">
                        @ableTo('read-competitions')
                            <a class="btn btn-danger btn-sm mb-2" href="{{ route('dashboard.competitions.index') }}" title="رجوع">
                                <i class="mdi mdi-arrow-right-bold"></i>
                            </a>
                        @endableTo
                    </div>

                    <div class="row mt-4">
                        @forelse ($competition->competitionTeams as $competitionTeam)
                            @if ($competitionTeam->status != \App\Enums\CompetitionTeamStatus::Draft)
                                <div class="col-md-6">
                                    <div class="card mb-3 border" style="max-width: 540px;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="{{  $competitionTeam->team->logo }}" class="img-fluid rounded-start" style="width: 100%; height: 100%">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{  $competitionTeam->team->name }}</h5>
                                                    <p class="card-text"><x-competition-team-status :status="$competitionTeam->status" /></p>
                                                    <div>
                                                        @if ($competitionTeam->status != \App\Enums\CompetitionTeamStatus::Unsubscripe)
                                                            <a class="btn btn-sm btn-primary mt-2" href="{{ route('dashboard.competitions.show-team', ['competition' => $competition, 'competitionTeam' => $competitionTeam]) }}">عرض</a>
                                                        @else
                                                            <button disabled class="btn btn-sm btn-primary mt-2">عرض</button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @empty
                            <div class="alert alert-info text-center">لا يوجد مسابقات لعرضها</div>
                        @endforelse
                    </div>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
