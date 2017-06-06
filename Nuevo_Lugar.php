<!DOCTYPE HTML>

<html>
    <head>
        <title>Nuevo Lugar o Evento</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="css/estiloform.css" type=" text/css" rel="stylesheet">

    </head>
    <body>
        <h1>INGRESA UN LUGAR QUE NO CONOZCAMOS</h1>


        <div id="paso1">
            <form method="post" enctype="multipart/form-data" action="control.php">
                <h1>Nuevo lugar :</h1>

                <div class="contentform">
                    <div id="sendmessage"> Tu lugar ha sido guardado </div>


                    <div class="leftcontact">
                        <div class="form-group">
                            <label for="IdLugar">Id Lugar:</label><input type="text" name="IdLugar" id="IdLugar" >
                        </div> 
                        
                        <div class="form-group">
                            <p>Nombre<span>*</span></p>
                            <span class="icon-case"><i class="fa fa-unlock"></i></span>
                            <input type="text" name="nombre_lugar" id="nombre_lugar" required/>

                        </div> 

                        <div class="form-group">
                            <p>Categoria <span>*</span></p>
                            <span class="icon-case2"><i class="fa fa-user"></i></span>
                            <select  required name="categoria_lug" id="categoria_lug">
                                <?php
                                require_once 'dataBase.php';
                                $db = new dataBase();
                                $db->conectar();
                                $rec = $db->consultar("categoria_lugar", "nombre_categoria");
                                while ($row = mysqli_fetch_array($rec)) {
                                    ?>
                                <option value="<?php $row[0];?>" ><?php echo $row['nombre_categoria']; ?></option>
                                <?php }
                                ?>
                            </select>
                            <div class="validation"></div>
                        </div>

                        <div class="form-group">
                            <p>Direccion <span>*</span></p>
                            <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
                            <input type="text" name="direccion_lugar" id="direccion_lugar" required/>
                            <div class="validation"></div>
                        </div>

                        <div class="form-group">
                            <p>Telefono <span>*</span></p>	
                            <span class="icon-case"><i class="fa fa-phone"></i></span>
                            <input type="text" name="telefono_lugar" id="telefono_lugar" required/>
                            <div class="validation"></div>
                        </div>

                        



                    </div>

                    <div class="rightcontact">	
                        <div class="form-group">
                            <p>Horario <span>*</span></p>
                            <span class="icon-case"><i class="fa fa-info"></i></span>
                            <input type="text" name="horario_lugar" id="horario_lugar" required=""/>
                            <div class="validation"></div>
                        </div>

                        <div class="form-group">

                            <div class="form-group">
                                <p>Descripcion <span>*</span></p>
                                <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                                <textarea name="descripcion_lug" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné."></textarea>
                                <div class="validation"></div>
                            </div>

                            <p>E-mail <span>*</span></p>	
                            <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                            <input type="email" name="correo_lugar" id="correo_lugar" required/>
                            <div class="validation"></div>
                        </div>



                        <div class="form-group">
                            <p>Fotografia <span>*</span></p>	
                            <span class="icon-case"><i class="fa fa-comment-o"></i></span>
                            <input name="foto_lugar" id="foto_lugar" type="file"  required />
                            <div class="validation"></div>
                        </div>
                    </div>
                </div>
                <input type="submit" name="registrar_lugar" id="registrar_lugar" value="Guardar" class="bouton-contact">


            </form>
        </div>
        <div id="paso2">
            <form>
                <h1>Nuevo Evento :</h1>

                <div class="contentform">
                    <div id="sendmessage"> Tu Evento ha sido guardado </div>


                    <div class="leftcontact">
                        <div class="form-group">
                            <p>Nombre<span>*</span></p>
                            <span class="icon-case"><i class="fa fa-unlock"></i></span>
                            <input type="text" name="nombre_lugar" id="nombre_lugar" required/>

                        </div> 

                        <div class="form-group">
                            <p>Categoria <span>*</span></p>
                            <span class="icon-case2"><i class="fa fa-user"></i></span>
                            <select  required name="categoria" id="categoria">
                                <?php
                                require_once 'dataBase.php';
                                $db = new dataBase();
                                $db->conectar();
                                $rec = $db->consultar("categoria_evento", "nombre_evento");
                                while ($row = mysqli_fetch_array($rec)) {
                                    ?>
                                    <option value="id_tipo"><?php echo $row['nombre_evento']; ?></option>
                                <?php }
                                ?>
                            </select>
                            <div class="validation"></div>
                        </div>

                        <div class="form-group">
                            <p>E-mail <span>*</span></p>	
                            <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                            <input type="email" name="correo_lugar" id="correo_lugar" required/>
                            <div class="validation"></div>
                        </div>	



                        <div class="form-group">
                            <p>Direccion <span>*</span></p>
                            <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
                            <input type="text" name="direccion_lugar" id="direccion_lugar" required/>
                            <div class="validation"></div>
                        </div>

                        <div class="form-group">
                            <p>Telefono <span>*</span></p>	
                            <span class="icon-case"><i class="fa fa-phone"></i></span>
                            <input type="text" name="telefono_lugar" id="telefono_lugar" required/>
                            <div class="validation"></div>
                        </div>



                    </div>

                    <div class="rightcontact">	



                        <div class="form-group">
                            <p>Horario <span>*</span></p>
                            <span class="icon-case"><i class="fa fa-info"></i></span>
                            <input type="text" name="horario_lugar" id="horario_lugar" required=""/>
                            <div class="validation"></div>
                        </div>



                        <div class="form-group">
                            <p>Descripcion <span>*</span></p>
                            <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                            <textarea name="message" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné."></textarea>
                            <div class="validation"></div>
                        </div>

                        <div class="form-group">
                            <p>Fotografia <span>*</span></p>	
                            <span class="icon-case"><i class="fa fa-comment-o"></i></span>
                            <input name="foto_lugar" id="foto_lugar" type="file"  required />
                            <div class="validation"></div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="bouton-contact">Guardar</button>

            </form>
        </div>


        <input type="submit" class="btn" value="Ingresa Lugar" name="Back"  id="Back">
        <input type="submit" class="btn" value="Ingresa Evento" name="Next"  id="Next">


        <!-- Scripts -->
        <script type="text/javascript" src= "js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/EfectoForm.js"></script>

    </body>
</html>