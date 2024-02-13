<?php //include 'sessionLimit.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Requirements Request</title>
    <?php include 'header.php'; ?>
    <style>
        #no{
            max-width: 25px !important;
        }
    </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <main class="content px-4 pt-4 pe-lg-5">
        <div class="d-flex px-2">
            <h4 class="my-1">Requirements Request</h4>
        </div>
        <div class="p-2 mt-2 ">
            <table class="table table-sm table-bordered table-responsive table-hover text-center">
                <caption class="text-center">Requiremnents Request</caption>
                <thead class="table-secondary">
                    <tr>
                        <th id="no">No.</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Yr. Graduated</th>
                        <th>Email</th>
                        <th>Requirement Need</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody class="req-tbl table-group-divider border-secondary-subtle">
            
                </tbody>
            </table>
        </div>

  
        

    </main>
    
</body>
    <?php include 'footer.php' ;?>

</html>
