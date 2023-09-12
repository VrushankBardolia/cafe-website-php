<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Beats Cafe : Admin</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>
<?php include 'connection.php'; ?>
<body>
    <header class="header-area header-sticky">      <!-- Header -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="index.php" class="logo">
                            <img src="assets/images/logo.png">
                        </a>
                        <ul class="nav">
                            <li><a href="display_reservation.php">Reservation</a></li>
                            <li><a class="active">Menu</a></li>
                            <li><a href="insert.php">Enter Item</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="container text-center" id="menu-list" style="margin-top: 120px;">
        <h2 id="title">List Of Items</h2><br>
        <div class="row">
            <table class="table table-striped">
                <tr class="header">
                    <th>ID</th>
                    <th>Dish Name</th>
                    <th>Dish Type</th>
                    <th>Dish Price</th>
                    <th colspan="2" class="col-2">ACTIONS</th>
                </tr>
                <?php
                $query = "SELECT * FROM dishes";
                $data = mysqli_query($cn, $query);
                if(mysqli_num_rows($data) > 0){
                    foreach($data as $row){
                        echo"<tr>";
                            echo "<td>". $row['d_id']."</td>";
                            echo "<td>". $row['name']."</td>";
                            echo "<td>". $row['type']."</td>";
                            echo "<td>". $row['price']."</td>";
                            echo "<td><a href = update.php?id=$row[d_id]><b>EDIT</b></a></td>";
                            echo "<td><a href = del_dish.php?id=$row[d_id]><b>DELETE</b></a></td>";
                        echo"</tr>";
                    }
                }else{
                    echo"<h3>No records</h3>";
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>