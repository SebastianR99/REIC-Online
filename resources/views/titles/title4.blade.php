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


            <!-- Single Page Start -->
            <div class="single">
                <div class="container">
                    <div class="section-header">
                        <h2>This is Page Title</h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <img class="img-fluid rounded" src="{{ url('/assets/img/title4.jpg') }}" alt="Image">
                            <h1>This is heading 1</h1>
                            <h2>This is heading 2</h2>
                            <h3>This is heading 3</h3>
                            <h4>This is heading 4</h4>
                            <h5>This is heading 5</h5>
                            <h6>This is heading 6</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit. Nam congue molestie nibh in venenatis. Etiam non dui vel purus mollis consectetur. Sed at cursus lectus, sed iaculis lorem. Suspendisse venenatis est eu neque elementum, a accumsan tortor scelerisque. Nullam id erat arcu. Morbi suscipit commodo tortor non efficitur. Ut pretium sollicitudin lorem quis laoreet. Nulla vestibulum ante ut tellus hendrerit, ac condimentum sapien vehicula. Fusce dapibus, nulla non venenatis pretium, purus mauris vehicula elit, at posuere leo elit id augue. Donec ullamcorper tortor et tellus convallis maximus.
                            </p>
                            <ul class="ul-group">
                                <li>First list item</li>
                                <li>Second list item</li>
                                <li>Third list item</li>
                                <li>Fourth list item</li>
                                <li>Fifth list item</li>
                            </ul>
                            <p>
                                Mauris tempor et odio ut condimentum. Donec eleifend magna eu hendrerit lacinia. Praesent luctus diam ut rhoncus vulputate. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed ut metus efficitur, volutpat eros et, mollis enim. Sed quis tortor id erat iaculis sagittis. Aenean at pretium lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam sollicitudin vitae lacus id fermentum. Nullam sit amet tortor arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elementum nibh in dui congue, id faucibus lectus auctor. Nunc quis tincidunt odio, id finibus massa. Phasellus tincidunt libero est, in blandit turpis malesuada a. Quisque congue, mauris non consectetur tempus, arcu urna blandit arcu, ac finibus dolor ante ut nibh. Etiam congue dignissim sollicitudin. 
                            </p>
                            <ol class="ol-group">
                                <li>First list item</li>
                                <li>Second list item</li>
                                <li>Third list item</li>
                                <li>Fourth list item</li>
                                <li>Fifth list item</li>
                            </ol>
                            <p>
                                Donec vel euismod tortor. Aenean euismod risus ac enim hendrerit, ac sagittis erat porta. Donec ultrices et massa at ullamcorper. Nam faucibus mattis mattis. Etiam a metus condimentum, pretium elit a, accumsan dui. Donec ipsum erat, ultricies ut ante vel, consequat elementum nibh. Vestibulum egestas id nunc lobortis bibendum. Aliquam odio ex, efficitur vitae risus vitae, iaculis suscipit justo. Nam eleifend orci nulla, in pulvinar risus eleifend sit amet
                            </p>
                            <ul class="list-group">
                                <li class="list-group-item">First list item</li>
                                <li class="list-group-item">Second list item</li>
                                <li class="list-group-item">Third list item</li>
                                <li class="list-group-item">Fourth list item</li>
                                <li class="list-group-item">Fifth list item</li>
                            </ul>
                            <p>
                                Aenean dolor nisi, ultrices vitae urna vitae, tristique auctor tortor. Cras eu aliquet metus. Nunc volutpat est nec convallis vulputate. Maecenas quis tortor molestie, maximus arcu mattis, vehicula orci. Curabitur consequat eu orci vel vulputate. In mollis purus in tellus consectetur, at tristique lacus gravida. Integer tempor mattis elit, eu mollis tellus pretium in. Duis id iaculis ipsum, eu tempus purus. Fusce euismod lacus quis felis eleifend egestas. Nam at dolor vitae risus varius mattis sed ut tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque diam nisl, interdum sit amet congue efficitur, ultrices id dolor. 
                            </p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Table Head</th>
                                        <th>Table Head</th>
                                        <th>Table Head</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Table Cell</td>
                                        <td>Table Cell</td>
                                        <td>Table Cell</td>
                                    </tr>
                                    <tr>
                                        <td>Table Cell</td>
                                        <td>Table Cell</td>
                                        <td>Table Cell</td>
                                    </tr>
                                    <tr>
                                        <td>Table Cell</td>
                                        <td>Table Cell</td>
                                        <td>Table Cell</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Page End -->


            <!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-about">
                                <h2>Sobre nosotros</h2>
                                <p>
                                    Somos un equipo de ingenieros de la universidad de Nariño cursando nuestro décimo semestre
                                    en esta universidad. Nos apasiona el desarrollo web y nos interesa la ley y la ética.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Áreas de la ley</h2>
                                <a href=" {{ url('/complete') }} ">Ley completa</a>
                                <a href=" {{ url('/titles') }} ">Ley por títulos</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Páginas útiles</h2>
                                <a href="{{ url('/about') }}">Sobre nosotros</a>
                                <a href="{{ url('/login') }}">Iniciar sesión</a>
                                <a href="{{ url('/register') }}">Registrarse</a>
                                <a href="#faq_ref">FAQs</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>Mantenerse en contacto</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Calle 18 Cra 50. Ciudadela Universitaria Torobajo, Pasto, Nariño</p>
                                <p><i class="fa fa-phone-alt"></i>+57 300 6789010</p>
                                <p><i class="fa fa-envelope"></i>reic@hotmail.com</p>
                                <div class="footer-social">
                                    <a href="https://www.facebook.com/carlos.ortiiz.5"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/gaviriacarlosortiz/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="#">¡Gracias por tu visita!</a>
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
