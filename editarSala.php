<?php session_start(); 
//datos para establecer la conexion con la base de mysql.
require "cfg/conexion.php";
$con=mysqli_connect("127.0.0.1","root","","examen-fajardo");
// verificamos si se han enviado ya las variables necesarias.
if (isset($_GET["id"])) {
    $id = $_GET["id"];


    $query="select * from SALA_REMOTA WHERE id_sala_remota=$id";
    mysqli_query($con, $query);
    
     $resultado=mysqli_query($con, $query);
     while ($dato=mysqli_fetch_array($resultado)) {
       $nom = $dato['nombre'];
       $res = $dato['responsable'];
       $tel = $dato['telefono'];
       $mail = $dato["email_responsable"];
       $ip = $dato["ip"];
       $servicios = $dato["servicios"];
       $id = $dato["id_sala_remota"];
    
   }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS
    <link href="css/sb-admin-2.css" rel="stylesheet">
    -->
    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>
<body>
    <div class="container">
<form role="form" action="editar.php">
    <input name= "id" type="hidden" value= "<?=$id;?>">
           
  <div class="form-group">
    <label for="ejemplo_email_1">Nombre</label>
    <input name= "nom" type="text" class="form-control" id="juan Perez"
           placeholder="Introduce Nombre" value= "<?=$nom;?>">
  </div>
  <div class="form-group">
    <label for="ejemplo_email_1">Responsable</label>
    <input name= "res" type="text" class="form-control" id="juan Perez"
           placeholder="Introduce nombre del responsable" value="<?=$res;?>" >
  </div>
  <div class="form-group">
    <label for="ejemplo_password_1">Telefono</label>
    <input name= "tel" type="text" class="form-control" id="ejemplo_password_1" 
           placeholder="Introduce Teléfono" value="<?=$tel;?>" >
  </div>
    <div class="form-group">
    <label for="ejemplo_email_1">E-mail</label>
    <input name= "mail" type="email" class="form-control" id="juan Perez"
           placeholder="Introduce E-maile" value= "<?=$mail;?>">   
           
  </div>
    <div class="form-group">
    <label for="ejemplo_email_1">IP</label>
    <input name= "ip" type="text" class="form-control" id="juan Perez"
           placeholder="Introduce IP"value= "<?=$ip;?>">
  </div>
    <div class="form-group">
    <label for="ejemplo_email_1">Servicios</label>
    <input name= "servicios" type="text" class="form-control" id="juan Perez"
           placeholder="Introduce servicios" value= "<?=$servicios;?>">
  </div>
  <button type="submit" class="btn btn-success">Enviar</button>
</form>
</div>

    <!-- jQuery
    <script src="js/jquery.js"></script>
    -->

    <!-- Bootstrap Core JavaScript
    <script src="js/bootstrap.min.js"></script>
    -->

    <!-- Metis Menu Plugin JavaScript
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>
    -->

    <!-- Custom Theme JavaScript
    <script src="js/sb-admin-2.js"></script>
    -->

</body>