<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نادي قريات <?php echo $__env->yieldContent('title'); ?></title>
    <!-- start link css -->
    <link rel="stylesheet" href="/frontend/css/all.css">
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="/frontend/css/media.css">
    <?php echo \Livewire\Livewire::styles(); ?>

    <script src="<?php echo e(asset('dashboard/js/alert.js')); ?>"></script>

</head>

<body>
<!-- strat page -->
<div id="page">
    <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
<?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html>
<?php /**PATH C:\Users\nouri\Desktop\n\quriyatclub_laravel-main\resources\views/layouts/app.blade.php ENDPATH**/ ?>