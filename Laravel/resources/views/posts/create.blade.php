<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a posts</title>
</head>
<body>

    <a href="{{ route('posts.index') }}">Go to Index Page</a>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        Title: <input type="text" name = "title"> <br>
        Content: <textarea name="content" cols="30" rows="10"></textarea>
        <button type="submit">Save a post</button>
    </form>
</body>
</html>
