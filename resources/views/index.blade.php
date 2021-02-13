<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>REIC Online</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="REIC Online" name="keywords">
        <meta content="REIC Online" name="description">

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
                                <a class="btn" href="{{ url('/logout')}}">Logout</a>
                                <a class="btn" href="{{ url('/redactarco') }}">Preguntas</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            
            
            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ url('/assets/img/justice.jpg') }}" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">Bienvenido a REIC Online</h1>
                            <p class="animated fadeInRight">Sitio web que te permite consultar la ley 842 de 2003</p>
                            <!--<a class="btn animated fadeInUp" href="#">Get free consultation</a> -->
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ url('/assets/img/carousel-2.jpg') }}" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">¡Regístrate para tener mayor acceso en el sitio!</h1>
                            <a class="btn animated fadeInUp" href="{{ url('/register') }}">Regístrate aquí</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ url('/assets/img/carousel-3.jpg') }}" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">Conoce sobre la página y el equipo</h1>
                            <p class="animated fadeInRight">Conoce más sobre REIC Online y el equipo que está detrás de ella</p>
                            <a class="btn animated fadeInUp" href="{{ url('/about') }}">Información aquí</a>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->
            
            
            <!-- Top Feature Start-->
            <div class="feature-top">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="far fa-check-circle"></i>
                                <h3>Ley 842 de 2003</h3>
                                <p>Vigente y actualizada</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="fa fa-user-tie"></i>
                                <h3>País</h3>
                                <p>Gobierno de Colombia</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="far fa-thumbs-up"></i>
                                <h3>Sencillo</h3>
                                <p>Fácil y accesible</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="far fa-handshake"></i>
                                <h3>Contacto</h3>
                                <p>Contactanos si tienes dudas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Feature End-->
            
            
            <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                            <iframe width="430" height="315" src="https://www.youtube.com/embed/jo3cNXqutXw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header">
                                <h2>Conoce sobre nosotros</h2>
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
                                <a class="btn" href="{{ url('/about') }}">Conócenos un poco más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->
            
            <!-- Service Start -->
            <div class="service">
                <div class="container">
                    <div class="section-header">
                        <h2>Secciones de interés</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-landmark"></i>
                                </div>
                                <h3>Consulta la ley por títulos</h3>
                                <p>
                                    Consulta la ley por el título que sea de tu necesidad.
                                </p>
                                <a class="btn" href="{{ url('/titles') }}">Consulta aquí</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-gavel"></i>
                                </div>
                                <h3>Consulta la ley completa</h3>
                                <p>
                                    Sigue este vínculo para que se despliegue la ley en su totalidad.
                                </p>
                                <a class="btn" href="{{ url('/complete') }}">Consulta aquí</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <h3>Inicia sesión</h3>
                                <p>
                                    Inicia sesión para sacarle el mayor provecho a REIC Online.
                                </p>
                                <a class="btn" href="{{ url('/login') }}">Inicia aquí</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->
            
            <!-- FAQs Start -->
            <div name="#faq_ref" class="faqs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="faqs-img">
                                <img src="{{ url('/assets/img/faqs.jpg') }}" alt="Image">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="section-header">
                                <h2>Preguntas Frecuentes</h2>
                            </div>
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                            <span>1</span> ¿Cómo consulto la ley?
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            Es tan simple como seleccionar una de las opciones en el menú que dice "Ley 842 de 2003". Si quieres buscar la ley por capítulos,
                                            selecciona "Títulos de la ley". Si quieres ver la ley completa, selecciona "Ley completa".
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                            <span>2</span> ¿Puedo discriminar la búsqueda de la ley?
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Por supuesto. Si no es suficiente buscarla por títulos, puede ingresar palabras clave que busquen
                                            un elemento específico en la ley.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                            <span>3</span> ¿Cómo creo una cuenta?
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Es tan sencillo como usar el botón de "registrarse" en la parte superior derecha.
                                            No te preocupes, ¡no te pediremos datos personales!.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                            <span>5</span> ¿Puedo hacerles una pregunta si surge una duda?
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            ¡Claro que sí!. Una vez que tengas una cuenta puedes utilizar la función de "Formular pregunta" en la parte
                                            superior derecha que te redirigirá a una página que te permite enviar tu mensaje.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                            <span>5</span> ¿La ley está completa y actualizada?
                                        </a>
                                    </div>
                                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            La ley que se presente en este sitio siempre estará vigente y actualizada, no te 
                                            tendrás que preocupar por que ya no rija lo que encuentres aquí.
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <a class="btn" href="{{url ('/redactarco')}}">Hacer una pregunta</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQs End -->


                       <!-- Testimonial Start -->
                       <div class="testimonial">
                <div class="container">
                    <div class="section-header">
                        <h2>Testimonios</h2>
                    </div>
                    <div class="owl-carousel testimonials-carousel">
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="{{ url('/assets/img/testimonial-1.jpg') }}" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>Nicolás Zúñiga</h2>
                                    <p>Ingeniero mecatrónico</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        REIC me ha servido mucho para ejercer mi carrera de una buena y eficiente manera.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="{{ url('/assets/img/testimonial-2.jpg') }}" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>Alejandra Solarte</h2>
                                    <p>Ingeniera de sistemas</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Es sumamente importante conocer la reglamentación de la carrera y REIC te ayuda con eso.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="{{ url('/assets/img/testimonial-3.jpg') }}" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>Camilo Guerrero</h2>
                                    <p>Ingeniero de petróleos</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Cuando tengo dudas sobre la ley, siempre acudo a REIC para despejarlas todas.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="{{ url('/assets/img/testimonial-4.jpg') }}" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>Camila Ojeda</h2>
                                    <p>Ingeniera civil</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Gracias a REIC pude conocer la reglamentación de mi profesión sencillamente.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="{{ url('/assets/img/testimonial-1.jpg') }}" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>Juan Melo</h2>
                                    <p>Ingeniero electrónico</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Siempre puedo confiar en REIC cuando necesito información rápida y fiable, nunca falla.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="{{ url('/assets/img/testimonial-2.jpg') }}" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>Andrea Benavides</h2>
                                    <p>Ingeniera ambiental</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Contamos con REIC para sacarnos de dudas siempre, además siempre atienden mis inquietudes.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->


            <!-- Blog Start -->
            <div class="blog">
                <div class="container">
                    <div class="section-header">
                        <h2>Noticias</h2>
                    </div>
                    <div class="owl-carousel blog-carousel">
                        <div class="blog-item">
                            <img src="{{ url('/assets/img/blog-1.jpg') }}" alt="Blog">
                            <h3>¿Cuántas personas se matriculan para estudiar ingeniería en Colombia?</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Educación en ingeniería</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>10-Nov-2020</p>
                            </div>
                            <p>
                                Según el Servicio Público de Empleo, hay más de 62 mil vacantes para ingenieros informáticos 
                                y en el país hay un déficit de 80 mil ingenieros, hechos que deberían hacer este campo atractivo 
                                para los estudiantes. Sin embargo, las cifras indican que los jóvenes prefieren otras áreas de estudio.
                            </p>
                            <a class="btn" href="https://www.semana.com/educacion/articulo/cuantas-personas-se-matriculan-para-estudiar-ingeniaria-en-colombia/202009/"> Saber más <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <img src="{{ url('/assets/img/blog-2.jpg') }}" alt="Blog">
                            <h3>Inicia el programa de MinTic para formar programadores</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Política en ingeniería</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>12-Sep-2020</p>
                            </div>
                            <p>
                                El programa Misión TIC 2022 apunta a atender una necesidad urgente de la economía colombiana: la formación
                                de 100.000 programadores. Pero expertos discuten si le servirán al país profesionales capacitados en tiempo 
                                récord.
                            </p>
                            <a class="btn" href="https://www.semana.com/nacion/articulo/inicia-el-programa-de-mintic-para-formar-programadores/202000/"> Saber más <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <img src="{{ url('/assets/img/blog-3.jpg') }}" alt="Blog">
                            <h3>La aplicación de estudiantes colombianos que fue premiada por la NASA</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Ingeniería en el mundo</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Feb-2021</p>
                            </div>
                            <p>
                                Los colombianos ganaron el Space Apps COVID-19 Challenge, un concurso organizado por la agencia espacial 
                                norteamericana, al presentar una aplicación de agricultura que vincula a los agricultores familiares y 
                                los mercados locales con el fin de enfrentar el desabastecimiento de alimentos ocasionado por la pandemia. 
                            </p>
                            <a class="btn" href="https://www.elespectador.com/noticias/educacion/la-aplicacion-de-estudiantes-colombianos-premiada-por-la-nasa/"> Saber más <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <img src="{{ url('/assets/img/blog-4.jpg') }}" alt="Blog">
                            <h3>Estas son las cuatro ingenierías más buscadas en Colombia</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Ingeniería en Colombia</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>03-Oct-2019</p>
                            </div>
                            <p>
                                Industrial, Civil, Sistemas y Ambiental son las ingenierías que despiertan mayor interés en los centennials
                                 actualmente. Si aún no sabe cuál elegir, acá le mostramos las características principales de cada una.
                            </p>
                            <a class="btn" href="https://www.elespectador.com/noticias/actualidad/estas-son-las-cuatro-ingenierias-mas-buscadas-en-colombia/"> Saber más <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <img src="{{ url('/assets/img/blog-5.jpg') }}" alt="Blog">
                            <h3>Una tecnología para reforzar las casas de familias vulnerables en Colombia</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Ingeniería en el mundo</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>25-Noc-2019</p>
                            </div>
                            <p>
                                Desde 2014, Build Change ayuda a intervenir viviendas para hacerlas resistentes a los sismos y otros 
                                fenómenos naturales. Para continuar con su labor recibirá un apoyo de US$500.000.
                            </p>
                            <a class="btn" href="https://www.elespectador.com/noticias/economia/una-tecnologia-para-reforzar-las-casas-de-familias-vulnerables-en-colombia/"> Saber más <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <img src="{{ url('/assets/img/blog-6.jpg') }}" alt="Blog">
                            <h3>Colombia, en la búsqueda de una verdadera interacción con las máquinas</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Educación en ingeniería</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>05-Oct-2019</p>
                            </div>
                            <p>
                                Un grupo de estudiantes de la Universidad de los Andes desarrolló un novedoso modelo de inteligencia 
                                artificial que le permite a las máquinas reaprender a partir de los errores. Su diseño fue presentado
                                en la Conferencia Europea de Visión por Computador, en Münich, Alemania, donde fueron el único grupo 
                                latinoamericano.
                            </p>
                            <a class="btn" href="https://www.elespectador.com/noticias/ciencia/colombia-en-la-busqueda-de-una-verdadera-interaccion-con-las-maquinas/"> Saber más <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog End -->
            
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
