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
    <header class="header-area header-sticky"> <!-- Header -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="index.php" class="logo">
                            <img src="assets/images/logo.png">
                        </a>
                        <ul class="nav">
                            <li><a href="display_reservation.php">Reservation</a></li>
                            <li><a href="menu_list.php">Menu</a></li>
                            <li><a class="active">Enter Item</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="container" id="insert" style="margin-top: 120px;">
        <h2 id="title">Enter Dish</h2><br>
        <div class="row justify-content-center">
            <div class="col-7">
                <form method="post">
                    <div class="m-2">
                        <label class="form-label">Dish Name</label>
                        <input type="text" name="dish_name" class="form-control">
                    </div>
                    <div class="m-2">
                        <label class="form-label">Dish Type</label>
                        <input type="text" name="dish_type" class="form-control">
                    </div>
                    <div class="m-2">
                        <label class="form-label">Price</label>
                        <input type="number" name="dish_price" class="form-control">
                    </div>
                    <div class="row p-2 justify-content-center">
                        <input type="submit" value="Submit" id="submit" name="submit" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $name=$_POST['dish_name'];
    $type=$_POST['dish_type'];
    $price=$_POST['dish_price'];
    $qry="INSERT INTO dishes(`name`, `type`, `price`) VALUES('$name','$type','$price')";
    if(mysqli_query($cn,$qry)){
        header('Location:menu_list.php');
    }
}
?>