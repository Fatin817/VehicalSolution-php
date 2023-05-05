<?php
session_start();
include 'config.php';
if(isset($_GET['ownerNID'])) {
  $_SESSION['ownerNID'] = $_GET['ownerNID'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Customer Search</title>
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
        <!-- Extra libraries -->
     <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          <style>
  .table-container {
        max-width: 500px;
        margin: 0 auto;
        border: 1px solid #ccc;
        padding: 20px;
      }
      
      table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
      }
      
      td {
        padding: 10px;
        border: 1px solid #ccc;
      }
      
      input[type="text"] {
        width: 100%;
        padding: 5px;
        box-sizing: border-box;
        border: none;
        
      }
      
      @media (min-width: 576px) {
        .modal-dialog {
          max-width: 900px;
        }
      }
      p{
        color: rgb(73, 23, 23);
        font-weight: 400px;
        font-size: 30px;
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
    <nav class="navbar navbar-light sticky-top">
        <a target="_top" ><img src="https://blog.flamingtext.com/blog/2023/03/29/flamingtext_com_1680071094_1057183928.png" border="0" alt="Logo Design by FlamingText.com" ></a>
      </nav>
      <?php 
    $id = $_SESSION['ownerNID'];
 $query=mysqli_query($conn,"select * from owner where ownerNID='$id'");
 while($result=mysqli_fetch_array($query))
{
    ?>
<div >
    <div class="container" >
      <div >
        <div >
          <h2 class="text-center mb-5" ><?php echo $result['shopname'];?>'s Information</h2>
        </div>
        <div >
            <form method="post">
                <div class="row">
                  <!-- Information section -->
                  <div >
                    <p>Shop Information</p>
                    <table>
                      <tr>
                        <td>Shop name</td>
                        <td><input type="text" value="<?php echo $result['shopname'];?>" readonly></td>
                      </tr>
                      <tr>
                        <td>Workshop Type(Car/Bike/Bus/Truck)</td>
                        <td><input type="text" value="<?php echo $result['workshoptype'];?>" readonly></td>
                      </tr>
                      <tr>
                        <td>Workshop Service</td>
                        <td><input type="text"  value="<?php echo $result['workshopservice'];?>" readonly></td>
                      </tr>
                      <tr>
                        <td>Owner Name</td>
                        <td><input type="text"  value="<?php echo $result['ownername'];?>" readonly></td>
                      </tr>
                      <tr>
                        <td>Shop Status</td>
                        <td><input type="text" name="status" value="<?php echo $result['status'];?>" readonly></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div>
                <?php
$phone_number = $result['workshopnumber'];
$address = $result['shopaddress'];
echo '<button style="background-color:rgb(215, 177, 120);" class="btn  btn-lg mr-2">
        <a style="color: black; text-decoration: none; display: flex; align-items: center;" href="tel:' . $phone_number . '">
          <i class="fas fa-phone-alt mr-2"></i> Call us
        </a>
      </button>';
echo '<button style="background-color:rgb(215, 177, 120);" class="btn  btn-lg mr-2">
        <a style="color: black; text-decoration: none; display: flex; align-items: center;" href="https://www.google.com/maps?q=' . $address . '" target="_blank">
          <i class="fas fa-map-marker-alt mr-2"></i> Get Directions
        </a>
      </button><br>';
echo '<button type="button" class="btn btn-warning btn-lg m-2" onclick="openPopup()" >Shop Images</button>';
?>
           </form>
              <?php } ?> 
              </div>
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
        </div>
      </div>
</div>             
    </div>
    </div>
    <div class="p-4 d-flex justify-content-center">
                <button type="button" onclick="window.location.href='customer_search_for_workshop.php';" class="btn2 btn-danger btn-lg">Go Back</button>
            </div>
</main>
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
</body>
</html>
<?php }?>