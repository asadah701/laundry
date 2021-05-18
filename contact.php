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
    <?php include('dbconnect.php'); ?>
    <!-- navbar -->
    <?php include('nav.php'); ?>
    <!-- first section -->
    <div class="ffirst_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 p-5" data-aos="fade-right">
                    <div><h3>Join the Tumbledry Revolution, NOW</h3></div>
                    <div>
                    <form action="" method="post">
  <div class="form-group">
    <input type="text" class="form-control inp" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" name="Name">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Mobile_Number" name="Mobile_Number">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="Email">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Location" name="Location">
  </div>
  <button type="submit" class="btn join_btn" name="join">Join Now</button>
</form> 
<?php 
if(isset($_POST['join'])){
    $name = $_POST['Name'];
    $mob = $_POST['Mobile_Number'];
    $email = $_POST['Email'];
    $loc = $_POST['Location'];
    $sql = "INSERT INTO `messages` (`name`, `mob`, `email`, `location`) VALUES ('$name', '$mob', '$email', '$loc')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "successfull";
    }else{
        echo "can not succed";
    }
}
?>
                    </div>
                </div>
                <div class="col-lg-6 col-12" data-aos="fade-left">
                    <img src="assets/img/Tumbledry-Shop-Board-image.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- first-section end -->
    <!-- second section -->
    
    <!-- third section -->
    
    <!-- fourth section -->
    
    <!-- fifth section -->

    <!-- footer -->
    <?php include('footer.php'); ?>

</body>

</html>