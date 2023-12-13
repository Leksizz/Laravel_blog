<!doctype html>
@extends('template')
@section('content')
    <h1 class="text-center">Добавление статьи на сайте</h1>
    <div class="col-sm-6 mx-auto">
        <form action="/addArticle" method="post">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" name="title" placeholder="Заголовок статьи">
            </div>
            <div class="mb-3">
                <textarea name="article" class="form-control" placeholder="Статья"></textarea>
            </div>
            <div class="mb-3">
                <input name="author" type="text" class="form-control" placeholder="Автор">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" value="Отправить">
            </div>
        </form>
    </div>
@endsection
