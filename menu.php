<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Beats Cafe : Explore Menu</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>
<?php include 'connection.php'; ?>
<body>
    <header class="header-area header-sticky fixed-top" style="border-bottom: 1px solid green;"> <!-- Header -->
        <div class="container">
            <div class="row justify-content-center">
                <nav class="main-nav">
                    <a href="index.php" class="logo" id="center-logo">
                        <img src="assets/images/logo.png">
                    </a>
                </nav>
            </div>
        </div>
    </header>
    <div class="container" id="full-menu">
        <h1>--Explore Our Menu--</h1><br>
        <div class="row justify-content-center">
            <h3 class="m-2">Beverages</h3>
            <table class="mt-2 table table-striped">
                <tr class="header">
                    <th class="col-10">Item Name</th>
                    <th>Price</th>
                </tr>
                <?php
                $query = "SELECT `name`, `price` FROM `dishes` WHERE type = 'Beverages'";
                $data = mysqli_query($cn, $query);
                if(mysqli_num_rows($data) > 0){
                    foreach($data as $row){
                        echo"<tr>";
                            echo "<td><b>". $row['name']."</b></td>";
                            echo "<td><b>". $row['price']."</b></td>";
                        echo"</tr>";
                    }
                }else
                    echo"<h3>No records</h3>";
                ?>
            </table>
        </div>
        <div class="mt-4 row justify-content-center">
            <h3 class="m-2">Pizza</h3>
            <table class="mt-2 table table-striped">
                <tr class="header">
                    <th class="col-10">Item Name</th>
                    <th>Price</th>
                </tr>
                <?php
                $query = "SELECT `name`, `price` FROM `dishes` WHERE type = 'Pizza'";
                $data = mysqli_query($cn, $query);
                if(mysqli_num_rows($data) > 0){
                    foreach($data as $row){
                        echo"<tr>";
                            echo "<td><b>". $row['name']."</b></td>";
                            echo "<td><b>". $row['price']."</b></td>";
                        echo"</tr>";
                    }
                }else
                    echo"<h3>No records</h3>";
                ?>
            </table>
        </div>
        <div class="mt-4 row justify-content-center">
            <h3 class="m-2">Shakes</h3>
            <table class="mt-2 table table-striped">
                <tr class="header">
                    <th class="col-10">Item Name</th>
                    <th>Price</th>
                </tr>
                <?php
                $query = "SELECT `name`, `price` FROM `dishes` WHERE type = 'Shakes'";
                $data = mysqli_query($cn, $query);
                if(mysqli_num_rows($data) > 0){
                    foreach($data as $row){
                        echo"<tr>";
                            echo "<td><b>". $row['name']."</b></td>";
                            echo "<td><b>". $row['price']."</b></td>";
                        echo"</tr>";
                    }
                }else
                    echo"<h3>No records</h3>";
                ?>
            </table>
        </div>
        <div class="mt-4 row justify-content-center">
            <h3 class="m-2">Pasta</h3>
            <table class="mt-2 table table-striped">
                <tr class="header">
                    <th class="col-10">Item Name</th>
                    <th>Price</th>
                </tr>
                <?php
                $query = "SELECT `name`, `price` FROM `dishes` WHERE type = 'Pasta'";
                $data = mysqli_query($cn, $query);
                if(mysqli_num_rows($data) > 0){
                    foreach($data as $row){
                        echo"<tr>";
                            echo "<td><b>". $row['name']."</b></td>";
                            echo "<td><b>". $row['price']."</b></td>";
                        echo"</tr>";
                    }
                }else
                    echo"<h3>No records</h3>";
                ?>
            </table>
        </div>
        <div class="mt-4 row justify-content-center">
            <h3 class="m-2">Starter</h3>
            <table class="mt-2 table table-striped">
                <tr class="header">
                    <th class="col-10">Item Name</th>
                    <th>Price</th>
                </tr>
                <?php
                $query = "SELECT `name`, `price` FROM `dishes` WHERE type = 'Starter'";
                $data = mysqli_query($cn, $query);
                if(mysqli_num_rows($data) > 0){
                    foreach($data as $row){
                        echo"<tr>";
                            echo "<td><b>". $row['name']."</b></td>";
                            echo "<td><b>". $row['price']."</b></td>";
                        echo"</tr>";
                    }
                }else
                    echo"<h3>No records</h3>";
                ?>
            </table>
        </div>
        <div class="mt-4 row justify-content-center">
            <h3 class="m-2">Sides</h3>
            <table class="mt-2 table table-striped">
                <tr class="header">
                    <th class="col-10">Item Name</th>
                    <th>Price</th>
                </tr>
                <?php
                $query = "SELECT `name`, `price` FROM `dishes` WHERE type = 'Sides'";
                $data = mysqli_query($cn, $query);
                if(mysqli_num_rows($data) > 0){
                    foreach($data as $row){
                        echo"<tr>";
                            echo "<td><b>". $row['name']."</b></td>";
                            echo "<td><b>". $row['price']."</b></td>";
                        echo"</tr>";
                    }
                }else
                    echo"<h3>No records</h3>";
                ?>
            </table>
        </div>
        <div class="container p-8" id="footer">
            <div class="row justify-content-center">
                <div class="col-2 justify-content-center">
                    <a href="index.php"><button class="btn btn-outline-success" id="backHome">Back To Home</button></a>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>