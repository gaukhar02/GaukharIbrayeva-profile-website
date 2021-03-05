<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <title>Create new post</title>



</head>
<body>
      <form method="POST" action="{{route('add-post')}}">
           @csrf
           <input type="text" name="title" placeholder="title">
           <input type="text" name="body" placeholder="body">
           <button type ="submit">Send</button>
      </form>
</body>
</html>
