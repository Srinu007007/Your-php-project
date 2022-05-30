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
                    <h1 class="mt-4">Sevas</h1>
					<form action="" method="post" >
<div class="row" style="margin-left:60%">
<div class="col-lg-4">
					<select name="days" class="form-control">
						<option value="Choose">Choose</option>
						<option value="1">1 day(s)</option>
						<option value="7">1 week(s)</option>
						<option value="30">1 month(s)</option>
						
					</select>
</div>
<div class="col-lg-4">
					<input type="Submit" name="search" value="Search" class="btn btn-success">
					</div>
</div>
					</form>



					<div class="container">
						<div class="m-4">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
				<th>Id</th>
                <th>Name</th>
				<th>Mobile Number</th>
                <th>Sevaname</th>
                <th>Seva Type</th>
				<th>Amount</th>				
				<th>Registered E-mail </th>
				<th>Booking Date</th>
				<th>Registered Date</th>

            </tr>
        </thead>

		<?php

if(isset($_POST['search']))
{
require 'connection.php';
$days=$_POST['days'];

$query1="SELECT * FROM `sevasbooking` WHERE register_date >= DATE(NOW()) - INTERVAL $days DAY";

$data1 =mysqli_query($conn,$query1);
$total1=mysqli_num_rows($data1);
$result1=mysqli_fetch_assoc($data1);


if($total1==0){
echo 'no records';
}
 else {
	 while($result1=mysqli_fetch_assoc($data1)){
	?>

		
<?php $typeandcost=$result1['sevatype'];
//echo $typeandcost;
$res=explode(" ",$typeandcost);
//echo $res[0];?>
        <tbody>
            <tr>
                <td></td>
                <td>SEVAEID0<?php echo $result1['id'];?></td>
                <td><?php echo $result1['name'];?></td>
				<td><?php echo $result1['mbl'];?></td>
                <td><?php echo $result1['sevaname'];?></td>
				<td><?php echo $res[0];?></td>
                <td><?php echo $res[1];?></td>
				 <td><?php echo $result1['useremail'];?></td>
				  <td><?php echo $result1['bookingdate'];?></td>
				  <td><?php echo $result1['register_date'];?></td>
               
            </tr>
            
        </tbody>
		<?php }}
}?>
    </table>




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
