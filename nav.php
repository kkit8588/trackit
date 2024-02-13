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
		.nav-link{
			color: #007bff; 
		}
		.active{
			all: unset;
			color: #000 !important; 
			border-radius: 4px;
			border: 1px solid #007bff;
		}

		@media screen and (min-width: 800px) {
			form{
				width: 50%;
			}
		}
		
</style>
    <nav class="navbar sticky-top navbar-expand-lg bg-white shadow fw-bold">
    <div class="container d-flex text-center">
    	<a href="./user/login.php" class="btn btn-secondary d-lg-none">LOG-IN</a>
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navBar">
	 	 		<i class="fa-solid fa-bars-staggered"></i>
	  	</button>
      <div class="collapse navbar-collapse" id="navBar">
        <ul class="menu navbar-nav w-100 justify-content-center py-2">
        	<li class="nav-item px-2 ">
            	<a class="nav-link  " href="home.php">Home</a>
					</li>
          <li class="nav-item px-2 ">
            	<a class="nav-link  " href="about-us.php">About us</a>
					</li>
		      <li class="nav-item px-2">
		          <a class="nav-link" href="announcement.php">Announcement</a>
					</li>
					<li class="nav-item px-2">
		          <a class="nav-link" href="accredited.php">Marinduque Accredited Schools</a>
					</li>
					
        </ul>
      </div>
      <a href="./user/login.php" class="btn btn-secondary d-none d-lg-block">LOG-IN</a>
    </div>
    
  </nav>
  <script>
var currentPageUrl = window.location.href;

for (var i = 0; i < $('.menu li').length; i++) {
    var link = $('.menu li a span')[i];

    if (link.href.endsWith(currentPageUrl)) {
        link.classList.add('active');
    }
}



  </script>