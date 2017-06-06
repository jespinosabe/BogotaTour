<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
    <head>

        <!--- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <title>Bares</title>
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

    <body>

        <div id="top"></div>
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
                         <li class="current"><a href="index.php">Inicio</a></li>
                        <li><a class="smoothscroll" href="Restaurantes.php"><i class="fa fa-cutlery"></i>Restaurantes</a></li>
                        <li><a class="smoothscroll" href="CentrosComerciales.php"><i class="fa fa-shopping-bag"></i>Centros Comerciales</a></li>
                        <li><a class="smoothscroll" href="Bares.php"><i class="fa fa-glass"></i> Bares</a></li>
                        <li><a class="smoothscroll" href="Clubes.php"><i class="fa fa-institution"></i>Clubes</a></li>
                        <li><a class="smoothscroll" href="Gimnasios.php"><i class="fa fa-steam"></i> Gimnasios</a></li>
                        <li><a class="smoothscroll" href="Hoteles.php"><i class="fa fa-hotel"></i>Hoteles</a></li>
                        <li><a class="smoothscroll" href="Miradores.php"><i class="fa fa-tripadvisor"></i>Miradores</a></li>
                        <li><a class="smoothscroll" href="Deporte.php"><i class="fa fa-futbol-o"></i>Deporte</a></li>
                        <li><a class="smoothscroll" href="Cultura.php"><i class="fa fa-camera-retro"></i>Cultura</a></li>
                        <li><a class="smoothscroll" href="Parques.php"><i class="fa fa-image"></i>Parques</a></li>
                    </ul> 

                </nav> <!-- /nav-wrap -->	      

            </div> <!-- /header-inner -->

        </header>


        <!-- Page Title
        ================================================== -->
        <section id="page-title3">	

            <div class="row">

                <div class="twelve columns">

                    <h1>Bares<span>.</span></h1>
                    <p>Los mejores bares para bailar y tomar a gusto en Bogota.</p>

                </div>			    

            </div> <!-- /row -->	   

        </section> <!-- /page-title -->


        <!-- Content
        ================================================== -->
        <section id="content">

            


            <div class="row more-projects">

      

                <div class="tab-whole nine columns centered">

                    <div id="sitio-wrapper" class="bgrid-half tab-bgrid-halfgroup">
                            <?php
                            require_once 'dataBase.php';
                            $db = new dataBase();
                            $db->conectar();
                            $rec = $db->consultar("lugares");
                            
                            while ($row = mysqli_fetch_array($rec)) {
                                $id_lugar = $row['0'];
                                $nombre_lugar = $row['1'];
                                $categoria_lugar = $row['2'];
                                $direccion = $row['3'];
                                $telefono = $row['4'];
                                $horario = $row['5'];
                                $correo = $row['6'];
                                $imagen = $row['7'];
                                if ($categoria_lugar==2){
                                    
                                
                                ?>
                        
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">                               
                                            <div class="productinfo text-center">
                                                <a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href='#informacion'><img src="<?php echo $imagen; ?>" alt=""></a>
                                                <h2><?php echo $nombre_lugar ?></h2>
                                                <p><span> Direccion: </span>  <?php echo $direccion ?><p>
                                                <p><span> Horario: </span>  <?php echo $horario ?><p>
                                                <p><span> Telefono: </span>  <?php echo $telefono ?><p>
                                                <p><span> Correo: </span>  <?php echo $correo ?><p>                                                  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                }
                            ?>
                    
                    </div> <!-- /portfolio-wrapper -->

                </div> <!-- /nine -->

            </div> <!-- /more-projects --> 

        </section> <!-- /content -->  


        <!-- Footer
        ================================================== -->
        <footer>
<ul class="icons">
                    <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
                    <li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
                </ul>
                <p>&copy; desarrollado por Jonathan Andres Espinosa Beltran.</p>

        </footer> <!-- /footer -->


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

    </body>

</html>