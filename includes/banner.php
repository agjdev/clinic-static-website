<?php
 
$homeurl = 'hannahs/index.php';                               
$homepage = "/";

$currentpage = $_SERVER['REQUEST_URI'];  
if($currentpage == $homepage || $currentpage == $homeurl) {
	include './includes/front-page-banner.php';
  } else {
    include './includes/general-page-banner.php';
  } 
  

  

		
		?>  

   














