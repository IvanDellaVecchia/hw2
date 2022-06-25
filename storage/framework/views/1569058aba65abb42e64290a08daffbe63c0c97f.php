<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../public/immagini/Images/Zampa.png">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Sora:wght@400&family=Acme" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(url('css/navigation.css')); ?>">
    <script>
        const BASE_URL = "<?php echo e(url('/')); ?>";
    </script>
    <script src="<?php echo e(url('js/dogApi.js')); ?>" defer></script>
    <?php echo $__env->yieldContent('script'); ?>
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>
    <article>
        <section id="LeftBar">
            <div>
                <img src="../public/immagini/Images/Logo.png" alt="Logo" id="Logo">
                <a href="<?php echo e(url('home')); ?>"><p>Home</p></a>
                <a href="<?php echo e(url('personal')); ?>"><p>Il mio profilo</p></a>
                <a href="<?php echo e(url('searchUser')); ?>"><p>Cerca utente</p></a>
                <a href="<?php echo e(url('logout')); ?>"><p>Logout</p></a>
            </div>
        </section>

        <section id="CentralBar">
            <?php echo $__env->yieldContent('content'); ?>
        </section>

        <section id="RightBar">
            <a href="<?php echo e(url('newpost')); ?>" id="CreaPost">
                <button>Crea un nuovo Post</button>
            </a>
            <button id="CreaFoto">Genera foto</button>
            <div id="imgContainer"></div>
        </section>
    </article>
</body>
</html><?php /**PATH C:\xampp\htdocs\example-app\resources\views/layouts/navigation.blade.php ENDPATH**/ ?>