<!DOCTYPE html>
<html data-ng-app="mainApp" data-ng-cloak>
<head>
	<base href="http://localhost/mmcqcm/">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script async type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-route.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-cookies.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-animate.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-sanitize.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-resource.min.js"></script>
	<script src="js/mainController.js"></script>


	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body data-ng-controller="mainController">
	<div class="bs-docs-header">
		<div class="container">
			<div class="header">
				<h1>Code de la Route</h1>
				<p></p>
			</div>
		</div>
	</div>
	<div class="container">
		<ol class="breadcrumb">
				<li><a href="home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home</a></li>
			</ol>
	</div>
	<div class="container">
		<ng-view>
		</ng-view>
	</div>
</body>
</html>
<?php
?>