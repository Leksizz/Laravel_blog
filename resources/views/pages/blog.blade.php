@extends('template')
@section('content')
    <h2>{{$article->title}}</h2>
    <div>{{$article->content}}</div>
    <p>{{$article->author}}</p>
    @foreach($comments as $comment)
        <hr>
        <div>{{$comment->comment}}</div>
    @endforeach
    <form action="/addComment" method="post">
        @csrf
        <input type="hidden" name="articleId" value="{{$article->id}}">
        <div class="mb-3">
            <textarea name="comment" class="form-control" >Комментарий</textarea>
        </div>
        <div class="mb-3">
            <input type="submit" class="form-control btn btn-primary" value="Коммент">
        </div>
    </form>
@endsection
