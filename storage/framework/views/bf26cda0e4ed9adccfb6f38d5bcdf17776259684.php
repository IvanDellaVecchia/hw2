

<?php $__env->startSection('title'); ?>
    Cerca Utente
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(url('js/likes.js')); ?>" defer></script>
    <script src="<?php echo e(url('js/searchUser.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form name="search" id="search">
        <label>
            <input type="text" name="user" placeholder="Cerca un utente">
        </label>
        <label>
            <input type="submit" value="Cerca">
        </label>
    </form>

    <div id="postContainer"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/searchUser.blade.php ENDPATH**/ ?>