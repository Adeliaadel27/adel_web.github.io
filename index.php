<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome CSS Responsive Navigation menus</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <input type="checkbox" name="" id="chk1">
        <div class="logo"><h1>Web Master</h1></div>
        <div class="search-box">
            <form action="">
                <input type="text" name="search" id="srch" placeholder="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            </div>
            <ul>
                <li><a href="index.php?modul=home">Home</a></li>
                <li><a href="index.php?modul=product">Product</a></li>
                <li><a href="index.php?modul=blog">Blog</a></li>
                <li><a href="index.php?modul=contact">Contact</a></li>
                <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
            <div class="menu">
                <label for="chk1">
                    <i class="fa fa-bars"></i>
                </label>
            </div>
    </header>
    <div id="main-content">
<?php
if(!isset($_GET['modul'])){
    include "home.php";
}else{
    $pages = $_GET['modul'];
    if($pages == "home"){
        include "home.php";
    }
    if($pages == "product"){
        include "product.php";
    }
    if($pages == "blog"){
        include "blog.php";
    }
    if($pages == "contact"){
        include "contact.php";
    }
}
?>
  </div>
</body>
</html>