<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
             <div class="col-12">  
            <div class="card">
            <div class="card-header bg-primary" style="background-color:orange">
              <div class="container my-5">  
            <h2 class="section-header">الفرق الأهلية</h2>
            <p>معا نحو مستقبل واعد</p>
             <div class="card-body py-2">
            </div>

            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-md-4 mt-5">
                        <div class="card">
                            <img src="<?php echo e($team->logo); ?>" style="height: 250px" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-center mt-2">
                                    <a href="<?php echo e(route('web.teams.show', $team->slug)); ?>"><?php echo e($team->name); ?></a>
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

            <div class="row mt-5"><?php echo e($teams->links()); ?></div>
        </div>
    </div>
   </div>
          </div>
        </div>
       </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nouri\Desktop\n\quriyatclub_laravel-main\resources\views/teams.blade.php ENDPATH**/ ?>