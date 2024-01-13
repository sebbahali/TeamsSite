<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 animate__animated animate__fadeInUp">
                <div class="about-card text-center">
                    <div class="info">
                        <h3 class="mt-4">فلسفتنا</h3>
                        <p class="mt-3"><?php echo e($club->philosphoy); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-12 animate__animated animate__fadeInUp animate__delay-1s">
                <div class="about-card text-center">
                    <div class="info">
                        <h3 class="mt-4">رسالتنا</h3>
                        <p class="mt-3"><?php echo e($club->message); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-12 animate__animated animate__fadeInUp animate__delay-2s">
                <div class="about-card text-center">
                    <div class="info">
                        <h3 class="mt-4">رؤيتنا</h3>
                        <p class="mt-3"><?php echo e($club->vision); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app',['page'=>'about_us'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nouri\Desktop\n\quriyatclub_laravel-main\resources\views/pages/about_us.blade.php ENDPATH**/ ?>