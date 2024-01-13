<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.layouts.auth','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.layouts.auth'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> تسجيل الدخول <?php $__env->endSlot(); ?>

    <h4 class="text-center">تسجيل الدخول</h4>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger text-center">اسم المستخدم او كلمة السر خطأ.</div>
    <?php endif; ?>

    <?php if(session('frontend_success_message')): ?>
        <div class="alert alert-success text-center"><?php echo e(session('frontend_success_message')); ?></div>
    <?php endif; ?>

    <form action="<?php echo e(route('frontend.login')); ?>" method="POST" class="pt-3">
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <input type="text" name="username" class="form-control form-control-lg" id="username" placeholder="اسم المستخدم">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="كلمة السر">
        </div>
        <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
                <label class="form-check-label text-muted">
                    <input type="checkbox" name="remember" class="form-check-input"> تذكرني </label>
            </div>
            <a href="<?php echo e(route('frontend.password.request')); ?>" class="auth-link text-black">هل نسيت كلمة السر ؟</a>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn w-100">تسجيل الدخول</button>
        </div>
    </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\nouri\Desktop\n\quriyatclub_laravel-main\resources\views/frontend/auth/login.blade.php ENDPATH**/ ?>