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
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Brand</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="main_nav">


                        <ul class="navbar-nav">
                            <li class="nav-item active"> <a class="nav-link" href="#">Home </a> </li>
                            <li class="nav-item"><a class="nav-link" href="#"> About </a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Treeview menu </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"> Dropdown item 1 </a></li>
                                    <li><a class="dropdown-item" href="#"> Dropdown item 2 &raquo; </a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Submenu item 1</a></li>
                                            <li><a class="dropdown-item" href="#">Submenu item 2</a></li>
                                            <li><a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
                                                <ul class="submenu dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Multi level 1</a></li>
                                                    <li><a class="dropdown-item" href="#">Multi level 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Submenu item 4</a></li>
                                            <li><a class="dropdown-item" href="#">Submenu item 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#"> Dropdown item 3 </a></li>
                                    <li><a class="dropdown-item" href="#"> Dropdown item 4 </a>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> More items </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"> Dropdown item 1 </a></li>
                                    <li><a class="dropdown-item" href="#"> Dropdown item 2 &raquo; </a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Submenu item 1</a></li>
                                            <li><a class="dropdown-item" href="#">Submenu item 2</a></li>
                                            <li><a class="dropdown-item" href="#">Submenu item 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#"> Dropdown item 3 &raquo; </a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Another submenu 1</a></li>
                                            <li><a class="dropdown-item" href="#">Another submenu 2</a></li>
                                            <li><a class="dropdown-item" href="#">Another submenu 3</a></li>
                                            <li><a class="dropdown-item" href="#">Another submenu 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#"> Dropdown item 4 &raquo;</a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Another submenu 1</a></li>
                                            <li><a class="dropdown-item" href="#">Another submenu 2</a></li>
                                            <li><a class="dropdown-item" href="#">Another submenu 3</a></li>
                                            <li><a class="dropdown-item" href="#">Another submenu 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#"> Dropdown item 5 </a></li>
                                    <li><a class="dropdown-item" href="#"> Dropdown item 6 </a></li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
                            <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Dropdown right </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="#"> Dropdown item 1</a></li>
                                    <li><a class="dropdown-item" href="#"> Dropdown item 2 </a></li>
                                    <li><a class="dropdown-item" href="#"> Dropdown item 3 &raquo; </a>
                                        <ul class="submenu submenu-left dropdown-menu">
                                            <li><a class="dropdown-item" href="">Submenu item 1</a></li>
                                            <li><a class="dropdown-item" href="">Submenu item 2</a></li>
                                            <li><a class="dropdown-item" href="">Submenu item 3</a></li>
                                            <li><a class="dropdown-item" href="">Submenu item 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#"> Dropdown item 4 </a></li>
                                </ul>
                            </li>
                        </ul>

                    </div> <!-- navbar-collapse.// -->
                </div> <!-- container-fluid.// -->
            </nav>
        </div>
    </header>