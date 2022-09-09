<?php

include('db.php');


mysqli_select_db($conexion, 'validar');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];

$s="SELECT * FROM personal where usuario = '$USUARIO' && password = '$PASSWORD'";

$result = mysqli_query($conexion, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['usuario'] = $USUARIO;
    header('location:ingreso.html');
}
else{
    include("index.html");
    ?>
    <h1>ERROR DE AUTENTICACIÓN, LA CUENTA NO EXISTE O ESTÁ MAL COLOCADA</h1>
    <?php
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