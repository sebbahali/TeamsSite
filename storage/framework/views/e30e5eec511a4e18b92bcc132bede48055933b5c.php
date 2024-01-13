<?php $__env->startSection('content'); ?>
    <div class="news-page">
        <div class="container my-5">
            <h2 class="section-header">اخبار النادي</h2>
            <p>انت معنا خطوة بخطوة</p>

            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-md-4 mt-5">
                        <div class="card">
                            <img src="<?php echo e($new->image); ?>" style="height: 250px" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title mt-3">
                                    <a href="<?php echo e(route('web.posts.show', $new->slug)); ?>"><?php echo e($new->title); ?></a>
                                </h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col text-center">
                        <img src="<?php echo e(asset('images/empty-box.png')); ?>" width="100px"/>
                    </div>
                <?php endif; ?>
            </div>

            <div class="row mt-5"><?php echo e($news->links()); ?></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app',['page'=>'posts'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nouri\Desktop\n\quriyatclub_laravel-main\resources\views/posts.blade.php ENDPATH**/ ?>