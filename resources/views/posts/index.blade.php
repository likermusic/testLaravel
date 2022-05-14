<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <a href="{{ route('posts.show', ['post'=> 1, 'title'=>'Post 1']) }}">Post 1</a>
            <a style="border: 1px solid #444;text-decoration:none;background:#eee" href="{{ route ('posts.edit', ['post'=>1])}}">Edit</a>
             | 
            <form style="display: inline-block" action="{{ route('posts.destroy', ['post'=>1]) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        </li>
        <li>
            <a href="{{ route('posts.show', ['post'=>2, 'title'=>'Post 2']) }}">Post 2</a>
            <a style="border: 1px solid #444;text-decoration:none;background:#eee" href="{{ route ('posts.edit', ['post'=>2])}}">Edit</a>
            | 
            <form style="display: inline-block" action="{{ route('posts.destroy', ['post'=>2]) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        </li>
        <li>
            <a href="{{ route('posts.show', ['post'=>3, 'title'=>'Post 3']) }}">Post 3</a>
            <a style="border: 1px solid #444;text-decoration:none;background:#eee" href="{{ route ('posts.edit', ['post'=>3])}}">Edit</a>
            | 
            <form style="display: inline-block" action="{{ route('posts.destroy', ['post'=>3]) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        </li>
    </ul>
</body>
</html>