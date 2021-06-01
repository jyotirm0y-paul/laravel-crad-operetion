<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Post</title>
</head>
<body>
    @if (Session::has('post_update'))
      <span>{{Session::get('post_update')}}</span>
    @endif
<form action="{{route('post.update')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$post->id}}" />
   Post : <br> <input type="text" name="name" id="" value="{{$post->name}}"><br>
   Description : <br> <textarea name="description" id="" cols="30" rows="10">{{$post->description}}</textarea><br>
   <input type="submit" value="Submit">
</form>
</body>
</html>
