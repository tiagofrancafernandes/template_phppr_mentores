<!doctype html>
<html lang="pt">

<head>
    @yield('after_open_head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>@yield('title', env('APP_NAME', 'Projeto Mentoria'))</title>
    {{--  <base href="https://getbootstrap.com/docs/4.5/examples/album/">  --}}

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <!-- Bootstrap core CSS -->
    {{--  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">  --}}
    <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="mask-icon" href="{{ asset('graduation-cap.svg') }}" color="#563d7c">
    <link rel="icon" href="{{ asset('graduation-cap.svg') }}" sizes="32x32" type="image/svg+xml">
    <link rel="icon" href="{{ asset('graduation-cap.svg') }}" sizes="16x16" type="image/svg+xml">
    <link rel="icon" href="{{ asset('graduation-cap.svg') }}">
    <link rel="manifest" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/manifest.json">
    <meta name="msapplication-config" content="https://getbootstrap.com/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
        .before_content{
              min-height: 4em !important;
        }
        
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        @media (max-width: 768px) {
            li.nav-item.btn {
                    margin-top: 5px;
            }
        }


        /* CUSTOMIZE THE CAROUSEL
        -------------------------------------------------- */

        /* Carousel base class */
        .carousel {
            margin-bottom: 4rem;
        }

        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
            bottom: 3rem;
            z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
            height: 32rem;
        }

        .carousel-item>img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            height: 32rem;
        }
    </style>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('phppr_mentoria/css/portal_style.css') }}">
    @yield('before_close_head')
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">            
            <a href="{{ route('mentoria.home') }}" class="navbar-brand d-flex align-items-center">
                <i class="fa fa-graduation-cap"></i> 
                <strong>{{ env('APP_NAME', 'Projeto Mentoria') }}</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('mentoria.home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item btn btn-sm btn-outline-success ml-1">
                  <a class="nav-link" href="#">Preciso de um mentor</a>
                </li>
                <li class="nav-item btn btn-sm btn-outline-primary ml-1">
                  <a class="nav-link" href="#">Quero ser um mentor</a>
                </li>
              </ul>
              <form class="form-inline mt-2 mt-md-0 ml-1" action="{{ route('mentoria.pesquisa') }}">
                <input type="hidden" name="search_by" value="menthors">
                <input name="menthor_name" class="form-control mr-sm-2" type="text" placeholder="Pesquise um mentor" aria-label="Pesquisar" required>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
              </form>
            </div>
          </nav>
    </header>

    <div class="container-box p-3 before_content">
    </div>

    @yield('content')

    <div class="container-box p-3 m-3 pt-3">
        <h3>Nuvem de Techs</h3>
        <div class="text-center">
        @for ($i = 0; $i < 8; $i++)
            <a href="#php-from_tech_cloud" class="badge badge-primary">php</a>
            <a href="#python-from_tech_cloud" class="badge badge-secondary">python</a>
            <a href="#html5-from_tech_cloud" class="badge badge-success">html5</a>
            <a href="#css-from_tech_cloud" class="badge badge-danger">css</a>
            <a href="#php7-from_tech_cloud" class="badge badge-primary">php7</a>
            <a href="#javascript-from_tech_cloud" class="badge badge-warning">javascript</a>
            <a href="#java-from_tech_cloud" class="badge badge-info">java</a>
            <a href="#laravel-from_tech_cloud" class="badge badge-danger">laravel</a>
            <a href="#shell-from_tech_cloud" class="badge badge-light">shell script</a>
            <a href="#hack-from_tech_cloud" class="badge badge-dark">hack</a>
        @endfor
        </div>
    </div>

    <hr class="m-3">

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Subir</a>
            </p>
            <p>PHPPR {{ date('Y') }}&copy; | Projeto de mentoria da Comunidade PHP PR</p>
            <p>Layout by <a href="https://getbootstrap.com/">Bootstrap</a> | 
                <a href="#contributors" class="btn-link" data-toggle="modal" data-target="#contributorsModal">Ver colaboradores deste projeto</a>
            </p>

            <!-- Modal -->
            <div class="modal fade" id="contributorsModal" tabindex="-1" role="dialog" aria-labelledby="contributorsModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="contributorsModalLabel">Colaboradores Deste Projeto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <ul id="nav">
                                <li class="item1"><a href="">Fulano 1</a></li>
                                <li class="item2"><a href="">Fulano 2</a></li>
                                <li class="item3"><a href="">Fulano 3</a></li>
                                <li class="item4"><a href="">Fulano 4</a></li>
                                <li class="item5"><a href="">Fulano 5</a></li>
                                <li class="item6"><a href="">Fulano 6</a></li>
                                <li class="item7"><a href="">Fulano 7</a></li>
                                <li class="item8"><a href="">Fulano 8</a></li>
                                <li class="item9"><a href="">Fulano 9</a></li>
                                <li class="item10"><a href="">Fulano 10</a></li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous">
    </script>
    <script src="https://use.fontawesome.com/releases/v5.13.1/js/all.js" data-auto-replace-svg="nest"></script>
</body>

</html>