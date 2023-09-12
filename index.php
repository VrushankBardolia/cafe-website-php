<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Beats Cafe</title>
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
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#offers">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div id="top"> <!--  Main Banner -->
        <div class="row">
            <div class="col-lg-4">
                <div class="left-content">
                    <div class="inner-content">
                        <h4>Beats Cafe</h4>
                        <h6>THE BEST EXPERIENCE</h6>
                        <div class="main-white-button scroll-to-section">
                            <a href="#reservation">Make A Reservation</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="main-banner header-text">
                    <div class="item">
                        <div class="img-fill">
                            <img src="assets/images/slide-02.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section" id="offers"> <!-- Menu  -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Beats Cafe</h6>
                        <h2> Our Popular Items</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <h4>Nutella Cheesecake</h4>
                                                            <p>Toppings Of Nutella Spread Over The Freshly Brewed New York Style Cheesecake.</p>
                                                            <div class="price">
                                                                <h6>₹ 280</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <h4>KitKat Shake</h4>
                                                            <p>Chocolaty KitKat Blended In Fresh Creamy Milk With The Toppings Of KitKat.</p>
                                                            <div class="price">
                                                                <h6>₹ 180</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <h4>Alfredo Pasta</h4>
                                                            <p>Soft Pane Pasta In White & Creamy Souce With Italian Touch & Style.</p>
                                                            <div class="price">
                                                                <h6>₹ 150</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <h4>Virgin Mojito</h4>
                                                            <p>Refreshing Virgin Mojito Is Brimming With Fresh Mint, Fresh Lime Juice & Club Soda.</p>
                                                            <div class="price">
                                                                <h6>₹ 150</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <h4>Supreme Burger</h4>
                                                            <p>Paneer Stuffed Patty With Rich Souces & Fresh Veggies Between Soft Grilled Buns.</p>
                                                            <div class="price">
                                                                <h6>₹ 180</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <h4>Cornita Pizza</h4>
                                                            <p>American Corn & Customizable Veggies With Thin Crust Cheese Base</p>
                                                            <div class="price">
                                                                <h6>₹ 250</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <a href="menu.php"><button id="explore-menu">Explore Menu</button></a>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="chefs"> <!--  Chefs -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Chefs</h6>
                        <h2>We offer the best ingredients for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb"><img src="assets/images/chefs-01.jpg" alt="Chef #1"></div>
                        <div class="down-content">
                            <h4>Rakesh Patel</h4>
                            <span>Shakes Chef</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb"><img src="assets/images/chefs-02.jpg" alt="Chef #2"></div>
                        <div class="down-content">
                            <h4>Mahesh Dalle</h4>
                            <span>Italian Dish Chef</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb"><img src="assets/images/chefs-03.jpg" alt="Chef #3"></div>
                        <div class="down-content">
                            <h4>Abhishek Sharma</h4>
                            <span>Pizza Chef</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="reservation"> <!-- Reservation & Contact Us  -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
                        </div><br><br>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">hello@beatscafe.com</a><br><a href="#">info@beatscafe.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>Table Reservation</h4>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <input name="email" type="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="" />
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input name="guests" type="number" id="number-guests" placeholder="No. Of Guests" required="" />
                                </div>
                                <div class="col-lg-6">
                                    <div id="filterDate2">
                                        <div class="input-group date" data-date-format="dd/mm/yyyy">
                                            <input name="date" id="date" type="text" class="form-control"
                                                placeholder="dd/mm/yyyy">
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <select value="time" name="time" id="time">
                                        <option value="time">Time</option>
                                        <option name="Breakfast" id="Breakfast">Breakfast</option>
                                        <option name="Lunch" id="Lunch">Lunch</option>
                                        <option name="Dinner" id="Dinner">Dinner</option>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset style="margin-top: 12px;">
                                        <button type="submit" id="form-submit" name="reserve" class="main-button-icon"> Make A Reservation</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="about"> <!-- About -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Leave A Delicious Memory For You</h2>
                        </div>
                        <p>Welcome to <b>Beats Cafe</b>, where every sip and bite tells a story. Our journey began with
                            a passion for creating an inviting space that brings people together over exceptional food
                            and beverages. Our cafe is more than just a place to indulge your senses; it's a haven for
                            foodies and coffee connoisseurs alike.</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/images/about-thumb-01.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-02.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-thumb-03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="assets/images/about-video-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer> <!-- Footer -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.php"><img src="assets/images/white-logo.png" alt=""></a><br>
                        <a class="nav-tag mt-4" href="display_reservation.php">Go To Admin</a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Beats Cafe Co.<br>Made By Vrushank Bardolia<br></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <script src="assets/js/custom.js"></script>
    <script>
        $(function () {
            var selectedClass = "";
            $("p").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function () {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);
            });
        });
    </script>
</body>
</html>
<?php
if(isset($_POST['reserve'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $guests=$_POST['guests'];
    $date= date('Y-m-d', strtotime($_POST['date']));
    $time=$_POST['time'];

    $qry="INSERT INTO reservation(`name`, `email`, `phone`, `guests`, `r_date`, `r_time`) 
        VALUES('$name','$email','$phone','$guests','$date','$time')";
    $data=mysqli_query($cn,$qry);
    if($data){
        echo '<script> alert("Table Has Been Reserved") </script>';
    }
}
?>