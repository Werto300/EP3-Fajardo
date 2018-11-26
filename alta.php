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
    
    
    
    // Hay campos en blanco
    if($name==NULL|$responsable==NULL|$telefono==NULL|$email==NULL|$ip==NULL) {
        echo "un campo est&aacute; vacio.";
        formRegistro();
    }else{

                $query = 'INSERT INTO sala_remota (nombre, responsable, telefono, email_responsable, ip) VALUES ("'.$name.'","'.$responsable.'","'.$telefono.'","'.$email.'","'.$ip.'")';
                mysqli_query($con, $query);
                echo 'La sala '.$name.' ha sido registrada de manera satisfactoria.<br/>';
   header('Location: listar.php');
            }
        }

?>