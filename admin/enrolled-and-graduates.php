<?php //include 'sessionLimit.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enrolled and Graduates</title>
    <?php include 'header.php'; ?>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <main class="content px-4 pt-4 pe-lg-5">
        <h4 class="my-1">Enrolled and Graduates</h4>
        <div class="p-2 mt-4">
            <div class="row">
                <div class="col-12 col-lg-6 d-flex flex-column row-gap-2 p-5">
                    <form id="enrolled" class="d-flex flex-column row-gap-2 shadow p-5">
                        <h5>STUDENT ENROLLED</h5>
                        <div class="form-group">
                            <input type="number" name="student_num2" class="form-control" placeholder="Type number of students">
                            <label class="form-label">Number of Students</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="school_yr2" class="form-control" placeholder="Type school year">
                            <label class="form-label">School Year</label>
                        </div>
                        <input type="hidden" name="students" value="enrolled">
                        <div class="form-group ms-auto">
                            <input type="submit" name="save" value="Save" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-6 d-flex flex-column row-gap-2 p-5">
                    <form id="graduates" class="d-flex flex-column row-gap-2 shadow p-5">
                        <h5>GRADUATED STUDENT</h5>
                        <div class="form-group">
                            <input type="number" name="student_num" class="form-control" placeholder="Type number of students">
                            <label class="form-label">Number of Students</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="school_yr" class="form-control" placeholder="Type school year">
                            <label class="form-label">School Year</label>
                        </div>
                        <input type="hidden" name="students" value="graduates">
                        <div class="form-group ms-auto">
                            <input type="submit" name="save" value="Save" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <div class="col-12 px-5 fs-5">LIST</div>
                <div class="stud-input col-12 d-flex gap-2 p-5 row justify-content-center justify-content-lg-start">


                </div>
                <div class="studList col-12 px-5 pb-5 d-none" >
                </div>
            </div>
            
        </div>
    </main>

    <!-- CARD MODAL -->
        <div class="modal fade" id="newStudModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New List</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="studentList">
                        <div class="modal-body d-flex flex-column row-gap-2">
                            <input type="text" name="id" id="id" class="form-control" hidden>
                            <div class="form-group">
                              <label class="form-label">Full Name:</label>
                              <input type="text" name="fn" id="fns" class="form-control" placeholder="full name">
                            </div>
                            <div class="form-group">
                              <label class="form-label">Student No.:</label>
                              <input type="text" name="sn" class="form-control" placeholder="student number">
                            </div>
                            <div class="form-group">
                              <label class="form-label">Email:</label>
                              <input type="email" name="email" class="form-control" placeholder="email">
                            </div>
                            <div class="form-group">
                              <label class="form-label">Year:</label>
                              <input type="number" name="created_yr" class="form-control" value="2023" placeholder="school year">
                            </div>
                        </div>
                  
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
</body>
    <?php include 'footer.php' ;?>
</html>
