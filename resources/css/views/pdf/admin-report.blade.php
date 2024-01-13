@extends('pdf.layout')

@section('title')
    تقرير مراقب المبارة
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
            <p>تقرير مراقب المباراة</p>
        </div>
        <div class="col-3">
            <div>
                <img style="width: 120px; height: 120px;" src="{{ url($match->awayTeam->logo) }}">
            </div>
        </div>
    </div>
    <div class="row border-top pt-4">
        {!! $match->match_admin_report ?? "لا يوجد بيانات لعرضها" !!}
    </div>
    
@endsection

@include('pdf.pscript')