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
    
        <title>Blog: Verano </title>

        
        <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body>
          <?php require 'partials/header.php' ?>



         <h1 class="titulo"> VERANO </h1>

         <br> <br><br> <br><br> <br>

         <p>El verano es la estación del año que tiene lugar entre la primavera y el otoño. Se trata de la época más calurosa del año, con las marcas térmicas más elevadas. En el hemisferio septentrional, el verano tiene lugar entre junio, julio y agosto, mientras que en el meridional, corresponde a diciembre, enero y febrero. Cabe destacar que, cuando en el hemisferio norte tiene lugar la época estival, en el hemisferio sur es invierno (y viceversa). </p>
        <p>Durante el periodo veraniego, los días se alargan (en relación a las demás estaciones) y las noches duran menos horas. El solsticio (que en el hemisferio sur se produce el 21 de diciembre, mientras que en el norte es el 21 de junio) define el inicio del verano, que se prolonga hasta el 21 de marzo (en el hemisferio sur) o el 21 de septiembre (en el hemisferio norte).</p>
      

        <!-- Comentario section-->
        <form method="POST" action="enviarcomentario.php">
        
                <div >
                    <div>
                        <div>
                            
                            <br>
                           
                            </p>
                                <br>
    
                                <div>
                                    <h3>¡Haz un Comentario!</h3>
                               
                                    <br>
                                <div >
                                    
                                  <INPUT TYPE="hidden" NAME="id_entrada" id="id_entrada"> 
                                 </div>
                                <div >
                                     <!-- Comentario section<label for="nombre">Nombre</label>
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
