<x-frontend.layouts.app>
    <x-slot name="title">المسابقات</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="المسابقات">
                    <div class="form-inline d-flex align-items-center border-bottom mb-2">
                        <a class="btn btn-danger btn-sm mb-2" href="{{ route('frontend.index') }}" title="رجوع">
                            <i class="mdi mdi-arrow-right-bold">Back</i>
                        </a>
                    </div>

                    <div class="row mt-4">
                        @forelse ($competitions as $competition)
                            @if ($competition->competitionTeam(team()->id) == null)
                                @php
                                    continue;
                                @endphp
                            @endif
                            <div class="col-md-6">
                                <div class="card mb-3 border" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{  $competition->logo }}" class="img-fluid rounded-start" style="width: 100%; height: 100%">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $competition->name }}</h5>
                                                <p class="card-text"><i class="mdi mdi-map-marker-radius"></i> {{ $competition->location }}</p>
                                                <div>
                                                    <a class="btn btn-sm btn-primary mt-2" href="{{ route('frontend.competitions.show', $competition) }}">عرض</a>

                                                    @if (
                                                        $competition->competitionTeam(team()->id)->status != \App\Enums\CompetitionTeamStatus::Draft &&
                                                        $competition->competitionTeam(team()->id)->status != \App\Enums\CompetitionTeamStatus::Unsubscripe
                                                    )
                                                        <a class="btn btn-sm btn-success mt-2" href="{{ route('frontend.competitions.setup', $competition) }}">اعداد</a>
                                                    @endif

                                                    @if ($competition->competitionTeam(team()->id)->status == \App\Enums\CompetitionTeamStatus::Register)
                                                        <a class="btn btn-sm btn-success mt-2" href="{{ route('frontend.competition-teams.checkout', $competition->competitionTeam(team()->id)) }}">دفع</a>
                                                    @endif

                                                    @if ($competition->competitionTeam(team()->id)->status == \App\Enums\CompetitionTeamStatus::Draft)
                                                        <form action="{{ route('frontend.competitions.subscripe', $competition) }}" method="POST"
                                                            style="display: inline-block">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit" class="btn btn-sm btn-success mt-2">اشتراك</button>
                                                        </form>
                                                    @endif

                                                    @if ($competition->competitionTeam(team()->id)->status == \App\Enums\CompetitionTeamStatus::Draft)
                                                        <form action="{{ route('frontend.competitions.un-subscripe', $competition) }}" method="POST"
                                                            style="display: inline-block">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit" class="btn btn-sm btn-danger mt-2">الغاء الاشتراك</button>
                                                        </form>
                                                    @endif

                                                    @if ($competition->competitionTeam(team()->id)->status == \App\Enums\CompetitionTeamStatus::Paid)
                                                        @if ($competition->status == \App\Enums\CompetitionStatus::SendToMange)
                                                            <a class="btn btn-sm btn-danger mt-2" href="{{ route('frontend.competition-issues.index', ['competition' => $competition]) }}">الاحتجاجات</a>
                                                            <a class="btn btn-sm btn-info mt-2" href="{{ route('frontend.competition-issues.message-index', ['competition' => $competition]) }}">المراسلات</a>
                                                            <a class="btn btn-sm btn-success mt-2" href="{{ route('frontend.competition-matches.index', ['competition' => $competition]) }}">جدول المباريات</a>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="alert alert-info text-center">لا يوجد مسابقات لعرضها</div>
                        @endforelse
                    </div>

                    <x-slot name="paginate">
                        {{ $competitions->links() }}
                    </x-slot>
                </x-card.main>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>
