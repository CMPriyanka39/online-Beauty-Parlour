<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<header class="header">

<a href="index.php" class="logobu">
    <img src="logo1.png" alt=""class="logobu">Beauty Blush 
</a> 

<nav class="navbar">
<a href="../index.html" class="nav-link">Home</a>
</nav>
</header>


<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');

:root{
--main-color:#ffccff;
--black:#7138bbc4;
--bg:#3030e8;
--border:.1rem solid rgba(255,255,255,.3);
}

*{
margin:0; padding:0;
box-sizing: border-box;
outline: none;
 border:none;
text-decoration: none;
text-transform: capitalize;
transition: .2s linear;
}

html{
font-size: 65.5%;
overflow-x:hidden;
scroll-padding-top: 9rem;
scroll-behavior: smooth;
background:#730099;
}
::selection{
    color: #fff;
    background: #ac00e6;
}
.container .form form .button{
    background: #ac00e6;
    color: #fff;
    font-size: 17px;
    font-weight: 500;
    transition: all 0.3s ease;
}
.container .form form .button:hover{
    background: #ac00e6;
}.container .form form .link a{
    color: #ac00e6;
}

html::-webkit-scrollbar{
width: .8rem;
}

html::-webkit-scrollbar-track{
background: transparent;
}

html::-webkit-scrollbar-thumb{
background: #fff;
border-radius: 5rem;
}

body{
background: #730099;

}

section{
padding:2rem 7%;
}

.heading{
text-align: center;
color:#fff;
text-transform: uppercase;
padding-bottom: 3.5rem;
font-size: 4rem;
}

.heading span{
color:var(--main-color);
text-transform: uppercase;
}

.btn{
margin-top: 1rem;
display: inline-block;
padding:.9rem 3rem;
font-size: 1.7rem;
color:#fff;
background: var(--main-color);
cursor: pointer;
}

.btn:hover{
letter-spacing: .2rem;
}

.header{
background:#e6f0ff;
display: flex;
align-items: center;
justify-content: space-between;
padding:0.5rem 7%;
border-bottom: var(--border);
position: fixed;
top:0; left: 0; right: 0;
z-index: 1000;
}
/* 
.header .logo img{
height: 6rem;

} */

.header .navbar a{
margin:0 1rem;
font-size: 1.6rem;
color:#730099;

    /* font-size: 14px;
    font-weight: 600;
    border-radius: 25px;
    padding: 7px 10px; 
     margin-bottom: 20px; 
    width: 35%;
    background-color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #333;
    text-decoration: none;
    box-shadow: 0 0.5rem 1.2rem rgb(0 0 0 / 10%), 0 2rem 3rem rgb(0 0 0 / 15%) !important;
 */
}
.header .logobu{
height: 6rem;
font-size:15px;
color:#730099;
}

.header .navbar a:hover{
color:var(--main-color);
border-bottom: .1rem solid var(--main-color);
padding-bottom: .5rem;
}

.header .icons div{
color:#fff;
cursor: pointer;
font-size: 2.5rem;
margin-left: 2rem;
}

.header .icons div:hover{
color:var(--main-color);
}

#menu-btn{
display: none;
}

.header .search-form{
position: absolute;
top:115%; right: 7%;
background: #fff;
width: 50rem;
height: 5rem;
display: flex;
align-items: center;
transform: scaleY(0);
transform-origin: top;
}

.header .search-form.active{
transform: scaleY(1);
}

.header .search-form input{
height: 100%;
width: 100%;
font-size: 1.6rem;
color:var(--black);
padding:1rem;
text-transform: none;
}

.header .search-form label{
cursor: pointer;
font-size: 2.2rem;
margin-right: 1.5rem;
color:var(--black);
}

.header .search-form label:hover{
color:var(--main-color);
}

.header .cart-items-container{
position: absolute;
top:100%; right: -100%;
height: calc(100vh - 9.5rem);
width: 35rem;
background: #fff;
padding:0 1.5rem;
}

.header .cart-items-container.active{
right: 0;
}

.header .cart-items-container .cart-item{
position: relative;
margin:2rem 0;
display: flex;
align-items: center;
gap:1.5rem;
}

.header .cart-items-container .cart-item .fa-times{
position: absolute;
top:1rem; right: 1rem;
font-size: 2rem;
cursor: pointer;
color: var(--black);
}

.header .cart-items-container .cart-item .fa-times:hover{
color:var(--main-color);
}

.header .cart-items-container .cart-item img{
height: 7rem;
}

.header .cart-items-container .cart-item .content h3{
font-size: 2rem;
color:var(--black);
padding-bottom: .5rem;
}

.header .cart-items-container .cart-item .content .price{
font-size: 1.5rem;
color:var(--main-color);
}

.header .cart-items-container .btn{
width: 100%;
text-align: center;
writing-mode: vertical-lr;
}
</style>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="reset-code.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Code Verification</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="number" name="otp" placeholder="Enter code" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-reset-otp" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>