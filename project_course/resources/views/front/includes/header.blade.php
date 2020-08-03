<nav class="fh5co-nav" role="navigation">

    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-right">

                    <p class="num">Ligue: {{ env('CLIENT_DATA_TELEPHONE') }}</p>

                    <ul class="fh5co-social">
                        <li>
                            <a href="{{ env('CLIENT_DATA_LINK_FACEBOOK') }}" target="_blank">
                                <i class="icon-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ env('CLIENT_DATA_LINK_TWITTER') }}" target="_blank">
                                <i class="icon-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ env('CLIENT_DATA_LINK_GITHUB') }}" target="_blank">
                                <i class="icon-github"></i>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="top-menu">
        <div class="container">
            <div class="row">

                <div class="col-xs-1">
                    <div id="fh5co-logo"><a href="{{ route('home') }}">Laravel<span>Developer</span></a></div>
                </div>

                <div class="col-xs-11 text-right menu-1">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('course') }}">O Curso</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('contact') }}">Contato</a></li>
                        <li class="btn-cta"><a href="#"><span>Login</span></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</nav>