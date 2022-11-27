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
$config_file = "consultas.ini";
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Carga
$config_data = config_read("consultas.ini");
// Setea los multiples valores
config_set($config_data, "Detalles de la consulta $name", "name", $name);
config_set($config_data, "Detalles de la consulta $name", "email", $email);
config_set($config_data, "Detalles de la consulta $name", "subject", $subject);
config_set($config_data, "Detalles de la consulta $name", "message", $message);
// Los guarda
config_write($config_data, $config_file);


echo "<br>";
echo "<div align='center'><h3>Mensaje realizado con exito!</h3>";
echo "<br>";
echo "<a href='leermensajes.php'>Ver mensajes</div></div>";

?>
<!-- $to = "alejameson03@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $cmessage = $_POST['message'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "You have a message from your Bitmap Photography.";

    $logo = 'img/logo.png';
    $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers); -->