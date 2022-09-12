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
    
        <title>Blog; Invierno</title>

    
        
         <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
 <?php require 'partials/header.php' ?>
      <h1 class="titulo"> INVIERNO  </h1>

         <br> <br><br> <br><br> <br>

         <p>En el latín es donde podemos establecer que se encuentra el origen etimológico del término invierno. En concreto, emana de “hibernus”, que significa “relativo al invierno” y que, a su vez, emana de “hiems” que puede traducirse como “frío”. </p>
         <p>El invierno es la estación del año donde se registran las temperaturas más bajas. A nivel astronómico, se inicia con el solsticio de invierno y finaliza con el equinoccio de primavera.</p>
        <P>En el hemisferio norte, el invierno se desarrolla desde el 21 de diciembre hasta el 21 de marzo, cuando comienza la primavera. En el hemisferio sur, en cambio, se pone en marcha el 21 de junio y se extiende hasta el 21 de septiembre. Estas fechas, de todos modos, pueden variar mínimamente de acuerdo al año.</P>


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

     
}

    </body>
</html>