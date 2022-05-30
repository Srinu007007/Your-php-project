 


<?php 
session_start();
require 'connection.php';
$username=$_SESSION['user_name'];
$id=$_GET['rn'];
//echo $id;
//echo $username;

$query="SELECT * FROM darshanbooking where useremail='$username' && id=$id";

$data =mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);


$query1="SELECT * FROM users where email='$username'";

$data1 =mysqli_query($conn,$query1);
$total1=mysqli_num_rows($data1);
$result1=mysqli_fetch_assoc($data1);

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>

.footer{
background-color:#fcb900;
width:100%;

}
.header{
background-color:#fcb900;
width:100%;

}
.copyrights{
width:100%;
color:black;

}
h3{
font-size:20px;
color:#dc3545;
}
#icon{
margin-left:24%;
margin-bottom:12px;
margin-top:10px;
}
li a{
text-transform:uppercase;
font-weight:bold;


}
ul{

background-color:#fcb900;
}
table, th, td {
  border: 1px solid black;
  padding:10px;
  border-collapse: collapse;
}

</style>

</head>
<body>
<!-- upper nav bar -->

<div id="nav1" style="background-color:#ffcc33;" >

<ul class="nav justify-content-end"style="background-color:#ffcc33;">
  <li class="nav-item" >
    <a class="nav-link active" style="color:white;font-size:12px;"aria-current="page" href="donationhistory.php">Donation History</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" style="color:white;font-size:12px;"href="darshanhistory.php">Darshan History</a>
  </li>
<li class="nav-item">
    <a class="nav-link" style="color:white;font-size:12px;"href="userprofile.php">Profile</a>
  </li>
<li class="nav-item">
    <a class="nav-link" style="color:white;font-size:12px;" href="userchangepassword.php">Change Password</a>
  </li>
<li class="nav-item">
    <a class="nav-link" style="color:white;font-size:12px;" href="logout.php">Logout</a>
  </li>
 
  
</ul>
</div>







<div class="header">
			<div class="container">
					<div class="row">

						<div class="col-lg-6">
								<img src="img/icon.png" width="70" height="70" id="icon" class="rounded" border="0" alt="">
								<h3>Online Temple Management System</h3>
						</div>

						<div class="col-lg-6">
								<!--<input type="submit" value="New Users" style="margin-left:70%;margin-top:10%;color:white;" class="btn btn-outline-danger"/>-->
						</div>

						</div>


					</div>
			</div>
</div>










<!-- nav bar -->

<div id="nav1" >

<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" style="color:white;"aria-current="page" href="userindex.php">Home</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" style="color:white;"href="userourfestivals.php">Our Festivals</a>
  </li>
<li class="nav-item">
    <a class="nav-link" style="color:white;"href="usertemple.php">Temple</a>
  </li>
     <li class="nav-item">
    <a class="nav-link" style="color:white;"href="usersevas.php">Sevas</a>
  </li>
<li class="nav-item">
    <a class="nav-link" style="color:white;" href="usercontact.php">Contact Us</a>
  </li>
 
  
</ul>
</div>

<!-- view details -->

<div class="container">
<h3 style="text-align:center;margin-top:20px;color:blue;"> View Booking Details of:KADTIDE0<?php echo $result['id']; ?></h3>
<hr>
<h3 style="text-align:center;margin-top:20px;color:blue;"> Details of Devotee</h3>


<!--  Details of Devotee -->
<table style="width:100%">
<tr>
	<td style="font-weight:bold;">Darshanarthi (Devotee) Name</td>
	<td><?php echo $result1['fname']; ?>  <?php echo $result1['lname']; ?></td>
	<td style="font-weight:bold;">Darshanarthi (Devotee) Email</td>
	<td><?php echo $result1['email']; ?></td>
</tr>
<tr>
	<td style="font-weight:bold;">Darshanarthi (Devotee) Mobile Number</td>
	<td><?php echo $result1['mbl']; ?></td>
	<td style="font-weight:bold;">Darshanarthi (Devotee) Reg Date</td>
	<td><?php echo $result1['Register_time']; ?></td>
</tr>

</table>
<!--  end Details of Devotee -->

<h3 style="text-align:center;margin-top:20px;color:blue;"> Details of Darshans</h3>

<table style="width:100%">
<tr>
<td style="font-weight:bold;">Date of Darshan </td> 
<td><?php echo $result['dateof']; ?></td>
<td style="font-weight:bold;text-align:right;" colspan="2">Time of Darshan </td> 
<td><?php echo $result['timeof']; ?></td>


</tr>
<tr>
<td style="font-weight:bold;">Total Member </td> 
<td><?php echo $result['totalmemebers']; ?></td>
<td style="font-weight:bold;">City of Devotee </td> 
<td><?php echo $result['city']; ?></td>
<td style="font-weight:bold;">State of Devotee </td> 
<td><?php echo $result['state']; ?></td>






</tr>
<tr>
<td style="font-weight:bold;">Country of Devotee </td> 
<td><?php echo $result['country']; ?></td>
<td style="font-weight:bold;">Identity Proof of Devotee </td> 
<td><?php echo $result['identityproof']; ?></td>
<td style="font-weight:bold;">Identity Proof Number </td> 
<td><?php echo $result['identityproofno']; ?></td>


</tr>
<tr>
<td style="font-weight:bold;">Physically Handicapper  </td> 
<td><?php echo $result['message']; ?></td>

<td style="font-weight:bold;">Booking date </td> 
<td><?php echo $result['bookingdate']; ?></td>

<td style="font-weight:bold;">Click here </td> 
<td><i class="fa fa-print" aria-hidden="true"></i><a href="#"> Print </a></td>



</tr>

</table>




</div>
<!-- ending view details -->






<!-- footer part-->
<div class="footer" style="margin-top:20px;">
		
<div class="container"style="margin-top:20px;">
		<div class="row"style="margin-top:20px;">

					
                 
<!-- first part-->
				<div class="col-lg-6"style="margin-top:25px;">

                 <h3>OUR LOCATION</H3>
			<P>
<PRE>
Address Tirumala Tirupati Devasthanams

TTD Administrative Building K.T. 

Road Tirupati 517 501. 

Andhra Pradesh India. 

Phone Numbers for call Centre (24/7)
</PRE>
			</P>

				</div>
 
<!-- second part-->
				<div class="col-lg-6">

<div class="row">


<div class="col-lg-6"style="margin-top:25px;">

<h3> OUR TEMPLE </H3>
<ul>
<li> HOME </li>
<li> OUR FESTIVALS </li>
<li> TEMPLE </li>
<li> CONTACT US  </li>
<li> LOGIN </li>


</ul>
</div>



<div class="col-lg-6"style="margin-top:25px;">

<h3> GET CONNECTE </H3>

<i class="fa fa-facebook-square fa-lg" style="margin-right:10px;"></i>Facebook <br>
<i class="fa fa-twitter fa-lg"style="margin-right:10px;"></i>Twitter<br>

<i class="fa fa-youtube fa-lg"style="margin-right:10px;"></i>YouTube<br>



<i class="fa fa-instagram fa-lg"style="margin-right:10px;"></i>Instagram


</ul>
</div>


</div>





				</div>
 



		</div>
</div>

</div>
<div class="copyrights" style="background-color:black;">

<p style="text-align:center;color:white;"> <i class="fa fa-copyright"></i> copy rights 2021-2022</p>
</div>
</div>

</body>
</html>