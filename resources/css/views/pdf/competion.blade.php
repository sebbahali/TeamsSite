@extends('pdf.layout')

@section('title')
    كشف التسجيل في المسابقة
@endsection

@section('content')
    <div class="row text-center mb-3">
        <div class="col-3">
            <div>
                <img style="width: 120px; height: 120px;" src="{{ url( $team->club->logo) }}">
            </div>
        </div>
        <div class="col-6">
    
            <p>نادي قريات </p>
            <p>فريق {{ $team->name }}</p>
            <p>كشف التسجيل في المسابقة </p>
        </div>
        <div class="col-3">
            <div>
                <img style="width: 120px; height: 120px;" src="{{ url( $team->logo) }}">
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <th colspan="6" class="text-center">اللاعبين المنتسبين</th>
        </thead>
        <tr>
            <td style="width: 100px">الرقم</td>
            <td>الاسم</td>
            <td>رقم القيد</td>
            <td>الرقم المدني</td>
            <td>تاريخ الميلاد</td>
            <td>العمر</td>
        </tr>
        @foreach ($players as $i => $player)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $player->name }}</td>
                <td>{{ $player->register_number }}</td>
                <td>{{ $player->card_id }}</td>
                <td>{{ $player->birth_date }}</td>
                <td>{{ calcAge($player->birth_date) }}</td>
            </tr>
        @endforeach
    </table>
    <table class="table table-bordered mt-5">
        <thead>
            <th colspan="6" class="text-center">الاعارة الداخلية</th>
        </thead>
        <tr>
            <td style="width: 100px">الرقم</td>
            <td>الاسم</td>
            <td>رقم القيد</td>
            <td>الرقم المدني</td>
            <td>تاريخ الميلاد</td>
            <td>العمر</td>
        </tr>
        @foreach ($loanInPlayers as $i => $player)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $player->name }}</td>
                <td>{{ $player->register_number }}</td>
                <td>{{ $player->card_id }}</td>
                <td>{{ $player->birth_date }}</td>
                <td>{{ calcAge($player->birth_date) }}</td>
            </tr>
        @endforeach
    </table>
    <table class="table table-bordered mt-5">
        <thead>
            <th colspan="6" class="text-center">الاعارة الخارجية</th>
        </thead>
        <tr>
            <td style="width: 100px">الرقم</td>
            <td>الاسم</td>
            <td>الرقم المدني</td>
            <td>تاريخ الميلاد</td>
            <td>العمر</td>
        </tr>
        @foreach ($loanOutPlayers as $i => $player)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $player->name }}</td>
                <td>{{ $player->card_id }}</td>
                <td>{{ $player->birthdate }}</td>
                <td>{{ calcAge($player->birthdate) }}</td>
            </tr>
        @endforeach
    </table>   
    <table class="table table-bordered mt-5">
        <thead>
            <th colspan="6" class="text-center">الجهاز الفني</th>
        </thead>
        <tr>
            <td style="width: 100px">الرقم</td>
            <td>الاسم</td>
            <td>الصفة</td>
            <td>تاريخ الميلاد</td>
            <td>العمر</td>
        </tr>
        @foreach ($assistants as $i => $assistant)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $assistant->name }}</td>
                <td>{{ $assistant->role->name }}</td>
                <td>{{ $assistant->birthdate }}</td>
                <td>{{ calcAge($assistant->birthdate) }}</td>
            </tr>
        @endforeach
    </table>   

@endsection

@include('pdf.pscript')
