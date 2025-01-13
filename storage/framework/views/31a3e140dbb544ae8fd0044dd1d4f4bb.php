

<?php $__env->startSection('content'); ?>


    <div class="container mt-4">
        <h2>APP NOTICIAS - 2025</h2>
        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-body">
                        <a href="<?php echo e(route('create')); ?>" class="btn btn-primary">
                            <i class="fa-solid fa-circle-plus"></i> Agregar Noticia
                        </a>

                        <hr>

                        <table class="table table-sm table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Titulo</th>
                                    <th>Contenido</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    
                                    <td><?php echo e($item->id); ?></td> 
                                    <td><?php echo e($item->tittle); ?></td>
                                    <td><?php echo e($item->content); ?></td>
                                    <td><?php echo e($item->status); ?></td>
                                    <td> 
                                        <form action="<?php echo e(route( 'destroy', $item->id )); ?>" method="post" class="">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('UPDATE'); ?>

                                            <a class="btn btn-info" href="<?php echo e(route('show', $item->id)); ?>">
                                                <i class="fa-solid fa-rectangle-list"></i> Mostrar
                                            </a>
                                            <a class="btn btn-warning" href="<?php echo e(route('edit', $item->id)); ?>">
                                                <i class="fa-solid fa-pen-to-square"></i> Editar
                                            </a>
                                            <button class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i> Dar de Baja
                                            </button> 
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="3">No hay registros</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-end">
                            <?php echo e($items->links()); ?>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\exam\app_noticias\resources\views/modules/post/index.blade.php ENDPATH**/ ?>