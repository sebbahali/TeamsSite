<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php if($management): ?>
                <?php $__empty_1 = true; $__currentLoopData = $management->clubMangeMembers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-12">
                        <div class="card">
                            <figure><img src="<?php echo e($member->avatar); ?>"/>
                                <figcaption>
                                    <h3><?php echo e($member->name); ?></h3>
                                    <p><?php echo e($member->role->value); ?></p>
                                </figcaption>
                                <a href="#"></a>
                            </figure>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col text-center">
                        <img src="<?php echo e(asset('images/empty-box.png')); ?>" width="100px"/>
                    </div>
                <?php endif; ?>
            <?php else: ?>
                <div class="col text-center">
                    <img src="<?php echo e(asset('images/empty-box.png')); ?>" width="100px"/>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app',['page'=>'club_management'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nouri\Desktop\n\quriyatclub_laravel-main\resources\views/pages/club_management.blade.php ENDPATH**/ ?>