<?php 
error_reporting(0);
$date=$_GET['rndate'];
$time=$_GET['rntime'];
$num=$_GET['rnnum'];
$city=$_GET['rncity'];
$state=$_GET['rnstate'];
$country=$_GET['rncountry'];
$identityproof=$_GET['rnidentityproof'];
$idno=$_GET['rnidno'];
$message=$_GET['rnmessage'];

$username12=$_GET['rnusername'];
$amount=$_GET['rnamount'];
$date=$_GET['rndate'];

session_start();
if(isset($_POST['credit']))
{
require 'connection.php';

$cardtype=$_POST['cardtype'];

$query="INSERT INTO darshanbooking (dateof,timeof,totalmemebers,city,state,country,identityproof,identityproofno,message,useremail,amount,paymenttype) VALUES ('$date', '$time', '$num', '$city', '$state', '$country', '$identityproof', '$idno', '$message', '$username12', '$amount', '$cardtype')";
$data=mysqli_query($conn, $query);
if($data){
echo '<script> alert("Your payment Successfully.. ")  </script>';
echo '<scrpit> alert("your Payment Successfully..")</scrpit>';
      $_SESSION['user_name']=$username12;
		$_SESSION['cardtype']=$cardtype;
		$_SESSION['idno']=$idno;
		$_SESSION['date']=$date;
	$_SESSION['amount']=$amount;
	   header('location:success.php');
}


}

?>


<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
  <style>


 	
/* Credit Card */
.credit-card {
    width: 360px;
    height: 400px;
    margin: 60px auto 0;
    border: 1px solid #ddd;
    border-radius: 6px;
    background-color: #fff;
    box-shadow: 1px 2px 3px 0 rgba(0,0,0,.10);
}

.form-header {
    height: 60px;
    padding: 20px 30px 0;
    border-bottom: 1px solid #e1e8ee;
}
 
.form-body {
    height: 340px;
    padding: 30px 30px 20px;
}

/* Title */
.title {
    font-size: 18px;
    margin: 0;
    color: #5e6977;
}

/* Common */
.card-number,
.cvv-input input,
.month select,
.year select {
    font-size: 14px;
    font-weight: 100;
    line-height: 14px;
}
 
.card-number,
.month select,
.year select {
    font-size: 14px;
    font-weight: 100;
    line-height: 14px;
}
 
.card-number,
.cvv-details,
.cvv-input input,
.month select,
.year select {
    opacity: .7;
    color: #86939e;
}
/* Card Number */
.card-number {
    width: 100%;
    margin-bottom: 20px;
    padding-left: 20px;
    border: 2px solid #e1e8ee;
    border-radius: 6px;
}

/* Date Field */
.month select,
.year select {
    width: 145px;
    margin-bottom: 20px;
    padding-left: 20px;
    border: 2px solid #e1e8ee;
    border-radius: 6px;
    background: url('caret.png') no-repeat;
    background-position: 85% 50%;
    -moz-appearance: none;
    -webkit-appearance: none;
}
 
.month select {
    float: left;
}
 
.year select {
    float: right;
}
 /* Card Verification Field */
.cvv-input input {
    float: left;
    width: 145px;
    padding-left: 20px;
    border: 2px solid #e1e8ee;
    border-radius: 6px;
    background: #fff;
}
 
.cvv-details {
    font-size: 12px;
    font-weight: 300;
    line-height: 16px;
    float: right;
    margin-bottom: 20px;
}
 
.cvv-details p {
    margin-top: 6px;
}

/* Buttons Section */
.paypal-btn,
.proceed-btn {
    cursor: pointer;
    font-size: 16px;
    width: 100%;
    border-color: transparent;
    border-radius: 6px;
}
 
.proceed-btn {
    margin-bottom: 10px;
    background: #7dc855;
}
 
.paypal-btn a,
.proceed-btn a {
    text-decoration: none;
}
 
.proceed-btn a {
    color: #fff;
}
 
.paypal-btn a {
    color: rgba(242, 242, 242, .7);
}
 
.paypal-btn {
    padding-right: 95px;
    background: url('paypal-logo.svg') no-repeat 65% 56% #009cde;
}

</style>

<script>
function val(){
	
var cardnumber=document.getElementById("cardnumber").value;
var cvv=document.getElementById("cvv").value;


	if(cardnumber=="")
	{
		alert("Enter Card Number");
		return false;
	}
	if(cvv=="")
	{
		alert("Enter CVV number");
		return false;
	}

	

}






</script>




  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 </head>
 <body>
 <div class="container">



<form class="credit-card" action="" method="POST" style="margin-top:10%;" onsubmit="return val()">
  <div class="form-header">
    <h4 class="title">Debit card detail</h4>
  </div>
 
  <div class="form-body">
    <!-- Card Number -->
    <input type="text" class="card-number" id="cardnumber" value="" style="padding:10px;" placeholder="Card Number">
    <input type="hidden" name="cardtype" value="Debit card">
    <!-- Date Field -->
    <div class="date-field">
      <div class="month">
        <select name="Month" style="padding:10px;">
          <option value="january">January</option>
          <option value="february">February</option>
          <option value="march">March</option>
          <option value="april">April</option>
          <option value="may">May</option>
          <option value="june">June</option>
          <option value="july">July</option>
          <option value="august">August</option>
          <option value="september">September</option>
          <option value="october">October</option>
          <option value="november">November</option>
          <option value="december">December</option>
        </select>
      </div>
      <div class="year">
        <select name="Year"style="padding:10px;">
          <option value="2016">2016</option>
          <option value="2017">2017</option>
          <option value="2018">2018</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
          <option value="2023">2023</option>
          <option value="2024">2024</option>
        </select>
      </div>
    </div>
 
    <!-- Card Verification Field -->
    <div class="card-verification">
      <div class="cvv-input">
        <input type="text" placeholder="CVV" id="cvv" value=""style="padding:10px;">
      </div>
      <div class="cvv-details">
        <p>3 or 4 digits usually found <br> on the signature strip</p>
      </div>
    </div>
 
    <!-- Buttons -->
	<input type="submit" class="proceed-btn" name="credit" value="Proceed" style="padding:10px;">
   <!--  <button type="submit" class="proceed-btn"><a href="#">Proceed</a></button>
   <button type="submit" class="paypal-btn"><a href="#">Pay With</a></button>-->
  </div>
</form>




 </div>


 </body>
</html>
