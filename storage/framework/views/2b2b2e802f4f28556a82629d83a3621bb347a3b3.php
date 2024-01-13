<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('contact', ['club' => $club])->html();
} elseif ($_instance->childHasBeenRendered('eb2xecn')) {
    $componentId = $_instance->getRenderedChildComponentId('eb2xecn');
    $componentTag = $_instance->getRenderedChildComponentTagName('eb2xecn');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('eb2xecn');
} else {
    $response = \Livewire\Livewire::mount('contact', ['club' => $club]);
    $html = $response->html();
    $_instance->logRenderedChild('eb2xecn', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app',['page'=>'contact_us'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nouri\Desktop\n\quriyatclub_laravel-main\resources\views/pages/contact_us.blade.php ENDPATH**/ ?>