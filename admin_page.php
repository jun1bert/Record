<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Admin Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style>
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

        .dashboard{
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
        .btn{
            width: 100%;
            height: 50px;
            padding: 10px;
            border: 1px solid;
            margin-top: 10px;;
            background: #2691d9;
            border-radius: 25px;
            font-size: 20px;
            color: #e9f4fb;
            font-weight: 700;
            cursor: pointer;
            outline: none;
        }
        .choices{
            text-align: center;
            margin-top: 150px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 class="dashboard">Dashboard</h1><span></span>
            <div class="logout">
                <a href="logout.php">Logout</a>
            </div>
                <div class="choices">
                    <h1>What do you want to do?</h1><br><br>
                    <a href="register_vehicle.php" class="btn">Register a Vehicle</a>
                    <a href="view_vehicles.php" class="btn">View Vehicles</a>
                </div>
    </div>

</body>
</html>