<?php
error_reporting(E_ALL ^ E_NOTICE, );
  session_start();
  
echo <<<_INIT
<!DOCTYPE html> 
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>      

        <link href=" node_modules/bulma/css/bulma.min.css" rel="stylesheet"> 
              
          <script  src=' node_modules/jquery/dist/jquery.min.js'> </script>
      
          <script  src='node_modules/jquery-mobile/js/jquery.mobile.js'></script>
        <link rel='stylesheet' href='styles.css' type='text/css'>   
       
        
       
_INIT;

require_once 'functions.php';
$userstr = "Bienvenido";
if (isset($_SESSION['user'])) {
  $user     = $_SESSION['user'];
  $loggedin = TRUE;
  $userstr  = "Logged in as: $user";
} else $loggedin = FALSE;
echo <<<_MAIN
     <title> Club deportivo Manaties</title>
  </head>
   <body>
    <nav class="navbar is-dark  is-fixed-top" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="Index.php?view=$userstr">
      <img src="ImagenesClub/logo1.png"  width="50" height="28">
    </a>
  </div>
  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">

      <a class="navbar-item" href="Index.php?view=$userstr" data-transition="slide">
        Home
      </a>
        <a class="navbar-item"  href="fotografia.php?view=$userstr" data-transition="slide">     
          Fotografias
        </a>       
          <a class="navbar-item" href="informacion.php?view=$userstr" data-transition="slide">
            informacion
          </a>
          <a class="navbar-item"  href="Merch.php?view=$userstr" data-transition="slide">
            Mercancia
          </a>
          <a class="navbar-item" href="Subs.php?view=$userstr" data-transition="slide">
            Subscripcion
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item" href="logout.php?view=$userstr" data-transition="slide">
            log out
          </a>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary" href="signup.php?view=$userstr">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light" href="login.php?view=$userstr">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
<br><br>
         <div class='username'>$userstr</div>
        </div>
        <div data-role='content'>
        <div id='logo' class='center'>Club Deportivo de Basketball Manaties</div>
        <center><img src='ImagenesClub/logo1.png'
         width="700" height="300">
        </center>
_MAIN;
if ($loggedin) {
  echo <<<_LOGGEDIN
   <center> <h1 class="text"> ¡Manaties de Chetumal! <br> !Los reyes de la bahia! </h1> </center>
_LOGGEDIN;
}
