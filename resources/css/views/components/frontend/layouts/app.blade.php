<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ env('APP_NAME') }} - {{ $title ?? "الرئيسية" }}</title>

    {{-- livewire styles --}}
    <livewire:styles>

    {{-- include css files --}}
    <x-frontend.includes.css />
</head>

<body class="rtl">
    <div class="container-scroller">

        <x-frontend.includes.navbar />

        <div class="container-fluid page-body-wrapper">
            <x-frontend.includes.sidebar />

            <div class="main-panel">
                <x-frontend.year-update-marquee />
                <div class="content-wrapper">
                    {{ $slot }}
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between">
                        <span class="d-block text-center text-sm-start d-sm-inline-block">جميع الحقوق محفوظة © {{ date('Y') }} ل{{ env('APP_NAME') }}</span>
                        <span class="float-none float-sm-end mt-1 mt-sm-0 text-end">
                            <i class="mdi mdi-code-tags"></i> بـ <i class="mdi mdi-heart"></i>
                            <span>بواسطة</span><a href="#" target="_blank">jamal sinani</a>
                        </span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
  
    <x-model-image />

    {{-- livewire scripts --}}
    <livewire:scripts>

    {{-- include js file --}}
    <x-frontend.includes.js />

    <x-notifications />

    <x-delete-confirmation />

    <x-frontend.poup-notefication-menu />
</body>

</html>
