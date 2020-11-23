<?php
include "config/settings.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Malas Nulis</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="//bootswatch.com/4/lux/bootstrap.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/p5.js/0.7.1/p5.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/p5.js/0.7.1/addons/p5.dom.min.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="../assets/theme/images/favicon.ico"/>
	<style>
		body {
			background: #ebecf5;
		}
		header {
			padding: 20px 0px;
		}

		.btn-shadow {
			    box-shadow: 0px 5px 10px #dcdcdc4d !important;
    			border-radius: 6px;
    			margin-bottom: 20px;
		}

		.display-4 {
			font-family: 'Nunito', sans-serif;
		}

		#canvas {
			padding:10px;
		}

		#inputbtn {
			margin:10px;
			width: 350px;
		}
	</style>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-auto mr-auto">
					<h5><small class="text-muted">Please Support by follow my instagram</small></h5>
				</div>
				<div class="col-auto">
					<span class="text-muted"><a href="//instagram.com/raf_lii"><i class="icon-social-instagram"></i>Muhammad Rafli</a></span> 
				</div>
			</div>
			<hr>
		</div>
	</header>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<h6 class="display-4"><center>Malas Nulis</center></h6>
				<center>	<font size="3" color="pink"> Made By : </font>
                 <font face="Courier new">   <h6> <small>- @raf_lii</small></h6></font></center>
					<hr>
				</div>
			</div>
			<form method="POST" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<label>Ketik Teks: </label>
						<textarea rows="12" class="form-control" required="" name="teks"></textarea>
					</div>
					<div class="col-md-12 col-sm-12">
						<button class="btn-sm btn-success" type="submit" name="execute">Convert Sekarang!</button>
					</div>
				</div>
			</form><br><br>
			<div class="row">
				<div class="form-group col-md-6 col-sm-12">	
					<h3>Hasil</h3>
					<?php if (empty($_POST)): ?>
					<?php endif ?>
					<?php  include "execute.php";?>
				</div>			
			</div>

		</div>
	</section>
</body>
</html>