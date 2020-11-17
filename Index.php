<?php
session_start();
require_once 'header.php';
//if (!$loggedin) die ("</div></body></html>");
echo <<<_EJEMPLO
<center>
<div class="slider">
<ul>
    <li>
        <img src="ImagenesClub/Manties.jpeg" alt="">
    </li>
    <li>
        <img src="ImagenesClub/cancun2.jpeg" alt="">
    </li>

    <li>
        <img src="ImagenesClub/copacancun.jpeg" alt="">
    </li>
    
    <li>
        <img src="ImagenesClub/peques.jpeg" alt="">
    </li>
</ul>
</div>
</center>

   
_EJEMPLO;
echo<<<_HOME
<br><br><center><h1 class="text">Este es el club deportivo de basketball Manaties de Chetumal</h1>
<br><br> <h2 class="text">Con apariciones en ligas como: </h2>
<br><br> <ul>
<li class="text"> <h2>Liga Mayor</h2></li>
<li class="text"><h2>Intermedia</h2></li>
<li class="text"><h2>Segunda Fuerza</h2></li>
<li class="text"><h2>Cadetes</h2></li>
<li class="text"><h2>Pasarela</h2></li>
</ul></center>
_HOME;
?>
