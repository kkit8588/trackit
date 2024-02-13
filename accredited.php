<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Announcement</title>
</head>
<?php include 'header.php';?>
<body>
	
	<?php include 'nav.php';?>	

	<div class="container-sm d-flex align-items-center justify-content-center">
		<div class="w-50 py-5 mx-3 mx-md-0">
			<h4 class="mb-4">Marinduque Accredited Schools</h5>
			<div class="d-flex flex-column row-gap-5">
				<?php 
				include "connect.php";
				$select = mysqli_query($conn, "SELECT * FROM accredit_tbl ORDER BY id DESC");
				while($row = $select->fetch_assoc()){
				?>
				<div class="card rounded-0">
					<div class="card-header d-flex column-gap-1 py-3 text-break">
						<p class="card-title fs-h5"><b>School Name: </b> <?php echo $row['course'] ?></p>
					</div>
					<div class="card-body">
						<div class="border border-2 p-3"  style="background: rgb(33 37 41 / 3%)">
							<p class="card-title "><b>Course: </b> <?php echo $row['accredited'] ?></p>
							<p class="card-text "><b>Address: </b><?php echo $row['address'] ?></p>
						</div>
					</div>
				</div>
				<?php }; ?>
			</div>
		</div>
	</div>

</body>
<?php include 'footer.php';?>
</html>
