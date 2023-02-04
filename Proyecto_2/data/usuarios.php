<?php 

$nombre = $_POST['nombre'];
$apelldios = $_POST['apellidos'];
$email = $_POST['email'];
$contrasenia = $_POST['contrasenia'];
$control;

$array = array("nombre" => $nombre, "apellidos" => $apelldios, "email" => $email, "contrasenia" => $contrasenia);

if($nombre === '' || $apelldios === '' || $email === '' || $contrasenia === ''){
    $contral = false;
}else{ 
    $control = true;
if(file_exists("usuarios.json")){
    $contenido = file_get_contents("usuarios.json");
    $data = json_decode($contenido);
    array_push($data, $array);
    file_put_contents("usuarios.json", json_encode($data));
}else{
    $data = array();
    array_push($data, $array);
    $f = fopen("usuarios.json", "w");
    fwrite($f, json_encode($data));
    fclose($f);
}
if($control == false) {
    header("Location: http://localhost/forms/formulario_error.html");
}else if($control == true) {
    header("Location: http://localhost/forms/formulario_completo.php");
}
}
?>