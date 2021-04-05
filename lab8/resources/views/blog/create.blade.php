<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/form.css" type="text/css">
    <title>Write post</title>
</head>
<body>
    <form class="post-form" method="POST" action="{{ route('add-blog') }}">
        @csrf
        <input id="title" type="text" name="title" placeholder="Write title">
        <textarea id="post" name="body"></textarea>
        <button id="btn" type="submit">Post</button>
    </form>
</body>
</html>