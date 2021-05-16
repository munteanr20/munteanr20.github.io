<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Razvan face poze</title>
    <link rel="icon" href="img/emoji/Ciclon.png" type="image/icon type">
    <!-- Bootstrap 4.5 CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Owl CSS -->
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
    <!-- Owl Default CSS-->
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        .nav-item{
            padding: .5rem;
            }
    </style>
</head>
<!-- Navigation -->
<header>

    <nav class="navbar  navbar-custom navbar-expand-lg mb-2">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">
                <img src="img/emoji/Ciclon.png" alt="Logo" title="Logo">
                Razvan face poze 
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <?php
                if(isset($_SESSION["useruid"])){
                     echo "<li class='nav-item mx-auto my-auto'>Salut ".$_SESSION["useruid"]."!<li>";
                    }
                        ?>
                    <li class="nav-item"><a href="index.php" class="nav-link active">Acasa</a></li>
                    <li class="nav-item"><a href="./Pagini/Despre.php" class="nav-link">Despre</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Proiecte</a></li>
                    <?php
                        if(isset($_SESSION["useruid"])){
                            echo "<li class='nav-item'><a href='profile.php' class= 'nav-link'>Profil</a></li>";
                            echo "<li class='nav-item'><a href='includes/logout.inc.php' class= 'nav-link'>Delogheaza-te</a></li>";
                        }
                        else{
                            echo "<li class='nav-item'><a href='signup.php' class='nav-link'>Conectare </a></li>";
                        }
                    ?>
                </ul>
            </div>

        </div>

</header>
<!-- End Navigation -->

<body>
    <div id="wrapper">
