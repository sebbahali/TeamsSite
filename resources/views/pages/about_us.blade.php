@extends('layouts.app',['page'=>'about_us'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 animate__animated animate__fadeInUp">
                <div class="about-card text-center">
                    <div class="info">
                        <h3 class="mt-4">فلسفتنا</h3>
                        <p class="mt-3">{{ $club->philosphoy }}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 animate__animated animate__fadeInUp animate__delay-1s">
                <div class="about-card text-center">
                    <div class="info">
                        <h3 class="mt-4">رسالتنا</h3>
                        <p class="mt-3">{{ $club->message }}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 animate__animated animate__fadeInUp animate__delay-2s">
                <div class="about-card text-center">
                    <div class="info">
                        <h3 class="mt-4">رؤيتنا</h3>
                        <p class="mt-3">{{ $club->vision }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
