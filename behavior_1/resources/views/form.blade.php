<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario :: Teste de Rotas</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<div class="container my-5">
    <form action="" autocomplete="off">
        <div class="form-group">
            <label for="firstt_name">Primeiro Nome</label>
            <input type="text" name="first_name" id="first_name" class="form-control" value="Rafael">
        </div>
        <div class="form-group">
            <label for="firstt_name">Segundo Nome</label>
            <input type="text" name="last_name" id="last-name" class="form-control" value="Lucio">
        </div>
        <div class="form-group">
            <label for="firstt_name">E-mail</label>
            <input type="text" name="email" id="email" class="form-control" value="rafaelluciopadrao@hotmail.com">
        </div>
        <button type="submit" class="btn btn-primary">Enviar!</button>
    </form>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
