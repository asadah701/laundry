<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/aos/aos.css" rel="stylesheet">
    <link href="assets/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    

</head>
<body>
<!-- navbar -->
<?php include('dbconnect.php'); 
$store = $_GET['store'];
?>
<?php include('nav.php'); ?>
<!-- first section -->

<div class="lsfirst_section">
    <div class="container">
        <div class="row p-3">
            <div class="col-12 mt-3">
              <div class="d-flex justify-content-center">
               <h4>Tumbledry Stores in <?php echo $store ?></h4>
              </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
            <div class="d-flex justify-content-center">
                <img src="assets/img/STORE-LOCATION.png" alt="" class="img-fluid">
            </div>
            </div>
        </div>
    </div>
</div>
<!-- second section -->
<div class="container">
    <div class="row mt-4">
        <div class="col-lg-4 col-12">
            <div class="store d-flex justify-content-center p-5 mt-3">
        <div><i class="icofont-location-pin"></i></div> 
        <div>Canal Road, Jakhan</div>   
        </div>
        </div>
        <div class="col-lg-4 col-12">
        <div class="store d-flex justify-content-center p-5 mt-3">
        <div><i class="icofont-location-pin"></i></div> 
        <div>Canal Road, Jakhan</div>   
        </div>
        </div>
        <div class="col-lg-4 col-12">
        <div class="store d-flex justify-content-center p-5 mt-3">
        <div><i class="icofont-location-pin"></i></div> 
        <div>Canal Road, Jakhan</div>   
        </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"  aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add locations</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="" method="POST">
                      <div class="form-group">
                        <input type="text" class="form-control" name="name" id="service_name"
                          aria-describedby="service_name" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="mob" id="service_name"
                          aria-describedby="service_name" placeholder="Phone">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="addrs" id="service_name"
                          aria-describedby="service_name" placeholder="Address">
                      </div>

                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <?php
                   if (isset($_POST['submit'])) { 
    
                   $name = $_POST['name'];
                   $phone = $_POST['mob'];
                   $address = $_POST['addrs'];
                   // if save button on the form is clicked
                   // name of the uploaded file
                   $sql = "INSERT INTO `pickup` (`name`, `phone`, `address`) VALUES ('$name', '$phone', '$address')  ";
                   $r = mysqli_query($conn, $sql);
                  if($r){
                  $show = true;
                   }
                  }
                  ?>

                  </div>
                </div>
              </div>
            </div> 
<!-- footer -->
<?php include('footer.php'); ?>
  
</body>
</html>