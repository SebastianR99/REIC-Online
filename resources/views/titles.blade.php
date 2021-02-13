<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>REIC Online</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Law Firm Website Template" name="keywords">
        <meta content="Law Firm Website Template" name="description">

         <!-- Favicon -->
        <link href="{{ url('/assets/img/favicon.ico') }}" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href=".{{ url('/assets/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ url('/assets/lib//owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ url('/assets/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <img style="margin-top: 10px; max-width: 100px; max-height: 80px;" src="{{ url('/assets/img/reic3.png') }}" alt="Logo">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <h1>REIC</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="{{ url('/') }}" class="nav-item nav-link active">Inicio</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Ley 842 de 2003</a>
                                    <div class="dropdown-menu">
                                        <a href="{{ url('/titles') }}" class="dropdown-item">Títulos de la ley</a>
                                        <a href="{{ url('/complete') }}" class="dropdown-item">Ley completa</a>
                                    </div>
                                </div>
                                <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
                            </div>
                            @if(Auth::check())
                            <div class="ml-auto">
                                <a class="btn" href="{{ url('/logout')}}">Logout</a>
                                <a class="btn" href="{{ url('/questions-show') }}">Preguntas</a>
                            </div>
                            @else
                            <div class="ml-auto">
                                <a class="btn" href="{{ url("/login") }}">Login</a>
                                <a class="btn" href="{{ url('/register') }}">Registrate</a>
                            </div>
                            @endif
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->


            <!-- Portfolio Start -->
            <div class="portfolio">
                <div class="container">
                    <div class="section-header">
                        <h2>Titulos Ley 842 de 2003</h2>
                    </div>
                    <div class="row portfolio-container">
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first">
                            <div class="portfolio-wrap">
                                <img src="{{ url('/assets/img/portfolio-1.jpg') }}" alt="Portfolio Image">
                                <figure>
                                    <a href="{{ url('/titulo1') }}">TITULO I</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second">
                            <div class="portfolio-wrap">
                                <img src="{{ url('/assets/img/portfolio-2.jpg') }}" alt="Portfolio Image">
                                <figure>
                                    <a href="{{ url('/titulo2') }}">TITULO II</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third">
                            <div class="portfolio-wrap">
                                <img src="{{ url('/assets/img/portfolio-3.jpg') }}" alt="Portfolio Image">
                                <figure>
                                    <a href="{{ url('/titulo3') }}">TITULO III</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first">
                            <div class="portfolio-wrap">
                                <img src="{{ url('/assets/img/portfolio-4.jpg') }}" alt="Portfolio Image">
                                <figure>
                                    <a href="{{ url('/titulo4') }}">TITULO IV</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second">
                            <div class="portfolio-wrap">
                                <img src="{{ url('/assets/img/portfolio-5.jpg') }}" alt="Portfolio Image">
                                <figure>
                                    <a href="{{ url('/titulo5') }}">TITULO V</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third">
                            <div class="portfolio-wrap">
                                <img src="{{ url('/assets/img/portfolio-6.jpg') }}" alt="Portfolio Image">
                                <figure>
                                    <a href="{{ url('/titulo6') }}">TITULO VI</a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                </div>
            </div>
            <!-- Portfolio Start -->
           <!-- Contact Start -->
           @if(Auth::check())
            <div class="contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-form">
                                    <form action='{{url('/redactar')}}' method="POST" >
                                    @csrf
                                        <div class="form-group">
                                        <label for='titulo'>Elige el título para la observación: </label>
                                        <select id='titulo' name='titulo'>
                                            <option value='1' selected> TITULO I</option>
                                            <option value='2'>TITULO II</option>
                                            <option value='3'>TITULO III</option>
                                            <option value='4'>TITULO IV</option>
                                            <option value='5'>TITULO V</option>
                                            <option value='6'>TITULO VI</option>
                                        </select>
                                        </div>
                                        <div>
                                            <button class="btn" type="submit">Enviar Observación</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <!-- Contact End -->

            <center> <iframe width="560" height="315" src="https://www.youtube.com/embed/Pkp-quY98TI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
           <!-- Footer Start -->
           <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-about">
                                <h2>Sobre nosotros</h2>
                                <p>
                                Somos un equipo de ingenieros de la universidad de Nariño cursando nuestro décimo semestre en esta universidad. Nos apasiona el desarrollo web y nos interesa la ley y la ética
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <div class="row">
                        <div class="col-md-6 col-lg-4"></div>
                        <div class="col-md-6 col-lg-4"></div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>Contacto</h2>
                                <p><i class="fa fa-map-marker-alt"></i> Calle 18 No. 50-02 </p>
                                <p><i class="fa fa-phone-alt"></i>7244309 – 7311449</p>
                                <p><i class="fa fa-envelope"></i>reiconline@gmail.com</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="{{ url('/') }}">Inicio</a>
                        <a href="{{ url('/complete') }}">Ley 842 de 2003</a>
                        <a href="{{ url('/titles') }}">Titulos de la ley</a>
                        <a href="{{ url('/about') }}">About us</a>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url('/assets/lib/easing/easing.min.js') }}"></script>
        <script src="{{ url('/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ url('/assets/lib/isotope/isotope.pkgd.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ url('/assets/js/main.js') }}"></script>
    </body>
</html>
