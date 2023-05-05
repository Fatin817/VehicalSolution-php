<?php error_reporting(0); ?> 
<!doctype html>
<html lang="en">

<head>
	<title>Shop Signup</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
	<link href="lib/animate/animate.min.css" rel="stylesheet">
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
		integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="Css/style.css">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: "Poppins", sans-serif;
		}

		body {
			background-color: lightgrey;
		}

		.btn {
			background-color: lightgoldenrodyellow;

		}

		.submit:hover {
			background-color: #007bff;
			color: #fff;
		}

		i {
			color: dodgerblue;
			font-size: 17px;

		}
		a{
			color: goldenrod;
		}

		
	</style>

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(Css/Images/home3.jpg);">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4 ">Signup</h3>
								</div>
								<div class="w-100">
								</div>
							</div>
							<form action="#" class="signin-form" method="Post" enctype="multipart/form-data">
								<div class="form-group mb-3">
									<i class="fas fa-envelope"></i>
									<label class="label" for="name">Shop name</label>
									<input type="text" class="form-control" placeholder="Enter your Shop Name"
										name="shopname" required>
								</div>
								<div class="form-group mb-3">
									<i class="fas fa-map-marker-alt"></i>
									<label class="label" for="password">Shop Address</label>
									<input type="text" class="form-control" placeholder="Enter your Shop Address"
										name="shopaddress" required>
								</div>
								<div class="form-group mb-3">
									<i class="fas fa-envelope"></i>
									<label class="label" for="password">Trade Licence</label>
									<input type="text" class="form-control" placeholder="Enter your Trade Licence"
										name="tradelicence" required>
								</div>
								<div class="form-group mb-3">
									<i class="fas fa-envelope"></i>
									<label class="label" for="password">Workshop Type(Car/Bike/Bus/Truck)</label>
									<input type="text" class="form-control" placeholder="Enter your Workshop Type"
										name="workshoptype" required>
								</div>
								<div class="form-group mb-3">
									<i class="fas fa-phone"></i>
									<label class="label" for="password">Workshop Number</label>
									<input type="text" class="form-control" placeholder="Enter your Workshop Number" required pattern="+880" title="Put +880 before your number"
										name="workshopnumber" required>
								</div>
								<div class="form-group mb-3">
									<i class="fas fa-envelope"></i>
									<label class="label" for="password">Workshop Service</label>
									<input type="text" class="form-control" placeholder="Enter Workshop Service"
										name="workshopservice" required>
								</div>
                                <div class="form-group mb-3">
									<i class="fas fa-user"></i>
									<label class="label" for="password">Owner Name</label>
									<input type="text" class="form-control" placeholder="Enter Owner Name"
										name="ownername" required>
								</div>
                                <div class="form-group mb-3">
									<i class="fa fa-credit-card"></i>
									<label class="label" for="password">Owner NID</label>
									<input type="text" class="form-control" placeholder="Enter Owner NID"
										name="ownerNID" required>
								</div>
                                <div class="form-group mb-3">
									<i class="fas fa-lock"></i>
									<label class="label" for="password">Password</label>
									<input type="password" class="form-control" placeholder="Enter your Password"
										name="password" required>
								</div>
								<div class="form-group">
									<button type="submit" value="Submit" class="form-control btn rounded submit px-3">Submit</button>
								</div>
							</form>
							<p class="  text-center">Have Any Account! <a href="owner_login.php">Login</a></p>
							<br><br>
							<p class="text-start"><a href="Homepage2.php">Return To Homepage
								</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<script src="lib/easing/easing.min.js"></script>
	<script src="lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="lib/waypoints/waypoints.min.js"></script>
	<script src="lib/counterup/counterup.min.js"></script>

	<?php
include 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

   // process form data for post method
   $shopname = mysqli_real_escape_string($conn, $_POST['shopname']);
   $shopaddress = mysqli_real_escape_string($conn, $_POST['shopaddress']);
   $tradelicence = mysqli_real_escape_string($conn, $_POST['tradelicence']);
   $workshoptype = mysqli_real_escape_string($conn, $_POST['workshoptype']);
   $workshopnumber = mysqli_real_escape_string($conn, $_POST['workshopnumber']);
   $workshopservice = mysqli_real_escape_string($conn, $_POST['workshopservice']);
   $ownername = mysqli_real_escape_string($conn, $_POST['ownername']);
   $ownerNID = mysqli_real_escape_string($conn, $_POST['ownerNID']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);
   $hashed_password = password_hash($password, PASSWORD_DEFAULT);
   $select = mysqli_query($conn, "SELECT * FROM owner WHERE shopaddress = '$shopaddress'") or die('query failed');
   if(mysqli_num_rows($select) > 0){
      $warning_message = "Shop with this Address already exists";
      echo '<script>
            Swal.fire({
              position: "center",
              icon: "warning",
              title: "' .  $warning_message. '",
              showConfirmButton: false,
              timer: 3000
            });
          </script>';
   }else{
         $insert = mysqli_query($conn, "INSERT INTO owner (shopname,shopaddress,tradelicence,workshoptype, workshopnumber, workshopservice, ownername, ownerNID, password) 
             VALUES('$shopname', '$shopaddress', '$tradelicence', '$workshoptype', '$workshopnumber', '$workshopservice', '$ownername', '$ownerNID', '$hashed_password')") or die('query failed');
         if($insert){
            $success_message = "Shop registered successfully";
            echo '<script>
                  Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "' . $success_message . '",
                    showConfirmButton: false,
                    timer: 3000
                  });
                </script>';
         }else{
            $error_message = "Shop registration unsuccessful";
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
}
?>


</body>

</html>