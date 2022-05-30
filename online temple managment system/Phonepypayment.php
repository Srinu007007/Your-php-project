<?php
session_start();



echo $_SESSION['user_name'];
$rn1= $_GET['rn'];






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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet" >

<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" >

<link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" >
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css">

<style>

@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");:root{--header-height: 3rem;--nav-width: 68px;--first-color: #ff6633;--first-color-light: #AFA5D9;--white-color: #F7F6FB;--body-font: 'Nunito', sans-serif;--normal-font-size: 1rem;--z-fixed: 100}*,::before,::after{box-sizing: border-box}body{position: relative;margin: var(--header-height) 0 0 0;padding: 0 1rem;font-family: var(--body-font);font-size: var(--normal-font-size);transition: .5s}a{text-decoration: none}.header{width: 100%;height: var(--header-height);position: fixed;top: 0;left: 0;display: flex;align-items: center;justify-content: space-between;padding: 0 1rem;background-color: var(--white-color);z-index: var(--z-fixed);transition: .5s}.header_toggle{color: var(--first-color);font-size: 1.5rem;cursor: pointer}.header_img{width: 35px;height: 35px;display: flex;justify-content: center;border-radius: 50%;overflow: hidden}.header_img img{width: 40px}.l-navbar{position: fixed;top: 0;left: -30%;width: var(--nav-width);height: 100vh;background-color: var(--first-color);padding: .5rem 1rem 0 0;transition: .5s;z-index: var(--z-fixed)}.nav{height: 100%;display: flex;flex-direction: column;justify-content: space-between;overflow: hidden}.nav_logo, .nav_link{display: grid;grid-template-columns: max-content max-content;align-items: center;column-gap: 1rem;padding: .5rem 0 .5rem 1.5rem}.nav_logo{margin-bottom: 2rem}.nav_logo-icon{font-size: 1.25rem;color: var(--white-color)}.nav_logo-name{color: var(--white-color);font-weight: 700}.nav_link{position: relative;color: var(--first-color-light);margin-bottom: 1.5rem;transition: .3s}.nav_link:hover{color: var(--white-color)}.nav_icon{font-size: 1.25rem}.show{left: 0}.body-pd{padding-left: calc(var(--nav-width) + 1rem)}.active{color: var(--white-color)}.active::before{content: '';position: absolute;left: 0;width: 2px;height: 32px;background-color: var(--white-color)}.height-100{height:100vh}@media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}.header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}.header_img{width: 40px;height: 40px}.header_img img{width: 45px}.l-navbar{left: 0;padding: 1rem 1rem 0 0}.show{width: calc(var(--nav-width) + 156px)}.body-pd{padding-left: calc(var(--nav-width) + 188px)}}




	
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
document.addEventListener("DOMContentLoaded", function(event) {
   
const showNavbar = (toggleId, navId, bodyId, headerId) =>{
const toggle = document.getElementById(toggleId),
nav = document.getElementById(navId),
bodypd = document.getElementById(bodyId),
headerpd = document.getElementById(headerId)

// Validate that all variables exist
if(toggle && nav && bodypd && headerpd){
toggle.addEventListener('click', ()=>{
// show navbar
nav.classList.toggle('show')
// change icon
toggle.classList.toggle('bx-x')
// add padding to body
bodypd.classList.toggle('body-pd')
// add padding to header
headerpd.classList.toggle('body-pd')
})
}
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/*===== LINK ACTIVE =====*/
const linkColor = document.querySelectorAll('.nav_link')

function colorLink(){
if(linkColor){
linkColor.forEach(l=> l.classList.remove('active'))
this.classList.add('active')
}
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))

 // Your code to run since DOM is loaded and ready
});


</script>
 </head>



 <body id="body-pd" >
    <header class="header" id="header" class="container">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <!--<div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>-->
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Payment Type </span> </a>

                <div class="nav_list"> <a href="creditpayment.php?rn=<?php echo $rn1; ?>" class="nav_link active"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvllNsNwjAMRU8nKBsUNukodLIyCqPABu0EIEu1ZEIqWQmuVJpfx/fEj9yG4NME6/NfgB4YgXNl2x7AANxFx7ZIAl2luKaL1iUFvJZo7Vw+dKzY5oAJaE3LvJW5K9CLyggFzMDJuQDuCpx6X9cOBEiHbIedi+kSuFsUDtjfkNOfW1qB5D3Vle3vFLu+/cBRRfyas+uaF6/mev2lGL5/wBthSioZtBNBKQAAAABJRU5ErkJggg=="/> <span class="nav_name">Credit Card</span> </a> 
				<a href="Debitpayment.php?rn=<?php echo $rn1; ?>" class="nav_link"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAM9JREFUSEvtlMENAVEQhr+tQAmogAJItKADjs6ueuDmSAs6cFCAgwLoQAdkkplkVoTsm/cSxN427+33z/wz+1cUfqrCfH5LYARsgE7QtjMwBfbC8RbJQTsIt8+F1X0UuOlpdC41jof9Bcz/z7RIVngJ9IEdsADWwAA4ADPgpC0kdXAEegoYA3OFmy0iMowIWFW22v7dRGwjkzrwP2GRDmQGK7WpyAyaJEiSRVkErkCrCenF3Yulss8i8XmbIVEFPnkW15mKr2Oi0fy2qO8XuAO/WzQZ+19+dgAAAABJRU5ErkJggg=="/></i> <span class="nav_name">Debit Card</span> </a> <a href="Phonepypayment.php?rn=<?php echo $rn1; ?>" class="nav_link"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAalJREFUSEu1lY8tREEQh7+rABWgAlSADqgAFaACVIAK0MGpAB1QASXogHzJTjJv3+55krtNLrm8tzPfzG/+vBkrPrMV+2fZgHXgHLiJwFsAL72UC4fA98Qsw263AK61qwH5ku/fgRbkEThN4Gz3ARxEYBlQX9J+pwP5AYScAV3ndQavwD4QEfjeZy2IAI8QJfE3iLxVgzDaSLobXYbsFcO4G36azusMwqgn21vRVrsaEHKN+iE7C4ksqv+jyEpUR1gDQi5rMjgZYBQnwCVwV259AZulkwLayiCcjjLJANvuoURvFhGV0HvgYpT/hAe13ka8BmwD/t8CPosfC+xc/OvUgxYyPaVBUi7HX+dqHJBJE18DjFgHZhHFzq1q9AKfgdvS/9EMzbXS2kXukKsyC8qiVEJ8bib52F2e3sR3t2m0rNkcF4iOzNBiH5UA3Dme3sR3AVkWt6mQ3KZ1oXsTv/B7oNG87KdoWfe8krUArnh3Up74SR8ctVcWCx8FtduUT2eTt+mi/lZ7QWofoPr+n9t0ygAZrYUVJNT17jGTKPzAz7K/yaMgVw74BZhRcxkQBjNsAAAAAElFTkSuQmCC"/></i> <span class="nav_name">Phone py</span> </a> 
				
				<!--<a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a> <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a> <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a> </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        --></nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <h4>Payment</h4>

<form class="credit-card">
  <div class="form-header">
    <h4 class="title">UPI detail</h4>
  </div>
 
  <div class="form-body" style="margin-top:20%;">
    <!-- Card Number -->
    <input type="text" class="card-number" placeholder="UPI Phone number">
 
   <!-- Date Field -->
     <!-- <div class="date-field">
      <div class="month">
        <select name="Month">
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
        <select name="Year">
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
    <!--<div class="card-verification">
      <div class="cvv-input">
        <input type="text" placeholder="CVV">
      </div>
      <div class="cvv-details">
        <p>3 or 4 digits usually found <br> on the signature strip</p>
      </div>
    </div>
 
    <!-- Buttons -->
    <button type="submit" class="proceed-btn"><a href="#">Proceed</a></button>
   <!-- <button type="submit" class="paypal-btn"><a href="#">Pay With</a></button>-->
  </div>
</form>

	
    </div>
    <!--Container Main end-->

	
 </body>

</html>
