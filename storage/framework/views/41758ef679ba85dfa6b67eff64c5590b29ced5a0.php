<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.layouts.app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> الرئيسية <?php $__env->endSlot(); ?>
    <div class="row">
        <?php if (app('laratrust')->hasRole('superadministrator')) : ?>
            <div class="col-md-4 col-sm-6 stretch-card grid-margin">
                <a href="<?php echo e(route('dashboard.teams.index')); ?>" class="text-decoration-none d-block w-100">
                    <div class="card bg-gradient-danger card-img-holder text-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <img src="dashboard/images/dashboard/circle.svg" class="card-img-absolute"
                                        alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">الفرق الاهلية</h4>
                                    <h2 class="mb-2"><?php echo e($teams); ?></h2>
                                </div>
                                <div class="col-4">
                                    <i class="mdi mdi-flag float-right" style="font-size: 40px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 stretch-card grid-margin">
            <a href="<?php echo e(route('dashboard.players-search.index')); ?>" class="text-decoration-none d-block w-100">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <img src="dashboard/images/dashboard/circle.svg" class="card-img-absolute"
                                    alt="circle-image" />
                                <h4 class="font-weight-normal mb-3">اللاعبين</h4>
                                <h2 class="mb-2"><?php echo e($players); ?></h2>
                            </div>
                            <div class="col-4">
                                <i class="mdi mdi-account-multiple float-right" style="font-size: 40px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 stretch-card grid-margin">
                <a href="<?php echo e(route('dashboard.players.request-index')); ?>" class="text-decoration-none d-block w-100">
                    <div class="card bg-gradient-success card-img-holder text-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <img src="dashboard/images/dashboard/circle.svg" class="card-img-absolute"
                                        alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">طلبات التسجيل</h4>
                                    <h2 class="mb-2"><?php echo e($playersReg); ?></h2>
                                </div>
                                <div class="col-4">
                                    <i class="mdi mdi-buffer float-right" style="font-size: 40px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 stretch-card grid-margin">
                <a href="<?php echo e(route('dashboard.transfer-players.index')); ?>" class="text-decoration-none d-block w-100">
                    <div class="card bg-gradient-info card-img-holder text-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <img src="dashboard/images/dashboard/circle.svg" class="card-img-absolute"
                                        alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">طلبات النقل</h4>
                                    <h2 class="mb-2"><?php echo e($transferPlayers); ?></h2>
                                </div>
                                <div class="col-4">
                                    <i class="mdi mdi-airplane float-right" style="font-size: 40px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 stretch-card grid-margin">
                <a href="<?php echo e(route('dashboard.loan-players.index')); ?>" class="text-decoration-none d-block w-100">
                    <div class="card bg-gradient-success card-img-holder text-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <img src="dashboard/images/dashboard/circle.svg" class="card-img-absolute"
                                        alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">طلبات الاستعارة</h4>
                                    <h2 class="mb-2"><?php echo e($loanPlayers); ?></h2>
                                </div>
                                <div class="col-4">
                                    <i class="mdi mdi-account-switch float-right" style="font-size: 40px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; // app('laratrust')->hasRole ?>
        <?php if (\Illuminate\Support\Facades\Blade::check('ableTo', 'read-mettings')): ?>
            <div class="col-md-4 col-sm-6  stretch-card grid-margin">
                <a href="<?php echo e(route('dashboard.mettings.index')); ?>" class="text-decoration-none d-block w-100">
                    <div class="card bg-gradient-danger card-img-holder text-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <img src="dashboard/images/dashboard/circle.svg" class="card-img-absolute"
                                        alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">الاجتماعات</h4>
                                    <h2 class="mb-2"><?php echo e($mettings); ?></h2>
                                </div>
                                <div class="col-4">
                                    <i class="mdi mdi-calendar-text float-right" style="font-size: 40px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>

        <?php if (\Illuminate\Support\Facades\Blade::check('ableTo', 'read-competitions')): ?>
            <div class="col-md-4 col-sm-6  stretch-card grid-margin">
                <a href="<?php echo e(route('dashboard.competitions.index')); ?>" class="text-decoration-none d-block w-100">
                    <div class="card bg-gradient-danger card-img-holder text-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <img src="dashboard/images/dashboard/circle.svg" class="card-img-absolute"
                                        alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">المسابقات</h4>
                                    <h2 class="mb-2"><?php echo e($competitions); ?></h2>
                                </div>
                                <div class="col-4">
                                    <i class="mdi mdi-calendar-text float-right" style="font-size: 40px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>
    </div>

    <div class="row">
        <?php if (app('laratrust')->hasRole('superadministrator')) : ?>
            <div class="col-md-6">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card.main','data' => ['title' => 'احصائيات اللاعبين']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card.main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'احصائيات اللاعبين']); ?>
                    <div style="height: 300px" id="playerStateChart">
                        <?php echo $playerChart->container(); ?>

                        <?php echo $playerChart->script(); ?>

                    </div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            </div>
        <?php endif; // app('laratrust')->hasRole ?>

        <?php if (\Illuminate\Support\Facades\Blade::check('ableTo', 'read-competitions')): ?>
            <div class="col-md-6">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card.main','data' => ['title' => 'احصائيات المسابقات']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card.main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'احصائيات المسابقات']); ?>
                    <div style="height: 300px" id="competitionStateChart">
                        <?php echo $competitionChart->container(); ?>

                        <?php echo $competitionChart->script(); ?>

                    </div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
        <?php endif; ?>
    </div>

    

    

    <?php $__env->startPush('headScripts'); ?>
        <!-- Charting library -->
        
        
        

            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

        <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>



<?php /**PATH C:\Users\nouri\Desktop\n\quriyatclub_laravel-main\resources\views/dashboard/index.blade.php ENDPATH**/ ?>