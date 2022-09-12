<?php  

session_start();

 if (!isset($_SESSION['user_id'])) {
    header('Location: /php-login');
    $message = 'No estas registrado';
  }
?>


<HTML>
<HEAD>
<TITLE>Consulta Comentario</TITLE>
<link rel="stylesheet" href="assets/css/style.css">
</HEAD>
<BODY>
	<?php require 'partials/header.php' ?>
<?php  

$conexion=mysqli_connect("localhost","root","","php_proyecto_database"); 
$id = substr($_SESSION['user_email'],0,strpos($_SESSION['user_email'], '@'));
$resultado= mysqli_query($conexion, "SELECT * FROM comentarios WHERE nombre='".$id."'");

while($comentario = mysqli_fetch_object($resultado)){

    ?>

    <b><?php echo($comentario->nombre);  ?></b>(<?php echo ($comentario->fecha); ?>) dijo: 
    <br />
    <?php echo ($comentario->comentario);?>
    <br />
    <hr />




    <?php
}

?>
</BODY>
</HTML>