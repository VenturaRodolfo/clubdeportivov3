<?php
session_start();
require_once 'header.php';
//if (!$loggedin) die ("</div></body></html>");
echo <<<_INFO
<br><br><br><br><br><br><br>
<div class="columns is-gapless">
  <div class="column">
    <h1 class="text">Lugares de entramiento</h1>
    <ul>
    <li class="text">Unidad deportiva del ITCH</li>
    <li class="text">Nohoch sukkun</li>
    </ul>
    <h1 class="text"> Horarios </h1>
    <ul>
    <li class="text"> Categoria 02-03 <br> 6:00 pm - 7:30 pm </li>
    <li class="text"> Categoria 03-04 <br> 5:00 pm - 6:00 pm </li>
    <li class="text"> Categoria 04-05 <br> 4:00 pm - 5:30 pm </li>
    <li class="text"> Categoria 13-12 <br> 3:30 pm - 4:30 pm </li>
    </ul>
    <h1 class="text"> Entrenadores </h1> 
    <ul>
    <li class="text">Si Barbosa "Wara" </li>
    <li class="text">Alejandro Terrazas</li>
    <li class="text">"Toro"</li>
    <li class="text">Omar Escalante "Tomate"</li>
    </ul>
    <h1 class="text"> Pagos Mensuales</h1>
    <ul>
    <li class="text">Wara: 100$</li>
    <li class="text"> Alejandro Terrazas: 100$ </li>
    <li class="text">Toro: 100$ </li>
    <li class="text">Escalante: 100$</li>
    </ul>
    <h2 class="text">Si Desear unirte a nuesta familia <br> Haz <a href="Subs.php">Click Aquí</a></h2>   
  </div>
  <div class="column">
    <img src="ImagenesClub/fondo1.jpg" align="right">
  </div>

  
_INFO;
?>