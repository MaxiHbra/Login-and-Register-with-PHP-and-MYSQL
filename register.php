<?php
session_start();
$conexion=mysqli_connect("localhost","root","","validar");
mysqli_select_db($conexion, 'validar');


$USUARIO=$_POST['usuario1'];
$PASSWORD=$_POST['password1'];

$s="SELECT * FROM personal where usuario = '$USUARIO'";

$result = mysqli_query($conexion, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "Ya existe el usuario";
}
else{
    $reg= "INSERT INTO personal (usuario, password) VALUES ('$USUARIO','$PASSWORD')";
    mysqli_query($conexion, $reg);
    header('location: ingreso.html');
}
?>
<!--
    ▄───▄
    █▀█▀█
    █▄█▄█
    ─███──▄▄
    ─████▐█─█
    ─████───█
    ─▀▀▀▀▀▀▀
 -->