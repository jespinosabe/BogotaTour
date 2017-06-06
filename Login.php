<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Crea tu Cuenta</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">


    </head>

    <body>

        <!-- Form Mixin-->
        <!-- Input Mixin-->
        <!-- Button Mixin-->
        <!-- Pen Title-->
        <div class="pen-title">
            <h1>Bienvenidos a Bogota Tour conoce tus destinos y comenta tus experiencias</h1>
        </div>
        <!-- Form Module-->
        <div class="module form-module">
            <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                <div class="tooltip">Click Me</div>
            </div>
            <div class="form">
                <h2>Ingresa en tu cuenta</h2>
                <form method="post" action="control.php">
                    <input type="email" name="correo_usuario" id="correo_usuario" placeholder="Correo"/>
                    <input type="password" name="password" id="password" placeholder="Password"/>
                    <input type="submit" name="ingresar" id="ingresar" value="Ingresar">
                    
                </form>
            </div>
            <div class="form">
                <h2>Crea tu cuenta</h2>
                <form method="post" enctype="multipart/form-data" action="control.php">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required=""/>
                    <input type="email" name="correo_usuario" id="correo_usuario" placeholder="Correo" required=""/>
                    <input type="password" name="password" id="password" placeholder="Password" required=""/>
                    <input type="date" name="fecha" id="fecha" placeholder="Edad" required=""/>
                    <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" required=""/>
                    <input type="text" name="direccion_cliente" id="direccion_cliente" placeholder="Direccion" required=""/>
                    <input type="tel" name="telefono_cliente" id="telefono_cliente"  placeholder="Telefono" required=""/>
                    <label class="m">Sexo:</label><br><br>
                    <label class="m"> Masculino</label><input type="radio" name="genero" value="masculino" required> 
                   <label class="m"> Femenino</label><input type="radio" name="genero" value="femenino" required> <br>
                    <label>Fotografia:</label><input name="fotografia" id="fotografia" type="file"  required />
                    <div class="g-recaptcha" data-sitekey="6LcqqhsUAAAAAOdiv2UYdqlAVXmp_Hp2IkdqXRJP" data-theme="dark"></div><br>

                   
                     <input type="submit" value="Registrar" name="registrar"  id="registrar" >
<!--                     onclick="location='index.php'"-->
                </form>

            </div>
            <div class="cta"><a href="http://andytran.me">Forgot your password?</a></div>
        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://codepen.io/andytran/pen/vLmRVp.js'></script>

        <script src="js/index.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>

    </body>
</html>
