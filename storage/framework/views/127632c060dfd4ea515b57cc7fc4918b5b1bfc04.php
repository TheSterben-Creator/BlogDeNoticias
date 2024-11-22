<div class="my-4 lg:my-0 flex flex-row flex-nowrap gap-3 rounded-lg bg-primariopastel">
    <a href="/publicaciones/<?php echo e($publicacion->id); ?>" class="basis-1/4 flex-none border-r-2 border-negro rounded-l-lg">
        <img src="<?php echo e($publicacion->portada != null ? "/storage/publicaciones/" . $publicacion->portada : "/assets/sinportada.png"); ?>" alt="Imagen de publicación" class="h-full w-full object-cover rounded-l-lg hover:brightness-105" >
    </a>
    <div class="grow py-2 pr-1 flex flex-col flex-nowrap justify-around items-start">
        <a class="font-titulo font-medium text-negro hover:text-negrohover text-lg md:text-xl" href="/publicaciones/<?php echo e($publicacion->id); ?>"><?php echo e($publicacion->titulo); ?></a>
        <div class="flex flex-row flex-wrap justify-start items-center gap-2">
            <?php $__currentLoopData = $publicacion->categorias()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a class="font-cuerpo text-grisoscuro hover:text-negrohover text-lg md:text-xl" href="/categorias/<?php echo e($categoria->id); ?>">#<?php echo e($categoria->nombre); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="my-1 flex flex-row flex-nowrap justify-start items-center">
            <div class="w-8 h-8 md:w-10 md:h-10">
                <img src="<?php echo e($publicacion->autore()->first()->imagen != null ? "/storage/usuaries/" . $publicacion->autore()->first()->imagen : "/assets/usuariedefault.png"); ?>" alt="<?php echo e($publicacion->autore()->first()->nombre); ?>" class="rounded-full ring-offset-2 ring-4 ring-grisoscuro" >
            </div>
            <p class="ml-3 font-cuerpo text-negro text-lg md:text-xl">por <?php echo e($publicacion->autore()->first()->nombre); ?></p>
        </div>
        <p class="mt-2 font-ui text-grisoscuro text-lg md:text-xl"><?php echo e($publicacion->withCount("meGusta")->where("id", $publicacion->id)->first()->me_gusta_count); ?> me gusta</p>
    </div>
    <?php switch($tipo):
    case ("editable"): ?>
    <div class="basis-1/6 grow-0 shrink-0 flex flex-col flex-nowrap justify-around items-center">
        <a href="/publicaciones/<?php echo e($publicacion->id); ?>/editar" class="">
            <i class="p-1 bx bxs-pencil text-4xl text-blanco bg-editar hover:bg-editarhover rounded-lg"></i>
        </a>
        <form action="/publicaciones/<?php echo e($publicacion->id); ?>" method="POST">
            <?php echo method_field('DELETE'); ?>
            <?php echo csrf_field(); ?>
            <button type="submit" class="">
                <i class="p-1 bx bxs-trash-alt text-4xl text-blanco bg-eliminar hover:bg-eliminarhover rounded-lg"></i>
            </button>
        </form>
    </div>
    <?php break; ?>
    
    <?php case ("guardable"): ?>
    <div class="basis-1/6 grow-0 shrink-0 flex flex-col flex-nowrap justify-center items-center">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="publicacion-id" value="<?php echo e($publicacion->id); ?>">
        <button class="boton-desguardar">
            <i class="p-1 bx bxs-bookmark-minus text-4xl text-blanco bg-guardar hover:bg-guardarhover rounded-lg"></i>
        </button>
    </div>
    <?php break; ?>
    
    <?php case ("normal"): ?>
    <?php default: ?>
    
    <?php endswitch; ?>
    
</div><?php /**PATH C:\wamp64\www\AfterlifeNews\resources\views/components/publicacion.blade.php ENDPATH**/ ?>