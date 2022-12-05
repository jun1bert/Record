<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'User already Exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'Password not matched!';
      }else{
         $insert = "INSERT INTO users(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Form</title>
   <style type="text/css">
*{
    margin: 0;
    padding: 0;
}
.title{
   border-color: transparent;
    padding: 70px;
    text-align: center;
    font-size: 60px;
}
.header{
    min-height: 100vh;
    width:100%;
    background-image: url(aritao.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
}
.loginform{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: auto;
    width: 400px;
    background: mintcream;
    border-radius: 10px;
}
.admin{
   border-color: transparent;
    margin-top: 10px;
    width: 200px;
    height:120px;
    position:relative;
    padding: 10px;
    left: 23%;
}
.loginform h1{
    font-size: 50px;
    text-align: center;
    padding: 20px 0;
    border: 1px solid silver;
}
.loginform form{
    padding: 0 40px;
    box-sizing: border-box;
}
form .txt_field{
    position: relative;
    border: 2px solid silver;
    margin: 30px 0;
}
.txt_field input{
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;
}
.placeholder{
   text-align: center;
}
  input[type="submit"]{
    width: 100%;
    height: 50px;
    border: 1px solid ;
    margin-bottom: 10px;;
    background: #2691d9;
    border-radius: 25px;
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 700;
    cursor: pointer;
    outline: none;
}
.usertype{
   padding: 5px;
   text-align: center;
   margin-bottom: 5px;
}
input[type="submit"]:hover{
    border-color: #2691d9;
    transition: .5s;
}
p{
   text-align: center;
   padding: 5px;
}

   </style>
</head>
<body>
   <section class="header">
      <h1 class="title">Vehicle Monitoring System</h1>

         <div class="loginform">
            <img src="admin.png" class="admin">
               <h1>Signup</h1>
                  <form action="" method="post">
                     <?php
                     if(isset($error)){
                        foreach($error as $error){
                           echo '<span class="error-msg">'.$error.'</span>';
                        };
                        };
                     ?>

                     <div class="txt_field">
                        <input type="text" name="name" required class="placeholder"placeholder="Enter your Name">
                        <input type="email" name="email" required class="placeholder"placeholder="Enter your Email">

                        <input type="password" name="password" required class="placeholder" placeholder="Enter your Password">

                        <input type="password" name="cpassword" required class="placeholder" placeholder="Confirm your Password">
                        <span></span>
                     </div>
                        <div class="usertype">
                           <select name="user_type">
                              <option value="user">user</option>
                              <option value="admin">admin</option>
                           </select>
                        </div>
                     <input type="submit" name="submit" value="Register now">

                     <p>Already have an account? <a href="login_form.php">Login</a></p>
                     </form>
                        </div>
   </section>
   

</body>
</html>