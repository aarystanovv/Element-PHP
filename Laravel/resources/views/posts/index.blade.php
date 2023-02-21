<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All posts</title>
</head>
<body>
    <a href="{{ route('posts.create') }}">Go to Create Page</a>

    @foreach($allPosts as $onePost)
        <a href="{{route('posts.show', $onePost->id)}}"><h3>{{$onePost->title}}</h3></a>
        <p>{{$onePost->content}}</p>
{{--        <form action="{{route('posts.destroy', $onePost->id)}}" method="post">--}}
{{--            @csrf--}}
{{--            @method('DELETE')--}}
{{--            <button type="submit">Delete!!!</button>--}}
{{--        </form>--}}
    @endforeach
</body>
</html>
