<?php

include '../connect.php';
include 'sessionLimit.php';


?>
<header class="headermenu shadow py-3 d-flex" >
    <a href="logout.php" class="fs-3 ms-auto me-4 me-lg-5">
        <i class="fa-solid fa-right-from-bracket text-white"></i>
    </a>
</header>

<ul class="menu side-bar navbar-nav d-flex flex-column row-gap-2 pt-3 px-2 ">
    <div class="position-relative bg-danger">
        <span id="menuIcon" class="position-absolute">
            <i class="fa-solid fa-xmark fs-3 mt-1 text-white" role="button"></i>
        </span>
    </div>
    <div class="d-flex flex-column align-items-center mb-3">
        <img src="../upload/profile.png" width="150" height="150" >
        <h3 class="fw-bold text-white">WELCOME!</h3>
        <h3 class="text-white"><?php echo $_SESSION['username']; ?></h3>
    </div>
    <li class="nav-item">
        <a href="dashboard.php" class="nav-link px-3">
        	<span class="icon-span"><i class="fa-solid fa-house m-auto"></i></span>
        	<span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="about-us.php" class="nav-link px-3">
            <span class="icon-span"><i class="fa-solid fa-users m-auto"></i></span>
            <span>About Us</span>
        </a>
    </li>
    <li class="nav-item ">
        <a href="reports.php" class="nav-link px-3">
        	<span class="icon-span"><i class="fa-solid fa-folder-open m-auto"></i></span>
        	<span>Reports</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="announcements.php" class="nav-link px-3">
            <span class="icon-span"><i class="fa-solid fa-bullhorn m-auto"></i></span>
            <span>Announcements</span>
        </a>
    </li>
    <li class="nav-item ">
        <a href="email-notifier.php" class="nav-link px-3">
            <span class="icon-span"><i class="fa-solid fa-paper-plane  m-auto"></i></span>
            <span>Email Notifier</span>
        </a>
    </li>
    <li class="nav-item ">
        <a href="requirements-request.php" class="nav-link px-3">
            <span class="icon-span"><i class="fa-solid fa-bell  m-auto"></i></span>
            <span>Request</span>
        </a>
    </li>
    <li class="nav-item ">
        <a href="mas.php" class="nav-link px-3">
            <span class="icon-span"><i class="fa-solid fa-certificate m-auto"></i></span>
            <span>Accredited</span>
        </a>
    </li>
    <li class="nav-item ">
        <a href="enrolled-and-graduates.php" class="nav-link px-3">
            <span class="icon-span"><i class="fa-solid fa-user-graduate m-auto"></i></span>
            <span>Student Input</span>
        </a>
    </li>
    <li class="position-absolute bottom-0 py-3">
        <div class="px-3 text-white text-center d-flex flex-column row-gap-2">
        	<small class="fst-italic">http://:lmdpesojoboffer.com</small>
            <span class="fw-bold">2023 COPYRIGHT</span>
        </div>
    </li>

</ul>
