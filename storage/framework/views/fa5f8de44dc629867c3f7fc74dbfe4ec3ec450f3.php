<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['data']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['data']); ?>
<?php foreach (array_filter((['data']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($data): ?>
    <?php echo e($data); ?>

<?php else: ?>
    <?php echo e('لا يوجد بيانات'); ?>

<?php endif; ?>
<?php /**PATH C:\Users\nouri\Desktop\n\quriyatclub_laravel-main\resources\views/components/dashboard/partials/display-if-not-null.blade.php ENDPATH**/ ?>