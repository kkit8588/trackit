<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<style type="text/css">
		h1{
			-webkit-text-stroke: 2px #000;
			text-stroke: 2px #0000ff; "
		}
	</style>
</head>
<?php include 'header.php';?>
<body style="background-image: url('./upload/bg.jpg'); min-height: 100vh; background-position: center; background-repeat: no-repeat; background-size: cover;">
	
	<?php include 'nav.php';?>	

	<div class="container-sm d-flex" style="height: 90vh;">
		<div class="row row-gap-3 w-100 mt-auto mx-auto">
			<div class="col-12 col-lg-6 d-flex flex-column">
				<img src="./upload/img2.jpg" height="380" width="580" class="mx-auto object-fit-cover border border-4 border-dark">
				<h1 class="text-white text-center fw-bold">Congratulations Batch 2023</h1>
			</div>
			<div class="col-12 col-lg-6 d-flex flex-column">
				<img src="./upload/img1.jpg" height="380" width="580" class="mx-auto object-fit-fill border border-4 border-dark">
				<h1 class="text-white text-center fw-bold">Quote of the Year</h1>
			</div>
		</div>
	</div>

</body>
<?php include 'footer.php';?>
</html>
