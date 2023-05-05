<?php
session_start();
include 'config.php';
if (strlen($_SESSION['ownerNID']) == 0) {
    echo "hoy nai";
} else {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Shop Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="Css/css/profile.css">
        <link href="Css/css/style4.css" rel="stylesheet">
        <!-- Extra libraries -->
     <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        input[type="file"] {
  display: none;
}
.custom-file-upload {
  display: inline-block;
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 12px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  font-weight: 100px;
}
.custom-file-upload:hover {
  background-color: #0069d9;
}

		/* Popup container */
		.popup {
		  position: fixed;
		  display: none;
		  z-index: 1;
		  padding-top: 100px;
		  left: 0;
		  top: 0;
		  width: 100%;
		  height: 100%;
		  overflow: auto;
		  background-color: rgba(0,0,0,0.4);
		}

		/* Popup content */
		.popup-content {
            background-color:#F5F5DC;
		  margin: auto;
		  padding: 20px;
		  border: 1px solid #888;
		  width: 80%;
		  max-width: 800px;
		}

		/* Close button */
		.close {
		  color: #aaa;
		  float: right;
		  font-size: 28px;
		  font-weight: bold;
		}

		.close:hover,
		.close:focus {
		  color: black;
		  text-decoration: none;
		  cursor: pointer;
		}

		/* Images container */
		.images-container {
			display: flex;
			flex-wrap: wrap;
			margin-top: 20px;
		}

		/* Image thumbnail */
		.thumbnail {
			margin: 10px;
			width: 200px;
			height: 200px;
			object-fit: cover;
            border: 1px solid black;
		}

		/* Selected image */
		.selected {
			border: 2px solid #28a745;
		}
</style>
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
                            <a href="ownerhome.php" class="nav-item nav-link">Main</a>
                            <a href="owner_about.php" class="nav-item nav-link">About</a>
                            <a href="owner_contact.php" class="nav-item nav-link">Contact</a>
                            <a href="Homepage2.php" class="nav-item nav-link text-danger">Logout</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
    <?php 
    $id = $_SESSION['ownerNID'];
 $query=mysqli_query($conn,"select * from owner where ownerNID='$id'");
 while($result=mysqli_fetch_array($query))
{   $msg= $result['shopname'];
    $success_message = "$msg Profile";
                echo '<script>
                      Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "' . $success_message . '",
                        showConfirmButton: false,
                        timer: 2000
                      });
                    </script>';
    ?>

        <div class="container">
            <div class="row">
                    <div class="col-12">
                        <div class="my-5">
                            <h3><?php echo $result['shopname'];?>'s Profile</h3>
                            <hr>
                        </div>
                        <form class="file-upload" enctype="multipart/form-data" method="post">
                            
                            <div class="row mb-5 gx-5">
                                <div class="col-xxl-8 mb-5 mb-xxl-0">
                                    <div class="bg-secondary-soft px-4 py-5 rounded">
                                        <div class="row g-3">
                                            <h2 class="mb-4 mt-0">Details</h2>
                                           
                                            <div class="col-md-6">
                                                <label class="form-label">Shop name *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="First name" name="shopname" value="<?php echo $result['shopname'];?>">
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <label class="form-label">Shop Address *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="NID" name="shopaddress" value="<?php echo $result['shopaddress'];?>">
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <label class="form-label">Trade Licence *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Address" name="tradelicence" value="<?php echo $result['tradelicence'];?>">
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <label class="form-label">Workshop Type(Car/Bike/Bus/Truck) *</label>
                                                <input type="text" class="form-control" placeholder="hello" aria-label="Phone number" name="workshoptype" value="<?php echo $result['workshoptype'];?>">
                                            </div>
                                        
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Workshop Number *</label>
                                                <input type="text" class="form-control" id="inputEmail4"  name="workshopnumber" value="<?php echo $result['workshopnumber'];?>">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">Workshop Service *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Address" name="workshopservice" value="<?php echo $result['workshopservice'];?>">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">Owner Name *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Address" name="ownername" value="<?php echo $result['ownername'];?>">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">Owner NID *</label>
                                                <input type="text" class="form-control" placeholder="" aria-label="Address" name="ownerNID" value="<?php echo $result['ownerNID'];?>" readonly>
                                            </div>

                                            <div class="col-md-6">
                                            <label class="form-label">Shop Photo*</label><br>  
                                            <label class="custom-file-upload">
									<input type="file" name="images[]" accept="image/jpg, image/jpeg, image/png" multiple>Choose Image</label>
                                    <button type="submit" class="btn btn-success btn-lg m-2" name="update2" > Upload</button>
                                    <button type="button" class="btn btn-warning btn-lg m-2" onclick="openPopup()" > See Shop Gallery</button>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="gap-3 d-flex justify-content-start text-center">
                                <button type="submit" name="update" value="Update" class="btn btn-primary btn-lg m-2">Update Information</button>
                            </div>
                                </div>
                                <!-- Upload profile -->
                                <div class="col-xxl-4">
                                <div class="bg-secondary-soft px-4 py-3 rounded">
                                        <div class="row g-1">
                                            <h4 class="my-4">Change Password</h4>
                                            <!-- Old password -->
                                            <div class="col-md-6">
                                                <label for="exampleInputPassword1" class="form-label">Old password *</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" name="current_password">
                                            </div>
                                            <!-- New password -->
                                            <div class="col-md-6">
                                                <label for="exampleInputPassword2" class="form-label">New password *</label>
                                                <input type="password" class="form-control" id="exampleInputPassword2" name="new_password">
                                            </div>
                                            <!-- Confirm password -->
                                            <div class="col-md-12">
                                                <label for="exampleInputPassword3" class="form-label">Confirm Password *</label>
                                                <input type="password" class="form-control" id="exampleInputPassword3" name="confirm_password">
                                            </div>
                                        </div>
                                        <!-- button -->
                            <div class="gap-3 d-flex justify-content-start text-center">
                                <button type="submit" name="update3" value="Update" class="btn btn-primary btn-lg m-2">Update Password</button>
                            </div>
                                    </div>
                                </div>
                            </div> 
                             <!-- Row END -->    
                        </form>
                        <?php } ?>   <!-- Form END -->
            </div></div></div> 
            <?php
$id = $_SESSION['ownerNID'];
$sql = "SELECT * FROM shopimage WHERE ownerNID='$id' ";
$sql2 = "SELECT shopname FROM owner WHERE ownerNID='$id' ";
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
    $row2 = mysqli_fetch_assoc($result2);
    $name = $row2['shopname'];
}
// Display images in a popup
echo "<div id='popup' class='popup'>
	<div class='popup-content'>
    <h1 class=text-center>{$name}'s Images  </h1>
		<span class='close' onclick='closePopup()'>&times;</span>
		<div class='images-container'>";

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $image_path = $row["image"];
  
  	echo "<img src='./shop_img/$image_path' class='thumbnail' onclick='selectImage(this)'>";
  }
} else {
  echo "NO IMAGES FOUND.";
}

echo "</div></div></div>";

?>          
            <?php
 if (isset($_POST['update'])) {
    $shopname = mysqli_real_escape_string($conn, $_POST['shopname']);
    $shopaddress = mysqli_real_escape_string($conn, $_POST['shopaddress']);
    $tradelicence = mysqli_real_escape_string($conn, $_POST['tradelicence']);
    $workshoptype = mysqli_real_escape_string($conn, $_POST['workshoptype']);
    $workshopnumber = mysqli_real_escape_string($conn, $_POST['workshopnumber']);
    $workshopservice = mysqli_real_escape_string($conn, $_POST['workshopservice']);
    $ownername = mysqli_real_escape_string($conn, $_POST['ownername']);
    $id = $_SESSION['ownerNID'];
    $sql= mysqli_query($conn, "UPDATE owner SET shopname='$shopname', shopaddress='$shopaddress', 
    tradelicence='$tradelicence', workshoptype='$workshoptype', workshopnumber='$workshopnumber', workshopservice='$workshopservice', ownername='$ownername' WHERE ownerNID='$id'");
    if(empty($shopname) || empty($shopaddress) || empty($tradelicence)|| empty($workshoptype)|| empty($workshopnumber)|| empty($workshopservice)|| empty($ownername)){
        $error_message1 = "Please fill all fields." ;
        echo '<script>
              Swal.fire({
                position: "center",
                icon: "warning",
                title: "'.$error_message1.'",
                showConfirmButton: false,
                timer: 3000
              });
            </script>';
            }
            else{
                $success_message = "$shopname's Information update successfully";
                echo '<script>
                      Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "' . $success_message . '",
                        showConfirmButton: false,
                        timer: -100
                      }).then(function() {
                        // Reload the current page after the timer expires
                        window.location.href = "ownerprofile.php";
                      });
                    </script>';}
     if(!$sql){
        $error_message = "Update unsuccessful";
        echo '<script>
              Swal.fire({
                position: "center",
                icon: "error",
                title: "' . $error_message . '",
                showConfirmButton: false,
                timer: 3000
              });
            </script>';
     }

}
  if(isset($_POST["update2"])) {
    // Get image details
    $image = count($_FILES['images']['name']);
    for($i=0; $i<$image; $i++) {
   $image_tmp_name = $_FILES['images']['tmp_name'][$i];
   $fileName = $_FILES['images']['name'][$i];
   $filePath = "shop_img/" . $fileName;
            // SQL query to update image file in database
            $id = $_SESSION['ownerNID'];
            $sql = "INSERT INTO shopimage (image,ownerNID) VALUES ('$fileName','$id')";
    if (mysqli_query($conn, $sql)) {
        move_uploaded_file($image_tmp_name, $filePath);
        $success_message = "The image has been updated";
        echo '<script>
              Swal.fire({
                position: "center",
                icon: "success",
                title: "'.$success_message.'",
                showConfirmButton: false,
                timer: 3000
              });
            </script>';
    } else {
        $error_message = "Error updating the image ";
        echo '<script>
              Swal.fire({
                position: "center",
                icon: "error",
                title: "'.$error_message.'",
                showConfirmButton: false,
                timer: 3000
              });
            </script>';
    }
   }
}
  

if(isset($_POST["update3"])) {
    $current_password = mysqli_real_escape_string($conn, $_POST['current_password']);
    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
    
    $id= $_SESSION['ownerNID'];
    $get_password_query = mysqli_query($conn, "SELECT password FROM owner WHERE ownerNID='$id'");
    $get_password_result = mysqli_fetch_assoc($get_password_query);
    $current_hashed_password = $get_password_result['password'];
    
    if (password_verify($current_password, $current_hashed_password)) {
        if ($new_password === $confirm_password) {
            $id= $_SESSION['ownerNID'];
            $update_query = mysqli_query($conn, "UPDATE owner SET password='$hashed_password' WHERE ownerNID='$id'");
            if ($update_query) {
                $success_message = "Password updated successfully";
                echo '<script>
                      Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "' . $success_message . '",
                        showConfirmButton: false,
                        timer: 3000
                      });
                    </script>';
            } else {
                $error_message = mysqli_error($conn);
                echo '<script>
                      Swal.fire({
                        position: "center",
                        icon: "error",
                        title: "Error updating password",
                        text: "'.$error_message.'",
                        showConfirmButton: false,
                        timer: 3000
                      });
                    </script>';
            }
        } else {
            $error_message = "New password and confirm password do not match";
            echo '<script>
                  Swal.fire({
                    position: "center",
                    icon: "warning",
                    title: "Error updating password",
                    text: "'.$error_message.'",
                    showConfirmButton: false,
                    timer: 3000
                  });
                </script>';
        }
    } else {
        $error_message = "Current password is incorrect";
        echo '<script>
              Swal.fire({
                position: "center",
                icon: "warning",
                title: "Error updating password",
                text: "'.$error_message.'",
                showConfirmButton: false,
                timer: 3000
              });
            </script>';
    } 

}
  
?>
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
        <script>
// Open the popup
function openPopup() {
	document.getElementById("popup").style.display = "block";
}

// Close the popup
function closePopup() {
	document.getElementById("popup").style.display = "none";
}

</script>

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
            <?php } ?>