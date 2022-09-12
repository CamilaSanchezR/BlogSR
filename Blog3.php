<?php

  session_start();

  if (!isset($_SESSION['user_id'])) {
    header('Location: /php-login/login.php');
    $message = 'No estas registrado';
  }


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
    
        <title>Blog: Primaver</title>

        <!-- Core theme CSS (includes Bootstrap)-->
         <link rel="stylesheet" href="assets/css/style.css">
      
    </head>
    <body>
         <?php require 'partials/header.php' ?>
     <h1 class="titulo"> PRIMAVERA  </h1>

         <br> <br><br> <br><br> <br>

     <p> La primavera es una de las estaciones del año, la que le sigue al invierno y antecede al verano. El origen etimológico del término se refiere al “primer verdor”, en referencia a que, en la época primaveral, las plantas reverdecen.</p>
     <p>A nivel astronómico, la primavera se inicia entre el 22 y 23 de septiembre en la zona del hemisferio sur y entre el 20 y el 21 de marzo en la región norte del planeta. Su finalización se produce en torno al 21 de diciembre (sur) o al 21 de junio (norte)</p>
     <p></p>

        <!-- Comentario section-->
         <form method="POST" action="enviarcomentario.php">
            <section id="contact">
                <div>
                    <div>
                        <div>
                            
                            <br>
                           
                            </p>
                                <br>
    
                                <div>
                                    <h3>¡Haz un Comentario!</h3>
                               
                                    <br>
                                <div >
                                    <label for="nombre">Nombre</label>
                                    <!--<label for="nombre">Nombre</label>
                                    <input name="nombre" type="text" id="nombre" placeholder="Escribe tu nombre" required >-->
                                    </div>
                            
                                    
                            <br>
                                    <div >
                                    <label for="comentario" ></label>
                                    <textarea  name="comentario" cols="30" rows="5" type="text" id="comentario" 
                                    placeholder="Escribe tu comentario......"></textarea>
                                    </div>
                            <br>
                            <input type="submit"  value="Enviar Comentario">
                            <br>
                            <br>
                            <br>
                                    <?php

$conexion=mysqli_connect("localhost","root","","php_proyecto_database"); 
$resultado= mysqli_query($conexion, 'SELECT * FROM comentarios');

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
                            
                                </form>
                          
                </div>
                
            </section>

     


    </body>
</html>
