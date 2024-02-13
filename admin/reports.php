<?php //include 'sessionLimit.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reports</title>
    <?php include 'header.php'; ?>
    <style>
        .form-group{
            display:flex;
            align-items: center;
            font-weight: 600;
        }
       /* span{
            display: flex;
        }*/
    </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <main class="content px-4 pt-4 pe-lg-5">
        <h4 class="my-1">Reports</h4>
        <div class="bottom mt-2 reporttable">
            
        </div>

        <!-- USER INFORMATION MODAL -->
        <div class="modal fade" id="showinfo" data-bs-backdrop="static" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Alumni Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <h5 class="fst-italic text-center">Personal Information</h5>
                <span><b>Email:&nbsp;</b><p id="emailtxt"></p></span>
                <span><b>Scool Year Graduated:&nbsp;</b><p id="sygtxt"></p></span>
                <span><b>Full Name:&nbsp;</b><p id="fntxt"></p></span>
                <span><b>Gender:&nbsp;</b><p id="gendertxt"></p></span>
                <span><b>Age:&nbsp;</b><p id="agetxt"></p></span>
                <span><b>Birthdate :&nbsp;</b><p id="birthdatetxt"></p></span>
                <span><b>Civil Status:&nbsp;</b><p id="civilstatustxt"></p></span>
                <span><b>Course:&nbsp;</b><p id="coursetxt"></p></span>
                <span><b>National Certificate:&nbsp;</b><p id="nciitxt"></p></span>
                <span><b>Career After Graduation:&nbsp;</b><p id="cagtxt"></p></span>
                <span><b>If Higher Education (college) What Course:&nbsp;</b><p id="q1txt"></p></span>
                <span><b>If Enterpreneurship (started a business) What Business:&nbsp;</b><p id="q2txt"></p></span>
                <span class="text-break"><b>If employed after graduation, what is your employment status:&nbsp;</b><p id="q3txt"></p></span>
                <span><b>If Employed after graduation: Name of Company:&nbsp;</b><p id="q4txt"></p></span>
                <span><b>If employed: Is your job related to your course:&nbsp;</b><p id="q5txt"></p></span>
                <span><b>If employed: Where is your job located:&nbsp;</b><p id="q6txt"></p></span>
                <span><b>If employed: number of months/yrs in work:&nbsp;</b>
                    <span class="d-flex gap-2">
                        <p id="cmnthstxt"> <p>&</p> <p id="cyrstxt"></p>
                    </span>
                </span>
                <span><b>If employed: What is your monthly income:&nbsp;</b><p id="q8txt"></p></span>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    
    </main>
    
</body>
    <?php include 'footer.php' ;?>
</html>
