<?php if(count($errors) > 0): ?>
<div class="mt-4 flex flex-col flex-nowrap gap-3">
	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<p class="mx-3 px-3 py-2 block bg-errorfondo text-errortexto text-ui text-center text-xl rounded-xl"><?php echo e($error); ?></p>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?><?php /**PATH C:\wamp64\www\AfterlifeNews\resources\views/utilidades/errores.blade.php ENDPATH**/ ?>