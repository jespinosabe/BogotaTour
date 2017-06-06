<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
    <head>

        <!--- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <title>Inicio</title>
        <meta name="description" content="">  
        <meta name="author" content="">

        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- CSS
    ================================================== -->
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/media-queries.css">         

        <!-- Script
        =================================================== -->
        <script src="js/modernizr.js"></script>

        <!-- Favicons
             =================================================== -->
        <link rel="shortcut icon" href="tour.png" >

    </head>

    <body class="homepage">

        <div id="preloader"> 
            <div id="status">
                <img src="images/loader.gif" height="60" width="60" alt="">
                <div class="loader">Loading...</div>
            </div>
        </div>


        <!-- Header
        =================================================== -->
        <header id="main-header">

            <div class="row header-inner">


                <nav id="nav-wrap">         

                    <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
                        <span class='menu-text'>Show Menu</span>
                        <span class="menu-icon"></span>
                    </a>
                    <a class="mobile-btn" href="#" title="Hide navigation">
                        <span class='menu-text'>Hide Menu</span>
                        <span class="menu-icon"></span>
                    </a>         

                    <ul id="nav" class="nav">
                        <li class="current"><a class="smoothscroll" href="#hero">Inicio</a></li>
                        <li><a class="smoothscroll" href="#Restaurantes"><i class="fa fa-cutlery"></i>Restaurantes</a></li>
                        <li><a class="smoothscroll" href="#CentrosComerciales"><i class="fa fa-shopping-bag"></i>Centros Comerciales</a></li>
                        <li><a class="smoothscroll" href="#Bares"><i class="fa fa-glass"></i> Bares</a></li>
                        <li><a class="smoothscroll" href="#Clubes"><i class="fa fa-institution"></i>Clubes</a></li>
                        <li><a class="smoothscroll" href="#Parques"><i class="fa fa-camera-retro"></i>Parques</a></li>
                        <li><a class="smoothscroll" href="#Hoteles"><i class="fa fa-hotel"></i>Hoteles</a></li>
                        <li><a class="smoothscroll" href="#Gimnasios"><i class="fa fa-steam"></i> Gimnasios</a></li>
                        <li><a class="smoothscroll" href="#Miradores"><i class="fa fa-tripadvisor"></i>Miradores</a></li>
                        <li><a class="smoothscroll" href="#Deporte"><i class="fa fa-futbol-o"></i>Deporte</a></li>
                        <li><a class="smoothscroll" href="#Cultura"><i class="fa fa-camera-retro"></i>Cultura</a></li>

                    </ul> 

                </nav> <!-- /nav-wrap -->	      

            </div> <!-- /header-inner -->

        </header> 




        <!-- Hero
        =================================================== -->
        <section id="hero">	

            <div class="row hero-content">

                <div class="twelve columns flex-container">

                    <div id="hero-slider" class="flexslider">

                        <ul class="slides">

                            <!-- Slide -->
                            <li>
                                <div class="flex-caption">
                                    <h1>BogotáTour, un sitio web diseñado para 
                                        conocer los lugares de interes, ocio y entretenimiento de la capital de Colombia</h1>	
                                    <p><a class="button stroke smoothscroll" href="#Bares">Conoce los mejores Bares</a></p>																   
                                </div>						
                            </li>

                            <!-- Slide -->
                            <li>						
                                <div id="nuevoLugar" class="flex-caption">
                                    <h1 >Conoces un lugar o evento que nosotros no?  </h1>	
                                    <p><a class="button stroke" href="Nuevo_Lugar.php">Registra nuevos lugares</a></p>									   
                                </div>					
                            </li>

                            <!-- Slide -->
                            <li>
                                <div id="login" class="flex-caption">
                                    <h1 >Quieres Diversion, Te tenemos varias opciones</a> Se parte de BogotaTour </h1>
                                    <p><a class="button stroke" href="Login.php"><i class="fa fa-users"></i>Crea tu cuenta</a></p>										   
                                </div>
                            </li>					              

                        </ul>

                    </div> <!-- .flexslider -->				   

                </div> <!-- .flex-container -->      

            </div> <!-- .hero-content -->	   

        </section> <!-- #hero -->






        <!-- Restaurantes
               ================================================== -->
        <section id="Restaurantes">

            <div class="row section-head">

                <div class="twelve columns">

                    <h1>Restaurantes<span>.</span></h1>

                    <hr />

                    <p>Disfruta de la mejor comida de Bogota
                    </p>

                </div>

            </div>

            <div class="row items">

                <div class="twelve columns">

                    <div id="sitio-wrapper" class="bgrid-fourth s-bgrid-third mob-bgrid-half group">

                        <div class="bgrid item">
                            <div class="item-wrap">


                                <a href="Restaurantes.php?id=$id_categoria">
                                    <img src="images/Restaurantes/1.jpg" alt="mcdonalds">
                                    <div class="overlay"></div>                       
                                    <div class="sitio-item-meta">
                                        <h5>Mc Donalds</h5>
                                        <p>Helados</p>
                                    </div>                         
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Restaurantes.php">
                                    <img src="images/Restaurantes/2.jpg" alt="Crepes and Waffles">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Crepes and Waffles</h5>
                                            <p>Helados</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid stack item">
                            <div class="item-wrap">

                                <a href="Restaurantes.php">
                                    <img src="images/Restaurantes/3.jpg" alt="osaka restaurante">                        
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Restaurante Osaka</h5>
                                            <p>Cocteles</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Restaurantes.php">
                                    <img src="images/Restaurantes/4.jpg" alt="Restaurante Matiz">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Restaurante Matiz</h5>
                                            <p>Elegante</p>
                                        </div>
                                    </div>                       
                                </a>

                            </div>
                        </div> <!-- /item -->





                    </div> <!-- /Restaurantes-wrapper -->

                </div> <!-- /twelve -->

            </div>  <!-- /row -->

        </section> <!-- /Restaurantes -->


        <!-- Centros Comerciales
               ================================================== -->
        <section id="CentrosComerciales">

            <div class="row section-head">

                <div class="twelve columns">

                    <h1>Centro Comerciales<span>.</span></h1>

                    <hr />

                    <p>Conoce y disfruta de un dia de compras
                    </p>

                </div>

            </div>

            <div class="row items">

                <div class="twelve columns">

                    <div id="sitio-wrapper" class="bgrid-fourth s-bgrid-third mob-bgrid-half group">

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="CentrosComerciales.php">
                                    <img src="images/CentrosComerciales/6.jpg" alt="titan plaza">
                                    <div class="overlay"></div>                       
                                    <div class="sitio-item-meta">
                                        <h5>Titan Plaza</h5>
                                        <p>Gran experiencia</p>
                                    </div>                         
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="CentrosComerciales.php">
                                    <img src="images/CentrosComerciales/7.jpg" alt="gran estaciom">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Gran Estacion</h5>
                                            <p>Inolvidable</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid stack item">
                            <div class="item-wrap">

                                <a href="CentrosComerciales.php">
                                    <img src="images/CentrosComerciales/8.jpg" alt="calima">                        
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Centro Calima</h5>
                                            <p>Diviertete</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="CentrosComerciales.php">
                                    <img src="images/CentrosComerciales/9.jpg" alt="la colina">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Centro comercial la colina</h5>
                                            <p>Nuevo</p>
                                        </div>
                                    </div>                       
                                </a>

                            </div>
                        </div> <!-- /item -->


                    </div> <!-- /CentrosComerciales-wrapper -->

                </div> <!-- /twelve -->

            </div>  <!-- /row -->

        </section> <!-- /CentrosComerciales -->

        <!-- Bares
                       ================================================== -->
        <section id="Bares">

            <div class="row section-head">

                <div class="twelve columns">

                    <h1>Bares<span>.</span></h1>

                    <hr />

                    <p>Encuentra el mejor sitio para bailar o tomar un trago
                    </p>

                </div>

            </div>

            <div class="row items">

                <div class="twelve columns">

                    <div id="sitio-wrapper" class="bgrid-fourth s-bgrid-third mob-bgrid-half group">

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Bares.php">
                                    <img src="images/Bares/11.jpg" alt="ozzy bar">
                                    <div class="overlay"></div>                       
                                    <div class="sitio-item-meta">
                                        <h5>Bar ozzy</h5>
                                        <p>baila</p>
                                    </div>                         
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Bares.php">
                                    <img src="images/Bares/12.jpg" alt="Opera bar">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Bar opera</h5>
                                            <p>Barra libre</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid stack item">
                            <div class="item-wrap">

                                <a href="Bares.php">
                                    <img src="images/Bares/13.jpg" alt="MatildeLina">                        
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Bar Matildelina</h5>
                                            <p>Vallenato</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Bares.php">
                                    <img src="images/Bares/14.jpg" alt="classic Rock">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Bar classic Rock</h5>
                                            <p>Rock</p>
                                        </div>
                                    </div>                       
                                </a>

                            </div>
                        </div> <!-- /item -->

                    </div> <!-- /Bares-wrapper -->

                </div> <!-- /twelve -->

            </div>  <!-- /row -->

        </section> <!-- /Bares -->


        <!-- Clubes
                       ================================================== -->
        <section id="Clubes">

            <div class="row section-head">

                <div class="twelve columns">

                    <h1>Clubes<span>.</span></h1>

                    <hr />

                    <p>Pasa un rato relajado o divertido en los mejores clubes
                    </p>

                </div>

            </div>

            <div class="row items">

                <div class="twelve columns">

                    <div id="sitio-wrapper" class="bgrid-fourth s-bgrid-third mob-bgrid-half group">

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Clubes.php">
                                    <img src="images/Clubes/16.jpg" alt="Country club">
                                    <div class="overlay"></div>                       
                                    <div class="sitio-item-meta">
                                        <h5>Country club</h5>
                                        <p>Elegancia</p>
                                    </div>                         
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Clubes.php">
                                    <img src="images/Clubes/17.jpg" alt="Club Lagartos">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Club Los Lagartos</h5>
                                            <p>Eventos</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid stack item">
                            <div class="item-wrap">

                                <a href="Clubes.php">
                                    <img src="images/Clubes/18.jpg" alt="Club El Rancho">                        
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Club El Rancho</h5>
                                            <p>Amplio</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Clubes.php">
                                    <img src="images/Clubes/19.jpg" alt="Club Los Arrayanes">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Club Los Arrayanes</h5>
                                            <p>Buen clima</p>
                                        </div>
                                    </div>                       
                                </a>

                            </div>
                        </div> <!-- /item -->
                    </div> <!-- /Clubes-wrapper -->

                </div> <!-- /twelve -->

            </div>  <!-- /row -->

        </section> <!-- /Clubes -->

        <!-- Parques
                      ================================================== -->
        <section id="Parques">

            <div class="row section-head">

                <div class="twelve columns">

                    <h1>Parques<span>.</span></h1>

                    <hr />

                    <p>Diviertete y disfruta de amplias zonas verdes en los parques de Bogota
                    </p>

                </div>

            </div>

            <div class="row items">

                <div class="twelve columns">

                    <div id="sitio-wrapper" class="bgrid-fourth s-bgrid-third mob-bgrid-half group">

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Parques.php">
                                    <img src="images/Parques/24.jpg" alt="Parque Mirador de los Nevados">
                                    <div class="overlay"></div>                       
                                    <div class="sitio-item-meta">
                                        <h5>Parque Mirador de los Nevados</h5>
                                        <p>Diversion</p>
                                    </div>                         
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Parques.php">
                                    <img src="images/Parques/25.jpg" alt="Parque de los novios">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Parque metropolitano el lago</h5>
                                            <p>Parque de los novios</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid stack item">
                            <div class="item-wrap">

                                <a href="Parques.php">
                                    <img src="images/Parques/26.jpg" alt="Parque de la 93">                        
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Parque de la 93</h5>
                                            <p>Diversion</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Parques.php">
                                    <img src="images/Parques/27.jpg" alt="Parque Simon Bolivar">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Parque Simon Bolivar</h5>
                                            <p>Diversion</p>
                                        </div>
                                    </div>                       
                                </a>

                            </div>
                        </div> <!-- /item -->
                    </div> <!-- /Parques-wrapper -->

                </div> <!-- /twelve -->

            </div>  <!-- /row -->

        </section> <!-- /Parques -->

        <!-- Hoteles
                      ================================================== -->
        <section id="Hoteles">

            <div class="row section-head">

                <div class="twelve columns">

                    <h1>Hoteles<span>.</span></h1>

                    <hr />

                    <p>Hospedate en los mejores hoteles
                    </p>

                </div>

            </div>

            <div class="row items">

                <div class="twelve columns">

                    <div id="sitio-wrapper" class="bgrid-fourth s-bgrid-third mob-bgrid-half group">

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Hoteles.php">
                                    <img src="images/Hoteles/20.jpg" alt="summit hotel">
                                    <div class="overlay"></div>                       
                                    <div class="sitio-item-meta">
                                        <h5>Plaza Summit Hotel</h5>
                                        <p>Alojamiento</p>
                                    </div>                         
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Hoteles.php">
                                    <img src="images/Hoteles/21.jpg" alt="Titan Hotel Spa">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Titan Hotel Spa</h5>
                                            <p>Alojamiento</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid stack item">
                            <div class="item-wrap">

                                <a href="Hoteles.php">
                                    <img src="images/Hoteles/22.jpg" alt="Hotel Dann Norte">                        
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Hotel Dann Norte</h5>
                                            <p>Alojamiento</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Hoteles.php">
                                    <img src="images/Hoteles/23.jpg" alt="Hotel Cosmos 100">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Hotel Cosmos 100</h5>
                                            <p>Alojamiento</p>
                                        </div>
                                    </div>                       
                                </a>

                            </div>
                        </div> <!-- /item -->
                    </div> <!-- /Hoteles-wrapper -->

                </div> <!-- /twelve -->

            </div>  <!-- /row -->

        </section> <!-- /Hoteles -->

        <!-- Gimnasios
                       ================================================== -->
        <section id="Gimnasios">

            <div class="row section-head">

                <div class="twelve columns">

                    <h1>Gimnasios<span>.</span></h1>

                    <hr />

                    <p>Ponte en forma con los cientos de gimnasios que hay en Bogota
                    </p>

                </div>

            </div>

            <div class="row items">

                <div class="twelve columns">

                    <div id="sitio-wrapper" class="bgrid-fourth s-bgrid-third mob-bgrid-half group">

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Gimnasios.php">
                                    <img src="images/Gimnasios/28.jpg" alt="Hard Body 147">
                                    <div class="overlay"></div>                       
                                    <div class="sitio-item-meta">
                                        <h5>Hard Body 147</h5>
                                        <p>Ejercicio</p>
                                    </div>                         
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Gimnasios.php">
                                    <img src="images/Gimnasios/29.jpg" alt="Spinning Center Gym">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Spinning Center Gym</h5>
                                            <p>Ejercicio</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid stack item">
                            <div class="item-wrap">

                                <a href="Gimnasios.php">
                                    <img src="images/Gimnasios/30.jpg" alt="Bodytech Chapinero">                        
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Bodytech Chapinero</h5>
                                            <p>Ejercicio</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Gimnasios.php">
                                    <img src="images/Gimnasios/31.jpg" alt="Titan Gym">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Titan Gym</h5>
                                            <p>Ejercicio</p>
                                        </div>
                                    </div>                       
                                </a>

                            </div>
                        </div> <!-- /item -->
                    </div> <!-- /Gimnasios-wrapper -->

                </div> <!-- /twelve -->

            </div>  <!-- /row -->

        </section> <!-- /Gimnasios -->


        <!-- Miradores
                       ================================================== -->
        <section id="Miradores">

            <div class="row section-head">

                <div class="twelve columns">

                    <h1>Miradores<span>.</span></h1>

                    <hr />

                    <p>Disfruta de aire limpio lejos de la ciudad con una vista espectacular
                    </p>

                </div>

            </div>

            <div class="row items">

                <div class="twelve columns">

                    <div id="sitio-wrapper" class="bgrid-fourth s-bgrid-third mob-bgrid-half group">

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Miradores.php">
                                    <img src="images/Miradores/grizzly.jpg" alt="Grizzly">
                                    <div class="overlay"></div>                       
                                    <div class="sitio-item-meta">
                                        <h5>Grizzly</h5>
                                        <p>Photography</p>
                                    </div>                         
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Miradores.php">
                                    <img src="images/Miradores/hotel.jpg" alt="Hotel Sign">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Hotel Sign</h5>
                                            <p>Webdesign</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid stack item">
                            <div class="item-wrap">

                                <a href="Miradores.php">
                                    <img src="images/Miradores/beetle.jpg" alt="Beetle">                        
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Beetle</h5>
                                            <p>Branding</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Miradores.php">
                                    <img src="images/Miradores/banjo-player.jpg" alt="Banjo Player">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Banjo Player</h5>
                                            <p>Videography</p>
                                        </div>
                                    </div>                       
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Miradores.php">
                                    <img src="images/Miradores/coffee.jpg" alt="Coffee Cup">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Coffee Cup</h5>
                                            <p>Photography</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Miradores.php">
                                    <img src="images/Miradores/farmerboy.jpg" alt="Farmerboy">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Farmerboy</h5>
                                            <p>Branding</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Miradores.php">                        
                                    <img src="images/Miradores/judah.jpg" alt="Judah">                       
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Judah</h5>
                                            <p>Web Design</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Miradores.php">
                                    <img src="images/Miradores/embossed-paper.jpg" alt="Embossed Paper">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Embossed Paper</h5>
                                            <p>Branding</p>
                                        </div>
                                    </div>                                                
                                </a>                   

                            </div>
                        </div>  <!-- item end -->

                    </div> <!-- /Miradores-wrapper -->

                </div> <!-- /twelve -->

            </div>  <!-- /row -->

        </section> <!-- /Miradores -->

        <!-- Deporte
                       ================================================== -->
        <section id="Deporte">

            <div class="row section-head">

                <div class="twelve columns">

                    <h1>Deporte<span>.</span></h1>

                    <hr />

                    <p>Disfruta o practica los mejores eventos deportivos de la ciudad
                    </p>

                </div>

            </div>

            <div class="row items">

                <div class="twelve columns">

                    <div id="sitio-wrapper" class="bgrid-fourth s-bgrid-third mob-bgrid-half group">

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Deporte.php">
                                    <img src="images/Deporte/grizzly.jpg" alt="Grizzly">
                                    <div class="overlay"></div>                       
                                    <div class="sitio-item-meta">
                                        <h5>Grizzly</h5>
                                        <p>Photography</p>
                                    </div>                         
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Deporte.php">
                                    <img src="images/Deporte/hotel.jpg" alt="Hotel Sign">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Hotel Sign</h5>
                                            <p>Webdesign</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid stack item">
                            <div class="item-wrap">

                                <a href="Deporte.php">
                                    <img src="images/Deporte/beetle.jpg" alt="Beetle">                        
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Beetle</h5>
                                            <p>Branding</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Deporte.php">
                                    <img src="images/Deporte/banjo-player.jpg" alt="Banjo Player">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Banjo Player</h5>
                                            <p>Videography</p>
                                        </div>
                                    </div>                       
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Deporte.php">
                                    <img src="images/Deporte/coffee.jpg" alt="Coffee Cup">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Coffee Cup</h5>
                                            <p>Photography</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Deporte.php">
                                    <img src="images/Deporte/farmerboy.jpg" alt="Farmerboy">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Farmerboy</h5>
                                            <p>Branding</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Deporte.php">                        
                                    <img src="images/Deporte/judah.jpg" alt="Judah">                       
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Judah</h5>
                                            <p>Web Design</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Deporte.php">
                                    <img src="images/Deporte/embossed-paper.jpg" alt="Embossed Paper">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Embossed Paper</h5>
                                            <p>Branding</p>
                                        </div>
                                    </div>                                                
                                </a>                   

                            </div>
                        </div>  <!-- item end -->

                    </div> <!-- /Deporte-wrapper -->

                </div> <!-- /twelve -->

            </div>  <!-- /row -->

        </section> <!-- /Deporte -->

        <!-- Cultura
                       ================================================== -->
        <section id="Cultura">

            <div class="row section-head">

                <div class="twelve columns">

                    <h1>Cultura<span></span></h1>

                    <hr />

                    <p>Aprende de historia con los monumentos mas represntativos en la capital
                    </p>

                </div>

            </div>

            <div class="row items">

                <div class="twelve columns">

                    <div id="sitio-wrapper" class="bgrid-fourth s-bgrid-third mob-bgrid-half group">

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Cultura.php">
                                    <img src="images/Cultura/grizzly.jpg" alt="Grizzly">
                                    <div class="overlay"></div>                       
                                    <div class="sitio-item-meta">
                                        <h5>Grizzly</h5>
                                        <p>Photography</p>
                                    </div>                         
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Cultura.php">
                                    <img src="images/Cultura/hotel.jpg" alt="Hotel Sign">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Hotel Sign</h5>
                                            <p>Webdesign</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid stack item">
                            <div class="item-wrap">

                                <a href="Cultura.php">
                                    <img src="images/Cultura/beetle.jpg" alt="Beetle">                        
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Beetle</h5>
                                            <p>Branding</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Cultura.php">
                                    <img src="images/Cultura/banjo-player.jpg" alt="Banjo Player">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Banjo Player</h5>
                                            <p>Videography</p>
                                        </div>
                                    </div>                       
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Cultura.php">
                                    <img src="images/Cultura/coffee.jpg" alt="Coffee Cup">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Coffee Cup</h5>
                                            <p>Photography</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Cultura.php">
                                    <img src="images/Cultura/farmerboy.jpg" alt="Farmerboy">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Farmerboy</h5>
                                            <p>Branding</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Cultura.php">                        
                                    <img src="images/Cultura/judah.jpg" alt="Judah">                       
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Judah</h5>
                                            <p>Web Design</p>
                                        </div>
                                    </div>                        
                                </a>

                            </div>
                        </div> <!-- /item -->

                        <div class="bgrid item">
                            <div class="item-wrap">

                                <a href="Cultura.php">
                                    <img src="images/Cultura/embossed-paper.jpg" alt="Embossed Paper">
                                    <div class="overlay">
                                        <div class="sitio-item-meta">
                                            <h5>Embossed Paper</h5>
                                            <p>Branding</p>
                                        </div>
                                    </div>                                                
                                </a>                   

                            </div>
                        </div>  <!-- item end -->

                    </div> <!-- /Cultura-wrapper -->

                </div> <!-- /twelve -->

            </div>  <!-- /row -->

        </section> <!-- /Cultura -->



        <!-- login -->

        <section id="login">


        </section>  <!-- /login-->



        <!-- Footer
        ================================================== -->

        <!-- /footer -->


        <!-- Java Script
        ================================================== -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>   
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/jquery.fittext.js"></script>
        <script src="js/backstretch.js"></script> 
        <script src="js/waypoints.js"></script>  
        <script src="js/main.js"></script>
        <script>        function ocultar() {
                document.getElementById('nuevoLugar').style.display = 'none';
                document.getElementById('login').style.display = 'none';
            }</script>

    </body>

</html>