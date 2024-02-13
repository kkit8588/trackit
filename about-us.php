<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About Us</title>
</head>
<?php include 'header.php';?>
<body>
	
	<?php include 'nav.php';?>	

	<div class="container-sm d-flex align-items-center justify-content-center">
		<div class="d-flex flex-column row-gap-2 w-75 py-5 mx-3 mx-md-0">
            
            <div class="card rounded-0 border-0">
				<div class="card-header py-3 px-0 border-0">
					<h5 class="card-title fs-2 text-primary-emphasis text-center">VISION, MISSION, VALUE AND QUALITY STATEMENT</h5>
				</div>
			</div>


			
            <?php
                include "connect.php";
                $sqlSelect = mysqli_query($conn, "SELECT * FROM about_us");

                while($row = mysqli_fetch_assoc($sqlSelect)){
            ?>
            <div class="card rounded-0 border-0">
                <div class="card-body">
                    <h5 class="card-title text-primary-emphasis mb-2"><?php echo $row['tittle'];?></h5>
                    <span class="card-text fw-normal"><?php echo $row['content'];?></span>
                </div>
            </div>
            <?php };?>


            
            <div class="card rounded-0 border-0">
				<div class="card-body ">
                    <span class="card-text fw-normal mb-2 d-block">To achieve this, we commit to comply with applicable requirement and continually improve our systems and processes</span>
					<span class="card-text fw-normal">Through:</span>
				</div>
			</div>

            <div class="service d-flex flex-column row-gap-0">
                <div class="card rounded-0 border-0">
                    <div class="card-body fw-normal d-flex py-0">
                        <h5 class="card-text text-primary-emphasis m-0">S</h5>
                        <span class="card-text m-0">trategic Decisions</span>
                    </div>
                </div>
                <div class="card rounded-0 border-0">
                    <div class="card-body fw-normal d-flex py-0">
                        <h5 class="card-text text-primary-emphasis m-0">E</h5>
                        <span class="card-text m-0">ffectiveness</span>
                    </div>
                </div>
                <div class="card rounded-0 border-0">
                    <div class="card-body fw-normal d-flex py-0">
                        <h5 class="card-text text-primary-emphasis m-0">R</h5>
                        <span class="card-text m-0">esponsiveness</span>
                    </div>
                </div>
                <div class="card rounded-0 border-0">
                    <div class="card-body fw-normal d-flex py-0">
                        <h5 class="card-text text-primary-emphasis m-0">V</h5>
                        <span class="card-text m-0">alue Added Performance</span>
                    </div>
                </div>
                <div class="card rounded-0 border-0">
                    <div class="card-body fw-normal d-flex py-0">
                        <h5 class="card-text text-primary-emphasis m-0">I</h5>
                        <span class="card-text m-0">ntegrity</span>
                    </div>
                </div>
                <div class="card rounded-0 border-0">
                    <div class="card-body fw-normal d-flex py-0">
                        <h5 class="card-text text-primary-emphasis m-0">C</h5>
                        <span class="card-text m-0">itizen focus</span>
                    </div>
                </div>
                <div class="card rounded-0 border-0">
                    <div class="card-body fw-normal d-flex py-0">
                        <h5 class="card-text text-primary-emphasis m-0">E</h5>
                        <span class="card-text m-0">fficiency</span>
                    </div>
                </div>
            </div>
            
		</div>
	</div>

</body>
<?php include 'footer.php';?>
</html>
