<?php session_start(); 
//datos para establecer la conexion con la base de mysql.
require "cfg/conexion.php";
$con=mysqli_connect("127.0.0.1","root","","examen-fajardo");
// verificamos si se han enviado ya las variables necesarias.
if (isset($_GET["nom"])) {
    $name = $_GET["nom"];
    $responsable = $_GET["res"];
    $telefono = $_GET["tel"];
    $email = $_GET["mail"];
    $ip = $_GET["ip"];
    $servicios = $_GET["servicios"];
    $id = $_GET["id"];
    
    
    
    
    // Hay campos en blanco
    if($name==NULL|$responsable==NULL|$telefono==NULL|$email==NULL|$ip==NULL|$servicios==NULL) {
        echo "un campo est&aacute; vacio.";
        formRegistro();
    }else{

                $query = 'UPDATE SALA_REMOTA SET nombre="'.$name.'", responsable="'.$responsable.'", telefono="'.$telefono.'", email_responsable="'.$email.'", ip="'.$ip.'", servicios="'.$servicios.'" WHERE id_sala_remota='.$id;
                mysqli_query($con, $query);
                //echo 'La sala '.$name.' se ha modificado satisfactoria.<br/>';
   header('Location: listar.php');
            }
        }

?>