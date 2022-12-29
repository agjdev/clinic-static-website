<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Make An Appointment </title>
	 <meta name="description" content="We are the best speech therapy center in bangalore offering wide variety of therapy treatments from kids to adults . Book Your Appointment Now">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/logo.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/style.css">
	
</head>
<body>


<?php 

$headOne = 'Contact Us';

$homeurl = '/index.php';

$curr_page = 'Make Your Appointment';


$curr_url = $_SERVER['REQUEST_URI'];

include './includes/loader.php';

include  './includes/userHeader.php';

include './includes/general-page-banner.php';


?>
  <main>

    <div class="container-fluid mb-5 pt-5">

      <!--Grid row-->
      <div class="row" style="margin-top: -100px;">

        <!--Grid column-->
        <div class="col-md-12">

          <div class="card pb-5">
            <div class="card-body">

              <div class="container">

                <!--Section: Contact v.2-->
                <section class="section">

                  <!--Section heading-->
                  <h2 class="font-weight-bold text-center h1 my-5">Make An Appointment</h2>
                  <!--Section description-->
                  <p class="text-center grey-text mb-5 mx-auto w-responsive">We never want to waste your time so  kindly book your appointment slot prior to visit our specialist.</p>

                  <div class="row pt-5">

                    <!--Grid column-->
                    <div class="col-md-8 col-xl-9">
                      <form>

                        <!--Grid row-->
                        <div class="row">

                          <!--Grid column-->
                          <div class="col-md-6">
                                 <div class="form-group">
                              <input type="text" id="contact-name" placeholder="Full Name" class="form-control" required>
                             
                            </div>
                          </div>
                          <!--Grid column-->

                          <!--Grid column-->
                          <div class="col-md-6">
                                 <div class="form-group">
                              <input type="text" id="contact-email" placeholder="Email Address" class="form-control" required>
                           
                            </div>
                          </div>
                          <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <input type="text" id="contact-Subject" placeholder="Mobile Number" class="form-control" required>
                            
                            </div>
                          </div>
                        </div>
					
                 <div class="row">
        <div class='col-md-12'>
            <div class="form-group">
                 <div class='input-group date' id='datetimepicker1'>
                    <input type='text' placeholder ="Preferred Date " id="datepicker" class="date form-control" required>
                    
                </div>
            </div>
        </div>
    </div>

                        <!--Grid row-->
                        <div class="row">

                          <!--Grid column-->
                          <div class="col-md-12">

                            <div class="form-group">
                              <textarea type="text" id="contact-message" placeholder="Message" class="md-textarea form-control" rows="3" required></textarea>
                            
                            </div>

                          </div>
                        </div>
                        <!--Grid row-->

                      </form>

                      <div class="form-group">
                        <button class="btn btn-info"> <i class="fa fa-rocket" name="submit" aria-hidden="true"></i> Request Now</button>
                      </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 col-xl-3">
                      <ul class="contact-icons text-center list-unstyled">
                        <li>
                          <i class="fa fa-map-marker fa-1x orange-text"> Location :</i>
                           <p class="pt-3"> Horamavu Near Multi choice Banglore Karnataka 560043</p>
						      <p><a href="https://goo.gl/maps/pyXNkN1jMczw9HUw6" target="_blank" class="text-dark ">View On Map</a></p>
                        </li>
						
						 <li>
                          <i class="fa fa-envelope fa-1x orange-text"> Mail Address : </i>
                          <p class="pt-3">info@hannahsclinic.com</p>
                        </li>

                        <li>
                          <i class="fa fa-whatsapp fa-1x orange-text">  Whatsapp or Dial Us :</i>
                          <p class="pt-3">+91 7338206497   </p>
						    <p class="pt-1">+91 8301034392  </p>
                        </li>

                       
                      </ul>
                    </div>
                    <!--Grid column-->

                  </div>
				  
				  <div class=" text-danger"><blockquote >Note : Our representative will call you back to confirm the booking </blockquote></div>

                </section>
                <!--Section: Contact v.2-->

              </div>
            </div>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>

    </div>

  </main>











     




<?php 

include'./includes/userFooter.php';





?>















</body>
</html>













