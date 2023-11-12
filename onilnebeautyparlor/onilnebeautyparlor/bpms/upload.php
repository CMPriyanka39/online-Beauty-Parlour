<?php
$con=mysqli_connect('localhost','root','','bpmsdb');
if(isset($_POST['submit']))
{

$image_name=$_FILES['image']['name'];
$pname=$_POST['pname'];
$Price=$_POST['pprice'];


$image_type=$_FILES['image']['type'];
$image_size=$_FILES['image']['size']; 
$image_loc=$_FILES['image']['tmp_name'];
$store="images/".$image_name;
	
$sql="INSERT INTO `retrive`(`image`, `name`, `price`) VALUES ('$image_name','$pname','$Price')";
if(move_uploaded_file($image_loc,$store))
{
	if(mysqli_query($con,$sql))
	{
        header('Location: retrive.php');
        exit();
		$message="Product Inserted SuccessFully!";
		echo "<script>alert('$message');</script>";
		
	}
    else
	{
		$message="Product is not Inserted!";
		echo "<script>alert('$message');</script>";
	}
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert</title>
	<style>
		body {
			background-color: #F2F2F2;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		h1 {
			text-align: center;
			margin-top: 50px;
			font-size: 36px;
			color: #333333;
			text-shadow: 2px 2px #CCCCCC;
		}

		form {
			width: 500px;
			margin: 50px auto;
			padding: 20px;
			background-color: #FFFFFF;
			border-radius: 10px;
			box-shadow: 5px 5px 5px #CCCCCC;
		}

		input[type=text], input[type=email], input[type=password] {
			width: 100%;
			padding: 10px;
			margin: 10px 0;
			border: none;
			border-radius: 5px;
			box-shadow: 2px 2px 2px #CCCCCC;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		input[type=submit]:hover {
			background-color: #3E8E41;
		}

		@keyframes fadein {
			from { opacity: 0; }
			to { opacity: 1; }
		}

		.container {
			animation: fadein 2s;
		}

		.error-message {
			color: red;
			font-weight: bold;
			margin-top: 10px;
		}
        .login{
            display: block;
			margin-top: 10px;
			color: #333333;
			font-size: 14px;
			text-align: right;
			text-decoration: none;
			transition: color 0.3s ease;
            color: #4CAF50;
        }
	</style>
</head>
<body>
	<h1>Product Insert</h1>
	
	<div class="container">

		<form action="#" method="post" enctype="multipart/form-data">
			
			<label for="file">Choose Image of Coffee:</label><br><br>
			<input type="file" id="username" name="image" required><br><br><br><br>

			<label for="pname">Product Name:</label>
			<input type="text" id="email" name="pname" required><br><br><br><br>

			<label for="price">Product Price:</label>
			<input type="text" id="price" name="pprice" required>

			
<br><br>
			<input type="submit" name="submit" value="Insert">
          
            
		</form>
		<div class="error-message"></div>
	</div>

	
</body>
</html>