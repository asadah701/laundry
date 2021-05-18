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
<?php include('nav.php');
include('dbconnect.php');
$show = false;
?>
<?php if($show== true){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Succussfully Submitted </strong> We will reach you at call shortly.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
} ?>
<!-- first section -->
<div class="ifirst_section mt-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 p-5" data-aos="zoom-in">
                <div class="iheading">
                    <p>World Class <strong>DRY CLEAN</strong> & <strong>LAUNDRY</strong> service, <strong>NOW IN INDIA</strong></p>
                </div>
                <hr class="footer_line">
                <div class="iheading2">
                    <p>World Renowned Machines</p>
                    <p>German Eco Firendly Cleaning Solutions</p>
                    <p><strong>Upto 20% OFF On First Order</strong></p>
                </div>
                <hr class="footer_line">
                <div class="ibtnd">
                    <p><small>Feel the difference,  yourself</small></p>
                    <button type="button" class="schedule_btn" data-toggle="modal" data-target="#exampleModal">
              Schedule Pickup
            </button>

 
                </div>
            </div>
            <div class="col-lg-6 col-12" data-aos="zoom-in">
                <img class="img-fluid ml-2" src="assets/img/mommy.jpg" alt="">
            </div>
        </div>
    </div>
</div>

<!-- first-section end -->
<!-- second section -->
<div class="isecond_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 p-5" data-aos="zoom-in">
            <div class="iheadingss">
                    <p>IMPECCABLE QUALITY, EVERYTIME!</p>
                </div>
                <hr class="footer_line">
                <div class="iheading2">
                    <p>World Renowned Machines</p>
                    <p>German Eco Firendly Cleaning Solutions</p>
                    <p><strong>Upto 20% OFF On First Order</strong></p>
                </div>
                <hr class="footer_line">
                <div class="ibtnd">
                    <p><small>Feel the difference,  yourself</small></p>
                    <button type="button" class="schedule_btn" data-toggle="modal" data-target="#exampleModal">
              Schedule Pickup
            </button>
                </div>
            </div>
            <div class="col-lg-8 col-12" data-aos="zoom-in">
                <div class="row p-3">
                    <div class="col-lg-6 col-6" data-aos="zoom-in">
                        <div class="">
                            <img src="assets/img/p1.png" alt="" class="img-fluid ipic">
                        </div>
                        <div class="mt-1 text-center">
                            <h5>Hohenstein Certified Machinery</h5>
                        </div>
                        <div class="ml-1 text-center">
                         <p>To Prevent color loss and shrinkage</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6" data-aos="zoom-in">
                        <div class="">
                            <img src="assets/img/p2.png" alt="" class="img-fluid ipic">
                        </div>
                        <div class="mt-1 text-center">
                            <h5>Woolmark Certified Machinery</h5>
                        </div>
                        <div class="ml-1 text-center">
                         <p>To process delicate & woolen garments</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-6" data-aos="zoom-in">
                    <div class="">
                            <img src="assets/img/p3.png" alt="" class="img-fluid ipic">
                        </div>
                        <div class="mt-1 text-center">
                            <h5>Professional & Experienced Team</h5>
                        </div>
                        <div class="ml-1 text-center">
                         <p>Team with excellent knowledge of fabrics and how to process them</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6" data-aos="zoom-in">
                    <div class="">
                            <img src="assets/img/p4.png" alt="" class="img-fluid ipic">
                        </div>
                        <div class="mt-1 text-center">
                            <h5>German Eco Friendly Cleaning Solutions</h5>
                        </div>
                        <div class="ml-1 text-center">
                         <p>Tough on stains, gentle on fabric</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- third section -->
<div class="ithird_section mt-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 mt-5" data-aos="zoom-in">
            <div class="iheadingss1">
                    <h4>6 STAGE PROCESS FOR</h4>
                    <h4>UNMATCHED GARMENT CARE</h4>
                </div>
                <hr class="footer_line">
                <div class="iheading2">
                    <p>Specialized Machinery & Skilled Experts for each stage</p>
                </div>
                <hr class="footer_line">
                <div class="ibtnd">
                    <p><small>Feel the difference,  yourself</small></p>
                    <button type="button" class="schedule_btn" data-toggle="modal" data-target="#exampleModal">
              Schedule Pickup
            </button>
                </div>
            </div>
            <div class="col-lg-6 col-12 p-3" data-aos="zoom-in">
                <div class="row mt-2">
                    <div class="col-2"><i class="icofont-hand-drawn-right" style="font-size:35px"></i></div>
                    <div class="col-10">
                        <div><h4>Sorting & Inspection</h4></div>
                        <div><p>Segregation basis care label, fabric type and color</p></div>
                    </div>
                </div>
                <div class="row mt-2" >
                    <div class="col-2"><i class="icofont-hand-drawn-right" style="font-size:35px"></i></div>
                    <div class="col-10">
                        <div><h4>Stain Treatment</h4></div>
                        <div><p>Italian spotting machines | American stain removing solutions</p></div>
                    </div>
                </div>
                <div class="row mt-2" mt-3>
                    <div class="col-2"><i class="icofont-hand-drawn-right" style="font-size:35px"></i></div>
                    <div class="col-10">
                        <div><h4>Processing</h4></div>
                        <div><p>World-Renowned Italian Dry cleaning machines | German Eco friendly cleaning solutions</p></div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2"><i class="icofont-hand-drawn-right" style="font-size:35px"></i></div>
                    <div class="col-10">
                        <div><h4>Finishing</h4></div>
                        <div><p>Unique Steam Ironing equipment for each garment type</p></div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2"><i class="icofont-hand-drawn-right" style="font-size:35px"></i></div>
                    <div class="col-10">
                        <div><h4>Quality Check</h4></div>
                        <div><p>Meticulous inspection of each item by experts</p></div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2"><i class="icofont-hand-drawn-right" style="font-size:35px"></i></div>
                    <div class="col-10">
                        <div><h4>Packing</h4></div>
                        <div><p>Folded, Hanger or Vacuum packing as per your stated preference</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fourth section -->
<div class="ifourth_section">
    <div class="container">
        <div class="row " data-aos="zoom-in">
            <div class="col-lg-6 col-12 p-5">
            <div class="iheadingss">
                    <p>IMORE REASONS TO</p>
                     <p>EXPERIENCE OUR SERVICES</p>
                </div>
                <hr class="footer_line">
                <div class="iheading2">
                    <p><strong>Upto 25% OFF</strong> on 1st Order</p>
                    <p>Attractive <strong>Membership plans</strong></p>
                    <p><strong>Free</strong>Pickup and Drop</p>
                </div>
                <hr class="footer_line">
                <div class="ibtnd">
                    <p><small>Feel the difference,  yourself</small></p>
                    <button class="know_more1 mt-2"><a href="price.php">&nbsp;&nbsp;Know More&nbsp;&nbsp;</a></button>
                </div>
            </div>
            <div class="col-lg-6 col-12 p-2">
                <img class="img-fluid" src="assets/img/reasons.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- fifth section -->
<div class="ififth_section">
    <div class="container">
        <div class="row" data-aos="zoom-in">
            <div class="col-lg-6 col-12 p-2">
                <img class="img-fluid" src="assets/img/STORE-LOCATION.png" alt="">
            </div>
            <div class="col-lg-6 col-12 p-5 lau">
                <div><h2>FASTEST GROWING LAUNDRY</h2></div>
                <div><h2>& DRY CLEANING CHAIN</h2></div>
            </div>
        </div>
    </div>
</div>
<section id="counts" class="counts mt-4">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><strong>31</strong></span>
            <p><strong>CITIES</strong></p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><strong>122</strong></span>
            <p><strong>STORES</strong></p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><strong>3</strong></span>
            <p><strong>ORDERS</strong></p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><strong>35</strong></span>
            <p><strong>GARMENTS</strong></p>
          </div>

        </div>

      </div>
    </section>
    <div class="container-xl mt-5 p-3">
	<div class="row">
		<div class="col-lg-8 mx-auto">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="img-box"><img src="assets/img/b1.jpg" alt=""></div>
						<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
						<p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
					</div>
					<div class="carousel-item">
						<div class="img-box"><img src="assets/img/g1.jpg" alt=""></div>
						<p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
						<p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
					</div>
					<div class="carousel-item">
						<div class="img-box"><img src="assets/img/g2.jpg" alt=""></div>
						<p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
						<p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
					</div>
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
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