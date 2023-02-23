<?php include("configuracion.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>
    <?php
        var_dump($_POST);
        // Carga
        $config_data = config_read($filepath);
        // Setea los multiples valores
        config_set($config_data, "session1", "title1", $_POST['title1']);
        config_set($config_data, "session1", "subtitle1", $_POST['subtitle1']);
        config_set($config_data, "session1", "title2", $_POST['title2']);
        config_set($config_data, "session1", "subtitle2", $_POST['subtitle2']);
        // Los guarda
        config_write($config_data, $filepath);
        //echo "Registro almacenado correctamente";
        echo '<script language="javascript">
             alert("Registro almacenado correctamente");
             window.location.href="panel_control.php"
             </script>';
    ?>
</p>
</body>
</html>