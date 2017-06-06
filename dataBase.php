<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of database
 *
 * @author Administrador
 */
class dataBase {

    private $usuario;
    private $contrasena;
    private $servidor;
    private $nomBD;
    private $link;

    function dataBase() {
        $this->usuario = "root";
        $this->contrasena = "";
        $this->servidor = "localhost";
        $this->nomBD = "adminlugares";
        $this->link = "";
    }

    function conectar() {
        $this->link = mysqli_connect($this->servidor, $this->usuario, $this->contrasena);
        mysqli_select_db($this->link, $this->nomBD);

//        echo "conecto";

    }
    function consultar($tabla = "", $campo = "") {
        if ($campo == "") {
            $query = " SELECT * FROM " . $tabla;
        } else {
            $query = " SELECT " . $campo . " FROM " . $tabla;
        }
        $res = mysqli_query($this->link, $query);
        return $res;
    }
    function insertar($fila = array(), $tabla = "") {
        $valoresFila = "";
        while (list($key, $val) = each($fila)) {
            $valoresFila = $valoresFila . "'" . $val . "', ";
        }
        $valoresFila = substr($valoresFila, 0, -2);
   $r=  mysqli_query($this->link, " insert into  " . $tabla . " values (" . $valoresFila . "); ")or die('la consulta fallo' . mysqli_error($this->link));

    }
    
       function consultarLugar($tabla = "", $campo = "", $id_lugar = "") {
        if ($campo == "") {
            $query = "select * from " . $tabla;
        } else {
            $query = "select * from " . $tabla . " where " . $campo . " = " . $id_lugar;
        }
        $res = mysqli_query($this->link, $query);
        return $res;
    }
    

   
}

?>