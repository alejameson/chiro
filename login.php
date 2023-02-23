<!DOCTYPE html>
<html>
    <head>
        <title>Formulário de login HTML/CSS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="./assets/css/index.css">
    </head>
    <body>
        <div class="login-box">
            <h1>Login</h1>
            <form action="login_accion.php" method="post">
                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Email" id="email" name="email" value="">
                </div>

                <div class="textbox">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" placeholder="Password" id="clave" name="clave" value="">
                </div>

                <input type="submit" class="btn" name="" value="Entrar">
            </form>
        </div>
    </body>
</html>