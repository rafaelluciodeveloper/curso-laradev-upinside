@extends('front.master.master')

@section('content')

    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
            style="background-image:url(front/assets/images/img_bg_2.jpg); height: 200px"
            data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
    </header>

    <div style="clear:both">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 style="padding: 100px 0px 80px 0px;">Curso</h1>
                </div>
            </div>
        </div>
    </div>

    @include('front.includes.optin')

@endsection