<?php $__env->startSection("titulo", "Escribir"); ?>

<?php $__env->startSection('contenido'); ?>
<h1 class="my-6 font-titulo font-bold text-3xl lg:text-4xl text-center text-negro">Escribe tu Publicación</h1>

<form method="POST" action="/publicaciones" enctype="multipart/form-data" class="px-3 md:max-w-screen-sm md:mx-auto">
	
	<input type="text" name="titulo" id="titulo" placeholder="Título de tu publicación" value="<?php echo e(old("titulo")); ?>" class="w-full font-titulo text-2xl border-[3px] border-gris">
	
	<div class="mt-3 px-8">
		<p class="font-ui font-semibold text-center text-xl text-negro">Portada de publicación</p>
		<label for="inputImagen">
			<img id="previewImagen" class="mx-auto w-full max-w-md aspect-video rounded-md border-2 border-negro cursor-pointer bg-grisoscuro"/>
		</label>
		<input type="file" name="imagen" id="inputImagen" class="hidden"/>
	</div>
	
	<textarea name="cuerpo" id="cuerpo" rows="8" placeholder="Escribí tu publicación" class="mt-6 w-full font-cuerpo text-xl bg-blanco border-[3px] border-gris rounded-lg"><?php echo e(old("cuerpo")); ?></textarea>
	
	<h3 class="mb-2 font-ui font-semibold text-2xl text-center">Categorías</h3>
	
	<div class="py-3 flex flex-row flex-nowrap overflow-x-scroll [scrollbar-width:none] lg:[scrollbar-width:auto] gap-3">
		<?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div>
			<input type="checkbox" name="categorias[]" id="categoria<?php echo e($categoria->id); ?>" value="<?php echo e($categoria->id); ?>" class="peer hidden" />
			<label for="categoria<?php echo e($categoria->id); ?>" class="px-3 py-1 font-cuerpo font-medium text-2xl text-negro cursor-pointer hover:bg-gris rounded-xl peer-checked:bg-primario peer-checked:hover:bg-primariohover peer-checked:text-blanco">#<?php echo e($categoria->nombre); ?></label>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	
	<?php echo csrf_field(); ?>
	<div class="flex flex-row flex-nowrap justify-center items-center">
		<button type="submit" class="w-fit my-6 px-6 py-2 font-ui font-medium text-blanco text-2xl bg-primario hover:bg-primariohover rounded-md">Publicar</button>
	</div>
</form>

<script src="<?php echo e(asset('js/formularioPublicacion.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\AfterlifeNews\resources\views/paginas/escribir.blade.php ENDPATH**/ ?>