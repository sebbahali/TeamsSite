@extends('pdf.layout')

@section('title')
    كشف اللاعبين
@endsection

@section('content')
    <div class="row text-center mb-3">
        <div class="col-3">
            <div>
                <img style="width: 120px; height: 120px;" src="{{ url( $team->club->logo) }}">
            </div>
        </div>
        <div class="col-6">
        <br>
            <p>نادي قريات</p>
            <p> فريق {{ $team->name }}</p>
            <p> كشف اللاعبين </p>
        </div>
        <div class="col-3">
            <div>
                <img style="width: 120px; height: 120px;" src="{{ url( $team->logo) }}">
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <td style="width: 100px">الرقم</td>
            <td>الاسم</td>
            <td>رقم القيد</td>
            <td>الرقم المدني</td>
            <td>تاريخ الميلاد</td>
            <td>العمر</td>
            <td>حالة اللاعب</td>
        </tr>
        @foreach ($players as $i => $player)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $player->name }}</td>
                <td>{{ $player->register_number }}</td>
                <td>{{ $player->card_id }}</td>
                <td>{{ $player->birth_date }}</td>
                <td>{{ calcAge($player->birth_date) }}</td>
                <td>{{ $player->join_status }}</td>
            </tr>
        @endforeach
    </table>    

@endsection

@include('pdf.pscript')
