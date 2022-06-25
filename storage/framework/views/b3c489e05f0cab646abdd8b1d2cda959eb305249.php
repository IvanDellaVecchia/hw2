

<?php $__env->startSection('title'); ?>
    Crea un nuovo post
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(url('js/NewPost.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section id="CentralBarN">
        <div class="create">

        <form name="Form" method="post" enctype="multipart/form-data" autocomplete="off">
            <?php echo csrf_field(); ?>
            <label>
                Inserisci un'immagine:<br>
                <div class="error"><?php if($errImg): ?> <?php echo e($errImg); ?> <?php endif; ?></div>
                <input type='file' name='postImg' accept='.jpg, .jpeg, image/gif, image/png' id="postImg">
            </label>
            <label>
                Inserisci una descrizione:<br>
                <textarea name="description"></textarea>
            </label>
            <label>
                <input type="submit" value="Pubblica" id="SubmitPost">
            </label>
        </form>

        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/newpost.blade.php ENDPATH**/ ?>