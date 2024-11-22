<?php $__env->startSection("titulo", "Error 404"); ?>

<?php $__env->startSection('contenido'); ?>

<h1 class="px-4 my-4 font-ui font-extrabold text-center text-primario text-5xl">Error 404</h1>
<h3 class="px-4 font-ui font-medium text-center text-negro text-3xl">La página solicitada no ha sido encontrada.</h3>
<div class="px-4 mt-6 flex flex-row flex-nowrap justify-center items-center">
    <a href="/" class="w-fit mx-auto px-6 py-2 font-ui font-medium text-blanco text-2xl bg-primario hover:bg-primariohover rounded-md">Volver al inicio</a>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\AfterlifeNews\resources\views/errors/404.blade.php ENDPATH**/ ?>