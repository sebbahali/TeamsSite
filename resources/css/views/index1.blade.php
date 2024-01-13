@extends('layouts.app1')

@section('content')

<header class="page-header bg-gradient-primary-to-secondary page-header-dark">
    <div class="page-header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-4 animate__animated animate__backInRight">نادي قريات الرياضي الثقافي</h1>
                    <p class="mb-5 animate__animated animate__backInUp animate__delay-1s">
                        {{ $club->description }}
                    </p>
                </div>
                <div class="col-lg-6 text-center animate__animated animate__fadeInUp animate__delay-2s">
                    <img class="header-img"
                        src="https://cdni.iconscout.com/illustration/premium/thumb/footballer-kicking-football-4227117-3511041.png">
                </div>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-header">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>
</header>
<section class="about-us" id="about-us">
    <div class="container">
        <h2 class="section-header">عن النادي</h2>
        <p>جيل يسلم جيل</p>
        <div class="row mt-5">
            <div class="col-md-4 mt-5 animate__animated animate__fadeInUp">
                <div class="about-card text-center">
                    <img class="w-100" src="{{ asset('images/philosphoy.png') }}">
                    <div class="info">
                        <h3 class="mt-4">فلسفتنا</h3>
                        <p class="mt-3">{{ $club->philosphoy }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5 animate__animated animate__fadeInUp animate__delay-1s">
                <div class="about-card text-center">
                    <img class="w-100" src="{{ asset('images/target.png') }}">
                    <div class="info">
                        <h3 class="mt-4">رسالتنا</h3>
                        <p class="mt-3">{{ $club->message }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5 animate__animated animate__fadeInUp animate__delay-2s">
                <div class="about-card text-center">
                    <img class="w-100" src="{{ asset('images/message.png') }}">
                    <div class="info">
                        <h3 class="mt-4">رؤيتنا</h3>
                        <p class="mt-3">{{ $club->vision }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="news" id="news">
    <div class="custom-shape-divider-top-1646734235">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
        </svg>
    </div>
    <div class="container">
        <h2 class="section-header">أخبار النادي</h2>
        <p>انت معنا خطوة بخطوة</p>

        <div class="row mt-5">
            @forelse ($news as $new)
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <img src="{{ $new->image}}" style="height: 250px" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title mt-3">
                                <a href="{{ route('web.posts.show', $new->slug) }}">{{ $new->title }}</a>
                            </h5>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col text-center">
                    <img src="{{ asset('images/empty-box.png') }}" width="100px"/>
                </div>
            @endforelse
        </div>

        @if ($news->count())
            <div class="col-12 text-center mt-5">
                <a href="{{ route('web.posts.index') }}" class="btn btn-main btn-lg">المزيد من الاخبار</a>
            </div>
        @endif
    </div>
    <div class="custom-shape-divider-bottom-1646734621">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
        </svg>
    </div>
</section>
<section class="club-management" id="club-management">
    <div class="container">
        <h2 class="section-header">ادارة النادي</h2>
        <p>معا لمستقبل مشرق</p>
        <div class="row mt-5">
            @if ($managment)
                @forelse ($managment->clubMangeMembers as $member)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-5">
                        <div class="card">
                            <figure><img src="{{$member->avatar }}"/>
                                <figcaption>
                                    <h3>{{ $member->name }}</h3>
                                    <p>{{ $member->role->value }}</p>
                                </figcaption><a href="#"></a>
                            </figure>
                        </div>
                    </div>
                @empty
                    <div class="col text-center">
                        <img src="{{ asset('images/empty-box.png') }}" width="100px"/>
                    </div>
                @endforelse
            @else
                <div class="col text-center">
                    <img src="{{ asset('images/empty-box.png') }}" width="100px"/>
                </div>
            @endif
        </div>
    </div>
</section>

<livewire:feedback :club="$club"/>

@endsection
