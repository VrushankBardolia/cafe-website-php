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
    <header class="header-area header-sticky" style="border-bottom: 1px solid green;"> <!-- Header -->
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

    <div class="container" id="update">
        <h2 id="title">Update Dish</h2><br>
        <div class="row justify-content-center">
            <div class="col-7">
            <form method="post">
                <?php
                $con = mysqli_connect("localhost","root","","cafe");
                if(isset($_REQUEST['id'])){
                    $id = mysqli_real_escape_string($con,$_REQUEST['id']);
                    $qry="SELECT * FROM dishes WHERE d_id= '$id'";
                    $res=mysqli_query($con,$qry);
                    if(mysqli_num_rows($res)>0){
                        $row=mysqli_fetch_array($res);
                        ?>
                       
                        <div class="m-2">
                            <label class="form-label">Dish ID</label>
                            <input type="text" name="dish_id" value="<?php echo $row[0]?>" class="form-control" disabled>
                        </div>
                        <div class="m-2">
                            <label class="form-label">Dish Name</label>
                            <input type="text" name="dish_name" value="<?php echo $row[1]?>" class="form-control">
                        </div>
                        <div class="m-2">
                            <label class="form-label">Dish Type</label>
                            <input type="text" name="dish_type" value="<?php echo $row[2];?>" class="form-control">
                        </div>
                        <div class="m-2">
                            <label class="form-label">Price</label>
                            <input type="number" name="dish_price" value="<?php echo $row[3];?>" class="form-control">
                        </div>
                        <div class="row p-2 justify-content-center">
                            <button id="back" class="btn btn-outline-dark m-2" onclick="history.back()">Back</button>
                            <input type="submit" value="Update" id="update-btn" name="s1" class="btn m-2">
                        </div>
                    
                    <?php
                    }
                }
                ?>  
                </form>
            </div>
        </div>
    </div>
</body>
<?php
$id ;
if(isset($_REQUEST['id'])){
    $id = mysqli_real_escape_string($cn,$_REQUEST['id']);
}
if(isset($_POST['s1'])){
    $dname=$_POST['dish_name'];
    $dtype=$_POST['dish_type'];
    $dprice=$_POST['dish_price'];
    $upQry="UPDATE dishes SET name='$dname', type='$dtype', price='$dprice' WHERE d_id='$id'";
    if(mysqli_query($cn,$upQry)){
        header('Location:menu_list.php');
    }else{
        echo mysqli_error();
    }
}
?>
</html>

