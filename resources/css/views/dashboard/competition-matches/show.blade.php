<x-dashboard.layouts.app>
    <x-slot name="title">جدول المباريات</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="تفاصيل المبارة" class="px-0">
                    <div class="container">
                        <div class="form-inline d-flex align-items-center border-bottom mb-2">
                            <div class="form-check mx-sm-2 align-self-end">
                                <a href="{{ route('dashboard.competition-matches.index', ['competition' => $competition]) }}"
                                    class="btn btn-danger btn-sm" title="رجوع">
                                    <i class="mdi mdi-arrow-right-bold"></i>
                                </a>

                                @if ($match->status == \App\Enums\MatchStatus::NotStart)
                                    <a href="{{ route('dashboard.competition-matches.edit',  ['competition' => $competition, 'match' => $match]) }}" class="btn btn-info btn-sm" title="تعديل">
                                        <i class="mdi mdi-pen"></i>
                                    </a>

                                    <form action="{{ route('dashboard.competition-matches.destroy',  ['competition' => $competition, 'match' => $match]) }}" method="POST"
                                        style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm delete-confirmation ml-2" title="حذف">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>
                                @endif

                                <a href="{{ route('dashboard.competition-matches.pdf',  ['competition' => $competition, 'match' => $match]) }}" class="btn btn-primary btn-sm mr-2" title="طباعة">
                                    <i class="mdi mdi-file"></i>
                                </a>

                                @if ($match->status == \App\Enums\MatchStatus::End)
                                    <a href="{{ route('dashboard.competition-matches.refree-report',  ['competition' => $competition, 'match' => $match]) }}" class="btn btn-primary btn-sm mr-2">
                                        <i class="mdi mdi-pen"></i> تقرير الحكم الرابع
                                    </a>
                                    <a href="{{ route('dashboard.competition-matches.admin-report',  ['competition' => $competition, 'match' => $match]) }}" class="btn btn-primary btn-sm mr-2">
                                        <i class="mdi mdi-pen"></i> تقرير مراقب المبارة
                                    </a>

                                    <a href="{{ route('dashboard.competition-matches.refree-report.pdf',  ['competition' => $competition, 'match' => $match]) }}" class="btn btn-primary btn-sm mr-2">
                                        <i class="mdi mdi-file"></i> طباعة تقرير الحكم الرابع
                                    </a>
                                    <a href="{{ route('dashboard.competition-matches.admin-report.pdf',  ['competition' => $competition, 'match' => $match]) }}" class="btn btn-primary btn-sm mr-2">
                                        <i class="mdi mdi-file"></i> طباعة تقرير مراقب المبارة 
                                    </a>
                                @endif
                            </div>
                        </div>
                        <x-card.match :match="$match" :competition="$competition" />
                        <table class="table table-bordered mb-3">
                            @if ($match->second_refree)
                                <tr>
                                    <td>الحكم الثاني</td>
                                    <td>{{ $match->second_refree }}</td>
                                </tr>
                            @endif
                            @if ($match->theree_refree)
                                <tr>
                                    <td>الحكم الثالث</td>
                                    <td>{{ $match->theree_refree }}</td>
                                </tr>
                            @endif
                            @if ($match->four_refree)
                                <tr>
                                    <td>الحكم الرابع</td>
                                    <td>{{ $match->four_refree }}</td>
                                </tr>
                            @endif
                            @if ($match->five_refree)
                                <tr>
                                    <td>المراقب</td>
                                    <td>{{ $match->five_refree }}</td>
                                </tr>
                            @endif
                        </table>

                        <div class="accordion accordion-flush mb-4" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#homeTeam" aria-expanded="false" aria-controls="homeTeam">
                                        بيانات فريق - {{ $match->homeTeam->name }}
                                    </button>
                                </h2>
                                <div id="homeTeam" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <table class="table table-bordered mb-3">
                                            <thead>
                                                <th colspan="6" class="text-center">كشف اللاعبين</th>
                                            </thead>
                                            <tr>
                                                <td style="width: 200px">رقم القميص</td>
                                                <td>الاسم</td>
                                                <td>G</td>
                                                <td>R</td>
                                                <td>Y</td>
                                                <td>S</td>
                                                <td>الاجراء</td>
                                            </tr>
                                            @foreach ($homePlayers->where('type', 'in') as $player)
                                                <tr>
                                                    <td>{{ $player->getPlayerNumber() }}</td>
                                                    <td>{{ $player->player->name }}</td>
                                                    <td>
                                                        @foreach ($player->g as $goals)
                                                            - {{ $goals }} <br />
                                                        @endforeach
                                                    </td>
                                                    <td title="{{ $player->r['resone'] }}">{{ $player->r['time'] }}</td>
                                                    <td title="{{ $player->y['resone'] }}">{{ $player->y['time'] }}</td>
                                                    <td title="{{ $player->s['player'] }}">{{ $player->s['time'] }}</td>
                                                    <td>
                                                        @if ($match->status == \App\Enums\MatchStatus::End)
                                                            <a href="{{ route('dashboard.match-players.edit', ['match' => $match, 'player' => $player]) }}" class="btn btn-primary btn-sm">
                                                                <i class="mdi mdi-pen"></i>
                                                            </a>
                                                        @else
                                                            <button class="btn btn-primary btn-sm" disabled>
                                                                <i class="mdi mdi-pen"></i>
                                                            </button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>

                                        <table class="table table-bordered mb-3">
                                            <thead>
                                                <th colspan="6" class="text-center">اللاعبين البدلاء</th>
                                            </thead>
                                            <tr>
                                                <td style="width: 200px">رقم القميص</td>
                                                <td>الاسم</td>
                                                <td>G</td>
                                                <td>R</td>
                                                <td>Y</td>
                                                <td>S</td>
                                                <td>الاجراء</td>
                                            </tr>
                                            @foreach ($homePlayers->where('type', 'out') as $player)
                                                <tr>
                                                    <td>{{ $player->getPlayerNumber() }}</td>
                                                    <td>{{ $player->player->name }}</td>
                                                    <td>
                                                        @foreach ($player->g as $goals)
                                                            - {{ $goals }} <br />
                                                        @endforeach
                                                    </td>
                                                    <td title="{{ $player->r['resone'] }}">{{ $player->r['time'] }}</td>
                                                    <td title="{{ $player->y['resone'] }}">{{ $player->y['time'] }}</td>
                                                    <td title="{{ $player->s['player'] }}">{{ $player->s['time'] }}</td>
                                                    <td>
                                                        @if ($match->status == \App\Enums\MatchStatus::End)
                                                            <a href="{{ route('dashboard.match-players.edit', ['match' => $match, 'player' => $player]) }}" class="btn btn-primary btn-sm">
                                                                <i class="mdi mdi-pen"></i>
                                                            </a>
                                                        @else
                                                            <button class="btn btn-primary btn-sm" disabled>
                                                                <i class="mdi mdi-pen"></i>
                                                            </button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>

                                        <table class="table table-bordered mb-3">
                                            <thead>
                                                <th colspan="6" class="text-center">الجهاز الفني</th>
                                            </thead>
                                            <tr>
                                                <td>الاسم</td>
                                                <td>R</td>
                                                <td>Y</td>
                                                <td>الاجراء</td>
                                            </tr>
                                            @foreach ($homeAssistants as $assistant)
                                                <tr>
                                                    <td>{{ $assistant->assistant->name }}</td>
                                                    <td>{{ $assistant->r }}</td>
                                                    <td>{{ $assistant->y }}</td>
                                                    <td>
                                                        @if ($match->status == \App\Enums\MatchStatus::End)
                                                            <a href="{{ route('dashboard.match-assistants.edit', ['match' => $match, 'assistant' => $assistant]) }}" class="btn btn-primary btn-sm">
                                                                <i class="mdi mdi-pen"></i>
                                                            </a>
                                                        @else
                                                            <button class="btn btn-primary btn-sm" disabled>
                                                                <i class="mdi mdi-pen"></i>
                                                            </button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="awayTeam">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        بيانات فريق - {{ $match->awayTeam->name }}
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="awayTeam" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <table class="table table-bordered mb-3">
                                            <thead>
                                                <th colspan="6" class="text-center">اللاعبين الاساسيين</th>
                                            </thead>
                                            <tr>
                                                <td>رقم القميص</td>
                                                <td>الاسم</td>
                                                <td>G</td>
                                                <td>R</td>
                                                <td>Y</td>
                                                <td>S</td>
                                                <td>الاجراء</td>
                                            </tr>
                                            @foreach ($awayPlayers->where('type', 'in') as $player)
                                                <tr>
                                                    <td>{{ $player->getPlayerNumber() }}</td>
                                                    <td>{{ $player->player->name }}</td>
                                                    <td>
                                                        @foreach ($player->g as $goals)
                                                            - {{ $goals }} <br />
                                                        @endforeach
                                                    </td>
                                                    <td title="{{ $player->r['resone'] }}">{{ $player->r['time'] }}</td>
                                                    <td title="{{ $player->y['resone'] }}">{{ $player->y['time'] }}</td>
                                                    <td title="{{ $player->s['player'] }}">{{ $player->s['time'] }}</td>
                                                    <td>
                                                        @if ($match->status == \App\Enums\MatchStatus::End)
                                                            <a href="{{ route('dashboard.match-players.edit', ['match' => $match, 'player' => $player]) }}" class="btn btn-primary btn-sm">
                                                                <i class="mdi mdi-pen"></i>
                                                            </a>
                                                        @else
                                                            <button class="btn btn-primary btn-sm" disabled>
                                                                <i class="mdi mdi-pen"></i>
                                                            </button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>

                                        <table class="table table-bordered mb-3">
                                            <thead>
                                                <th colspan="6" class="text-center">اللاعبين البدلاء</th>
                                            </thead>
                                            <tr>
                                                <td>رقم القميص</td>
                                                <td>الاسم</td>
                                                <td>G</td>
                                                <td>R</td>
                                                <td>Y</td>
                                                <td>S</td>
                                                <td>الاجراء</td>
                                            </tr>
                                            @foreach ($awayPlayers->where('type', 'out') as $player)
                                                <tr>
                                                    <td>{{ $player->getPlayerNumber() }}</td>
                                                    <td>{{ $player->player->name }}</td>
                                                    <td>
                                                        @foreach ($player->g as $goals)
                                                            - {{ $goals }} <br />
                                                        @endforeach
                                                    </td>
                                                    <td title="{{ $player->r['resone'] }}">{{ $player->r['time'] }}</td>
                                                    <td title="{{ $player->y['resone'] }}">{{ $player->y['time'] }}</td>
                                                    <td title="{{ $player->s['player'] }}">{{ $player->s['time'] }}</td>
                                                    <td>
                                                        @if ($match->status == \App\Enums\MatchStatus::End)
                                                            <a href="{{ route('dashboard.match-players.edit', ['match' => $match, 'player' => $player]) }}" class="btn btn-primary btn-sm">
                                                                <i class="mdi mdi-pen"></i>
                                                            </a>
                                                        @else
                                                            <button class="btn btn-primary btn-sm" disabled>
                                                                <i class="mdi mdi-pen"></i>
                                                            </button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>

                                        <table class="table table-bordered mb-3">
                                            <thead>
                                                <th colspan="6" class="text-center">الجهاز الفني</th>
                                            </thead>
                                            <tr>
                                                <td>الاسم</td>
                                                <td>R</td>
                                                <td>Y</td>
                                                <td>الاجراء</td>
                                            </tr>
                                            @foreach ($awayAssistants as $assistant)
                                                <tr>
                                                    <td>{{ $assistant->assistant->name }}</td>
                                                    <td>{{ $assistant->r }}</td>
                                                    <td>{{ $assistant->y }}</td>
                                                    <td>
                                                        @if ($match->status == \App\Enums\MatchStatus::End)
                                                            <a href="{{ route('dashboard.match-assistants.edit', ['match' => $match, 'assistant' => $assistant]) }}" class="btn btn-primary btn-sm">
                                                                <i class="mdi mdi-pen"></i>
                                                            </a>
                                                        @else
                                                            <button class="btn btn-primary btn-sm" disabled>
                                                                <i class="mdi mdi-pen"></i>
                                                            </button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <x-card.main class="border mb-4" title="تقرير الحكم الرابع">
                                {!! $match->four_refree_report ?? "لا توجد بيانات لعرضها" !!}
                            </x-card.main>

                            <x-card.main class="border" title="تقرير مراقب المبارة">
                                {!! $match->match_admin_report ?? "لا يوجد بيانات لعرضها" !!}
                            </x-card.main>
                        </div>
                    </div>
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
