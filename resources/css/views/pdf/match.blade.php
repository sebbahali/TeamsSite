@extends('pdf.layout')

@section('title')
    قائمة المباراة
@endsection

@section('content')
    <div class="row text-center mb-3">
        <div class="col-3">
            <div>
                <img style="width: 120px; height: 120px;" src="{{ url($match->homeTeam->logo) }}">
            </div>
        </div>
        <div class="col-6">
            <p>بسم الله الرحمن الرحيم</p>
            <p>نادي قريات الرياضي</p>
            <p>{{ $competition->name }}</p>
            <p>قائمة المبارة</p>
        </div>
        <div class="col-3">
            <div>
                <img style="width: 120px; height: 120px;" src="{{ url($match->awayTeam->logo) }}">
            </div>
        </div>
    </div>
    <div class="row border-top">
        <div class="col-12 mt-3">
            <table class="table table-bordered text-center">
                <tr>
                    <td>رقم المبارة</td>
                    <td>اليوم و التاريخ</td>
                    <td>مدة المبارة</td>
                    <td>الملعب</td>
                    <td>درجة الحرارة</td>
                    <td>وقت المباراة</td>
                    <td>الجماهير</td>
                </tr>
                <tr>
                    <td>{{ $match->id }}</td>
                    <td>{{ $match->match_time->toFormattedDateString() }}</td>
                    <td>90</td>
                    <td>{{ $match->location }}</td>
                    <td></td>
                    <td>{{ $match->match_time->toTimeString() }}</td>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="3" colspan="2" class="text-center align-middle">
                        <h3>{{ $match->homeTeam->name }}</h3>
                    </td>
                    <td></td>
                    <td>الشوط الاول</td>
                    <td></td>
                    <td rowspan="3" colspan="2" class="text-center align-middle">
                        <h3>{{ $match->awayTeam->name }}</h3>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>الشوط الثاني</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>نهاية المباراة</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td></td>
                    <td>ركلات الترجيح</td>
                    <td></td>
                    <td colspan="2"></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-6 m">
            <table class="table table-bordered mb-5">
                <thead>
                    <th colspan="8" class="text-center">الاساسي</th>
                </thead>
                <tr>
                    <td style="width: 100px">رقم القميص</td>
                    <td>الاسم</td>
                    <td colspan="3">G</td>
                    <td>R</td>
                    <td>Y</td>
                    <td>S</td>
                </tr>
                @for ($i = 0; $i < 11; $i++)
                    @if (isset($inHomePlayers[$i])) 
                        <tr>
                            <td>{{ $inHomePlayers[$i]->getPlayerNumber() }}</td>
                            <td style="width: 40%">{{ $inHomePlayers[$i]->player->name }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @else
                        <tr>
                            <td style="width: 100px"></td>
                            <td style="width: 40%">&ThinSpace;</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endif
                @endfor
            </table>
            <br />
            <table class="table table-bordered mb-3">
                <thead>
                    <th colspan="8" class="text-center">البدلاء</th>
                </thead>
                <tr>
                    <td style="width: 100px">رقم القميص</td>
                    <td>الاسم</td>
                    <td colspan="3">G</td>
                    <td>R</td>
                    <td>Y</td>
                    <td>S</td>
                </tr>
                @foreach ($outHomePlayers as $player)
                    <tr>
                        <td>{{ $player->getPlayerNumber() }}</td>
                        <td>{{ $player->player->name }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="col-6">
            <table class="table table-bordered mb-5">
                <thead>
                    <th colspan="8" class="text-center">الاساسي</th>
                </thead>
                <tr>
                    <td style="width: 100px">رقم القميص</td>
                    <td>الاسم</td>
                    <td colspan="3">G</td>
                    <td>R</td>
                    <td>Y</td>
                    <td>S</td>
                </tr>
                @for ($i = 0; $i < 11; $i++)
                    @if (isset($inAwayPlayers[$i]))
                        <tr>
                            <td>{{ $inAwayPlayers[$i]->getPlayerNumber() }}</td>
                            <td style="width: 40%">{{ $inAwayPlayers[$i]->player->name }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @else
                        <tr>
                            <td style="width: 100px"></td>
                            <td style="width: 40%">&ThinSpace;</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endif    
                @endfor
            </table>
            <br />
            <table class="table table-bordered mb-3">
                <thead>
                    <th colspan="8" class="text-center">البدلاء</th>
                </thead>
                <tr>
                    <td style="width: 100px">رقم القميص</td>
                    <td>الاسم</td>
                    <td colspan="3">G</td>
                    <td>R</td>
                    <td>Y</td>
                    <td>S</td>
                </tr>
                @foreach ($outAwayPlayers as $player)
                    <tr>
                        <td>{{ $player->getPlayerNumber() }}</td>
                        <td>{{ $player->player->name }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-6">
            <h4 class="text-center mb-2 mt-5">الجهاز الفني</h4>
            <table class="table table-bordered">
                <thead>
                    <th style="width: 100px">الترتيب</th>
                    <th>الاسم</th>
                    <th>الصفة</th>
                </thead>
                @foreach ($homeAssistants as $i => $assistant)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $assistant->assistant->name }}</td>
                        <td>{{ $assistant->assistant->role->value }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="col-6">
            <h4 class="text-center mb-2 mt-5">الجهاز الفني</h4>
            <table class="table table-bordered">
                <thead>
                    <th style="width: 100px">الترتيب</th>
                    <th>الاسم</th>
                    <th>الصفة</th>
                </thead>
                @foreach ($awayAssistants as $i => $assistant)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $assistant->assistant->name }}</td>
                        <td>{{ $assistant->assistant->role->value }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <th colspan="4" class="text-center">الرسميون</th>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 35%">حكم المباراة</td>
                        <td>{{  $match->first_refree }}</td>
                    </tr>
                    <tr>
                        <td>مراقب المباراة</td>
                        <td>{{  $match->five_refree }}</td>
                    </tr>
                    <tr>
                        <td>المساعد الاول</td>
                        <td>{{ $match->second_refree }}</td>
                    </tr>
                    <tr>
                        <td>المساعد الثاني</td>
                        <td>{{ $match->theree_refree }}</td>
                    </tr>
                    <tr>
                        <td>الحكم الرابع</td>
                        <td>{{ $match->four_refree }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-6">
            <strong>G </strong> - هدف <br>
            <strong>Y </strong> - بطاقة صفراء <br>
            <strong>R </strong> - بطاقة حمراء <br>
            <strong>S </strong> - تبديل <br>
        </div>
        <div class="col-6">
            <p>
                <span>توقيع مراقب المباراة :-</span> 
                <br>
                <br>
                <br>
                ......................................................................
            </p>
        </div>
    </div>
    
@endsection

@include('pdf.pscript')