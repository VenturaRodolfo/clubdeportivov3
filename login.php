<?php 
    use Illuminate\Database\Capsule\Manager as Capsule;

require_once 'header.php'; 
$error = $user = $pass = " "; 

if (isset($_POST['user']))
{ 
  $user = sanitizeString($_POST['user']); 
  $pass = sanitizeString($_POST['pass']); 

  if ($user == "" || $pass == "") 
    $error = 'Not all fields were entered'; 
  else
  { 
    
    $result = Capsule::table('usuarios')->select(['user', 'pass'])->where('user', $user)->where('pass', $pass)->first();
    //$result = queryMySQL("SELECT user,pass FROM usuario WHERE user='$user' AND pass='$pass'"); 
    echo $result->user;
    if (!$result)
    { 
      $error = "Invalid login attempt"; 
    } 
    else 
    { 
      $_SESSION['user'] = $user; 
      $_SESSION['pass'] = $pass; 
      die("<br><center><div class='text'>You are now logged in. Please
           <a data-transition='slide' href='index.php?view=$user'>click here</a> 
           to continue.</div></center></body></html>"); 
     }
   }
 }

  echo <<<_END
    <form method='post' action='login.php'>
      <div data-role='fieldcontain'>
        <label></label>
        <span class='error'>$error</span>
      </div>
      <div data-role='fieldcontain'>
        <label></label>
       <p class='text'> Please enter your details to log in </p>
      </div>
      <div data-role='fieldcontain'>
        <label class='text' >Username</label>
        <input type='text' maxlength='16' name='user' value='$user'>
      </div>
      <div data-role='fieldcontain'>
        <label class='text' >Password</label>
        <input type='password' maxlength='16' name='pass' value='$pass'>
      </div>
      <div data-role='fieldcontain'>
        <label></label>
        <input data-transition='slide' type='submit' value='login'>
      </div>
     </form>
    </div>
  </body>
  </html>
_END;
?> 
