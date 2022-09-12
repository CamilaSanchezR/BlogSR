<?php  

session_start();

$conexion=mysqli_connect("localhost","root","","php_proyecto_database");  
$nombre = substr($_SESSION['user_email'],0,strpos($_SESSION['user_email'], '@'));
$comentario= $_POST['comentario'];
$resultado=mysqli_query($conexion,'INSERT INTO comentarios (nombre, comentario) VALUES ("'.$nombre.'", "'.$comentario.'")');
header('Location: index.php');




?>