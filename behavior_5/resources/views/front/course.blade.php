@extends('front.master.master-with-sidebar')

@section('title','O Melhor Curso de Laravel do Brasil')

@section('sidebar')
    @parent

    <h1>Listagem de Artigos</h1>
    <ul>
        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci?</li>
        <li>Adipisci culpa facilis libero nulla repellat, rerum sequi tenetur voluptatibus!</li>
        <li>Adipisci assumenda delectus molestias nam quisquam reprehenderit. Aut, blanditiis incidunt!</li>
    </ul>
@endsection

@section('content')
<h1>Curso</h1>
@endsection

@section('js')
    <script>
        alert('teste');
    </script>
@endsection
