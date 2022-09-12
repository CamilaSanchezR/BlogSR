 <?php


session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
      }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to you Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
     <meta charset="UTF-8" />
      <script
      src="https://kit.fontawesome.com/7e5b2d153f.js"
      crossorigin="anonymous"
    ></script>
    <script defer src="assets/css/index.js"></script>
  </head>
  <body>

     <header class="header">
      <nav class="nav">
        <a href="/php-login" class="logo nav-link">Blog SR </a>
        <button class="nav-toggle" aria-label="Abrir menú">
          <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-menu">
          <li class="nav-menu-item">
            <a href="/php-login" class="nav-menu-link nav-link">Home</a>
          </li>
          <li class="nav-menu-item">
            <a href="login.php" class="nav-menu-link nav-link" >Login</a> 
          </li>
          <li class="nav-menu-item">
           <a href="signup.php"class="nav-menu-link nav-link" >Signup</a> 
          </li>
          <li class="nav-menu-item">
           <a href="logout.php"class="nav-menu-link nav-link" >Logout</a> 
          </li>
         
          <li class="nav-menu-item">
            <a href="contact.php" class="nav-menu-link nav-link nav-menu-link_active"
              >About me</a
            >
          </li>
        </ul>
      </nav>
    </header>


          <li class="nav-menu-item">
           <a href="Nentrada1.php"class="menu" >Nueva entrada </a> </br>
           <a href="consulta_comentario.php"class="menu" >Consula Comentario Usuario </a> </br>
           <a href="Blog1.php"class="menu" >Blog 1 </a>  </br>
           <a href="Blog2.php"class="menu" >Blog 2 </a>  </br>
           <a href="Blog3.php"class="menu" >Blog 3 </a>  </br>
          </li>

  </body>
</html>

