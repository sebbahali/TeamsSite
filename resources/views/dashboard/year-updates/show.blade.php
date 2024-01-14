<x-dashboard.layouts.app>
    <x-slot name="title">التجديد السنوي</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="التجديد السنوي">               
                    <div class="row">
                        @forelse ($yearUpdateTeams as $yearUpdateTeam)
                            <div class="col-md-6 col-sm-12 grid-margin stretch-card mt-4">
                                <div class="card border">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 d-flex align-items-center">
                                                <img class="d-block rounded-circle mx-auto mb-2" style="width: 110px; height: 110px"
                                                    src="{{  $yearUpdateTeam->team->logo }}" alt="profile image">
                                            </div>
                                            <div class="col-md-8">
                                                <h4 class="card-title font-weight-medium mb-0 d-none d-md-block">{{ $yearUpdateTeam->team->name }}</h4>

                                                @if ($yearUpdateTeam->status == \App\Enums\YearUpdateStatus::UnApprove)
                                                    <div class="badge bg-danger mt-3 d-inline-block">{{ $yearUpdateTeam->status->value }}</div>
                                                @elseif($yearUpdateTeam->status == \App\Enums\YearUpdateStatus::Approve)
                                                    <div class="badge bg-info mt-3 d-inline-block">{{ $yearUpdateTeam->status->value }}</div>
                                                @elseif($yearUpdateTeam->status == \App\Enums\YearUpdateStatus::Updated)
                                                    <div class="badge bg-success mt-3 d-inline-block">{{ $yearUpdateTeam->status->value }}</div>
                                                @endif

                                                <br />
                                                <a href="{{ route('dashboard.year-updates.team', $yearUpdateTeam->team->slug) }}" class="btn btn-primary btn-sm mt-3">
                                                    <i class="mdi mdi-eye"></i> عرض
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="alert alert-info"></div>
                        @endforelse
                    </div>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
