<!-- start header -->
@php
    $page = isset($page)?$page:'';
@endphp
<header>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('frontend/img/logo.svg') }}" alt="" width="70">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{$page=='home'?'active':''}}">
                    <a class="nav-link" href="{{ route('web.index') }}">الرئيسة <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{$page=='about_us'?'active':''}}">
                    <a class="nav-link " href="{{route('web.about-us')}}">عن النادي</a>
                </li>
                <li class="nav-item {{$page=='posts'?'active':''}}">
                    <a class="nav-link" href="{{ route('web.posts.index') }}">أخر الاخبار</a>
                </li>
                <li class="nav-item {{$page=='club_management'?'active':''}}">
                    <a class="nav-link" href="{{ route('web.club-management') }}"> إدارة النادي</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('web.teams.index') }}"> الفرق الأهلية</a>
                </li>
                <li class="nav-item {{$page=='contact_us'?'active':''}}">
                    <a class="nav-link" href="{{ route('web.contact-us') }}">اتصل بنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">الأنظمة و اللوائح</a>
                </li>

            </ul>
                <div class="but-header-logIn">
                    <a href="{{ route('frontend.login') }}">تسجيل دخول</a>
                </div>
        </div>

    </nav>
</header>

<!-- end header -->
