<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="styleshee.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include_once('includes/header.php');?>
<div id="box1"></div>
	 <form action="login.php" method="post">
     	<h2><div class="button-box">LOGIN</div></h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<input type="text" name="uname" placeholder="Enter User Name"><br>
			<br>
     	<input type="password" name="password" placeholder="Enter Password"><br>

     	<br><br><button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
		<div class="ca">Forget password</div>
     </form>
		</div>
</body>
</html>