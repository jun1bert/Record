<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Page</title>
   <style type="text/css">
      *{
         margin: 0;
         padding: 0;
      }
      .header{
         min-height: 100vh;
         width:100%;
         background-image: url(aritao.jpg);
         background-position: center;
         background-size: cover;
         position: relative;
      }
      .stud{
         padding-top: 15px;
         padding-left: 10px;
      }
      h1{
         font-size: 50px;
      }
      .logout{
         margin-left: 20px;
         font-size: 20px;
      }
   </style>
</head>

<body>
   <div class="header">
      <h1 class="stud">Hi, Student!</h1><span></span>
      <div class="logout">
         <a href="logout.php">Logout</a>
      </div>

   </div>
   
</body>
</html>