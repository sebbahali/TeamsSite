<x-dashboard.layouts.app>
    <x-slot name="title">المسابقات</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="المسابقات - {{ $competition->name }} - كشف فريق {{  $competitionTeam->team->name }}">
                    <div class="form-inline d-flex align-items-center border-bottom mb-2">
                        <a class="btn btn-danger btn-sm mb-2" href="{{ route('dashboard.competitions.display', $competition) }}" title="رجوع">
                            <i class="mdi mdi-arrow-right-bold"></i>
                        </a>

                        <a class="btn btn-primary btn-sm mb-2 mx-2" href="{{ route('dashboard.competitions.pdf', $competitionTeam->id) }}" title="طباعة">
                            <i class="mdi mdi-file"></i>
                        </a>
                    </div>

                    <x-card.main class="p-0" title="الجهاز الفني">
                        <div class="form-inline d-flex align-items-center border-bottom mb-2">
                            <table class="table table-bordered mr-2">
                                <tr>
                                    <td>العدد المسموح به</td>
                                    <td>{{ $competition->mange_member_count }}</td>
                                    <td>الاعضاء المضافين</td>
                                    <td>{{ is_null($competitionTeam->mange_members) ? 0 : count($competitionTeam->mange_members) }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="row">
                            @foreach ($competitionTeam->mange_members as $member)
                                @php
                                    $assistant = getAssistant($member);
                                @endphp
                                <div class="col-md-4">
                                    <section class="player-card mt-5">
                                        <div class="card">
                                            <header>
                                                <a class="profile">
                                                    <img src="{{ $assistant->sport_image }}" alt="Profile Image">
                                                </a>
                                            </header>

                                            <article>
                                                <h1>{{ $assistant->name }}</h1>
                                                <div class="info">
                                                    <div>
                                                        <span><i class="mdi mdi-account-card-details"></i></span>
                                                        <span>{{ $assistant->card_id }}</span>
                                                    </div>
                                                    <div>
                                                        <span><i class="mdi mdi-calendar-multiple"></i></span>
                                                        <span>{{ $assistant->birthdate }}</span>
                                                    </div>
                                                    <div>
                                                        <span><i class="mdi mdi-account-network"></i></span>
                                                        <span>{{ $assistant->role->value }}</span>
                                                    </div>
                                                </div>
                                                @role('superadministrator')
                                                <div class="info mt-3">
                                                    <a href="{{ route('dashboard.teams.show-assistant', ['team' => $assistant->team, 'assistant' => $assistant->id]) }}" class="btn btn-primary btn-sm">عرض</a>
                                                </div>
                                                @endrole
                                            </article>
                                        </div>
                                    </section>
                                </div>
                            @endforeach
                        </div>
                    </x-card.main>
                    <div class="mt-5"></div>
                    <x-card.main class="p-0" title="اللاعبين">
                        <div class="form-inline d-flex align-items-center border-bottom mb-2">
                            <table class="table table-bordered mr-2">
                                <tr>
                                    <td>العدد المسموح به</td>
                                    <td>{{ $competition->player_count }}</td>
                                    <td>اللاعبين المضافين</td>
                                    <td>{{ is_null($competitionTeam->players) ? 0 : count($competitionTeam->players) }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="row">
                            @foreach ($competitionTeam->players as $player)
                                @php
                                    $player = getPlayer($player);
                                @endphp

                                <div class="col-md-4">
                                    <x-card.player :player="$player" panel="dashboard">
                                        
                                            <x-slot name="link">
                                                @role('superadministrator')
                                                    <a href="{{ route('dashboard.players.show', $player) }}" class="btn btn-primary btn-sm mt-2">عرض</a>
                                                @endrole
                                            </x-slot>
                                    </x-card.player>
                                </div>
                            @endforeach
                        </div>
                    </x-card.main>
                    @if ($competitionTeam->competition->allow_loan_in)
                        <div class="mt-5"></div>
                        <x-card.main class="p-0" title="اعارة داخلية">
                            <div class="form-inline d-flex align-items-center border-bottom mb-2">
                                <table class="table table-bordered mr-2">
                                    <tr>
                                        <td>العدد المسموح به</td>
                                        <td>{{ $competition->loan_in_count }}</td>
                                        <td>اللاعبين المضافين</td>
                                        <td>{{ is_null($competitionTeam->loan_in_players) ? 0 : count($competitionTeam->loan_in_players) }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="row">
                                @foreach ($competitionTeam->loan_in_players as $player)
                                    @php
                                        $player = getPlayer($player);
                                    @endphp

                                    <div class="col-md-4">
                                        <x-card.player :player="$player" panel="dashboard">
                                            
                                            <x-slot name="link">
                                                @role('superadministrator')
                                                    <a href="{{ route('dashboard.players.show', $player) }}" class="btn btn-primary btn-sm mt-2">عرض</a>
                                                @endrole
                                            </x-slot>
                                            
                                        </x-card.player>
                                    </div>
                                @endforeach
                            </div>
                        </x-card.main>
                    @endif

                    @if ($competitionTeam->competition->allow_loan_out)
                        <div class="mt-5"></div>
                        <x-card.main class="p-0" title="اعارة خارجية">
                            <div class="form-inline d-flex align-items-center border-bottom mb-2">
                                <table class="table table-bordered mr-2">
                                    <tr>
                                        <td>العدد المسموح به</td>
                                        <td>{{ $competition->loan_out_count }}</td>
                                        <td>اللاعبين المضافين</td>
                                        <td>{{ is_null($competitionTeam->loan_out_players) ? 0 : count($competitionTeam->loan_out_players) }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="row">
                                @foreach ($competitionTeam->loan_out_players as $player)
                                    @php
                                        $player = getOutPlayer($player);
                                    @endphp

                                    <div class="col-md-4">
                                        <section class="player-card mt-5">
                                            <div class="card">
                                                <header>
                                                    <a class="profile">
                                                        <img src="{{ $player->sport_image }}" alt="Profile Image">
                                                    </a>
                                                </header>

                                                <article>
                                                    <h1>{{ $player->name }}</h1>
                                                    <div class="info">
                                                        <div>
                                                            <span><i class="mdi mdi-account-card-details"></i></span>
                                                            <span>{{ $player->card_id }}</span>
                                                        </div>
                                                        <div>
                                                            <span><i class="mdi mdi-calendar-multiple"></i></span>
                                                            <span>{{ $player->birthdate }}</span>
                                                        </div>
                                                    </div>
                                                    @role('superadministrator')
                                                    <div class="info mt-3">
                                                        <a href="{{ route('dashboard.out-loan-players.show', $player) }}" class="btn btn-primary btn-sm mt-2">عرض</a>
                                                    </div>
                                                    @endrole
                                                </article>
                                            </div>
                                        </section>
                                    </div>
                                @endforeach
                            </div>
                        </x-card.main>
                    @endif
                </x-card.main>
            </div>
        </div>
    </div>
</x-dashboard.layouts.app>
