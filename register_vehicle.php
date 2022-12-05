<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<style type="text/css">
		*{
            margin: 0;
            padding: 0;
        }
        h1{
            font-size: 50px;
            margin: 10px;
            margin-top: 0;
            margin-bottom: 50px;
            text-align: center;
            
        }
        .buo{
            min-height: 100vh;
            width:100%;
            background-image: url(aritao.jpg);
            background-position: center;
            background-size: cover;
            position: relative;
        }
        .txt_field input{
            margin: 3px;
            width: 70%;
            padding: 0 5px;
            height: 40px;
            font-size: 16px;
            outline: none;
        }
        .txt_field{
            text-align: center;
        }
        button{
        	width: 200px;
		    height: 50px;
		    border: 1px solid ;
		    margin-top: 10px;;
		    background: #2691d9;
		    border-radius: 25px;
		    font-size: 18px;
		    color: #e9f4fb;
		    font-weight: 700;
		    cursor: pointer;
		    outline: none;
        }
        .goback{
        	margin-top: 20px;
            margin-left: 20px;
            font-size: 20px;
        }
	</style>
</head>
<body>
	<section class="buo">
		<h1>Provide Information needed to Register a Vehicle</h1>
		<form action="signup.inc.php" method="POST">
			<div class="txt_field">
				<input type="text" name="name" placeholder="Name of Owner">
				<br>
				<input type="text" name="type" placeholder="Type of Vehicle">
				<br>
				<input type="text" name="plate" placeholder="Plate No.">
				<br>
				<input type="text" name="license" placeholder="License No.">
				<br>
				<input type="text" name="orcr" placeholder="OR and CR No.">
			<br>
			</div>
			<center>
				<button type="submit" name="submit">Register</button>
				<div class="goback">
            <a href="admin_page.php">Go back</a>
        </div>
			</center>
			
	</form>
	</section>



</body>
</html>