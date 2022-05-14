<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts</title>
</head>
<body>
    <?php //dump($_GET) ?>
    {{-- @dump($_POST) --}}
    {{-- <form action="contactsHandler" method="post" target="_blank"> --}}
        {{-- <form action="{{route('contacts')}}" method="post">
        @csrf
        <input type="text" name="name">
        <input type="text" name="password">
        <input type="submit">
    </form> --}}


    <form action="{{route('contacts')}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="name">
        <input type="text" name="password">
        <input type="submit">
    </form> 
</body>
</html>