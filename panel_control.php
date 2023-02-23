<?php include("configuracion.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/editar.css">
    <title>Panel de Control</title>
</head>
<body 
 style="background:url(assets/images/page-bg.jpg) no-repeat;
    background-size: cover;
    height:100%;
    font-family: 'Hind', sans-serif;"
>
    <!-- Start Navigation Bar -->
  <h1 style="display: flex;
    justify-content: center;
    color: red">
    Panel de control
  </h1>
<nav class="navbar">
  <ul class="menu">
    <li>
      <a class="hasDropdown" href="#">Session 1 <i class="fa fa-angle-down"></i></a>

      <ul class="container">
        <div class="container__list">
          <div class="container__listItem">
            <div><a href="session1.php" style="color: #DB6356; padding: 0px">Titulos y Subtitulos</a></div>
          </div>
      </ul>
    </li>
    <li>
      <a class="hasDropdown" href="#">Session 2 <i class="fa fa-angle-down"></i></a>
      <ul class="container has-multi">
        <div class="container__list container__list-multi">
          <div class="container__listItem">
            <div>Title 1</div>
          </div>
          <div class="container__listItem">
            <div>Title 2</div>
          </div>
          <div class="container__listItem">
            <div>Title 3</div>
          </div>
          <div class="container__listItem">
            <div>Title 4</div>
          </div>
        </div>
      </ul>
    </li>
    <li>
      <a href="#">Session 3</a>
    </li>
    <li>
      <a href="#">Session 4</a>
    </li>
    <li>
      <a href="index.php">Portfolio</a>
    </li>
    <ul>
</nav>
<!-- End Navigation Bar -->
  <div style="display: flex; justify-content: center">
    <?php include("components/footer.php");?> 
  </div>
</body>
</html>