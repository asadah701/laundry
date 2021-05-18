<?php include('dbconnect.php'); ?>
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
<?php include('nav.php'); ?>
<!-- first section -->

<div class="pfirst_section">
<div class="container">
<div class="row">
<div class="col-lg-6 col-12 p-5 pricing" data-aos="fade-right">
<div class=""><h4>Pricing</h4></div>
<hr class="pline">
<div class=""><p>Get Clothes as good as new at unbelievable prices</p></div>
<div>
<small>Select Area to Check prices</small><br>
<select class="w-50" name="section" id="s1" onChange="SelectRedirect();">
<option value="">Select Your Location</option>
<?php
$sql = "SELECT * FROM `locations`";
$result = mysqli_query($conn, $sql);
$n = mysqli_num_rows($result);
if($n>0){
    while($row = mysqli_fetch_assoc($result)){

?>
<option value="<?php echo $row['location']; ?>"><?php echo $row['location']; ?></option>
<?php }
}
?>
</select>
</div>
</div>
<div class="col-lg-6 col-12 p-5" data-aos="fade-left">
<img class="img-fluid bp ml-2" src="assets/img/bp.png" alt="">
</div>
</div>
</div>
</div>
<script>
function SelectRedirect(){
      // ON selection of section this function will work
      //alert( document.getElementById('s1').value);
      
      switch(document.getElementById('s1').value)
      {
          <?php
            $sql = "SELECT * FROM `locations`";
            $result = mysqli_query($conn, $sql);
            $n = mysqli_num_rows($result);
            if($n>0){
                while($row = mysqli_fetch_assoc($result)){
            
            ?>
      case "<?php echo $row['location']; ?>":
      window.location="<?php echo $row['location']; ?>.php";
      break;
      
      <?php }
            }
      ?>
      
      /// Can be extended to other different selections of SubCategory //////
      default:
      window.location="../"; // if no selection matches then redirected to home page
      break;
      }// end of switch 
      }
</script>
<!-- footer -->
<?php include('footer.php'); ?>
  
</body>
</html>