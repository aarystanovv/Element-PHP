<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All posts</title>
</head>
<body>
<a href="{{ route('posts.index') }}">Go to Index Page</a>

<h3>{{$post->title}}</h3>
<p>{{$post->content}}</p>

<a href="{{route('posts.edit', $post->id)}}">Edit</a>
</body>
</html>
