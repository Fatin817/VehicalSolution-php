<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        

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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <!-- Template Stylesheet -->
        <link href="Css/css/style4.css" rel="stylesheet">
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
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a class="navbar-brand text-dark">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span> <i class="fas fa-bars fa-2x navbar-icon text-dark"></i></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="ownerhome.php" class="nav-item nav-link">Main</a>
                            <a href="owner_about.php" class="nav-item nav-link">About</a>
                           
                            <a href="Homepage2.php" class="nav-item nav-link text-danger">Logout</a>
                        </div>
                       
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
    
       <!-- Contact Start -->
       <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>Contact for any query</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-info">
                            <h2>Quick Contact Info</h2>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Email Us</h3>
                                    <p>vehicalsolution@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form  id="contactForm"  method="post" >
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required/>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" placeholder="Message" name="message"  ></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button type="submit" value="Submit" class="btn btn-custom"  id="sendMessageButton">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

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
                            <a href="owner_about.php">About Us</a>
                            <a href="owner_contact.php">Contact Us</a>
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
        <!-- Footer End -->

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

        <?php
        include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
$subject = mysqli_real_escape_string($conn, $_POST['subject']);
$message = mysqli_real_escape_string($conn, $_POST['message']);
  $sql = "INSERT INTO contact(name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    $success_message = "Thanks for submitting";
    echo '<script>
            Swal.fire({
              position: "center",
              icon: "success",
              title: "' . $success_message . '",
              showConfirmButton: false,
              timer: 1500
            });
          </script>';
  } else {
    // Display SweetAlert error message
    $error_message = "Oops! There is a problem for submitting";
    echo '<script>
            Swal.fire({
              position: "center",
              icon: "error",
              title: "' . $error_message . '",
              showConfirmButton: false,
              timer: 1500
            });
          </script>';
  }
 
}
?>

    </body>
</html>