<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>EDIT POST</h1>
    <form action="{{ route('posts.update', ['post'=>$id]) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="Post {{$id}}">
        <input type="text" hidden name="oldValue" value="Post {{$id}}">
        <input type="submit" value="Save">
    </form>
</body>
</html>