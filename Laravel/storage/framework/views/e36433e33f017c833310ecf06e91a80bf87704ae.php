<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All posts</title>
</head>
<body>
    <a href="<?php echo e(route('posts.create')); ?>">Go to Create Page</a>

    <?php $__currentLoopData = $allPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $onePost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('posts.show', $onePost->id)); ?>"><h3><?php echo e($onePost->title); ?></h3></a>
        <p><?php echo e($onePost->content); ?></p>





    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php /**PATH C:\OSPanel\domains\lara.loc\resources\views/posts/index.blade.php ENDPATH**/ ?>