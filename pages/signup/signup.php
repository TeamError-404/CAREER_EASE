<?php
  
  session_start();
  $user_name="";
  $email="";
  $password="";
  
$con = mysqli_connect("localhost","root","","register") or die('not found');
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
    $user_name=$_POST['name'];
    $email=$_POST['id'];
    $password=$_POST['pass'];
  }
  if(!empty($user_name) && !empty($password) && !empty($email))
  {
    $query= "insert into signup(name , id ,pass) values ('$user_name' , '$email' , '$password')";

    mysqli_query ( $con , $query );
    echo "<script type ='text/javascript'> alert('successfully register') </script>";
  }
  
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Career Ease | Signup</title>
    <link rel="stylesheet" href="signup.css" />
  </head>
  <body>
    
    <section class="wrapper">
      <div class="form signup">
        <header>Signup</header>
        <form method="POST">
          <input type="text" name="name" placeholder="Full name" required />
          <input type="text" name="id" placeholder="m@gmail.com" required />
          <input type="password" name="pass" placeholder="Password" required />
          <div class="checkbox">
            <input type="checkbox" id="signupCheck" />
            <label for="signupCheck">I accept all <span style="color: rgb(43, 95, 227);"> <b>terms & conditions.</b></span></label>
          </div>
          <button type="submit" >Signup</button>
        </form>
      </div>

      <div class="form login">
        <button><a href="../login/login.html">Login</a></button>
        <!-- <form action="#">
          <input type="text" placeholder="Email address" required />
          <input type="password" placeholder="Password" required />
          <a href="#">Forgot password?</a>
          <button type="submit" >Login</button>
        </form> -->
      </div>

      
    </section>
  </body>
</html>
