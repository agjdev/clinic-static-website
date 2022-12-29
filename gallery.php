<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Speech Therapy Centre Bangalore | Best Oral Placement Therapist </title>
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

$headOne = 'Gallery ';

$homeurl = '/';

$curr_page = 'Clinic Moments';


$curr_url = $_SERVER['REQUEST_URI'];

include './includes/loader.php';

include  './includes/userHeader.php';

include './includes/general-page-banner.php';




?>

<div class="container-fluid mb-5 pt-5">

 <div class="section-top text-center">
                        <h2>Our Gallery</h2>
                       
				   </div>

<div class="row">

  
  <?php

// set folder path where images are stored
$folderPath = "assets/images/gallery/";

// set maximum number of images to display per page
$perPage = 100;

// check if page number is set in URL parameter
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

// calculate offset for pagination
$offset = ($page - 1) * $perPage;

// open the folder and read the images
$images = array_slice(scandir($folderPath), 2);

// slice the images array based on the pagination offset and per page limit
$paginatedImages = array_slice($images, $offset, $perPage);

// display the paginated images
foreach ($paginatedImages as $image) {
    echo "<img src='" . $folderPath . $image . "' class='col-lg-4 col-md-12 mb-4 mb-lg-0 pt-5 img-fluid' alt='Image'>";
   
}

// calculate total number of pages based on total number of images and per page limit
$totalPages = ceil(count($images) / $perPage);

// display pagination links
echo "<br><br>";
for ($i = 1; $i <= $totalPages; $i++) {
    echo "<a href='?page=" . $i . "' style='display:none;'>" . $i . "</a> ";
}

?>
     




</div>

</div>


















<?php include'./includes/userFooter.php';?>


















</body>
</html>













