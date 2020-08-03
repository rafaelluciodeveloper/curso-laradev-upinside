@extends('front.master.master')

@section('content')

    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
            style="background-image:url(../front/assets/images/img_bg_2.jpg); height: 200px"
            data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
    </header>


    @isset($posts)
        <div id="fh5co-blog">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Artigos Recentes</h2>
                        <p>Confira aqui nossos últimos artigos e video aulas!<br>Conteúdo exclusivo sobre o Laravel
                            FrameWork.</p>
                    </div>
                </div>
                <div class="row">
                    @foreach($posts as $post)
                        <div class="d-flex align-content-md-stretch col-12 col-md-6 col-lg-4 mb-4">
                            <div class="fh5co-blog animate-box">
                                <a href="{{route('article',$post->uri)}}"><img class="img-responsive"
                                                                               src="{{\Illuminate\Support\Facades\Storage::url(\App\Support\Cropper::thumb($post->cover,800,450))}}"
                                                                               alt=""></a>
                                <div class="blog-text">
                                    <h3><a href="{{route('article',$post->uri)}}">{{$post->title}}</a></h3>
                                    <span
                                        class="posted_on">{{date('d/m/y H:m:s', strtotime($post->created_at))}}</span>
                                    <span class="comment"><a href="">21<i
                                                class="icon-speech-bubble"></i></a></span>
                                    <p class="content">{{$post->subtitle}}</p>
                                    <div class="text-center">
                                        <a href="{{route('article',$post->uri)}}" class="btn btn-primary">Leia
                                            mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(($loop->index + 1) % 3 === 0 )
                            <div style="width: 100%; float: left; height: 1px;"></div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

    @endisset

    @include('front.includes.optin')

@endsection
