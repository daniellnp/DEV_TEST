

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Registro de email')); ?></div>

                <div class="card-body">
                    

                   <h1> Sr(a) <?php echo e($contato->name); ?>  <?php echo e(__('Bem Vindo!')); ?></h1>
                    <br/>
                    <?php echo e(__('Seu contato foi Registrado com Sucesso!')); ?>

                   
                   
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\dev\teste\resources\views/mail.blade.php ENDPATH**/ ?>