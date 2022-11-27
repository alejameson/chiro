<?php

// Cargando informacion de .ini
function config_read($config_file) {
    return parse_ini_file($config_file, true);
}

// Actualiza una nueva configuración en datos de archivo inicial cargados
function config_set(&$config_data, $section, $key, $value) {
    $config_data[$section][$key] = $value;
}

// Organiza los datos de configuración del archivo ini de nuevo en el disco.
function config_write($config_data, $config_file) {
    $new_content = '';
    foreach ($config_data as $section => $section_content) {
        $section_content = array_map(function($value, $key) {
            return "$key=$value";
        }, array_values($section_content), array_keys($section_content));
        $section_content = implode("\n", $section_content);
        $new_content .= "[$section]\n$section_content\n";
    }
    file_put_contents($config_file, $new_content);
}

// Función abreviada para actualizar un único valor de configuración en un archivo.
function config_set_file($config_file, $section, $key, $value) {
    $config_data = config_read($config_file);
    config_set($config_data, $section, $key, $value);
    config_write($config_file, $section, $key, $value);
}

// Variables de configuracion necesarias.
$config_file = "informacion.ini";
$nombre = $_POST['nombre'];
$clave = $_POST['clave'];
$email = $_POST['email'];

// Carga
$config_data = config_read("informacion.ini");
// Setea los multiples valores
config_set($config_data, "Detalles del usuario $nombre", "nombre", $nombre);
config_set($config_data, "Detalles del usuario $nombre", "email", $email);
config_set($config_data, "Detalles del usuario $nombre", "clave", $clave);
// Los guarda
config_write($config_data, $config_file);


echo "<br>";
echo "<div align='center'><h3>Exito el usuario $nombre, se ha registrado!</h3>";
echo "<br>";
echo "<a href='leerusuarios.php'>Ver usuarios registrados</div></div>";

?>