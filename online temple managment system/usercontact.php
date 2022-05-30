<?php 

session_start();

$username= $_SESSION['user_name'];

if($username==true){
}
else{
header("location:login.php");


}


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
							<!--	<input type="submit" value="New Users" style="margin-left:70%;margin-top:10%;color:white;" class="btn btn-outline-danger"/>-->
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



<hr>




<!-- contact body-->
<div class="container">
<h3>CONTACT</H3>

<P>On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and </P>
<br>
<div class="row">
<div class="col-lg-4"style="margin-left:9%;">
<h3>ADDRESS</H3><br>
<p style="text-align:justify;">
You can easily change the formatting of selected text in the 
document text by choosing a look for the selected text from
the Quick Styles gallery on the Home tab.
You can also format text directly by using 
the other controls on the Home tab.
Most controls offer 
a choice of using the look from the current theme 
or using a format that you specify directly.
</p>

</div>
<div class="col-lg-4">

<iframe src="https://www.google.com/maps/d/embed?mid=15ko9Q7JpVpGvbFQpxp70ln1WuEc&ehbc=2E312F" width="640" height="480"></iframe><br><br>
</div>
</div>
<!-- magement details part-->
<HR><h3 style="text-align:center;">MAGAMENT</h3><hr>

<div class="row">
<div class="col-lg-4"style="margin-left:24%;">
<table>
<tr>
	<td>Name:  </td>
	<td>G.Narayana murty</td>
</tr>
<tr>
	<td>Des:</td>
	<td>xxxxxxxxxxxx</td>
</tr>
<tr>
	<td>Address:</td>
	<td>Srikaulam</td>
	
</tr>
<tr>
	<td>Mobile Number:</td>
	<td>&nbsp;9798xxxxxx</td>
</tr>
<tr>
	<td>Email Address:</td>
	<td>&nbsp;narayamurty@gmail.com</td>
</tr>
</table>
</div>
<div class="col-lg-4">

<img src="img/management.jpg" class="img-thumbnail"width="267" height="287" border="0" alt="">

</div>


</div>
<!-- end magement details part-->
<br>

<!-- employee details part-->
<hr>

<h3 STYLE="text-align:center;"> EMPLOYEES</H3>
<hr>
<div class="row">

<div class="col-lg-3">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Employee Name1</h5>
    <h6 class="card-subtitle mb-2 text-muted">Postion</h6>
    <p class="card-text" style="padding-bottom:28px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   </div>
</div>
</div>
<div class="col-lg-3">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Employee Name2</h5>
    <h6 class="card-subtitle mb-2 text-muted">Postion</h6>
   <p class="card-text" style="padding-bottom:28px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   </div>
</div>
</div>
<div class="col-lg-3">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Employee Name3</h5>
    <h6 class="card-subtitle mb-2 text-muted">Postion</h6>
   <p class="card-text" style="padding-bottom:28px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   </div>
</div>
</div>
<div class="col-lg-3">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Employee Name4</h5>
    <h6 class="card-subtitle mb-2 text-muted">Postion</h6>
   <p class="card-text" style="padding-bottom:28px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   </div>
</div>
</div>
</div>

<br>
<div class="row">

<div class="col-lg-3">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Employee Name5</h5>
    <h6 class="card-subtitle mb-2 text-muted">Postion</h6>
    <p class="card-text" style="padding-bottom:28px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   </div>
</div>
</div>
<div class="col-lg-3">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Employee Name6</h5>
    <h6 class="card-subtitle mb-2 text-muted">Postion</h6>
   <p class="card-text" style="padding-bottom:28px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   </div>
</div>
</div>
<div class="col-lg-3">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Employee Name7</h5>
    <h6 class="card-subtitle mb-2 text-muted">Postion</h6>
   <p class="card-text" style="padding-bottom:28px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   </div>
</div>
</div>
<div class="col-lg-3">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Employee Name8</h5>
    <h6 class="card-subtitle mb-2 text-muted">Postion</h6>
   <p class="card-text" style="padding-bottom:28px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   </div>
</div>
</div>
</div>

<br>


<div class="row">

<div class="col-lg-3">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Employee Name9</h5>
    <h6 class="card-subtitle mb-2 text-muted">Postion</h6>
    <p class="card-text" style="padding-bottom:28px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   </div>
</div>
</div>
<div class="col-lg-3">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Employee Name10</h5>
    <h6 class="card-subtitle mb-2 text-muted">Postion</h6>
   <p class="card-text" style="padding-bottom:28px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   </div>
</div>
</div>
<div class="col-lg-3">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Employee Name11</h5>
    <h6 class="card-subtitle mb-2 text-muted">Postion</h6>
   <p class="card-text" style="padding-bottom:28px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   </div>
</div>
</div>
<div class="col-lg-3">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Employee Name12</h5>
    <h6 class="card-subtitle mb-2 text-muted">Postion</h6>
   <p class="card-text" style="padding-bottom:28px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   </div>
</div>
</div>
</div>


<!-- employee detail end part-->
</div>

<HR>



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