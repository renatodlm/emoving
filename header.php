<?php require __DIR__ . "/vendor/autoload.php" ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-moving</title>
    <!-- Boostrap 5.1.3 -->
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="./vendor/aos/aos.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

</head>

<body>
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="./index.php"><img src="./img/logo.svg" alt="E-moving"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> A E-MOVING </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./como-funciona.php"> Como Funciona </a></li>
                                    <li><a class="dropdown-item" href="./quem-somos.php"> Quem somos </a></li>
                                    <li><a class="dropdown-item dropdown-submenu" href="#"> Dropdown</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Submenu 1</a></li>
                                            <li><a class="dropdown-item" href="#">Submenu 2</a></li>
                                            <li><a class="dropdown-item dropdown-submenu" href="#">Submenu 3</a>
                                                <ul class="submenu dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Multi 1</a></li>
                                                    <li><a class="dropdown-item" href="#">Multi 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Submenu 4</a></li>
                                            <li><a class="dropdown-item" href="#">Submenu 5</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Para sua empresa </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./4work.php"> E-Bike 4work</a></li>
                                    <li><a class="dropdown-item" href="./sharing.php">E-Bike Sharing</a>

                                    </li>
                                    <li><a class="dropdown-item" href="./beneficio.php">E-Bike Benefício</a>

                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item active"> <a class="nav-link" href="./blog.php">Blog </a> </li>
                            <li class="nav-item"><a class="nav-link" href="./contato.php"> Contato </a></li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="bt bt-secondary" href="#">Indique sua empresa</a></li>
                        </ul>
                    </div> <!-- navbar-collapse.// -->
                </div> <!-- container-fluid.// -->
            </nav>
        </div>
    </header>