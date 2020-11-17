<?php 
  session_start();
  require_once 'header.php';

  echo "<div class='center'> <br> <b> <b> <br>";

  if($loggedin) echo " <p class='text' > $user, Esta usted registrado </p>	";
  else          echo '<p class="text" > porfavor registrate. </p>';
  echo <<<_END
	 </div><br>
	</div >
	<div data-role="footer">
	  <h4>Web App from <i><a href='http://localhost/ClubDeporBulma/ClubDeportivoBulma/'
	  target='_blank'>Web Development</a></i></h4>
	</div>
	</body>

	</html>
_END;


?>


