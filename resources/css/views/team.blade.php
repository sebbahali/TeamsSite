<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $team->name }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">

    {{-- sweetalert --}}
    <script src="{{ asset('dashboard/js/alert.js') }}"></script>
</head>

<body class="rtl">

    {{-- start navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{  $team->logo}}" style="width: 100px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item px-2">
                        <a class="nav-link active" aria-current="page" href="{{ route('web.index') }}">الرئيسية</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" aria-current="page" href="{{ route('web.teams.show', $team) }}#team-management">ادارة الفريق</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link login-btn" href="{{ route('frontend.login') }}">تسجيل الدخول</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end navbar --}}

    {{-- start carousel --}}
    <div id="teamHeader" class="team-header carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" id="headerBox">
            <div class="carousel-item active">
                <img src="{{ asset('images/football.jpg') }}" class="d-block w-100" alt="...">
            </div>
            @forelse ($team->teamHeaderImage as $image)
                <div class="carousel-item">
                    <img src="{{ getImg('teams/' . $image->name) }}" class="d-block w-100" alt="...">
                </div>
            @empty
                {{-- empty --}}
            @endforelse
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#teamHeader"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#teamHeader"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- end carousel --}}

    {{-- start managment --}}
    <section class="club-management" id="team-management">
        <div class="container">
            <h2 class="section-header">ادارة الفريق</h2>
            <p>معا لمستقبل مشرق</p>
            <div class="row mt-5">
                @if ($managment)
                    @forelse ($managment->teamMangeMembers as $member)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-5">
                            <div class="card">
                                <figure><img src="{{ $member->avatar }}"/>
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
    {{-- end managment --}}

    <footer class="bg-white text-center text-white">
        <!-- Copyright -->
        <div class="text-center p-3 text-dark" style="background-color: #f1f1f1">
            جميع الحقوق محفوظة
            &copy;
            لنادي قريات
            مصمم بــ
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
            </svg>
            بواسطة
            <a class="text-dark" href="#">jamal sinani</a>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    {{-- <script>
        let headerBox = document.getElementById('header-box');
        headerBox.firstChild().classList.add('active');
    </script> --}}
</body>

</html>
