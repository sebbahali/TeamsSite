<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نادي قريات @yield('title')</title>
    <!-- start link css -->
    <link rel="stylesheet" href="/frontend/css/all.css">
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="/frontend/css/media.css">
    <livewire:styles />
    <script src="{{ asset('dashboard/js/alert.js') }}"></script>

</head>

<body>
<!-- strat page -->
<div id="page">
    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')
</div>
<!-- end page -->
<!-- start link js -->
<script src="/frontend/js/jquery-3.5.1.min.js"></script>
<script src="/frontend/js/bootstrap.bundle.min.js"></script>
<script src="/frontend/js/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="/frontend/js/main.js"></script>
<script>
    AOS.init();
</script>
<livewire:scripts />
</body>

</html>
