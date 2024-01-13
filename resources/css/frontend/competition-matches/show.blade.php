<x-frontend.layouts.app>
    <x-slot name="title">جدول المباريات</x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card.main title="تفاصيل المبارة" class="px-0">
                    <div class="container">
                        <div class="form-inline d-flex align-items-center border-bottom mb-2">
                            <div class="form-check mx-sm-2 align-self-end">
                                <a href="{{ route('frontend.competition-matches.index', ['competition' => $competition]) }}"
                                    class="btn btn-danger btn-sm" title="رجوع">
                                    <i class="mdi mdi-arrow-right-bold"></i>
                                </a>
                            </div>

                            @if ($match->status == \App\Enums\MatchStatus::NotStart)
                                <div class="form-check mx-sm-2 align-self-end">
                                    <a href="{{ route('frontend.match-players.create', ['match' => $match]) }}"
                                        class="btn btn-success btn-sm" title="اضافة لاعب">
                                        <i class="mdi mdi-plus"></i> اضافة لاعب
                                    </a>
                                </div>

                                <div class="form-check mx-sm-2 align-self-end">
                                    <a href="{{ route('frontend.match-assistants.create', ['match' => $match]) }}"
                                        class="btn btn-success btn-sm" title="اضافة عضو جهاز فني">
                                        <i class="mdi mdi-plus"></i> اضافة عضو جهاز فني
                                    </a>
                                </div>
                            @endif

                            <div class="form-check mx-sm-2 align-self-end">
                                <a href="{{ route('frontend.competition-matches.pdf', ['competition' => $match->competition_id, 'match' => $match]) }}"
                                    class="btn btn-primary btn-sm" title="طباعة الكشف">
                                    <i class="mdi mdi-file"></i> طباعة الكشف
                                </a>
                            </div>
                        </div>
                        
                        <x-card.match :match="$match" :competition="$competition" />

                        <table class="table table-bordered mb-3">
                            <thead>
                                <th colspan="7" class="text-center">اللاعبين الاساسيين</th>
                            </thead>
                            <tr>
                                @if ($match->status == \App\Enums\MatchStatus::NotStart)
                                    <td>الغاء</td>
                                @endif
                                <td>رقم القميص</td>
                                <td>الاسم</td>
                                <td>G</td>
                                <td>R</td>
                                <td>Y</td>
                                <td>S</td>
                            </tr>
                            @foreach ($players->where('type', 'in') as $player)
                                <tr>
                                    @if ($match->status == \App\Enums\MatchStatus::NotStart)
                                        <td>
                                            <form id='delteForm'
                                                action="{{ route('frontend.match-players.destroy', ['match' => $match, 'player' => $player]) }}" method="post"
                                                style="display:inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm mx-1 delete-confirmation">
                                                    <i class="mdi mdi-delete" title="حذف اللاعب"></i>
                                                </button>
                                            </form>
                                        </td>
                                    @endif
                                    <td>{{ $player->number }}</td>
                                    <td>{{ $player->player->name }}</td>
                                    <td>
                                        @foreach ($player->g as $goals)
                                            - {{ $goals }} <br />
                                        @endforeach
                                    </td>
                                    <td title="{{ $player->r['resone'] }}">{{ $player->r['time'] }}</td>
                                    <td title="{{ $player->y['resone'] }}">{{ $player->y['time'] }}</td>
                                    <td title="{{ $player->s['player'] }}"">{{ $player->s['time'] }}</td>
                                </tr>
                            @endforeach
                        </table>

                        <table class="table table-bordered mb-3 mt-5">
                            <thead>
                                <th colspan="7" class="text-center">اللاعبين البدلاء</th>
                            </thead>
                            <tr>
                                @if ($match->status == \App\Enums\MatchStatus::NotStart)
                                    <td>الغاء</td>
                                @endif
                                <td>رقم القميص</td>
                                <td>الاسم</td>
                                <td>G</td>
                                <td>R</td>
                                <td>Y</td>
                                <td>S</td>
                            </tr>
                            @foreach ($players->where('type', 'out') as $player)
                                <tr>
                                    @if ($match->status == \App\Enums\MatchStatus::NotStart)
                                        <td>
                                            <form id='delteForm'
                                                action="{{ route('frontend.match-players.destroy', ['match' => $match, 'player' => $player]) }}" method="post"
                                                style="display:inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm mx-1 delete-confirmation">
                                                    <i class="mdi mdi-delete" title="حذف اللاعب"></i>
                                                </button>
                                            </form>
                                        </td>
                                    @endif
                                    <td>{{ $player->number }}</td>
                                    <td>{{ $player->player->name }}</td>
                                    <td>
                                        @foreach ($player->g as $goals)
                                            - {{ $goals }} <br />
                                        @endforeach
                                    </td>
                                    <td title="{{ $player->r['resone'] }}">{{ $player->r['time'] }}</td>
                                    <td title="{{ $player->y['resone'] }}">{{ $player->y['time'] }}</td>
                                    <td title="{{ $player->s['player'] }}"">{{ $player->s['time'] }}</td>
                                </tr>
                            @endforeach
                        </table>

                        <table class="table table-bordered mb-3">
                            <thead>
                                <th colspan="4" class="text-center">الجهاز الفني</th>
                            </thead>
                            <tr>
                                @if ($match->status == \App\Enums\MatchStatus::NotStart)
                                    <td>الالغاء</td>
                                @endif
                                <td>الاسم</td>
                                <td>R</td>
                                <td>Y</td>
                            </tr>
                            @foreach ($assistants as $assistant)
                                <tr>
                                    @if ($match->status == \App\Enums\MatchStatus::NotStart)
                                        <td>
                                            <form id='delteForm'
                                                action="{{ route('frontend.match-assistants.destroy', ['match' => $match, 'assistant' => $assistant]) }}" method="post"
                                                style="display:inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm mx-1 delete-confirmation">
                                                    <i class="mdi mdi-delete" title="حذف"></i>
                                                </button>
                                            </form>
                                        </td>
                                    @endif
                                    <td>{{ $assistant->assistant->name }}</td>
                                    <td>{{ $assistant->r }}</td>
                                    <td>{{ $assistant->y }}</td>
                                </tr>
                            @endforeach
                        </table>

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
                    </div>
                </x-card.main>
            </div>
        </div>
    </div>
</x-frontend.layouts.app>
