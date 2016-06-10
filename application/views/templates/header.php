<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<!--link rel="stylesheet" type="text/css" href="{static}css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{static}css/styles.css">
	<script src="{static}js/jquery-1.12.3.min.js" type="text/javascript"></script>
	<script src="{static}js/angular.min.js" type="text/javascript"></script>
	<script src="{static}js/ETES.js" type="text/javascript"></script>
	<script src="{static}js/bootstrap.min.js" type="text/javascript"></script>
	
	<title>{title}</title-->

	<link rel="stylesheet" type="text/css" href="<?php echo $static ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $static ?>css/styles.css">
	<!--link rel="stylesheet" type="text/css" href="css/normalizer.css"-->
	<script src="<?php echo $static ?>js/jquery-1.12.3.min.js" type="text/javascript"></script>
	<script src="<?php echo $static ?>js/angular.min.js" type="text/javascript"></script>
	<script src="<?php echo $static ?>js/ETES.js" type="text/javascript"></script>
	<script src="<?php echo $static ?>js/bootstrap.min.js" type="text/javascript"></script>
	
	<title>{title}</title>
</head>

<body ng-app="app_etes">
	<div class="ap_body container">
	<div class="container">
		<div id="header" class="row">
			<section class="ap_logo text-center">
				<img class=" media-object" src="<?php echo $static ?>img/logo.png" alt="">
			</section>
			<section class="ap_text text-right">
				<articles class="ap_row row">{title}</articles>
				<!--articles class="ap_row row">informacion de logue</articles>
				<articles class="ap_row row">periodo</articles-->
			</section>
		</div>
		<div class="ap_line row"></div>