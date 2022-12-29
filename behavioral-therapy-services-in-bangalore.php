<?php include './includes/data-contents.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
     <title> <?php echo $contentElevenTitle ;?> in Bangalore | Speech Therapy Centre in Bangalore  </title>
	 <meta name="description" content="">

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

$headOne = $contentElevenTitle ;

$homeurl = '/';

$curr_page = 'Speech Therapy Centre Bangalore';


$curr_url = $_SERVER['REQUEST_URI'];

include './includes/loader.php';

include  './includes/userHeader.php';

include './includes/general-page-banner.php';

?>


<section id="cmain" class="cmain mb-4 pt-3">

<div class="container-fluid">

<div class="section-top text-center">
                        <h2><?php echo $contentElevenTitle ;?> </h2>
                       
					</div>

<div class="row">

<div class="col-lg-6 ">




<img src="assets/images/elements/voice-therapy.jpg" class="img-fluid" alt="<?php echo $contentElevenTitle ;?> "/>

					
					
					


</div><!--col--ends-->

<div class="col-lg-6 pt-2">



					
					
					
<p id="paragraffi"><?php echo $contentEleven ;?></p>	

<a href="#" class="btn btn-outline-success"> Read More </a>				
					
					
					


</div><!--col--ends-->


</div><!--row-->


</div><!--cont-->




</section>


<section id="cmain-two" class="cmain-two mb-4 pt-3">



<div class="container-fluid">

<div class="row">

<div class="col-lg-6">

<div class="section-top text-center">
                        <h3><?php echo $contentElevenTitleTwo ;?> </h3>
                       
					</div>

				<p id="paragraffi"><?php echo 	$contentElevenSubTwo;?></p>	
					
					


</div><!--col--ends-->

<div class="col-lg-6">
<div class="section-top text-center">
                        <h3><?php echo $contentElevenTitleThree ;?> </h3>
                       
					</div>
					
					
					
<p id="paragraffi"><?php echo $contentElevenSubThree ;?></p>					
					
					
					


</div><!--col--ends-->


</div><!--row-->


</div><!--cont-->




</section>






     






<?php include'./includes/userFooter.php';?>


















</body>
</html>


