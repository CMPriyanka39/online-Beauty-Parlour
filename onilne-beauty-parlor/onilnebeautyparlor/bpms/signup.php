<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
     <link rel="stylesheet" type="text/css" href="styleshee.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include_once('includes/header.php');?>
<div id="box1"></div>
     <form action="signup-check.php" method="post">
     	<div class="button-box"><h2>SIGN UP</div></h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" name="name" placeholder="Name"value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="name" placeholder="Name"><br>
          <?php }?>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="email" name="uname" placeholder="User Name/Email Id " value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="email" name="uname" placeholder="User Name/Email Id"><br>
          <?php }?>
     	<input type="password" name="password" placeholder="Password"><br>
          <input type="password" name="re_password" placeholder="Re_Password"><br>
          <label for="otp">Enter OTP:</label>
  <input type="text" id="otp" name="otp">
  <button type="submit" name="otp" id="otp">Get OTP</button>
     	<button type="submit">Sign Up</button>
          <a href="index1.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>