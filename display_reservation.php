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
                            <li><a class="active">Reservation</a></li>
                            <li><a href="menu_list.php">Menu</a></li>
                            <li><a href="insert.php">Enter Item</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="container text-center" id="show-reservation">
        <h2 id="title">List Of Reservations</h2><br>
        <div class="row">
            <table class="table table-striped">
                <tr class="header">
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Phone Number</th>
                    <th>No. Of Guests</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Delete</th>
                </tr>
                <?php
                $query = "SELECT * FROM reservation";
                $data = mysqli_query($cn, $query);
                if(mysqli_num_rows($data) > 0){
                    foreach($data as $row){
                        echo"<tr>";
                            echo "<td>". $row['r_id']."</td>";
                            echo "<td>". $row['name']."</td>";
                            echo "<td>". $row['email']."</td>";
                            echo "<td>". $row['phone']."</td>";
                            echo "<td>". $row['guests']."</td>";
                            echo "<td>". date("d-M-Y",strtotime($row['r_date'])) ."</td>";
                            echo "<td>". $row['r_time']."</td>";
                            echo "<td> <a href= del_reservation.php?id=$row[r_id]><b>DELETE</b></a></td>";
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