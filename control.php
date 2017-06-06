<?php
define('DB_SERVER','localhost'); 
define('DB_NAME','adminlugares'); 
define('DB_USER','root'); 
define('DB_PASS',''); 
$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS); 
mysql_select_db(DB_NAME,$con); 
session_start();
include  'js/ocultar.js';
require_once 'captcha/ReCaptcha.php';
require_once 'captcha/RequestMethod.php';
require_once 'captcha/RequestParameters.php';
require_once 'captcha/Response.php';
require_once 'captcha/RequestMethod/Post.php';
require_once 'captcha/RequestMethod/Socket.php';
require_once 'captcha/RequestMethod/SocketPost.php';
require_once 'dataBase.php';

if (isset($_POST['registrar'])) {
    $db = new dataBase();
    $db->conectar();

    $sql = 'SELECT * FROM usuarios';
    $res = mysqli_query($sql);
    $verificar_usuario = 0;

    while ($result = mysqli_fetch_object($res)) {
        if ($result->correo_usuario == $_POST['correo_usuario']) {
            $verificar_usuario = 1;
        }
    }

    if ($verificar_usuario == 0) {
        $foto = $_FILES["fotografia"]["name"];
        $trozos = explode(".", $foto);
        $ruta = $_FILES["fotografia"]["tmp_name"];
        $exten = $_POST['nombre'] . "." . end($trozos);
        $destino = "images/Perfil/" . $foto;
        $destino2 = "images/Perfil/" . $exten;
        copy($ruta, $destino);
        rename($destino, $destino2);

        $db->insertar(array($_POST['nombre'], $_POST['correo_usuario'], $_POST['password'], $_POST['fecha'], $_POST['ciudad'], $_POST['direccion_cliente'], $_POST['telefono_cliente'], $_POST['genero'], $destino2), "usuarios");

        echo 'Usted se ha registrado correctamente.';
    } else {
        echo 'Este correo ya ha sido registrado anteriormente.';
    }


    header("Location: index.php");
}

function verificar_login($user, $password, &$result) {
    $sql = "SELECT * FROM usuarios WHERE correo_usuario = '$user' and password = '$password'";
    $rec = mysql_query($sql);

    $count = 0;

    while ($row = mysql_fetch_object($rec)) {
        $count++;
        $result = $row;
    }

    if ($count == 1) {
        return 1;
    } else {
        return 0;
    }
}

if(!isset($_SESSION['userid'])) { 
if (isset($_POST['ingresar'])) {
    if (verificar_login($_POST['correo_usuario'], $_POST['password'], $result) == 1) {
        echo 'ingreso, muy bien';
        header("Location: index.php");
        ?>
<script>function ocultar()</script>
<?php
    } else {
        echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';
    }
}
}

if (isset($_POST['registrar_lugar'])) {
    $db = new dataBase();
    $db->conectar();
    $foto = $_FILES["foto_lugar"]["name"];
    $trozos = explode(".", $foto);
    $ruta = $_FILES["foto_lugar"]["tmp_name"];
    $exten = $_POST['nombre_lugar'] . "." . end($trozos);
    $destino3 = "images/Lugares/" . $foto;
    $destino4 = "images/Lugares/" . $exten;
    copy($ruta, $destino3);
    rename($destino3, $destino4);
    $db->insertar(array($_POST['IdLugar'], $_POST['nombre_lugar'], $_POST['categoria_lug'], $_POST['direccion_lugar'], $_POST['telefono_lugar'], $_POST['horario_lugar'], $_POST['descripcion_lug'], $_POST['correo_lugar'], $destino4), "lugares");
    echo $db;
    header("Location: index.php");
}




//    $recaptcha = new \ReCaptcha\ReCaptcha("6LcqqhsUAAAAAKpk6h2Ok0mHVLxV2parQqiHd2k5");
//    $respuesta = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
//    if ($respuesta->isSuccess()) {
//        echo 'El formulario ha sido validado';
//        exit;
//    } else {
//        echo 'Se ha devuelto el siguiente error:<br>';
//        foreach ($respuesta->getErrorCodes() as $error_code) {
//            echo '<tt>' . $error_code . '</tt> ';
//        }
//        exit;
//    }
?>