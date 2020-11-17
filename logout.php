  <?php
    require_once 'header.php'; 
//para que el usuario se pueda salir ( cerrar session )
    if (isset($_SESSION['user']))
    { 
      destroySession(); 
      echo "<br><center><div class='text'>¿estas seguro de querer cerras sesión? <br> si es asi has
           <a data-transition='slide' href='index.php'>clíck aqui</a> 
           y tu sesión sera cerrada</div></center>"; 
    }
    else echo " <center> <div class='text'>No puedes cerrar una sesión que no has abierto</div></center>"; 
  ?>            
      </div> 
    </body> 
  </html> 