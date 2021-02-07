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
                            <div class="ml-auto">
                                <a class="btn" href="{{ url("/login") }}">Login</a>
                                <a class="btn" href="{{ url('/register') }}">Registrate</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            
            <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="{{ url('/assets/img/juzgado.jpg') }}" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header">
                                <h2>Sobre REIC Online</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Somos un equipo de ingenieros de la universidad de Nariño cursando nuestro décimo semestre
                                    en esta universidad. Nos apasiona el desarrollo web y nos interesa la ley y la ética.
                                </p>
                                <p>
                                    Durante nuestras actividades académicas nos vemos con la materia de ingeniería ética y legal
                                    la cual nos encomienda la tarea de dar a conocer la reglamentación de nuestra profesión y
                                    así nace REIC Online.
                                </p>
                                <p>
                                    Nos propusimos a hacer una página web que hiciera lo más importante que es divulgar la ley
                                    843 de 2003 por la cual se reglamenta el ejericio de la ingeniería en Colombia, pero no queríamos
                                    quedarnos en el concepto básico, sino que fuimos un poco más allá y quisimos agregar características
                                    y funciones para que sea más sencillo y ameno el consultar esta ley en nuestro portal. De esta manera
                                    nos embarcamos en este proyecto que nos trajo profunda satisfacción cuando se completó.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Team Start -->
            
            <div class="team">
                <div class="container">
                    <div class="section-header">
                        <h2>Conozca al equipo detrás de REIC Online</h2>
                    </div>
                    <div style="margin-left: 200px;">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ url('/assets/img/angiedamecarino.jpg') }}" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Angie Medina</h2>
                                    <p>Ingeniero de Sistemas</p>
                                    <div class="team-social">
                                        <a class="social-fb" href="https://www.facebook.com/nathalia.jurado.98"><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-in" href="https://www.instagram.com/nathalia_jurado01/"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ url('/assets/img/ositomegaflow.jpg') }}" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Carlos Ortiz</h2>
                                    <p>Ingeniero de Sistemas</p>
                                    <div class="team-social">
                                        <a class="social-fb" href="https://www.facebook.com/carlos.ortiiz.5"><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-in" href="https://www.instagram.com/gaviriacarlosortiz/"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ url('/assets/img/yositoclaroquesi.jpg') }}" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Sebastian Rubio</h2>
                                    <p>Ingeniero de Sistemas</p>
                                    <div class="team-social">
                                        <a class="social-fb" href="https://www.facebook.com/ssebastian.rubio/"><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-in" href="https://www.instagram.com/sebastian.rubio12/"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- Team End -->


            <!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-about">
                                <h2>About Us</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu lectus a leo tristique dictum nec non quam. Suspendisse convallis, tortor eu placerat rhoncus, lorem quam iaculis felis, sed eleifend lacus neque id eros. Integer convallis volutpat neque
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="">Civil Law</a>
                                <a href="">Family Law</a>
                                <a href="">Business Law</a>
                                <a href="">Education Law</a>
                                <a href="">Immigration Law</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="">About Us</a>
                                <a href="">Practices</a>
                                <a href="">Attorneys</a>
                                <a href="">Case Studies</a>
                                <a href="">FAQs</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                                <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                <p><i class="fa fa-envelope"></i>info@example.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="https://htmlcodex.com/law-firm-website-template">HTML Codex</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                        </div>
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
