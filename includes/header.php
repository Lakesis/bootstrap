<?php
	function scripts(){
		echo 	'<script src="js/jquery-1.7.2.min.js"></script>
				<script src="js/project.js"></script>
				';
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title></title>
		
		<link rel="stylesheet" type="text/less" media="screen,projection,print" href="css/style.less">
		<link rel="stylesheet" media="print" href="css/print.css">
		<link rel="stylesheet" media="handheld,screen and (max-device-width: 480px)" href="css/handheld.css">
		<script src="dev/less-1.3.0.min.js"></script>
		<!--[if lt IE 9]><script src="js/html5-shiv.js"></script><![endif]-->
		
		<link rel="shortcut icon" href="images/favicon.png">
	</head>
	<body data-section="" data-step="">
		<div id="pageWrapper" class="<?php if(isset($bodyClass)) echo $bodyClass; ?>">
			
			<header>
				<h1></h1>
				<form role="search" action="#" method="get"></form>
			</header>
			

	
				
