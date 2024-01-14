@extends('pdf.layout')

@section('title')
    كشف المباراة
@endsection

@section('content')
    <div class="row text-center mb-3">
        <div class="col-3">
            <div>
                <img style="width: 120px; height: 120px;" src="{{ url( $team->club->logo) }}">
            </div>
        </div>
        <div class="col-6">
            <p>بسم الله الرحمن الرحيم</p>
            <p>نادي قريات</p>
            <p>فريق {{ $team->name }}</p>
            <p>كشف المباراة</p>
        </div>
        <div class="col-3">
            <div>
                <img style="width: 120px; height: 120px;" src="{{ url( $team->logo) }}">
            </div>
        </div>
    </div>


    <h4 class="text-center mb-2">اللاعبين الاساسيين</h4>
    <table class="table table-bordered">
        <thead>
            <th style="width: 200px">رقم القميص</th>
            <th>الاسم</th>
        </thead>
        @foreach ($inPlayers as $i => $player)
            <tr>
                <td>{{ $player->getPlayerNumber() }}</td>
                <td>{{ $player->player->name }}</td>
            </tr>
        @endforeach
    </table> 
    
    <h4 class="text-center mb-2 mt-5">اللاعبين البدلاء</h4>
    <table class="table table-bordered">
        <thead>
            <th style="width: 200px">رقم القميص</th>
            <th>الاسم</th>
        </thead>
        @foreach ($outPlayers as $i => $player)
            <tr>
                <td>{{ $player->getPlayerNumber() }}</td>
                <td>{{ $player->player->name }}</td>
            </tr>
        @endforeach
    </table>

    <h4 class="text-center mb-2 mt-5">الجهاز الفني</h4>
    <table class="table table-bordered">
        <thead>
            <th style="width: 200px">الترتيب</th>
            <th>الاسم</th>
            <th>الصفة</th>
        </thead>
        @foreach ($assistants as $i => $assistant)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $assistant->assistant->name }}</td>
                <td>{{ $assistant->assistant->role->value }}</td>
            </tr>
        @endforeach
    </table>

@endsection

@include('pdf.pscript')
