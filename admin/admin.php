<?php
    session_start();
    include("../db.php");
?>
<!Doctype html>
<html>
    <head>
        <title>SUPERTRONICS</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="styles.css" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">ADMIN</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Logout<span class="sr-only">(current)</span></a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div class="column-fluid">
            <div class="row">
                <div class="col-2" id="sidebar">
                    <ul id="list">
                        <li><a href="admin.php?add_admin">Admin</a></li>
                        <li><a href="admin.php?category">Item categories</a></li>
                        <li><a href="admin.php?electronics">Electronics stock</a></li>
                        <li><a href="admin.php?orders">Orders</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
                <div class="col-8">
                    <?php
                        if(isset($_GET['electronics'])){
                            include("electronics_stock.php");
                        }
                        if(isset($_GET['orders'])){
                            include("orders.php");
                        }
                        if(isset($_GET['add_admin'])){
                            include("add_admins.php");
                        }
                        if(isset($_GET['category'])){
                            include("categories.php");
                        }
                    ?>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
        <script src="../js/main.js"></script>