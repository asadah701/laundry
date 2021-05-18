<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/aos/aos.css" rel="stylesheet">
    <link href="assets/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
<!-- navbar -->
<?php include('nav.php'); ?>
<!-- first section -->
<div class="first_section">
<div class="container">
<div class="row p-2" >
  <div class="col-lg-6 col-12 p-2 fsfd" data-aos="fade-right">
<div class="heading"><h3>Expert Service</h3></div>
<div class="service_1">Laundry</div>
<hr class="line1">
<div class="service_1">Dry Cleaning</div>
<hr class="line2">
<div class="service_1">Shoe Cleaning</div>
<hr class="line3">
<div class="service_1">Home Sanitization</div>
<hr class="line4">
<div class="service_1">
<button type="button" class="schedule_btn" data-toggle="modal" data-target="#exampleModal">
              Schedule Pickup
            </button>
</div>

  </div>
  <div class="col-lg-6 col-12 p-2" data-aos="fade-left">
  <img class="img-fluid" src="assets/img/expert-services-top.png">
  </div>
</div>

</div>
</div>
<!-- first-section end -->
<!-- second section -->
<div class="second_section mt-2">
<div class="container">
<div class="row" >
  <div class="col-lg-6 col-12 p-5 ssfd" data-aos="fade-up">
    <div class="laundry">
   <div class="text-center"><h3>Laundry</h3></div>
   <div class="text-center p-5 laundryp"><p>Every Clothes goes through a comprehensive 6 stage process enabling us to deliver on the promises of sparkling and fresh clothes </p></div>
   </div>
</div>
  <div class="col-lg-6 col-12 p-2 sssd" data-aos="fade-up">
  <img class="img-fluid" src="assets/img/dry-cleaning.jpg">
  </div>
</div>

</div>
</div>
<!-- third section -->
<div class="third_section mt-2">
<div class="container">
<div class="row" >
<div class="col-lg-6 col-12 p-5 tsfd" data-aos="fade-up">
    <div class="laundry">
   <div class="text-center"><h3>Dry Clean</h3></div>
   <div class="text-center p-5 dry"><p>All clothes are cleaned with environment-friendly solvents, such as Oil based hydrocarbons. State-of-the-art machinery is used to process the clothes where they are treated with highly acclaimed and commercially used solvents.</p></div>
   </div>
</div>
  <div class="col-lg-6 col-12 p-2 sssd" data-aos="fade-up">
  <img class="img-fluid" src="assets/img/dry-clean.jpg">
  </div>
  
</div>

</div>
</div>
<!-- fourth section -->
<div class="fourth_section mt-2">
  <div class="container">
    <div class="row" data-aos="zoom-in">
      <div class="col-lg-8 col-12 p-5">
        <div class="laundry">
        <div>
          <h4>Flaunt Your Shoes</h4>
        </div>
        <hr class="line">
        <div><p>Get your shoes as good as new with our professional shoe cleaning  service at affordable prices</p></div>
        <hr class="line">
        <div>
          <button class="know_more"><a href="price.php">&nbsp;&nbsp;Know More&nbsp;&nbsp;</a></button>
        </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <img class="img-fluid" src="assets/img/flaunt.png" alt="">
      </div>
    </div>
  </div>
</div>
<!-- fifth section -->
<div class="fifth_section mt-2">
  <div class="container">
    <div class="row" data-aos="zoom-in">
      <div class="col-lg-6 col-12 p-5">
        <div class="laundry">
        <div>
          <h4>Hygienic Virus Free Home</h4>
        </div>
        <hr class="lineup">
        <div><p>Sanitization Service to protect your family from Viruses</p></div>
        <div><p>Effective Action within 5 minutes of Fumigation</p></div>
        <hr class="lineup">
        <div>
          <button class="know_more1"><a href="price.php">&nbsp;&nbsp;Know More&nbsp;&nbsp;</a></button>
        </div>
        </div>
      </div>
      <div class="col-lg-6 col-12">
        <img class="img-fluid" src="assets/img/spray.png" alt="">
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
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