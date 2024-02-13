<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
</head>
	<style>
		.body{
			background: #756cb1;
		}
        .form-group{
			background: #fff;
            font-weight: 600;
			display: flex;
			flex-direction: column;
        }
		.form-control-sm{
			border: 0 !important;
			border-radius: 0 !important;
			border-bottom: 1px solid !important;
			margin-top: 14px;
		}
		.form-control-sm:focus{
			box-shadow: none !important;
			border-bottom: 1px solid blue !important;
			outline: none;
		}
		@media screen and (min-width: 800px) {
			form{
				width: 50%;
			}
		}
		
    </style>
<?php include 'header.php';?>
<body class="body">
	
	<?php 
	include 'nav.php';
	include 'controller/edit.php';
	?>	

	<div class="container-sm d-flex align-items-center justify-content-center">
		<form  class="formReport w-lg-50 h-100 row g-3 py-5 mx-3 mx-md-0">
			<input type="hidden" name="id" value="<?php if(isset($id)){echo $id; }?>">
			<div class="form-group p-4 rounded">
				<label for="email">Email Address*</label>
				<input  type="email" name="email" class="form-control-sm border-secondary-subtle ps-0" id="email" placeholder="Your email address" value="<?php if(isset($email)){echo $email; }?>">
			</div>
			<div class="form-group p-4 rounded">
				<label for="syg">Scool Year Graduated*</label>
				<div class="dropdown row" style="border-bottom: 1px black solid; margin: 0 1px; border-radius: 0;">
			    <button class="btn form-select text-start border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-left: 2px;">
			        <small style="color: black;">Select School Year</small>
			    </button>
			    <ul class="dropdown-menu p-2 w-100 " id="package_items">
			        <?php 
			            $syearsg = array(
			                "2022", "2023", "2024", "2025", "2026", "2027", "2028", "2029", "2030", "2031", "2032", "2033", "2034", "2035"
			            );

			            foreach ($syearsg as $syearg) {
			        ?>
			        <li class="d-flex gap-3">
			            <input class="form-check-input" type="checkbox" value="<?php echo $syearg; ?>" name="syg[]" id="<?php echo $syearg; ?>">
			            <label class="form-check-label" for="<?php echo $syearg; ?>">
			                <?php echo $syearg; ?>
			            </label>
			        </li>
			        <?php } ?>
			    </ul>
			</div>

			</div>
			<div class="form-group p-4 rounded">
				<label for="fn">Full Name*</label>
				<input  type="text" name="fn" class="form-control-sm border-secondary-subtle ps-0" id="fn" placeholder="Your full name" value="<?php if(isset($fullname)){echo $fullname; }?>">
			</div>
			<div class="form-group p-4 rounded">
				<label for="gender">Gender*</label>
				<select name="gender" id="gender" class="form-control-sm border-secondary-subtle ps-0" >
					<option>Select your gender</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
			</div>
			<div class="form-group p-4 rounded">
				<label for="birthdate">Birthdate*</label>
				<input  type="date" id="birthdate" name="birthdate" class="form-control-sm border-secondary-subtle ps-0"  placeholder="Your birthdate"
				value="<?php if(isset($birthdate)){echo $birthdate; }?>" >
			</div>
			<div class="form-group p-4 rounded">
				<label for="age">Age*</label>
				<input  type="text" id="age" name="age" class="form-control-sm border-secondary-subtle ps-0"  placeholder="Your age"
				value="<?php if(isset($age)){echo $age; }?>" readonly>
			</div>
			<div class="form-group p-4 rounded">
				<label for="civilstatus">Civil Status*</label>
				<select name="civilstatus" id="civilstatus" class="form-control-sm border-secondary-subtle ps-0" >
					<option hidden>Select your civil status</option>
					<?php 
						    $civils = array(
						            "Single",
												"Married",
												"Separated/Divorced/Anulled",
												"Widow/er",
												"Common Law/ Live-in"
						        );

						    foreach ($civils as $civil) {
						    	echo '<option value="'.$civil.'">'.$civil.'</option>';
						    }
							?>

				</select>
			</div>
			<div class="form-group p-4 rounded">
				<label for="course">Course*</label>

				<div class="dropdown row" style="border-bottom: 1px black solid; margin: 0 1px; border-radius: 0;">
          <button class="btn form-select text-start border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-left: 2px;">
            <small style="color: black;">Select Course</small>
          </button>
          <ul class="dropdown-menu p-2 w-100 " id="package_items">
	          	<?php 
						    $course = array(
						            "Bread and Pastry Production",
						            "Housekeeping", 
						            "Electrical Installation and Maintenance", 
						            "Automotive Servicing", 
						            "Agriculture",
						            "Computer systems Servicing", 
						            "Driving", 
						            "Shielded Metal Arc Welding (SMAW)", 
						            "Food and Beverage Services", 
						            "Cookery",
						            "Book Keeping"
						        );

						    foreach ($course as $courses) {
						    
							?>
							<div class="d-flex gap-3">
		          	<input class="form-check-input" type="checkbox" value="<?php echo $courses; ?>" name="course[]" id="<?php echo $courses; ?>">
		          	<label class="form-check-label" for="<?php echo $courses; ?>">
		                 <?php echo $courses; ?>
		            </label>
	          	</div>
	          	<?php  }?>
          </ul>
        </div>
			</div>
			<div class="form-group p-4 rounded">
				<label for="student_type">What Types of student?*</label>
				<select name="student_type" id="student_type" class="form-control-sm border-secondary-subtle ps-0" >
					<option value="<?php echo isset($student_type) ? $student_type : '' ; ?>" selected>
								   <?php 
										if (isset($student_type)) {
												echo $student_type;
											}else{
												echo 'Select your answer';
											}
									?>
					</option>
					<option value="High School Gradute">High School Gradute</option>
					<option value="Senior High School Graduate">Senior High School Graduate</option>
					<option value="College Graduate">College Graduate</option>
					<option value="ALS Graduate">ALS Graduate</option>
					<option value="Employed">Employed</option>
					<option value="Unemployed">Unemployed</option>

				</select>
			</div>
			<div class="form-group p-4 rounded">
				<label>Highest Certificate Attained*</label>
				<div class="form-check d-flex column-gap-2 align-items-center ps-0 fw-normal">
					<input  class="form-check-input-sm" type="radio" name="ncii" id="ncii" value="NCII" <?php if(isset($ncii) && $ncii == "NCII"){echo "checked"; }?>>
					<small>
						<label class="form-check-label" for="ncii">NCII</label>
					</small>
				</div>
				<div class="form-check d-flex column-gap-2 align-items-center ps-0 fw-normal">
					<input  class="form-check-input-sm" type="radio" name="ncii" id="NCIII" value="NCIII" <?php if(isset($ncii) && $ncii == "NCIII"){echo "checked"; }?> >
					<small>
						<label class="form-check-label" for="NCIII">NCIII</label>
					</small>
				</div>
				<div class="form-check d-flex column-gap-2 align-items-center ps-0 fw-normal">
					<input  class="form-check-input-sm" type="radio" name="ncii" id="None" value="None" <?php if(isset($ncii) && $ncii == "None"){echo "checked"; }?> >
					<small>
						<label class="form-check-label" for="None">None</label>
					</small>
				</div>
			</div>
			<div class="form-group p-4 rounded">
				<label>Career After Graduation*</label>
				<div class="form-check d-flex column-gap-2 align-items-center ps-0 fw-normal">
					<input  class="form-check-input-sm" type="radio" name="cag" id="he" value="Higher Education" <?php if(isset($cag) && $cag == "Higher Education"){echo "checked"; }?> >
					<small>
						<label class="form-check-label" for="he">Higher Education</label>
					</small>
				</div>
				<div class="form-check d-flex column-gap-2 align-items-center ps-0 fw-normal">
					<input  class="form-check-input-sm" type="radio" name="cag" id="entr" value="Enterpreneurship" <?php if(isset($cag) &&  $cag == "Enterpreneurship"){echo "checked"; }?>>
					<small>
						<label class="form-check-label" for="entr">Enterpreneurship</label>
					</small>
				</div>
				<div class="form-check d-flex column-gap-2 align-items-center ps-0 fw-normal">
					<input  class="form-check-input-sm" type="radio" name="cag" id="tgy" value="Talk a Gap Year" <?php if(isset($cag) &&  $cag == "Talk a Gap Year"){echo "checked"; }?>>
					<small>
						<label class="form-check-label" for="tgy">Talk a Gap Year</label>
					</small>
				</div>
				<div class="form-check d-flex column-gap-2 align-items-center ps-0 fw-normal">
					<input  class="form-check-input-sm" type="radio" name="cag" id="emp" value="Employed" <?php if(isset($cag) &&  $cag == "Employed"){echo "checked"; }?>>
					<small>
						<label class="form-check-label" for="emp">Employed</label>
					</small>
				</div>
			</div>
			<div class="form-group p-4 rounded">
				<label for="employed">ARE YOU EMPLOYED?*</label>
				<select name="employed" id="employed" class="form-control-sm border-secondary-subtle ps-0" >
					<option value="<?php echo isset($employed) ? $employed : '' ; ?>" selected>
								   <?php 
										if (isset($employed)) {
												echo $employed;
											}else{
												echo 'Select answer';
											}
									?>
					</option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</div>
		<div id="employed-container" class="d-none row g-3 m-0 p-0">
			<div class="form-group p-4 rounded">
				<label for="dcrptn">WHAT IS YOUR JOB DESCRIPTION?*</label>
				<input  type="text" id="dcrptn" name="dcrptn" class="form-control-sm border-secondary-subtle ps-0"  placeholder="Your age"
				value="<?php if(isset($dcrptn)){echo $dcrptn; }?>">
			</div>
			<div class="form-group p-4 rounded">
				<label for="q1">DO YOU PURSUE HIGHER EDUCATION?*</label>
				<select name="q1" id="q1" class="form-control-sm border-secondary-subtle ps-0" >
					<option value="<?php echo isset($q1) ? $q1 : '' ; ?>" selected>
								   <?php 
										if (isset($q1)) {
												echo $q1;
											}else{
												echo 'Select answer';
											}
									?>
					</option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			</div>
			<div class="form-group p-4 rounded">
				<label for="q2">If Enterpreneurship (started a business) What Business?*</label>
				<input  type="text" name="q2" class="form-control-sm border-secondary-subtle ps-0" id="q2" placeholder="Type your answer" value="<?php if(isset($q2)){echo $q2; }?>" >
				
			</div>
			<div class="form-group p-4 rounded">
				<label>After graduation, what is your employment status? Type*</label>
				<div class="form-check d-flex column-gap-2 align-items-center ps-0 fw-normal">
					<input  class="form-check-input-sm" type="radio" name="q3" id="rp" value="Regular permanent" <?php if(isset($q3) && $q3 == "Regular permanent"){echo "checked"; }?>>
					<small>
						<label class="form-check-label" for="rp">Regular permanent</label>
					</small>
				</div>
				<div class="form-check d-flex column-gap-2 align-items-center ps-0 fw-normal">
					<input  class="form-check-input-sm" type="radio" name="q3" id="casual" value="Casual" <?php if(isset($q3) && $q3 == "Casual"){echo "checked"; }?>>
					<small>
						<label class="form-check-label" for="casual">Casual</label>
					</small>
				</div>
				<div class="form-check d-flex column-gap-2 align-items-center ps-0 fw-normal">
					<input  class="form-check-input-sm" type="radio" name="q3" id="contractual" value="Contractual" <?php if(isset($q3) && $q3 == "Contractual"){echo "checked"; }?>>
					<small>
						<label class="form-check-label" for="contractual">Contractual</label>
					</small>
				</div>
				<div class="form-check d-flex column-gap-2 align-items-center ps-0 fw-normal">
					<input  class="form-check-input-sm" type="radio" name="q3" id="pt" value="Part-time" <?php if(isset($q3) && $q3 == "Part-time"){echo "checked"; }?>>
					<small>
						<label class="form-check-label" for="pt">Part-time</label>
					</small>
				</div>
				<div class="form-check d-flex column-gap-2 align-items-center ps-0 fw-normal">
					<input  class="form-check-input-sm" type="radio" name="q3" id="na" value="Not applicable" <?php if(isset($q3) && $q3 == "Not applicable"){echo "checked"; }?>>
					<small>
						<label class="form-check-label" for="na">Not applicable</label>
					</small>
				</div>
			</div>
			<div class="form-group p-4 rounded">
				<label for="q5">After graduation: Name of Company?*</label>
				<input  type="text" name="q4" class="form-control-sm border-secondary-subtle ps-0" id="q4" placeholder="Type your answer" value="<?php if(isset($q4)){echo $q4; }?>">
				
			</div>
			<div class="form-group p-4 rounded">
				<label for="q5">Is your job related to your course?*</label>
				<input  type="text" name="q5" class="form-control-sm border-secondary-subtle ps-0" id="q5" placeholder="Type your answer" value="<?php if(isset($q5)){echo $q5; }?>">
				
			</div>
			<div class="form-group p-4 rounded">
				<label for="q6">Where is your job located?*</label>
				<input  type="text" name="q6" class="form-control-sm border-secondary-subtle ps-0" id="q6" placeholder="Type your answer" value="<?php if(isset($q6)){echo $q6; }?>">
				
			</div>
			<div class="form-group p-4 rounded">
				<label for="q7">number of months/yrs in work?*</label>
				<div class="row">
					<div class="col-6">
						<select name="created_yrs" id="created_yrs" class="form-control-sm border-secondary-subtle ps-0 col-12" >
							<option value="<?php echo isset($created_yrs) ? $created_yrs : '' ; ?>" selected>
										   <?php 
												if (isset($created_yrs)) {
														echo $created_yrs;
													}else{
														echo 'Select year';
													}
											?>
							</option>
							<?php 
							    $year = array(
							            "1 year",
							            "2 years", 
							            "3 years",
							            "4 years",
							            "5 years",
							            "6 years",
							            "7 years",
							            "8 years",
							            "9 years",
							            "10 years"
							        );

							    foreach ($year as $years) {
							        echo "<option value='$years'>$years</option>";
							    }
							?>
						</select>
					</div>
					<div class="col-6">
						<select name="created_mnth" id="created_mnth" class="form-control-sm border-secondary-subtle ps-0 col-12" >
							<option value="<?php echo isset($created_mnth) ? $created_mnth : '' ; ?>" selected>
										   <?php 
												if (isset($created_mnth)) {
														echo $created_mnth;
													}else{
														echo 'Select month';
													}
											?>
							</option>
							<?php 
							    $year = array(
							            "1 month",
							            "2 months", 
							            "3 months",
							            "4 months",
							            "5 months",
							            "6 months",
							            "7 months",
							            "8 months",
							            "9 months",
							            "10 months",
							            "11 months"
							        );

							    foreach ($year as $years) {
							        echo "<option value='$years'>$years</option>";
							    }
							?>
						</select>
					</div>
				</div>
			</div>
			<div class="form-group p-4 rounded">
				<label for="q8">What is your monthly income?*</label>
				<select name="q8" id="q8" class="form-control-sm border-secondary-subtle ps-0 col-12" >
							<option value="<?php echo isset($created_mnth) ? $created_mnth : '' ; ?>" selected>
										   <?php 
												if (isset($created_mnth)) {
														echo $created_mnth;
													}else{
														echo 'Select month';
													}
											?>
							</option>
							<?php 
							    $incomes = array(
							            "Les than 10,000", 
													"20,000 - 30,000",
													"40,000 - 50,000",
													"60,000 - 70,000",
													"80,000 - 90,000",
													"100, 000 - 500,000",
													"More than 1 Million"
							        );

							    foreach ($incomes as $income) {
							        echo "<option value='$income'>$income</option>";
							    }
							?>
						</select>
				
			</div>
			</div>
			<div class="px-0">
				<input  type="submit" name="submit" class="btn btn-primary px-4 fw-bold" value="Submit">
			</div>
		</form>
	</div>
</body>
<?php include 'footer.php';?>
<script>
    $(document).ready(function() {
      $('#birthdate').on('input', updateAge);

          function updateAge() {
            var birthday = new Date($('#birthdate').val());

            var currentDate = new Date();

            var age = currentDate.getFullYear() - birthday.getFullYear();

            if (
              currentDate.getMonth() < birthday.getMonth() ||
              (currentDate.getMonth() === birthday.getMonth() && currentDate.getDate() < birthday.getDate())
            ) {
              age--;
            }

            $('#age').val(age);
          }
    });

     $(document).ready(function(){
            $('#employed').change(function(){
                // Get the selected value
                var empval = $(this).val();
                if (empval === "Yes") {
                	$('#employed-container').removeClass('d-none');
                }
            });
      });
</script>
</html>
