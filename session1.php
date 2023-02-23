<?php include("configuracion.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/session1.css">
    <title>Document</title>
</head>
<body>
    <h1 class="edit_title">Editar Session 1</h1>
    <div id="form-main">
    <div id="form-div">
        <form class="form" id="form1" action="session1_accion.php" method="post" novalidate="novalidate">
      
            <p class="name">
                <label for="title1" class="edit_title">Titulo 1</label>
                <input 
                class="validate[required,custom[onlyLetter],length[0,100]] feedback-input"
                type="text" 
                id="title1" 
                name="title1" 
                placeholder="Titulo" 
                value="<?php echo $contenido["session1"]["title1"];?>" />
            </p>
      
            <p class="text">
            <label for="subtitle1" class="edit_title">Subtitulo 1</label>
                <input class="validate[required,custom[email]] feedback-input"
                type="text" 
                id="subtitle1" 
                name="subtitle1" 
                placeholder="Titulo" 
                value="<?php echo $contenido["session1"]["subtitle1"];?>" />
            </p>

            <p class="name">
                <label for="title1" class="edit_title">Titulo 2</label>
                <input 
                class="validate[required,custom[onlyLetter],length[0,100]] feedback-input"
                type="text" 
                id="title2" 
                name="title2" 
                placeholder="Titulo" 
                value="<?php echo $contenido["session1"]["title2"];?>" />
            </p>
      
            <p class="text">
            <label for="subtitle1" class="edit_title">Subtitulo 2</label>
                <input class="validate[required,custom[email]] feedback-input"
                type="text" 
                id="subtitle2" 
                name="subtitle2" 
                placeholder="Titulo" 
                value="<?php echo $contenido["session1"]["subtitle2"];?>" />
            </p>
      
      
            <div class="submit">
                <input type="submit" value="EDIT" id="button-blue"/>
                <div class="ease"></div>
            </div>
        </form>
    </div>
</body>
</html>