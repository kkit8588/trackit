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
		<div class="d-flex flex-column row-gap-5 w-50 py-5 mx-3 mx-md-0">
			<?php 
			include "connect.php";
			$select = mysqli_query($conn, "SELECT *, DATE_FORMAT(createdTime, '%h:%i %p') AS formattedTime FROM announcement ORDER BY id DESC");
			while($row = $select->fetch_assoc()){
			?>
			<div class="card rounded-0">
				<div class="card-header d-flex column-gap-1 py-3 text-break">
					<p class="card-title fs-h6"><b>What:</b> <?php echo $row['what_ancmt'] ?></p>
					<span class="w-50 ms-auto text-end"><b>Date Posted: </b><?php echo $row['createdDate'] . " " . $row['formattedTime']?></span>
				</div>
				<div class="card-body">
					<div class="border border-2 p-3"  style="background: rgb(33 37 41 / 3%)">
						<p class="card-title "><b>When:</b> <?php echo $row['when_ancmt'] ?></p>
						<p class="card-text ">
							<?php
					            $description = $row['description'];
					            $max_length = 100; // Change this to the desired maximum length
					            if (strlen($description) > $max_length) {
					                $description = substr($description, 0, $max_length) . '...';
					            }
					            echo $description;
				            ?>
				            <a href="#modal-read" data-bs-toggle="modal" class="readBtn text-decoration-none"
				               data-what="<?php echo $row['what_ancmt'] ?>"
				               data-when="<?php echo $row['when_ancmt'] ?>"
				               data-where="<?php echo $row['where_ancmt'] ?>" 
				               data-description="<?php echo $row['description'] ?>"
				            >Read more</a>
				        </p>
					</div>
				</div>
			</div>
			<?php }; ?>
		</div>

		<div class="modal fade" id="modal-read" tabindex="-1">
		  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title"></h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">
		        <p id="modaldescription">Modal body text goes here.</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
	</div>

</body>
<?php include 'footer.php';?>
<script>
	$(document).ready(function () {
		$('.readBtn').click(function() {
			$('.modal-title').text($(this).data('what'))
			$('#modaldescription').text($(this).data('description'))
		})
	});
</script>
</html>
