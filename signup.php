<?php 
require_once 'header.php';

echo <<<_END
  <script>
    function checkUser(user) {
	    if (user.value == '') {
		    $('#used').html('&nbsp;')
		    return
	    }
	    $.post ( 'checkuser.php', { user : user.value },
	      function(data) {
		      $('#used').html(data)
	      }
      )
    }
  </script>
_END;
$error = $user = $pass =""; 
if (isset($_SESSION['user'])) destroySession(); 

if (isset($_POST['user'])) {
  $user = sanitizeString($_POST['user']); 
  $pass = sanitizeString($_POST['pass']); 

	if ($user == "" || $pass == "") 
		$error = 'Not all fields were entered<br></br>'; 
	else {
		$result = queryMysql("SELECT * FROM usuario WHERE user='$user'");

		if ($result->num_rows) 
			$error = 'Nombre ya existente<br></br>'; 
		else {
			queryMysql("INSERT INTO usuario VALUES('$user', '$pass')"); 
			die('<center><h4 class="text">Account created</h4><br><h4 class="text">Please Log in.</h4></center></div></body></html>'); 
		}
	}
}

echo <<<_END
      <form method='post' action='signup.php'>$error
      <div data-role='fieldcontain'>
        <label></label>
       <p class='text'> Please enter your details to sing up </p>
      </div>
      <div data-role='fieldcontain'>
        <label class='text' >Username</label>
        <input type='text' maxlength='16' name='user' value='$user'
         onBlur='checkUser(this)'>
        <label></label><div id='used'>&nbsp;</div>
      </div>
      <div data-role='fieldcontain'>
        <label class='text' >Password</label>
        <input type='text' maxlength='16' name='pass' value='$pass'
      </div>
      <div data-role='fieldcontain'>
        <label></label> <br><br>
      </div>
    </div>

    <input data-transition='slide' type='submit' value='SignUp'>
    <div> 
      
       
    </div> 
  </body>
</html>
_END;
?>

