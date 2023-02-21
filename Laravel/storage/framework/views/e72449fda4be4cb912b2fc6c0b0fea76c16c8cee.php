<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All posts</title>
</head>
<body>
<a href="<?php echo e(route('posts.index')); ?>">Go to Index Page</a>

<h3><?php echo e($post->title); ?></h3>
<p><?php echo e($post->content); ?></p>

<a href="<?php echo e(route('posts.edit', $post->id)); ?>">Edit</a>
</body>
</html>
<?php /**PATH C:\OSPanel\domains\lara.loc\resources\views/posts/show.blade.php ENDPATH**/ ?>