<?php
session_start();
include 'config.php';
if(isset($_GET['nid'])) {
  $_SESSION['nid'] = $_GET['nid'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Customer Managment</title>
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
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
      
</style>
<body>
    <nav class="navbar navbar-light sticky-top">
        <a target="_top" ><img src="https://blog.flamingtext.com/blog/2023/03/29/flamingtext_com_1680071094_1057183928.png" border="0" alt="Logo Design by FlamingText.com" ></a>
      </nav>
      <?php 
    $id = $_SESSION['nid'];
 $query=mysqli_query($conn,"select * from customer where nid='$id'");
 while($result=mysqli_fetch_array($query))
{
    ?>
<div >
    <div class="container" >
      <div >
        <div >
          <h2 class="text-center mb-5" ><?php echo $result['name'];?>'s Information</h2>
        </div>
        <div >
            <form  method="post">
                <div class="row">
                  <!-- Information section -->
                  <div class="col-sm-7 col-md-7 col-lg-7">
                    <p>Information</p>
                    <table>
                      <tr>
                        <td>Customer Name</td>
                        <td><input type="text" name="cstname" value="<?php echo $result['name'];?>" readonly></td>
                      </tr>
                      <tr>
                        <td>Customer NID</td>
                        <td><input type="text" name="cstid" value="<?php echo $result['nid'];?>" readonly></td>
                      </tr>
                      <tr>
                        <td>Customer Address</td>
                        <td><input type="text" name="cstaddress" value="<?php echo $result['address'];?>" readonly></td>
                      </tr>
                      <tr>
                        <td>Customer Number</td>
                        <td><input type="text" name="cstaddress" value="<?php echo $result['number'];?>" readonly></td>
                      </tr>
                      <tr>
                        <td>Customer Email</td>
                        <td><input type="text" name="cstaddress" value="<?php echo $result['email'];?>" readonly></td>
                      </tr>
                      <tr>
                        <td>Customer Status</td>
                        <td><input type="text" name="status" value="<?php echo $result['status'];?>"></td>
                      </tr>
                    </table>
                  </div>
                  <!-- Profile section -->
                  <div class="col-sm-2 col-md-5 col-lg-5">
                    <p>Profile image</p>
                    <div class="position-relative ">
                      <img src="./uploaded_img/<?php echo($result['image']); ?>" alt="Profile image" style="max-width: 70%; max-height: 100%;">
                    </div>
                  </div>
                </div>
                <div>
                <button type="submit" name="update" value="Update" class="btn btn-primary btn-lg m-2">Update</button>
              </form>
              <?php } ?> 
              </div>
        </div>
      </div>
    </div>
  </div>
  <?php
 if (isset($_POST['update'])) {
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $id = $_SESSION['nid'];
    $sql= mysqli_query($conn, "UPDATE customer SET status='$status' WHERE nid='$id'");
    if ($sql) {
      $success_message = "Status update successfully";
      echo '<script>
              Swal.fire({
                position: "center",
                icon: "success",
                title: "' . $success_message . '",
                showConfirmButton: false,
                timer: 3000
              }).then(() => {
                window.location.href = "view_customer.php";
              });
            </script>';
    }
    
     else{
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
?>             
    </div>
    </div>
    <div class="p-4 d-flex justify-content-center">
                <button type="button" onclick="window.location.href='view_customer.php';" class="btn2 btn-danger btn-lg">Go Back</button>
            </div>
</main>
</div>

</body>
</html>
<?php }?>