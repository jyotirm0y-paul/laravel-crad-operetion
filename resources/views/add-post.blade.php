<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Post</title>
</head>
<body>
    @if (Session::has('post_add'))
      <span>{{Session::get('post_add')}}</span>
    @endif
<form action="{{route('save.post')}}" method="post">
    @csrf
   Post : <br> <input type="text" name="name" id="" value=""><br>
   Description : <br> <textarea name="description" id="" cols="30" rows="10"></textarea><br>
   <input type="submit" value="Submit">
</form>
</body>
</html>
