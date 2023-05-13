<?php
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="Css/css/vav.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a target="_top"><img src="https://blog.flamingtext.com/blog/2023/03/29/flamingtext_com_1680069221_1057183927.png" border="0" alt="Logo Design by FlamingText.com"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a class="navbar-brand text-dark">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span> <i class="fas fa-bars fa-2x navbar-icon text-dark"></i></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="Homepage2.php" class="nav-item nav-link">Home</a>
                            <a href="aboutus.php" class="nav-item nav-link">About</a>
                            
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                                <div class="dropdown-menu">
                                    <a href="adminlogin.php" class="dropdown-item">Admin</a>
                                    <a href="owner_login.php" class="dropdown-item">Wrokshop</a>
                                    <a href="customer_login.php" class="dropdown-item">Customer</a>
                                </div>
                            </div>
                            <a href="contactus.php" class="nav-item nav-link ">Contact</a>
                        </div>
                       
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="22.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Vehical Solution</h3>
                            <h1>Keep your Car Body Fit</h1>
                            <p>
                                One stop solution for automobile
                            </p>
                    
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="11.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Vehical Solution</h3>
                            <h1>Quality service for you</h1>
                            <p>
                                One stop solution for automobile
                            </p>
                            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="33.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Vehical Solution</h3>
                            <h1>Keep your Car Newer </h1>
                            <p>
                                One stop solution for automobile
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/ulogo.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <p>About Us</p>
                            <h2>Finding a trusted workshop for keep your vehical body fit</h2>
                        </div>
                        <div class="about-content">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Finding Workshop</li>
                                <li><i class="far fa-check-circle"></i>Pin Workshop Location</li>
                                <li><i class="far fa-check-circle"></i>Workshop Details</li>
                                <li><i class="far fa-check-circle"></i>Trusted Workshop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
             <!-- Facts Start -->
             <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="facts-text">
                            <?php 
$sql = mysqli_query($conn,"SELECT COUNT(*) FROM owner");
$result = mysqli_fetch_array($sql);
echo '<h3 data-toggle="counter-up" class="text-dark">' . $result[0] . '</h3>';
echo '<p class="text-dark">Workshop Number</p>';
?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 ">
                        <div class="facts-item">
                            <i class="fa fa-users"></i>
                            <div class="facts-text">
                            <?php 
$query = mysqli_query($conn, "SELECT COUNT(*) FROM customer");
$result = mysqli_fetch_array($query);
echo '<h3 data-toggle="counter-up" class="text-dark">' . $result[0] . '</h3>';
echo '<p class="text-dark">Happy Clients</p>'; 
?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
         <!-- Footer Start -->
         <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-envelope"></i>vehicalsolution@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Links</h2>
                            <a href="aboutus.php">About Us</a>
                            <a href="contactus.php">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="">Terms of use</a>
                            <a href="">Privacy policy</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">VehicalSolution</a>, All Right Reserved. Designed By <a >VehicalSolution</a></p>
            </div>
        </div>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
