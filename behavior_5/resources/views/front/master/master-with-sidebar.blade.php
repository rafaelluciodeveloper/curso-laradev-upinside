<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraDev - @yield('title')</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @hasSection('css')
        @yield('css')
    @endif
</head>
<body>

@include('front.includes.header')

<div class="container py-3">
    <div class="row">
        <div class="col-8">
            @yield('content')
        </div>
        <div class="col-4">
            @section('sidebar')
                <h1>Ultimos Postados</h1>
                {{--
                            @yield('sidebar')
                --}}
                <ul>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Consequuntur culpa esse incidunt qui.</li>
                    <li>Aperiam atque officia quisquam totam?</li>
                    <li>Ex fugit pariatur similique soluta?</li>
                    <li>Consequuntur doloribus et maiores provident.</li>
                </ul>
            @show
        </div>
    </div>
</div>

@include('front.includes.footer')

<script src="{{ mix('/js/app.js') }}"></script>
@hasSection('js')
    @yield('js')
@endif
</body>
</html>
