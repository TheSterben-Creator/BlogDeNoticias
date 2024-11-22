<?php $__env->startSection("titulo", "{$categoria->nombre}"); ?>

<?php $__env->startSection('contenido'); ?>
<main class="px-3 md:max-w-screen-lg md:mx-auto">
	<div class="md:max-w-screen-md md:mx-auto">
		<h1 class="my-4 font-titulo font-bold text-3xl lg:text-4xl text-center text-negro">#<?php echo e($categoria->nombre); ?></h1>
		
		<?php if($categoria->publicaciones_count >= 1): ?>
		<span class="font-ui text-grisoscuro text-lg lg:text-xl"><?php echo e($categoria->publicaciones_count); ?> <?php echo e($categoria->publicaciones_count > 1 ? "publicaciones" : "publicación"); ?></span>
		<?php else: ?>
		<span class="font-ui text-grisoscuro text-lg lg:text-xl">Sin publicaciones</span>
		<?php endif; ?>
		<p class="mb-6 font-cuerpo text-negro text-lg lg:text-xl"><?php echo e($categoria->descripcion); ?></p>
	</div>
	
	<?php if(count($categoria->publicaciones) > 0): ?>
	
	<div class="mb-8 lg:grid lg:grid-cols-2 lg:gap-x-4 lg:gap-y-4">
		<?php $__currentLoopData = $categoria->publicaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publicacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if (isset($component)) { $__componentOriginalaaa0207ed3c3fbf690996cb7f051cbc82523433d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Publicacion::class, ['tipo' => 'normal','publicacion' => $publicacion]); ?>
<?php $component->withName('publicacion'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaaa0207ed3c3fbf690996cb7f051cbc82523433d)): ?>
<?php $component = $__componentOriginalaaa0207ed3c3fbf690996cb7f051cbc82523433d; ?>
<?php unset($__componentOriginalaaa0207ed3c3fbf690996cb7f051cbc82523433d); ?>
<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	
	<?php else: ?>
	<h2 class="mt-6 font-ui font-medium text-center text-grisoscuro text-xl">No se han encontrado publicaciones de esta categoría.</h2>
	<?php endif; ?>
</main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\AfterlifeNews\resources\views/paginas/categoria.blade.php ENDPATH**/ ?>