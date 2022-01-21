<html>
	<head>
		<style>
			body{
				background-image:url('IMG/2.jpg');
				background-repeat:no-repeat;
				background-size:cover;

			}
		</style>
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body><br>

	<h1 align="center" style="color:red;">Order your pizza here....</h1>
	<form method="post" action="pizza.php">
	<h3 align="center" style="color:white;">Enter your details</h3>

	<div class="input-group">
	<input placeholder="Customer name" type="text" name="name"><br><br>
	<input placeholder="Customer's phone number" type="text" name="number"><br><br>
	<input placeholder="NIC" type="text" name="nic"><br><br>
	<input placeholder="Delivery date" type="text" name="date"><br><br>
	<input placeholder="Pizza type" type="text" name="type"><br><br>
	<input placeholder="Pizza size" type="text" name="size"><br><br>
	<input placeholder="Quantity" type="text" name="quantity"><br><br>
	<input type="submit" name="order" id="order" value="Order" 
		style="background-color:#00cc66;border: 2px solid #00cc66;color:white;width:15%;height:40px"><br><br>
	</div>

	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mydb";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$name="";
	$number="";
	$nic="";
	$date="";
	$type="";
	$size="";
	$quantity="";
	if(isset($_POST['order'])){
		$name=$_POST['name'];
		$number=$_POST['number'];
		$nic=$_POST['nic'];
		$date=$_POST['date'];
		$type=$_POST['type'];
		$size=$_POST['size'];
		$quantity=$_POST['quantity'];
		
		$sql = "INSERT INTO pizza(cn, cp, nic,d,pt,ps,q,s) VALUES ('$name', '$number', '$nic','$date','$type','$size','$quantity','new order')";
		mysqli_query($conn ,$sql);
		echo "<br/><br>Placing order is successful";
	}

	?>
	<h3 align="center" style="color:white;">Prices of pizza</h3>
	<table>
	<tr style="background-color:#00cc66;"><th>Pizza type</th><th>Pizza size</th><th>Price</th></tr>
	<tr><td>chillie chicken</td><td>small</td><td>400</td></tr>
	<tr><td>chillie chicken</td><td>medium</td><td>650</td></tr>
	<tr><td>chillie chicken</td><td>large</td><td>1100</td></tr>
	<tr><td>spicy</td><td>small</td><td>450</td></tr>
	<tr><td>spicy</td><td>medium</td><td>700</td></tr>
	<tr><td>spicy</td><td>large</td><td>1200</td></tr>
	<tr><td>cheese</td><td>small</td><td>550</td></tr>
	<tr><td>cheese</td><td>medium</td><td>800</td></tr>
	<tr><td>cheese</td><td>large</td><td>1450</td></tr>
	</table>
	</form>


	<div class="input-group">
	<form method="post" action="index.php" style="width:40%;">
	<h2 align="center" style="color:white;">Login</h2>
	<br><input placeholder="User name" type="text" name="uname"><br>
	<br><input placeholder="Password" type="password" name="password"><br><br>
	<input type="submit" name="login" id="login" value="Login" 
	style="background-color:#00cc66;border: 2px solid #00cc66;color:white;width:70%;height:40px">




	<?php 


	if(isset($_POST['login'])){
			$uname=$_POST['uname'];
			$password=$_POST['password'];
			if($uname=="admin" && $password=="password"){
				header('Location:admin.php');
			}
			else{
				echo "<h3>Wrong user name or password</h3>";
			}
	}

	?>
	</form>
	</div>
	</body>
</html>