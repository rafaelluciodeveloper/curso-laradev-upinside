@extends('front.master.master')

@section('content')

    <header id="fh5co-header" class="fh5co-cover"
            style="background-image:url(front/assets/images/bg_1.jpeg); background-position: center bottom !important; background-attachment: fixed !important;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>Aprenda a Trabalhar com o <span style="color: #f4645f">FrameWork PHP</span> mais
                                utilizado do Mundo</h1>
                            <h2>Com a metodologia e certificado da <a href="https://www.upinside.com.br"
                                                                      target="_blank">UpInside Treinamentos</a></h2>
                            <p><a class="btn btn-primary btn-lg btn-learn" href="{{ route('course') }}">Conhecer o
                                    Curso</a> <a
                                    class="btn btn-primary btn-lg popup-vimeo btn-video"
                                    href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i>
                                    O que falam de nós</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="fh5co-counter" class="fh5co-counters">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center animate-box">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="13" data-speed="3000"
                          data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Módulos</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="82" data-speed="3000"
                          data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Aulas</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="16" data-speed="3000"
                          data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Horas</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="500" data-speed="3000"
                          data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Alunos</span>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-explore" class="fh5co-bg-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Laravel Developer</h2>
                    <p>Um treinamento completo do zero ao developer para você aprender e se especializar no Laravel e
                        abrir as portas de um mercado repleto de oportunidades!</p>
                </div>
            </div>
        </div>
        <div class="fh5co-explore fh5co-explore1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-5 animate-box">
                        <img class="img-responsive" src="front/assets/images/work_1.png" alt="work">
                    </div>
                    <div class="col-md-4 col-md-pull-8 animate-box">
                        <div class="mt">
                            <h3>Vem aprender com a gente!</h3>
                            <p>Confira a grade completa de aulas e aproveite para assitir algumas delas para conhecer
                                nossa metodologia.</p>
                            <ul class="list-nav">
                                <li><i class="icon-check2"></i>Suporte Exclusivo um a um</li>
                                <li><i class="icon-check2"></i>Conteúdo 100% online</li>
                                <li><i class="icon-check2"></i>Material de Apoio</li>
                            </ul>
                            <p><a class="btn btn-primary btn-lg popup-vimeo btn-video"
                                  href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i>
                                    Assistir uma aula</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fh5co-explore">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-pull-1 animate-box">
                        <img class="img-responsive" src="front/assets/images/work_1.png" alt="work">
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="mt">
                            <div>
                                <h4><i class="icon-trophy"></i>Certificado de Conclusão</h4>
                                <p>Certificado da Escola eleita a melhor do Segmento pela LAQI com reconhecimento em 17
                                    países da América Latina</p>
                            </div>
                            <div>
                                <h4><i class="icon-add-user"></i>Recomendações da Comunidade</h4>
                                <p>Trabalhe de forma mais ágil com o framework utilizando boas práticas e PSR's para ter
                                    um código padronizado.</p>
                            </div>
                            <div>
                                <h4><i class="icon-shield"></i>Projetos Reais e Soluções Reais</h4>
                                <p>Desenvolva 4 projetos para aplicar o conhecimento adquirido em uma solução de
                                    verdade.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-project">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Projetos entregue pelos Alunos</h2>
                    <p>Veja alguns projetos de alunos que entregaram soluções usando o conhecimento obtido através do
                        treinamento</p>
                </div>
            </div>
        </div>
        <div class="container-fluid proj-bottom">
            <div class="row">
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="front/assets/images/project-1.jpg"
                                     alt="Free HTML5 Website Template by FreeHTML5.co"
                                     class="img-responsive">
                        <h3>Web Master</h3>
                        <span>View Course</span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="front/assets/images/project-2.jpg"
                                     alt="Free HTML5 Website Template by FreeHTML5.co"
                                     class="img-responsive">
                        <h3>Virtual Assistant</h3>
                        <span>View Course</span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="front/assets/images/project-3.jpg"
                                     alt="Free HTML5 Website Template by FreeHTML5.co"
                                     class="img-responsive">
                        <h3>Read Bible</h3>
                        <span>View Course</span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="front/assets/images/project-9.jpg"
                                     alt="Free HTML5 Website Template by FreeHTML5.co"
                                     class="img-responsive">
                        <h3>Programming</h3>
                        <span>View Course</span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="front/assets/images/project-5.jpg"
                                     alt="Free HTML5 Website Template by FreeHTML5.co"
                                     class="img-responsive">
                        <h3>Technician</h3>
                        <span>View Course</span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="front/assets/images/project-6.jpg"
                                     alt="Free HTML5 Website Template by FreeHTML5.co"
                                     class="img-responsive">
                        <h3>Photography</h3>
                        <span>View Course</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="features">
                    <div class="col-md-4 animate-box text-center">
                        <h4>Passo a passo e Plano de Carreira</h4>
                        <p>Mais do que aprender a trabalhar com o framework, aqui você vai ter um mapa para entrar no
                            mercado já faturando.</p>
                    </div>
                    <div class="col-md-4 animate-box text-center">
                        <h4>3 cursos a mais para Complementar</h4>
                        <p>Para somar nas suas skills e dominar todo o cenário, você conta com mais 3 cursos completos.
                            Todos com suporte!</p>
                    </div>
                    <div class="col-md-4 animate-box text-center">
                        <h4>30 Dias de Garantia</h4>
                        <p>Se em 30 dias você não estiver passado de 30% de progresso no curso e decidir que o curso não
                            é para você... Nós devolvemos seu dinheiro.</p>
                    </div>
                </div>
                <div class="col-md-12 text-center animate-box">
                    <p><a class="btn btn-primary btn-lg btn-learn" href="https://www.upinside.com.br/laradev">Garanta
                            agora a sua vaga no Curso</a></p>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-steps">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Os 4 Pilares do Zero ao Developer</h2>
                    <p>Um passo a passo para você seguir e ter conhecimento sobre a ferramenta para desenvolver soluções
                        personalizadas para atender a necessidade de seus clientes.</p>
                </div>
            </div>

            <div class="row bs-wizard animate-box" style="border-bottom:0;">

                <div class="col-xs-3 bs-wizard-step complete">
                    <div class="text-center bs-wizard-stepnum"><h4>Introdução</h4></div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"><p>Conheça o framework</p></div>
                </div>

                <div class="col-xs-3 bs-wizard-step active"><!-- complete -->
                    <div class="text-center bs-wizard-stepnum"><h4>Primeiro Contato</h4></div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"><p>É Fácil mas não é Simples</p></div>
                </div>

                <div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
                    <div class="text-center bs-wizard-stepnum"><h4>Comportamento</h4></div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"><p>Conhecendo todas as peças</p></div>
                </div>

                <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
                    <div class="text-center bs-wizard-stepnum"><h4>Projeto Prático</h4></div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"><p>Aplicando tudo o que aprendeu</p></div>
                </div>
            </div>

        </div>
    </div>

    @include('front.includes.testimonials')

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

                        <div class="col-lg-4 col-md-4 ">
                            <div class="fh5co-blog animate-box">
                                <a href="{{route('article',$post->uri)}}"><img class="img-responsive"
                                                                               src="{{\Illuminate\Support\Facades\Storage::url(\App\Support\Cropper::thumb($post->cover,800,450))}}"
                                                                               alt=""></a>
                                <div class="blog-text">
                                    <h3><a href="{{route('article',$post->uri)}}">{{$post->title}}</a></h3>
                                    <span class="posted_on">{{date('d/m/y H:m:s', strtotime($post->created_at))}}</span>
                                    <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                                    <p>{{$post->subtitle}}</p>
                                    <a href="{{route('article',$post->uri)}}" class="btn btn-primary">Leia mais</a>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    @endisset


    @include('front.includes.optin')

@endsection
