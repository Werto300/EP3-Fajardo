<?php session_start(); 
//datos para establecer la conexion con la base de mysql.
require "cfg/conexion.php";

$con=mysqli_connect("127.0.0.1","root","","examen-fajardo");

// verificamos si se han enviado ya las variables necesarias.
if (isset($_GET["id"])) {
    $id = $_GET["id"];


                $query = 'DELETE FROM SALA_REMOTA WHERE id_sala_remota='.$id;
                mysqli_query($con, $query) or die(mysql_error());
}

   header('Location: listar.php');
?>