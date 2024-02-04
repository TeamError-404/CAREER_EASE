<?php
  
  session_start();

  
$con = mysqli_connect("localhost","root","","register") or die('not found');
  if($_SERVER['REQUEST_METHOD']=="POSTIT")
  {
    $email=$_POST['id'];
    $password=$_POST['pass'];
if (!empty($password) && !empty($email))
{ 
  $query="select * from where id= '$email' limit 1";
  $result=mysqli_query($con,$query);
  if($result)
  {
    if($result && mysqli_num_rows($result)>0)
    {
       $user_data=mysqli_fetch_assoc($result);

       if ($user_data['pass'] ==  $password)
       {
        header("Location: index.html");
       }
    }
  }
  }

  mysqli_query ( $con , $query );
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Career Ease | Login</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    
    <section class="wrapper">
      <div class="form signup">
        <header>Login</header>
        <form action="#" method="POST">
          <input type="text" name ="id" placeholder="m@gmail.com" required />
          <input type="password" name="pass" placeholder="Password" required />
          <a href="#">Forgot password?</a>
          <button type="submit" >Login</button>
        </form>
      </div>

      <div class="form login">
        <button><a href="../signup/signup.html">Signup</a></button>
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
