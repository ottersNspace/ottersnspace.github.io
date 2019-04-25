<?php
  if(isset($POST['password'])) {
      if($POST['password'] == 'Password') {
          echo "Password correct,welcome!";
          exit;
      } else {
          echo "Password incorrect, goodbye";
          exit;
      }
    }  
?>

<html>
    <form action="login.php" method="POST">
        Please enter the password:
        <br />
        <input type="password" name="password" />
        <input type="submit" value:"Let me in!" />
       </form>
</html>    