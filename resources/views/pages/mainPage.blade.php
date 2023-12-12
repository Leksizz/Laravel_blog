<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container my-5">
    @foreach($articles as $article)
        <a href="/blog/{{$article->id}}" class="h3">{{$article->title}}</a>
        <div>{{$article->content}}</div>
        <p>{{$article->author}}</p>
        <hr>
    @endforeach
</div>
</body>
</html>
