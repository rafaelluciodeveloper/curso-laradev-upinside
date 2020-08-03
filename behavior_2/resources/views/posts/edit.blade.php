<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="container my-5">
<form action="{{ route('posts.update', ['id' => $post->id])}}" method="post" autocomplete="off">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Título:</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title}}">
        </div>

        <div class="form-group">
            <label for="subtitle">Subtítulo:</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $post->subtitle}}">
        </div>

        <div class="form-group">
            <label for="description">Descrição:</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $post->description}}">
        </div>

        <button class="btn btn-primary">Enviar!</button>
    </form>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
