<?php 
session_start();

require 'connection.php';


$sevaquery="SELECT * FROM sevasbooking";
$sevadata=mysqli_query($conn,$sevaquery);
$sevatotal=mysqli_num_rows($sevadata);



$userquery="SELECT * FROM users";
$userdata=mysqli_query($conn,$userquery);
$usertotal=mysqli_num_rows($userdata);


$donationquery="SELECT * FROM donation";
$donationdata=mysqli_query($conn,$donationquery);
$donationtotal=mysqli_num_rows($donationdata);
  





$darshanbookingquery="SELECT * FROM darshanbooking";
$darshanbookingdata=mysqli_query($conn,$darshanbookingquery);
$darshanbookingtotal=mysqli_num_rows($darshanbookingdata);





?>

<!DOCTYPE html>
<html lang="en">
    <head>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Admin</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="adminindex.php">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="usersadmin.php">Users</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="admindonation.php">Donation</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="admindarshan.php">Darshan</a>
                    
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="adminsevas.php">Sevas</a>
                </div>
            </div>
            <!-- Page content wrapper-->
			
            <div id="page-content-wrapper">
			<div class="tit" style="background-color:#ff9900;color:white;padding:10px;">
			<h3 style="text-align:center;">Online Temple Management System</h3>
			<h5 >Welcome back, Admin</h5>
			</div>
			
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
					<br>
                        <button class="btn btn-danger" style="color:white;" id="sidebarToggle">Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="index.php">Logout</a>
                                        
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4">Dashboard</h1>
					<div class="container">

						<div class="row">
						<!-- card -->

						<div class="col-lg-3" style="border-radius:10px;background-color:#666633;margin:30px;padding:10px;padding-left:20px;">
						<h3 style="color:white;">Users</h3>
						<svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M274.7 304H173.3C77.61 304 0 381.6 0 477.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM632.3 134.4c-9.703-9-24.91-8.453-33.92 1.266l-87.05 93.75l-38.39-38.39c-9.375-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94l56 56C499.5 285.5 505.6 288 512 288h.4375c6.531-.125 12.72-2.891 17.16-7.672l104-112C642.6 158.6 642 143.4 632.3 134.4z"/></svg>
						<b style="color:white;font-size:40px;margin-left:40%;"><?php echo $usertotal; ?></b>
						</div>

						<!-- ending card-->

						<!-- card -->

						<div class="col-lg-3" style="border-radius:10px;background-color:#666633;margin:30px;padding:10px;padding-left:20px;">
						<h3 style="color:white;">Donation</h3>
						<svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px"viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M568.2 336.3c-13.12-17.81-38.14-21.66-55.93-8.469l-119.7 88.17h-120.6c-8.748 0-15.1-7.25-15.1-15.99c0-8.75 7.25-16 15.1-16h78.25c15.1 0 30.75-10.88 33.37-26.62c3.25-20-12.12-37.38-31.62-37.38H191.1c-26.1 0-53.12 9.25-74.12 26.25l-46.5 37.74L15.1 383.1C7.251 383.1 0 391.3 0 400v95.98C0 504.8 7.251 512 15.1 512h346.1c22.03 0 43.92-7.188 61.7-20.27l135.1-99.52C577.5 379.1 581.3 354.1 568.2 336.3zM279.3 175C271.7 173.9 261.7 170.3 252.9 167.1L248 165.4C235.5 160.1 221.8 167.5 217.4 179.1s2.121 26.2 14.59 30.64l4.655 1.656c8.486 3.061 17.88 6.095 27.39 8.312V232c0 13.25 10.73 24 23.98 24s24-10.75 24-24V221.6c25.27-5.723 42.88-21.85 46.1-45.72c8.688-50.05-38.89-63.66-64.42-70.95L288.4 103.1C262.1 95.64 263.6 92.42 264.3 88.31c1.156-6.766 15.3-10.06 32.21-7.391c4.938 .7813 11.37 2.547 19.65 5.422c12.53 4.281 26.21-2.312 30.52-14.84s-2.309-26.19-14.84-30.53c-7.602-2.627-13.92-4.358-19.82-5.721V24c0-13.25-10.75-24-24-24s-23.98 10.75-23.98 24v10.52C238.8 40.23 221.1 56.25 216.1 80.13C208.4 129.6 256.7 143.8 274.9 149.2l6.498 1.875c31.66 9.062 31.15 11.89 30.34 16.64C310.6 174.5 296.5 177.8 279.3 175z"/></svg>
						<b style="color:white;font-size:40px;margin-left:40%;"><?php echo $donationtotal;?></b>
						</div>

						<!-- ending card-->

						<!-- card -->

						<div class="col-lg-3" style="border-radius:10px;background-color:#666633;margin:30px;padding:10px;padding-left:20px;">
						<h3 style="color:white;">Darshan</h3>
<svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px"viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M623.5 164C638.1 172.6 644.6 192.1 635.1 207.5C627.4 222.1 607.9 228.6 592.5 219.1L319.1 68.61L47.54 219.1C32.09 228.6 12.61 222.1 4.025 207.5C-4.558 192.1 1.008 172.6 16.46 164L304.5 4.027C314.1-1.342 325.9-1.342 335.5 4.027L623.5 164zM279.1 200C279.1 177.9 297.9 160 319.1 160C342.1 160 359.1 177.9 359.1 200C359.1 222.1 342.1 240 319.1 240C297.9 240 279.1 222.1 279.1 200zM103.1 296C103.1 273.9 121.9 256 143.1 256C166.1 256 183.1 273.9 183.1 296C183.1 318.1 166.1 336 143.1 336C121.9 336 103.1 318.1 103.1 296V296zM535.1 296C535.1 318.1 518.1 336 495.1 336C473.9 336 455.1 318.1 455.1 296C455.1 273.9 473.9 256 495.1 256C518.1 256 535.1 273.9 535.1 296zM226.9 491.4L199.1 441.5V480C199.1 497.7 185.7 512 167.1 512H119.1C102.3 512 87.1 497.7 87.1 480V441.5L61.13 491.4C54.84 503 40.29 507.4 28.62 501.1C16.95 494.8 12.58 480.3 18.87 468.6L56.74 398.3C72.09 369.8 101.9 352 134.2 352H153.8C170.1 352 185.7 356.5 199.2 364.6L232.7 302.3C248.1 273.8 277.9 255.1 310.2 255.1H329.8C362.1 255.1 391.9 273.8 407.3 302.3L440.8 364.6C454.3 356.5 469.9 352 486.2 352H505.8C538.1 352 567.9 369.8 583.3 398.3L621.1 468.6C627.4 480.3 623 494.8 611.4 501.1C599.7 507.4 585.2 503 578.9 491.4L551.1 441.5V480C551.1 497.7 537.7 512 519.1 512H471.1C454.3 512 439.1 497.7 439.1 480V441.5L413.1 491.4C406.8 503 392.3 507.4 380.6 501.1C368.1 494.8 364.6 480.3 370.9 468.6L407.2 401.1C405.5 399.5 404 397.6 402.9 395.4L375.1 345.5V400C375.1 417.7 361.7 432 343.1 432H295.1C278.3 432 263.1 417.7 263.1 400V345.5L237.1 395.4C235.1 397.6 234.5 399.5 232.8 401.1L269.1 468.6C275.4 480.3 271 494.8 259.4 501.1C247.7 507.4 233.2 503 226.9 491.4H226.9z"/></svg>
						<b style="color:white;font-size:40px;margin-left:40%;"><?php echo $darshanbookingtotal; ?></b>
						</div>

						<!-- ending card-->

						<!-- card -->

						<div class="col-lg-3" style="border-radius:10px;background-color:#666633;margin:30px;padding:10px;padding-left:20px;">
						<h3 style="color:white;">Sevas</h3>
<svg xmlns="http://www.w3.org/2000/svg"  width="70px" height="70px"viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M328.7 52.28L431.7 119.8C449.5 132.9 453.3 157.9 440.2 175.7C427.1 193.5 402.1 197.3 384.3 184.2L296.6 127.1H191.1C183.2 127.1 175.1 135.2 175.1 143.1C175.1 152.7 183.2 159.1 191.1 159.1H254.2C270.2 159.1 284.1 170.9 287.6 186.6C290.8 206.6 275.5 223.1 255.1 223.1H143.1C116.1 223.1 90.87 214.7 69.87 197.7L23.37 159.1L15.1 160C7.25 160 0 152.7 0 143.1V47.99C0 39.25 7.25 32 15.1 32H266.1C289 32 310.9 39.19 328.7 52.28L328.7 52.28zM151.3 459.7L16.27 360.2C-1.509 347.1-5.305 322.1 7.803 304.3C20.93 286.5 45.94 282.7 63.74 295.8L183.4 384H304C312.8 384 320 376.8 320 368C320 359.3 312.8 352 304 352H225.8C209.8 352 195 341.1 192.4 325.4C189.2 305.4 204.5 288 224 288H352C379 288 405.1 297.3 426.1 314.3L472.6 352L496 352C504.7 352 512 359.3 512 368V464C512 472.8 504.7 480 496 480H213C190.1 480 169.1 472.8 151.3 459.7V459.7z"/></svg>
						<b style="color:white;font-size:40px;margin-left:40%;"><?php echo $sevatotal; ?></b>
						</div>

						<!-- ending card-->

						</div>
						<div class="row">



						</div>

					</div>
                    
                </div>
            </div>
        </div>




        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
