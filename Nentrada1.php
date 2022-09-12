<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['titulo']) && !empty($_POST['contenido'])) {
    $sql = "INSERT INTO contenido (titulo, contenido) VALUES (:titulo, :contenido)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':titulo', $_POST['titulo']);
    $stmt->bindParam(':contenido', $_POST['contenido']);

    if ($stmt->execute()) {
      $message = 'Your comment has been created';
    } else {
      $message = 'Sorry, your comment could not be created.';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Nueva Entrada</h1>


    <form action="Nentrada1.php" method="POST">
      <input name="titulo" type="text" placeholder="Enter your title">
      <input name="contenido" type="contenido" placeholder="Enter your comentary">
      <input type="submit" value="Submit">
    </form>

  </body>
</html>
