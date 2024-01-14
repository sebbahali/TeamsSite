@extends('pdf.layout')

@section('title')
    محضر
@endsection

@section('content')
    <div class="row text-center mb-3">
        <div class="col-3">
            <div>
                <img style="width: 120px; height: 120px;" src="{{ url( auth()->user()->club->logo) }}">
            </div>
        </div>
        <div class="col-6">
            <p>بسم الله الرحمن الرحيم</p>
            <p>نادي قريات الرياضي</p>
            <p>مجلس ادارة النادي</p>
            <p>محضر اجتماع رقم : {{ $meeting->number }}</p>
        </div>
        <div class="col-3">
            <div>
                <img style="width: 120px; height: 120px;" src="{{ url( auth()->user()->club->logo) }}">
            </div>
        </div>
    </div>
    <div class="row border-bottom border-top">
        <div class="col-6 mt-3">
            <p>اليوم : {{ $meeting->day->value }}</p>
            <p>الساعة : {{ $meeting->time }}</p>
        </div>
        <div class="col-6 mt-3">
            <p>التاريخ : {{ $meeting->date }}</p>
            <p>المكان : {{ $meeting->location }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col mt-4 pb-4 border-bottom">
            {!! $meeting->body !!}
        </div>
    </div>
    <div class="row">
        <div class="col mt-4">
            <h5 class="mb-3">الحضور :-</h5>
            <ul>
                @foreach ($attendees as $user)
                    <li>{{ $user->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

@include('pdf.pscript')
