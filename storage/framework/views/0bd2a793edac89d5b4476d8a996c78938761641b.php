<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Sora:wght@400&family=Acme" rel="stylesheet">
    <link rel="icon" href="../public/immagini/Images/Zampa.png">
    <link rel="stylesheet" href="<?php echo e(url('css/access.css')); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <script>
        const BASE_URL = "<?php echo e(url('/')); ?>";
    </script>
    <?php echo $__env->yieldContent('script'); ?>
</head>
<body>

    <article>
        <section>
            <img src="../public/immagini/Images/Logo.png" alt="Logo">
        </section>

        <?php echo $__env->yieldContent('content'); ?>

    </article>
</body>
</html><?php /**PATH C:\xampp\htdocs\example-app\resources\views/layouts/access.blade.php ENDPATH**/ ?>