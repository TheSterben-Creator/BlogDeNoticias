<?php $__env->startSection("titulo", "Mi Perfil"); ?>

<?php $__env->startSection('contenido'); ?>
<main class="px-4 md:max-w-screen-lg md:mx-auto">
	<h1 class="my-6 font-titulo font-bold text-3xl lg:text-4xl text-center text-negro">Mi Cuenta</h1>
	<?php if($usuarie != null): ?>
	
	<div class="md:max-w-screen-sm md:mx-auto flex flex-row flex-nowrap justify-around items-center">
		<div class="">
			<img src="<?php echo e(App\Models\Usuarie::Find(Auth::id())->imagen != null ? "/storage/usuaries/" . App\Models\Usuarie::Find(Auth::id())->imagen : "/assets/usuariedefault.png"); ?>" alt="Imagen de usuarie" class="w-32 h-32 rounded-full ring-offset-2 ring-4 ring-primario">
		</div>
		<div class="flex flex-col flex-nowrap items-start">
			<h3 class="font-ui font-semibold text-negro text-2xl"><?php echo e($usuarie->nombre); ?></h3>
			<p class="font-ui text-grisoscuro text-base">Te uniste el <?php echo e($usuarie->fecha_creacion->format("d/m/Y")); ?></p>
			<p class="font-ui text-negro text-lg"><?php echo e($usuarie->publicaciones_count); ?> <?php echo e($usuarie->publicaciones_count == 1 ? "publicación" : "publicaciones"); ?></p>
			<p class="font-ui text-negro text-lg"><?php echo e($usuarie->cantidad_guardados); ?> <?php echo e($usuarie->cantidad_guardados == 1 ? "publicación guardada" : "publicaciones guardadas"); ?></p>
		</div>
	</div>
	
	<div class="md:max-w-screen-sm md:mx-auto flex flex-row flex-nowrap justify-end items-center">
		<a href="/perfil/editar" class="mt-3 px-6 py-2 font-ui font-medium text-xl bg-gris hover:bg-grisoscuro rounded-md">Editar Cuenta</a>
	</div>
	
	<div class="publicaciones-usuarie">
		<h2 class="my-6 font-titulo font-bold text-2xl lg:text-3xl text-center text-negro">Tus Publicaciones</h2>
		
		<?php if(count($usuarie->publicaciones) > 0): ?>
			<div class="mb-8 lg:grid lg:grid-cols-2 lg:gap-x-4 lg:gap-y-4">
				<?php $__currentLoopData = $usuarie->publicaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publicacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if (isset($component)) { $__componentOriginalaaa0207ed3c3fbf690996cb7f051cbc82523433d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Publicacion::class, ['tipo' => 'editable','publicacion' => $publicacion]); ?>
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
			<h3 class="my-3 font-ui font-medium text-grisoscuro text-center text-xl">Todavía no escribiste ninguna publicación.</h3>
			<div class="flex flex-row flex-nowrap justify-center items-center">
				<a href="/escribir" class="my-4 mx-auto px-6 py-2 font-ui font-medium text-blanco text-2xl bg-primario hover:bg-primariohover rounded-md">Escribir</a>
			</div>
		<?php endif; ?>
	</div>
	
	<?php else: ?>
	
	<div class="sin-perfil">
		<h3 class="my-3 font-ui font-medium text-grisoscuro text-center text-xl">Para ver tu perfil primero es necesario iniciar sesión.</h3>
		<div class="flex flex-row flex-nowrap justify-center items-center">
			<a href="/entrar" class="my-4 mx-auto px-6 py-2 font-ui font-medium text-blanco text-2xl bg-primario hover:bg-primariohover rounded-md">Entrar a tu Cuenta</a>
		</div>
	</div>
	
	<?php endif; ?>
</main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\AfterlifeNews\resources\views/paginas/perfil.blade.php ENDPATH**/ ?>