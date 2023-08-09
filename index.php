<?php

$isAuthenticated = false;
if(isset($_SESSION) && !empty($_SESSION)){
    $isAuthenticated = true;
    $login = $_SESSION['login'];
    $role = $_SESSION['role'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title>galerie dart</title>
<body>


<header>
<a href="./index.php" class="logo"><span>Galerie</span>D'Art</a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navbar">
            <li><a href="#catégories" onclick="toggleMenu();">Oeuvre dart</a></li>
            <a href="reservation\reservation.html" onclick="toggleMenu();">ACHETEZ</a>
            <li><a href="apropos\apropos.php" onclick="toggleMenu();">A propos</a></li>
            <li><a href="contact\contact.php" onclick="toggleMenu();">Contact</a></li>
                    <ul class="dropdown-menu bg-black border border-dark" aria-labelledby="dropdownMenuButton1" style=" margin: 0px;">
                        <?php
                        if($isAuthenticated){?>
                            <li class="p-2"><a class="text-white links" href="#">Mon Compte</a></li>
                            <li class="p-2"><a class="text-white links" href="../compte\logout.php">Déconnexion</a></li>
                        <?php }else{?>
                            <li class="p-2"><a class="fa fa-user-circle fa-3x" href="..\compte\login.php" ></a></li>
                        <?php }?>
                        <?php
                        if($isAuthenticated && isset($role) && $role === 'ROLE_ADMIN'){?>
                            <li class="p-2"><a class="text-white links" href="../admin/index.php">Admin</a></li>
                        <?php }?>
                    </ul>
                    <li><a class="fa fa-shopping-cart fa-3x" aria-hidden="true" href="panier/panier.php" onclick="toggleMenu();"></a></li>
        </ul>
        </header>
    <div class="slider">
        <div class="slider-viewport">
        <div id="img1">
            <div id="img2">
            <div id="img3">
                <div id="img4">
                <div id="img5">
                    <div class="slider-content">
                        <img href="C:\Users\33614\Desktop\Galeriedart\image\pagecouverture.jpg">
                        <img href="C:\Users\33614\Desktop\Galeriedart\image\pagecouverture.jpg"> 
                        <img href="C:\Users\33614\Desktop\Galeriedart\image\pagecouverture.jpg"> 
                        <img href="C:\Users\33614\Desktop\Galeriedart\image\pagecouverture.jpg">
                        <img href="C:\Users\33614\Desktop\Galeriedart\image\pagecouverture.jpg">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="slider-nav">
        <a href="#img1"></a>
        <a href="#img2"></a>
        <a href="#img3"></a>
        <a href="#img4"></a>
        <a href="#img5"></a>
        </div>
    </div>




  