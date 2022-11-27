<?php 
    //put the file path here
    $filepath='consultas.ini';
    //parse the ini file using default parse_ini_file() PHP function
    $parsed_ini = parse_ini_file($filepath, true);
    //read the array and print
    foreach($parsed_ini as $section=>$values){
        echo "<div style='background: url(./assets/images/page-bg.jpg)'>";
        echo "<h3 align='center' style='color: #FF5733'>$section</h3>";
        foreach($values as $key=>$value){
            echo "<h3 align='center' style='color: white'>$key = $value<br></h3>";
        }
        echo "<br>";
        echo "</div>";
    }
?>