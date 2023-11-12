<!-- <header class="header">
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">Beauty Blush</a>
       
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item "><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item "><a href="index.php" class="nav-link">Dashboard</a></li>
            <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
            
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
           
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            
            <li class="nav-item"><a href="admin/index.php" class="nav-link">Admin</a></li>
          </ul>
        </div>
      </div>
    </nav>
</header>
    
<script>
  $(window).resize(function() {
    if ($(window).width() < 992) {
      $('.navbar-toggler').show();
    } else {
      $('.navbar-toggler').hide();
    }
  });
</script> -->


<header class="header">

    <a href="index.php" class="logobu">
        <img src="images/logo1.png" alt=""class="logobu">Beauty Blush 
    </a> 

    <nav class="navbar">
    <a href="index.php" class="nav-link">Dashboard</a>
    <a href="services.php" class="nav-link">Services</a>
    <a href="about.php" class="nav-link">About</a>
    <a href="contact.php" class="nav-link">Contact</a>
    <a href="index.html" class="nav-link">Log Out</a>
    </nav>
</header>

 
<style>
 @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');

:root{
    --main-color:#FFF;
    --black:#7138bbc4;
    --bg:#010103;
    --border:.1rem solid rgba(255,255,255,.3);
}

*{
    font-family: 'Roboto', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none;
     border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x:hidden;
    scroll-padding-top: 9rem;
    scroll-behavior: smooth;
    
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
    background: #FFF;
    
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
    background:#80008074;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding:0rem 7%;
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
    color:#fff;
    
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
    color:var(--main-color);
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
<script>
  let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    cartItem.classList.remove('active');
}

let cartItem = document.querySelector('.cart-items-container');

document.querySelector('#cart-btn').onclick = () =>{
    cartItem.classList.toggle('active');
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}
</script>