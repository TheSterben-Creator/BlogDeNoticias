<?php $__env->startSection("titulo", "Publicaciones"); ?>

<?php $__env->startSection('contenido'); ?>
<h1 class="my-4 font-titulo font-bold text-3xl text-center text-negro">Explorar Publicaciones</h1>
<div class="xl:grid xl:grid-cols-12 gap-x-4 mb-8">
	<aside class="px-3 lg:px-0 lg:mb-4 lg:container lg:mx-auto xl:max-w-none xl:col-start-1 xl:col-span-3">
		<h2 class="hidden xl:block xl:mb-3 font-ui font-medium text-negro text-2xl text-center">Buscar por título</h2>
		<form method="GET" class="xl:px-8 flex flex-col lg:flex-row flex-nowrap xl:flex-wrap lg:justify-start items-center">
			<input type="text" name="titulo" id="titulo" value="<?php echo e($query); ?>" placeholder="Buscar por título" class="w-full lg:w-auto xl:w-full p-1 font-ui text-xl bg-blanco border-[3px] border-gris ">
			
			<button type="submit" class="mt-3 lg:mt-0 lg:ml-3 xl:ml-0 xl:mt-3 px-6 py-2 font-ui font-medium text-xl bg-gris hover:bg-grisoscuro rounded-md w-fit">Aplicar filtro</button>
		</form>
	</aside>

	<main class="px-3 xl:col-start-4 xl:col-span-6">
		<?php if(count($publicaciones) > 0): ?>
		
		<div class="lg:max-w-screen-lg lg:mx-auto lg:grid lg:grid-cols-2 lg:gap-x-4 lg:gap-y-4">
			<?php $__currentLoopData = $publicaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publicacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
		<h3 class="mt-6 font-ui font-medium text-center text-grisoscuro text-2xl">No se han encontrado publicaciones<?php echo e($query != "" ? " que cumplan con estos filtros." : "."); ?></h2>
		<?php endif; ?>
	</main>

	<aside class="hidden xl:block xl:col-start-10 xl:col-span-3">
		<h2 class="mb-3 font-ui font-medium text-negro text-2xl text-center">Categorías destacadas</h2>
		
		<div class=" flex flex-col flex-nowrap items-center">
			<?php if(count($categoriasDestacadas) > 0): ?>
			<?php $__currentLoopData = $categoriasDestacadas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<a href="/categorias/<?php echo e($categoria->id); ?>" class="font-cuerpo font-medium text-negro hover:text-negrohover text-2xl">#<?php echo e($categoria->nombre); ?></a>
			<span class="mb-2 font-ui font-medium text-grisoscuro text-xl"><?php echo e($categoria->publicaciones()->count()); ?> <?php echo e($categoria->publicaciones()->count() != 1 ? "publicaciones" : "publicación"); ?></span>
			
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		
		<?php else: ?>
		<h3 class="mt-3 font-ui font-medium text-grisoscuro text-xl">No se han encontrado categorías.</h3>
		<?php endif; ?>
	</aside>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\AfterlifeNews\resources\views/paginas/publicaciones.blade.php ENDPATH**/ ?>