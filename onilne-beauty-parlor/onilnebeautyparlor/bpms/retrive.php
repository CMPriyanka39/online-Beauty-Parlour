<!-- 
<html>
  <head>
    <style>.service-card {
  border: 1px solid #ccc;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  height: 100%;
  display: ; 
  flex-direction: column;
}

.service-img img {
  width: 100%;
  height: 100px;
  object-fit: cover;
}

.service-details {
  padding: 20px;
  flex-grow: 1;
  display: flex;
  flex-direction: row;
}

.service-title {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 10px;
}

.service-price {
  font-size: 18px;
  margin-bottom: 10px;
}

.service-actions {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: auto;
}
</style>
</head>
<div class="container-fluid pt-5">
  <div class="row px-xl-5">

  <?php
    $con=mysqli_connect('localhost','root','','bpmsdb');
    $sql="SELECT * FROM `retrive`";
    $rs=mysqli_query($con,$sql);

    while($rw1=mysqli_fetch_row($rs))
    {
    ?>
      <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
        <div class="service-card">
          <div class="service-img">
            <img src="images/<?php echo $rw1[1];?>" alt="">
          </div>
          <div class="service-details">
            <h5 class="service-title"><?php echo $rw1[2];?></h5>
            <p class="service-price">RS <?php echo $rw1[3];?></p>
            <div class="service-actions">
              <a href="checkout.php?name=<?php echo $rw1[2];?>&price=<?php echo $rw1[3];?>" class="btn btn-sm btn-primary">Buy Now</a>
              <a href="c2.php?name=<?php echo $rw1[2];?>&img=<?php echo $rw1[1];?>&price=<?php echo $rw1[3];?>" class="btn btn-sm btn-secondary">Add To Cart</a>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</div>
<div class="container-fluid pt-5">
  <div class="row px-xl-5">

    <?php
    $con=mysqli_connect('localhost','root','','bpmsdb');
    $sql="SELECT * FROM `retrive`";
    $rs=mysqli_query($con,$sql);

    while($rw1=mysqli_fetch_row($rs))
    {
    ?>
      <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
        <div class="service-card">
          <div class="service-img">
            <img src="images/<?php echo $rw1[1];?>" alt="">
          </div>
          <div class="service-details">
            <h5 class="service-title"><?php echo $rw1[2];?></h5>
            <p class="service-price">RS <?php echo $rw1[3];?></p>
            <div class="service-actions">
              <a href="checkout.php?name=<?php echo $rw1[2];?>&price=<?php echo $rw1[3];?>" class="btn btn-sm btn-primary">Buy Now</a>
              <a href="c2.php?name=<?php echo $rw1[2];?>&img=<?php echo $rw1[1];?>&price=<?php echo $rw1[3];?>" class="btn btn-sm btn-secondary">Add To Cart</a>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</div>

<html> -->


<html>
  <head>
    <link rel="stylesheet" type="text/css" href="1.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php include_once('includes/header.php');?>
   <br>
    <div class="container-fluid pt-5">
      <div class="row">

        <?php
        $con=mysqli_connect('localhost','root','','bpmsdb');
        $sql="SELECT * FROM `retrive`";
        $rs=mysqli_query($con,$sql);

        while($rw1=mysqli_fetch_row($rs))
        {
        ?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="service-card">
              <div class="service-img">
                <img src="images/<?php echo $rw1[1];?>" alt="">
              </div>
              <div class="service-details">
                <center><h5 class="service-title"><?php echo $rw1[2];?></h5></center>
                <h5 class="service-price">RS <?php echo $rw1[3];?></h5>
                <div class="service-actions">
                   </div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </body>
</html>