<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/blog.css" type="text/css">
    <title>Blogs</title>
</head>
<body>
    <!-- {{ $posts }} -->
    @foreach($posts as $post)
        <div class="blog">
            <div>
                <p class="title">{{ $post->title }}</p>
            </div>
            <div>
                <p>{{ $post->body }}</p>
            </div>
        </div>
    @endforeach
</body>
</html>