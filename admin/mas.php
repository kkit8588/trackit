<?php //include 'sessionLimit.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marinduque Accredited Schools</title>
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
            <h4 class="my-1">Marinduque Accredited Schools</h4>
            <button class="addBTN btn btn-primary ms-auto fw-bold px-3" data-bs-target="#accredited-modal" data-bs-toggle="modal">Add</button>
        </div>
        <div class="p-2 mt-2 ">
            <table class="table table-sm table-bordered table-responsive table-hover text-center">
                <caption class="text-center">Announcement</caption>
                <thead class="table-secondary">
                    <tr>
                        <th id="no">No.</th>
                        <th>Course</th>
                        <th>School Name</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="accredited-tbl table-group-divider border-secondary-subtle">
            
                </tbody>
            </table>
        </div>

        <!-- ADD MODAL -->
        <div class="modal fade" id="accredited-modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Accredited Schools</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="accreditedForm">
                        <div class="modal-body d-flex flex-column row-gap-3">
                            <input type="text" name="id" id="id" class="form-control" hidden>
                            <div>
                                <label class="form-label fw-bold">Accredited Schools:</label>
                                <select id="accredited" name="accredited" class="form-select">
                                    <option selected hidden>Select accredited</option>
                                    <?php 
                                        $accredited = array(
                                            "AGREA Agricultural Community International Foundation, Inc.",
                                            "Aquarian Training and Review Center",
                                            "Buyabod School of Art and Trades",
                                            "DMDC Farm",
                                            "Everbright International Academy",
                                            "Marinduque Man Power and Trade Skills",
                                            "Marinduque Technical and Vocational Institute, Inc.",
                                            "Marinduque Technical Training Center Inc.",
                                            "Mogpog International Culinary School Inc.",
                                            "Moriones Training School inc.",
                                            "Provincial Training Center",
                                            "Santa Cruz Institute Inc.",
                                            "Torrijos Poblacion School of Arts and Trades"
                                        );

                                        foreach ($accredited as $accrediteds) {
                                            echo "<option value='$accrediteds'>$accrediteds</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <label class='form-label fw-bold'>Course:</label>
                                <select class='form-select' id='selectedid'disabled>
                                        <option selected disabled hidden>Select course</option>";
                                </select>
                                <?php 
                                    $i = 1;
                                    while ($i <= 15) {
                                        echo "<select name='course' class='form-select d-none course' id='course{$i}'>";

                                        $course = array();

                                        if ($i === 2) {
                                            $course = array(
                                                "Agricultural Crops Production NC II",
                                                "Organic Agriculture Production NC II"
                                            );
                                        } elseif ($i === 3) {
                                            $course = array(
                                                "Housekeeping NC II"
                                            );
                                        } elseif ($i === 4) {
                                            $course = array(
                                                "Agricultural Crops Production NC II",
                                                "Organic Agriculture Production NC II",
                                                "Automotive Servicing NC I",
                                                "Automotive Servicing NC II",
                                                "Bread and Pastry Production NC II",
                                                "Computer Systems Servicing NC II",
                                                "Driving NC II",
                                                "Electrical Installation and Maintenance NC II",
                                                "Electrical Installation and Maintenance NC III",
                                                "Food Processing NC II",
                                                "Machining NC II",
                                                "Organic Agriculture Production NC II",
                                                "Shielded Metal Arc Welding (SMAW) NC I",
                                                "Shielded Metal Arc Welding (SMAW) NC II",
                                                "Gas Tungsten Arc Welding (GTAW) NC II"
                                            );
                                        } elseif ($i === 5) {
                                            $course = array(
                                                "Organic Agriculture Production NC II"
                                            );
                                        } elseif ($i === 6) {
                                            $course = array(
                                                "Events Management Services NC III",
                                                "Hairdressing NC II",
                                                "Hilot (Wellness Massage) NC II"
                                            );
                                        } elseif ($i === 7) {
                                            $course = array(
                                                "Bread and Pastry Production NC II",
                                                "Hilot (Wellness Massage) NC II",
                                                "Shielded Metal Arc Welding (SMAW) NC I",
                                                "Shielded Metal Arc Welding (SMAW) NC II"
                                            );
                                        } elseif ($i === 8) {
                                            $course = array(
                                                "Bread and Pastry Production NC II",
                                                "Hilot (Wellness Massage) NC II",
                                                "Shielded Metal Arc Welding (SMAW) NC I",
                                                "Shielded Metal Arc Welding (SMAW) NC II"
                                            );
                                        } elseif ($i === 9) {
                                            $course = array(
                                                "Bookkeeping NC III",
                                                "Computer Systems Servicing NC II",
                                                "Electronics Products Assembly and Servicing NC II"
                                            );
                                        } elseif ($i === 10) {
                                            $course = array(
                                                "Bread and Pastry Production NC II",
                                                "Electrical Installation and Maintenance NC II",
                                                "Electrical Installation and Maintenance NC III",
                                                "Hilot (Wellness Massage) NC II",
                                                "Shielded Metal Arc Welding (SMAW) NC I",
                                                "Shielded Metal Arc Welding (SMAW) NC II",
                                                "Gas Tungsten Arc Welding (GTAW) NC II"
                                            );
                                        } elseif ($i === 11) {
                                            $course = array(
                                                "Cookery NC II"
                                            );
                                        } elseif ($i === 12) {
                                            $course = array(
                                                "Hilot (Wellness Massage) NC II"
                                            );
                                        } elseif ($i === 13) {
                                            $course = array(
                                                "Food Processing NC II"
                                            );
                                        } elseif ($i === 14) {
                                            $course = array(
                                                "Bartending NC II",
                                                "Bookkeeping NC III",
                                                "Bread and Pastry Production NC II",
                                                "Cookery NC II",
                                                "Driving NC II",
                                                "Food and Beverage Services NC II",
                                                "Front Office Services NC II",
                                                "Housekeeping NC II",
                                                "Organic Agriculture Production NC II",
                                                "RAC Servicing (DomRAC) NC II",
                                                "RAC Servicing (PACU/CRE) NC III",
                                                "Trainers Methodology Level I",
                                                "Shielded Metal Arc Welding (SMAW) NC I",
                                                "Shielded Metal Arc Welding (SMAW) NC II",
                                            );
                                        }

                                        foreach ($course as $courses) {
                                            echo "<option value='$courses'>$courses</option>";
                                        }

                                        echo "</select>";
                                        $i++;
                                    }
                                ?>
                            </div>
                            <div>
                                <label class='form-label fw-bold'>Address:</label>
                                <select class='form-select' id='selectedad' disabled>
                                        <option selected disabled hidden>Select address</option>";
                                </select>
                                <?php 
                                    $i = 1;
                                    while ($i <= 15) {
                                        echo "<select name='address' class='form-select d-none address' id='address{$i}'>";

                                        $address = array();

                                        if ($i === 2) {
                                            $address = array(
                                                "Brgy. Cawit, Boac, Marinduque"
                                            );
                                        } elseif ($i === 3) {
                                            $address = array(
                                                "National Highway, Balaring Boac, Marinduque"
                                            );
                                        } elseif ($i === 4) {
                                            $address = array(
                                                "Buyabod, Sta. Cruz, Marinduque"
                                            );
                                        } elseif ($i === 5) {
                                            $address = array(
                                                "Brgy. Poras, Boac, Marinduque"
                                            );
                                        } elseif ($i === 6) {
                                            $address = array(
                                                "Brgy. Laylay, Boac, Marinduque"
                                            );
                                        } elseif ($i === 7) {
                                            $address = array(
                                                "Brgy. Santol, Boac, Marinduque"
                                            );
                                        } elseif ($i === 8) {
                                            $address = array(
                                                "Barangay Masiga, Gasan Marinduque"
                                            );
                                        } elseif ($i === 9) {
                                            $address = array(
                                                "Sitio Oriental, Brgy. Napo, Santa Cruz, Marinduque"
                                            );
                                        } elseif ($i === 10) {
                                            $address = array(
                                                "219 Sampaguita St., Nangka I, Mogpog, Marinduque"
                                            );
                                        } elseif ($i === 11) {
                                            $address = array(
                                                "cor. Bonifacio St. and Yakal St. Market Site, Mogpog, Marinduque"
                                            );
                                        } elseif ($i === 12) {
                                            $address = array(
                                                "Brgy. Tabi, Boac, Marinduque"
                                            );
                                        } elseif ($i === 13) {
                                            $address = array(
                                                "Banahaw, Santa Cruz, Marinduque"
                                            );
                                        } elseif ($i === 14) {
                                            $address = array(
                                                "Brgy. Poctoy, Torrijos, Marinduque"
                                            );
                                        }

                                        foreach ($address as $addresses) {
                                            echo "<option value='$addresses'>$addresses</option>";
                                        }

                                        echo "</select>";
                                        $i++;
                                    }
                                ?>
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
