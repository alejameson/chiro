<?php
// Start the session
session_start();
?>
<?php include("configuracion.php");?>
<?php
 /* var_dump($_POST);
 echo "usuario:".$contenido["login"]["email"];
 echo "<br>clave:".$contenido["login"]["clave"];  */
 if (isset($_POST["email"])){
     if ( ($_POST["email"]===$contenido["login"]["email"]) && ($_POST["clave"]===$contenido["login"]["clave"])){
         echo "<script>";
         echo "alert('Bienvenido');";
         echo "</script>";
         header('location: portfolio.html');
         die();
         $_SESSION["email"] = $contenido["login"]["email"];
     }else{
        echo "<script>";
        echo "alert('Usuario invalido');";
        echo "window.history.go(-1);";
        echo "</script>";
        die();
     }
 }else{
     echo "No esta en el sistema en este momento";
 }
 
 /* header('location: http://localhost/Eccomerce_bauti/homepage.html'); */
 ?>