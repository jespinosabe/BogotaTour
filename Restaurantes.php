session_start();
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
     
    <head>

        <!--- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <title>Restaurantes</title>
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
        <link rel="stylesheet" href="css/layout.css" type="text/css" />


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
                        <li><a  href="Restaurantes.php"><i class="fa fa-cutlery"></i>Restaurantes</a></li>
                        <li><a href="CentrosComerciales.php"><i class="fa fa-shopping-bag"></i>Centros Comerciales</a></li>
                        <li><a  href="Bares.php"><i class="fa fa-glass"></i> Bares</a></li>
                        <li><a  href="Clubes.php"><i class="fa fa-institution"></i>Clubes</a></li>
                        <li><a  href="Gimnasios.php"><i class="fa fa-steam"></i> Gimnasios</a></li>
                        <li><a  href="Hoteles.php"><i class="fa fa-hotel"></i>Hoteles</a></li>
                        <li><a  href="Miradores.php"><i class="fa fa-tripadvisor"></i>Miradores</a></li>
                        <li><a  href="Deporte.php"><i class="fa fa-futbol-o"></i>Deporte</a></li>
                        <li><a  href="Cultura.php"><i class="fa fa-camera-retro"></i>Cultura</a></li>
                        <li><a  href="Parques.php"><i class="fa fa-image"></i>Parques</a></li>
                    </ul> 

                </nav> <!-- /nav-wrap -->	      

            </div> <!-- /header-inner -->

        </header>


        <!-- Page Title
        ================================================== -->
        <section id="page-title1">	

            <div class="row">

                <div class="twelve columns">

                    <h1>Restaurantes<span>.</span></h1>
                    <p>Los mejores restaurantes de Bogota.</p>

                </div>			    

            </div> <!-- /row -->	   

        </section> <!-- /page-title -->


        <!-- Content
        ================================================== -->
        <section id="content">


            <div class="row sitio-content">

                <div class="entry tab-whole nine columns centered">

                    <header class="entry-header">

                        <h1 class="entry-title">
                            Restaurantes
                        </h1> 				 



                    </header>





                </div> <!-- /entry -->	      

            </div> <!-- /portfolio-content -->


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
                            if ($categoria_lugar == 1) {
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
                        
                         <div id="comments">
                        <h2>Comentarios</h2>
                        <ul class="commentlist">
                            <li class="comment_odd">
                                <div class="author"><img class="avatar" src="../images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">A Name</a></span> <span class="wrote">wrote:</span></div>
                                <div class="submitdate"><a href="#">August 4, 2009 at 8:35 am</a></div>
                                <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
                            </li>
                        </ul>
                    </div>
                    <h2>Escribe tu comentario</h2>
                    <div id="respond">
                        <form action="#" method="post">
                            <p>
                                <input type="text" name="name" id="name" value="" size="22" required/>
                                <label for="name"><small>Name</small></label>
                            </p>
                            <p>
                                <input type="text" name="email" id="email" value="" size="22" required/>
                                <label for="email"><small>Mail </small></label>
                            </p>
                            <p>
                                <textarea name="comment" id="comment" cols="100%" rows="2"></textarea>
                                <label for="comment" style="display:none;"><small>Comment (required)</small></label>
                            </p>
                            <p>
                                <input name="submit" type="submit" id="submit" value="Submit Form" />
                                &nbsp;
                                <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
                            </p>
                        </form>
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
        <script>window.jQuery || document.write('<script src = "js/jquery-1.10.2.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>   
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/jquery.fittext.js"></script>
        <script src="js/backstretch.js"></script> 
        <script src="js/waypoints.js"></script>  
        <script src="js/main.js"></script>

    </body>

</html>