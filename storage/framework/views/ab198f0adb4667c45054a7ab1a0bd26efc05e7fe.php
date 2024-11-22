<?php $__env->startSection("titulo", "Iniciar Sesión"); ?>

<?php $__env->startSection('contenido'); ?>
<h1 class="my-6 font-titulo font-bold text-center text-negro text-3xl">Iniciar Sesión</h1>
<form method="POST" class="lg:max-w-screen-sm lg:mx-auto px-4 pb-6 flex flex-col flex-nowrap gap-10">
	<?php echo csrf_field(); ?>
	<input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo e(old("nombre")); ?>" class="bg-fondo font-ui text-2xl border-b-[3px] border-gris">	
	<input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" class="bg-fondo font-ui text-2xl border-b-[3px] border-gris">
	
	<div class="flex flex-row flex-nowrap justify-around items-center">
		<a href="/registrarse" class="mt-3 px-6 py-2 font-ui font-medium text-2xl bg-gris hover:bg-grisoscuro hover: rounded-md">Registate</a>
		<button type="submit" class="mt-3 px-6 py-2 font-ui font-medium text-blanco text-2xl bg-primario hover:bg-primariohover rounded-md">Entrar</button>
	</div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\AfterlifeNews\resources\views/paginas/entrar.blade.php ENDPATH**/ ?>