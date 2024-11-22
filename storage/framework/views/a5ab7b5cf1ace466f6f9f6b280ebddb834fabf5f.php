<?php $__env->startSection("titulo", "Categorías"); ?>

<?php $__env->startSection('contenido'); ?>
<main class="px-3 md:max-w-screen-lg md:mx-auto">
	<h1 class="my-4 font-titulo font-bold text-3xl lg:text-4xl text-center text-negro">Explorar Categorías</h1>
	
	<?php if(count($categorias) > 0): ?>
	
	<div class="lg:grid lg:grid-cols-2 lg:gap-x-4 lg:gap-y-4">
		
		<?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="my-4 px-3 py-2 lg:my-0 flex flex-col flex-nowrap gap-2 rounded-lg bg-primariopastel">
			<a href="/categorias/<?php echo e($categoria->id); ?>" class="font-titulo font-bold text-negro hover:text-negrohover text-2xl">#<?php echo e($categoria->nombre); ?></a>
			
			<?php if($categoria->publicaciones_count >= 1): ?>
			<span class="font-ui text-grisoscuro text-lg lg:text-xl"><?php echo e($categoria->publicaciones_count); ?> <?php echo e($categoria->publicaciones_count != 1 ? "publicaciones" : "publicación"); ?></span>
			<?php else: ?>
			<span class="font-ui text-grisoscuro text-lg lg:text-xl">Sin publicaciones</span>
			<?php endif; ?>
			
			<p class="font-cuerpo text-negro text-lg lg:text-xl"><?php echo e($categoria->descripcion); ?></p>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
	</div>
	
	<?php else: ?>
	<h2 class="mt-6 font-ui font-medium text-center text-grisoscuro text-2xl">No se han encontrado categorías.</h2>
	<?php endif; ?>
</main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\AfterlifeNews\resources\views/paginas/categorias.blade.php ENDPATH**/ ?>