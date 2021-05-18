<div class="container-fluid mt-3" style="background-color:white;">
    <div class="row">
    <div class="col-lg-9 col-12"></div>
    <div class="col-lg-3 col-12 d-flex">
          <div><button class="contact_btn"><a href="contact.php">Contact Us</a></button></div>   
            
          <button type="button" class="schedule_btn ml-2" data-toggle="modal" data-target="#exampleModal">
              Schedule Pickup
            </button>
         
    
    </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="social">
                <ul>
                    <li><i class="icofont-instagram"></i></li>
                    <li><i class="icofont-facebook"></i></li>
                    <li><i class="icofont-twitter"></i></li>
                    <li><i class="icofont-whatsapp"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="socialf">
                <ul>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="faq.php">FAQs</a></li>
                    <li><a href="tnc.php">Terms</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="footer_line">
    <div class="row">
        <div class="col-12">
            <div class="copyright">
            <p>2019 laundry Solutions Pvt. Ltd. All rights reserved.</p>
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
  <script src="assets/jquery/jquery.min.js"></script>  
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>  
  <script src="assets/aos/aos.js"></script>
  <script src="assets/counterup/counterup.min.js"></script> 
  <script src="assets/waypoints/jquery.waypoints.min.js"></script> 
  <script src="assets/js/main.js"></script> 

