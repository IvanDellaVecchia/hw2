

<?php $__env->startSection('title'); ?>
    Registrati
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(url('js/SignUp.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>
        
<?php $__env->startSection('content'); ?>

        <main>
            <h1>REGISTRATI</h1>
            <form name="Form"  method="post">
                <?php echo csrf_field(); ?>
                <p class="errore">
                    <?php if($errEmpty): ?>
                        <?php echo e($errEmpty); ?> 
                    <?php endif; ?>
                </p>

                <div id="nome">
                    <label><input type="text" name="nome" value="<?php echo e(old('nome')); ?>"> Nome</label>
                    <div class="errore"></div>
                </div>
                <div id ="cognome">
                    <label><input type="text" name="cognome" value="<?php echo e(old('cognome')); ?>"> Cognome</label>
                    <div class="errore"></div>
                </div>
                <div id="email">
                    <label><input type="text" name="email" value="<?php echo e(old('email')); ?>"> Email</label>
                    <div class="errore"><?php if($errEmail): ?> <?php echo e($errEmail); ?> <?php endif; ?></div>
                </div>
                <div id="username">
                    <label><input type="text" name="username"> Username</label>
                    <div class="errore"><?php if($errUser): ?> <?php echo e($errUser); ?> <?php endif; ?></div>
                </div>
                <div id="password">
                    <label><input type="password" name="password"> Password</label>
                    <div class="errore"><?php if($errPass): ?> <?php echo e($errPass); ?> <?php endif; ?></div>
                </div>
                <p>
                <label id="submitlabel"><input type="submit" value=""></label>
                </p>
                <div>Hai già un account? <a href="<?php echo e(url('login')); ?>">Accedi</a></div>
            </form>
        </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.access', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/registrazione.blade.php ENDPATH**/ ?>