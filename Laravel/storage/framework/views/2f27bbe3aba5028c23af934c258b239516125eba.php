<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a posts</title>
</head>
<body>

    <a href="<?php echo e(route('posts.index')); ?>">Go to Index Page</a>

    <form action="<?php echo e(route('posts.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        Title: <input type="text" name = "title"> <br>
        Content: <textarea name="content" cols="30" rows="10"></textarea>
        <button type="submit">Save a post</button>
    </form>
</body>
</html>
<?php /**PATH C:\OSPanel\domains\lara.loc\resources\views/posts/create.blade.php ENDPATH**/ ?>