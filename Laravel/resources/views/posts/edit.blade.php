<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a posts</title>
</head>
<body>

<a href="{{ route('posts.index') }}">Go to Index Page</a>

<form action="{{ route('posts.update', $post -> id) }}" method="post">
    @csrf
    @method('PUT')
    Title: <input type="text" name = "title" value="{{$post->title}}"> <br>
    Content: <textarea name="content" cols="30" rows="10">{{$post->content}}</textarea>
    <button type="submit">Update post</button>
</form>
</body>
</html>
