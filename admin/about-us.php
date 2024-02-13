<?php //include 'sessionLimit.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <?php include 'header.php'; ?>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <main class="content px-4 pt-4 pe-lg-5">
        <h4 class="my-1">About Us</h4>
        <div class="au p-2 mt-2 gap-2 row">

        </div>

        <!-- CARD MODAL -->
        <div class="modal fade" id="cardModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add on About us</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="aboutusForm">
                        <div class="modal-body">
                            <input type="text" name="id" id="id" class="form-control" hidden>
                            <div>
                              <label class="form-label fw-bold">Tittle:</label>
                              <input type="text" name="Tittle" id="Tittle" class="form-control">
                            </div>
                            <div>
                              <label class="form-label fw-bold">Content:</label>
                              <input type="text" name="content" id="content" class="form-control">
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
