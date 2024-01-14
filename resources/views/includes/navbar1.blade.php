<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo.png') }}" style="width: 70px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item px-2">
                <a class="nav-link active" aria-current="page" href="{{ route('web.index') }}">الرئيسية</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" aria-current="page" href="{{ route('web.index') }}#about-us">عن النادي</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" aria-current="page" href="{{ route('web.index') }}#news">اخبار النادي</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" aria-current="page" href="{{ route('web.index') }}#club-management">ادارة النادي</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" aria-current="page" href="{{ route('web.teams.index') }}">الفرق الاهلية</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" aria-current="page" href="{{ route('web.index') }}#contact-us">اتصل بنا</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link" href="#">الانظمة و اللوائح</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link login-btn" href="{{ route('frontend.login') }}">تسجيل الدخول</a>
            </li>
        </ul>
    </div>
    </div>
</nav>
