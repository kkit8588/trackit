<?php //include 'sessionLimit.php' ?>
<?php 
    include '../connect.php';
    session_start();
    $id = $_SESSION['id'];
    $select = mysqli_query($conn, "SELECT * FROM user_tbl WHERE id = $id");
    $row = $select->fetch_assoc() ;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document Request</title>
    <?php include 'header.php'; ?>
</head>
<body>
    <?php include 'sidebar.php'; ?>
    <main class="content px-4 pt-4 pe-lg-5">
        <h4 class="my-1">Document Request</h4>
        <div class="p-2 mt-4">
            <div class="row">
                <div class="col-12 d-flex flex-column align-items-center row-gap-2 p-5">
                    <form id="request" class="col-12 col-md-7 col-lg-6 col-xl-4 d-flex flex-column row-gap-2 shadow p-5">
                        <h5>Please fill up the form.</h5>
                        <div class="form-group">
                            <label class="form-label">Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Type name of students" value="<?php echo $row['fullname'];?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Course:</label>
                            <input type="text" name="course" class="form-control" placeholder="Type course of students">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Year Graduated:</label>
                            <input type="text" name="yg" class="form-control" placeholder="Type year graduated" value="<?php echo $row['yg'];?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email Address:</label>
                            <input type="email" name="email" class="form-control" placeholder="Type email of students" value="<?php echo $row['email'];?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Document Need:</label>
                            <div class="dropdown row" style=" margin: 0 1px; border-radius: 0;">
                              <button class="btn form-select text-start border-1 border p-2" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-left: 2px;">
                                <small style="color: black;">Select Course</small>
                              </button>
                              <ul class="dropdown-menu p-2 w-100 " id="package_items">
                                    <?php 
                                                $req = array(
                                                        "TOR",
                                                        "COR", 
                                                        "COE"
                                                    );

                                                foreach ($req as $request) {
                                                
                                                ?>
                                                <div class="d-flex gap-3">
                                        <input class="form-check-input" type="checkbox" value="<?php echo $request; ?>" name="rn[]" id="<?php echo $request; ?>">
                                        <label class="form-check-label" for="<?php echo $request; ?>">
                                             <?php echo $request; ?>
                                        </label>
                                    </div>
                                    <?php  }?>
                              </ul>
                            </div>
                        </div>
                        <div class="form-group ms-auto">
                            <input type="submit" name="save" value="Save" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
</body>
    <?php include 'footer.php' ;?>
</html>
