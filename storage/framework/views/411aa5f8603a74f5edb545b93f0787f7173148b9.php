

<?php $__env->startSection('title'); ?>
Login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(url('js/login.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>
        
<?php $__env->startSection('content'); ?>
        <main>
            <h1>ACCEDI</h1>
            <form name="Form"  method="post">
                <?php echo csrf_field(); ?>
                <p class="errore">
                    <?php if($error == 'error1'): ?>
                        Riempi tutti i campi.
                    <?php elseif($error == 'error2'): ?>
                        Credenziali non valide.
                    <?php endif; ?>
                </p>
                <p>
                <label><input type="text" name="username"> Username</label>
                </p>
                <p>
                <label><input type="password" name="password"> Password</label>
                </p>
                <p>
                <label id="submitlabel"><input type="submit" value=""></label>
                </p>
                <div>Non hai un account? <a href="<?php echo e(url('registrazione')); ?>">Registrati</a></div>
            </form>
        </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.access', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/login.blade.php ENDPATH**/ ?>