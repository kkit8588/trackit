<?php //include 'sessionLimit.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Announcements</title>
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
            <h4 class="my-1">Announcements</h4>
            <button class="addBTN btn btn-primary ms-auto fw-bold px-3" data-bs-target="#announce-modal" data-bs-toggle="modal">Add</button>
        </div>
        <div class="p-2 mt-2 ">
            <table class="table table-sm table-bordered table-responsive table-hover text-center">
                <caption class="text-center">Announcement</caption>
                <thead class="table-secondary">
                    <tr>
                        <th id="no">No.</th>
                        <th>What</th>
                        <th>When</th>
                        <th>Where</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="announcement-tbl table-group-divider border-secondary-subtle">
            
                </tbody>
            </table>
        </div>

        <!-- ADD MODAL -->
        <div class="modal fade" id="announce-modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create New Announcement</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="announceForm">
                        <div class="modal-body">
                            <input type="text" name="id" id="id" class="form-control" hidden>
                            <div>
                              <label class="form-label fw-bold">What:</label>
                              <input type="text" name="what_ancmt" id="what_ancmt" class="form-control">
                            </div>
                            <div>
                              <label class="form-label fw-bold">When:</label>
                              <input type="date" name="when_ancmt" id="when_ancmt" class="form-control">
                            </div>
                            <div>
                              <label class="form-label fw-bold">Where:</label>
                              <input type="text" name="where_ancmt" id="where_ancmt" class="form-control">
                            </div>
                            <div>
                              <label class="form-label fw-bold">Description:</label>
                              <input type="text" name="description" id="description" class="form-control">
                            </div>
                        </div>
                  
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" name="Save" class="btn btn-primary" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        

        

    </main>
    
</body>
    <?php include 'footer.php' ;?>

</html>
