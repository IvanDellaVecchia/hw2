

<?php $__env->startSection('title'); ?>
    Il mio profilo
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(url('js/personal.js')); ?>" defer></script>
    <script src="<?php echo e(url('js/likes.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div id="personal">
            <img src="" alt="propic">
            <div>
                <p class="AName"></p>
                <p class="AUser"></p>
                <button id="profileButton">Cambia la foto profilo</button>
                <a href="<?php echo e(url('eliminaUtente')); ?>">
                    <button class="elimina">Elimina account</button>
                </a>
        </div>
    </div>

    <form name="profile" method=post class="hidden" id="profileForm" enctype="multipart/form-data" autocomplete="off">
        <?php echo csrf_field(); ?>
        <label>
            Inserisci un'immagine:<br>
            <div class="error"><?php if($errPro): ?> <?php echo e($errPro); ?> <?php endif; ?></div>
            <input type='file' name='profileImg' accept='.jpg, .jpeg, image/gif, image/png' id="profileImg">
        </label>
        <label>
            <input type="submit" value="Inserisci" id="profileSubmit">
        </label>
    </form>

    <h1>I MIEI POST</h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/personal.blade.php ENDPATH**/ ?>