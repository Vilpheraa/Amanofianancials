<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:profile.php');

         $_SESSION['user_email'] = $row['email'];
         header('location:profile.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>
   <link rel="shortcut icon"
    href="./images/amano-financial-website-favicon-color.png"
    type=image/x-icon>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body >
   
<div class="form-container">

   <form action="" method="post">
   <div class="text-center">
                  <a href="/"
                    ><img
                    style="width:70%;margin-left:5%;"
                      src="./storage/logo-no-background.png"
                      alt=""
                      class="mb-3 img-fluid auth__logo"
                  /></a>
                </div>
      <h2></h2>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>