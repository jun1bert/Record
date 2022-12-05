<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Vehicles</title>
	<style>
		*{

			margin: 0;
			padding:0;
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
		body{
			min-height: 100vh;
	        width:100%;
	        background-image: url(aritao.jpg);
	        background-position: center;
	        background-size: cover;
	        position: relative;
			}
		.heading{
			margin:20px;

		}
		th{
			font-size: 40px;
			margin: 20px;
			padding: 30px;
			border-color: black;
		}
		tbody{
			text-align: center;
		}	
	</style>
</head>
<body>
	<h1 class="dashboard">Dashboard</h1><span></span>
		<div class="logout">
            <a href="admin_page.php">Go back</a>
        </div>
		<div class="logout">
            <a href="logout.php">Logout</a>
        </div>

	<center>
		
		<table class="table">
		<thead>
			<tr class="heading">
				<th>ID</th>
				<th>Name of the Owner</th>
				<th>Type of Vehicle</th>
				<th>Plate No.</th>
				<th>OR and CR no.</th> 
			</tr>
		</thead>

		<tbody>
			<?php
				$conn = mysqli_connect("localhost", "root", "", "vehicles_db");
				if($conn-> connect_error){
					die("connection failed: ". $conn-> connect_error);
				}
				//read all in database
				$sql = "SELECT * FROM owners ";
				$result = $conn-> query($sql);

				if(!$result){
					die("Invalid Query: " . $connection->error);
				}
				//read each row
				while($row = $result->fetch_assoc()){
				echo "<tr>
					<td>" . $row["id"] ." </td>
					<td>" . $row["name"] ." </td>
					<td>" . $row["type"] ." </td>
					<td>" . $row["plate"] ." </td>
					<td>" . $row["license"] ." </td>
					<td>" . $row["orcr"] ." </td>
					
				</tr>";
				}

			?>
		</tbody>
		
	</table>
</center>

	
	
</body>
</html>