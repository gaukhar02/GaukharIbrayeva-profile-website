<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <title>Create new client</title>



</head>
<body>
      <form method="POST" action="{{route('add-client')}}">
           @csrf
          <input type="text" name="name" placeholder="name">
           <input type="text" name="surname" placeholder="surname">
           <input type="text" name="age" placeholder="age">
           <button type ="submit">Create</button>
      </form>
</body>
</html>
