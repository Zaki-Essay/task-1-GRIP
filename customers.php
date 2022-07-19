 <?php session_start(); ?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="the sparks foundation internship certificate, donation, the sparks foundation internship, grip at the sparks foundation, grip at the sparks foundation internship, the sparks foundation grip, the sparks foundation github, the sparks foundation internship web development, the sparks foundation internship, the sparks foundation linkedin, the sparks foundation network, the sparks foundation singapore, the sparks foundation tasks, the sparks foundation web development internship, tsf, tsf at grip, grip, tsf grip, Graduate Rotational Internship Program, Payment gateway integration, task Payment gateway integration">
<meta name="author" content="Bhavjot Singh">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/030c849e74.js" crossorigin="anonymous"></script>
<link rel = "icon" href ="images/logo.png" type = "image/x-icon">
<title>Customer | Bank-TSF</title>
<style>
body {
    margin:0;
padding:0;
border: 0;
overflow-x: hidden;
font-family: 'Open Sans', sans-serif;
background-color:white;
}

/*--Header Div--*/
.header {
margin:0;
width:100%;
height: 100px;
position:relative;
background-color: #1A374D;
}

.header-left {
max-width: 25%;
height: auto;
}

.header-left-logo {
width: 80px;
height: auto;
margin: 0% 0 0 5%;
} 

/*--Header Right Lists--*/
.header-right { 
margin: -70px 40px 0 0;
font-size:20px;
float:right;
}

.header-right .header-right-links{ 
display:inline;
padding: 0 30px;
text-decoration:none;
color: white;
font-weight: bold;
transition: 0.6s;
}

.header .header-right .header-right-links:hover { 
text-decoration:underline;
letter-spacing: 2.5px;
}

/*--Responsive Header Hamburger Icon--*/
.header .header-right-icon {
display: none;
font-size: 35px;
float: right;
color: white;
position: absolute;
top: 30%;
right: 5%;
}

/*--Responsive Header Close Icon--*/
.header .header-right-close-icon {
display: none;
font-size: 35px;
float: right;
color: white;
position: absolute;
top: 30%;
right: 5%;
z-index: 999;
}

/*--Header Responsive Query--*/
@media (max-width: 880px) {
.header {
	font: bold 14px sans-serif;
	width: 100%;
	}

.header .header-right .header-right-links {
	display: none;
	}

.header .header-right-icon {
	display: block;
  }

  .header .header-right-close-icon {
    display: block;
    opacity: 0;
  }

.header .Responsive-SlideDown {
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    height: 100vh;
    width: 100%;
    position: fixed;
    left: 0%;
    top: -4.6%;
    z-index: 1;
    overflow-y: hidden;
    transition: 0.5s ease-in-out;
	}
 
.header .Responsive-SlideDown .header-right-links {
    display: block;
    text-align: center;
    font-size: 26px;
    padding: 40px;
    transform: translate(0%, 125%);
    color: white;
  }
}

.fixed-header {
background-color: #B1D0E0;
height: 50px;
line-height: 45px;
width: 100%;
text-align: center;
}

.fixed-header .fixed-header-links {
color: black;
padding: 0 22px;
font-size: 25px;
margin: 0 0 0 4%;
transition: 0.3s;
position: relative;
left: 15%;
z-index: 999;
}

.fixed-header .fixed-header-links:hover {
letter-spacing: 3px;
}

.sticky-fixed-header {
position: fixed;
top: 0;
width: 100%;
z-index: 999;
}

.sticky-fixed-header .fixed-header-links {
left: 0;
}

@media (max-width: 1200px) {
    .fixed-header {
        height: auto;
    }

    .fixed-header .fixed-header-links {
        width: 100%;
        padding: 0;
        text-align: justify;
    }
}

@media (max-width: 880px) {
    .fixed-header {
        height: auto;
    }

    .fixed-header .fixed-header-links {
        width: 100%;
        padding: 0;
        text-align: justify;
        margin: 0% 29% 0% 0%;
    }
}

.customer-1 {
box-shadow: 20px 10px 10px rgba(0,0,0,0.2);
transition: 0.3s;
width: 25%;
height: auto;
margin: 4% 0 0 4%;
}

.customer-1:hover {
box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.card-image {
background-color: #B1D0E0;
width: 100%;
height: 50%;
}

.container {
padding: 2px 16px;
background-color: #1A374D;
text-align: center;
}

.customer-1 .container .details-button {
border-radius: 4px;
background-color: #333;
border: none;
color: #FFFFFF;
text-align: center;
font-size: 18px;
padding: 10px;
width: 100px;
transition: all 0.5s;
cursor: pointer;
margin: 5px;
}

.customer-1 .container .details-button .details-button-span {
cursor: pointer;
display: inline-block;
position: relative;
transition: 0.5s;
}

.customer-1 .container .details-button .details-button-span:after {
content: '\203A';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.5s;
}

.customer-1 .container .details-button:hover .details-button-span {
padding-right: 15px;
}

.customer-1 .container .details-button:hover .details-button-span:after {
opacity: 1;
right: 0;
}

.customer-1 .container .transact-details-button {
border-radius: 4px;
background-color: #333;
border: none;
color: #FFFFFF;
text-align: center;
font-size: 18px;
padding: 10px;
width: 100px;
transition: all 0.5s;
cursor: pointer;
margin: 5px;
}

.customer-1 .container .transact-details-button .transact-details-button-span {
cursor: pointer;
display: inline-block;
position: relative;
transition: 0.5s;
}

.customer-1 .container .transact-details-button .transact-details-button-span:after {
content: '\203A';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.5s;
}

.customer-1 .container .transact-details-button:hover .transact-details-button-span {
padding-right: 15px;
}

.customer-1 .container .transact-details-button:hover .transact-details-button-span:after {
opacity: 1;
right: 0;
}

.customer-1 .container .details-customer-1 {
display: none; 
position: fixed;
z-index: 9999; 
padding-top: 100px; 
left: 0;
top: 0;
width: 100%; 
height: 100%; 
overflow: auto; 
background-color: rgb(0,0,0); 
background-color: rgba(0,0,0,0.9); 
}

.customer-1 .container .details-customer-1 .details-customer-1-content {
background-color: #1A374D;
margin: auto;
padding: 20px;
border-radius: 25px;
width: 50%;
text-align: center;
position: relative;
top: 10%;
}

.customer-1 .container .details-customer-1 .details-customer-1-content .close {
color: #666;
float: right;
font-size: 45px;
font-weight: bold;
margin: -3% 2% 0 0;
}

.customer-1 .container .details-customer-1 .details-customer-1-content .close:hover, 
.customer-1 .container .details-customer-1 .details-customer-1-content .close:focus {
color: #000;
transform: scale(1.1);
text-decoration: none;
cursor: pointer;
}

.customer-1 .container .details-customer-1 .details-customer-1-content p {
font-size: 25px;
font-weight: 800;
text-align: justify;
position: relative;
left: 25%;
}

.customer-1 .container .details-customer-1 .details-customer-1-content p span {
font-weight: 600;
font-family: monospace;
}

.customer-1 .container .details-customer-1 .details-customer-1-content .transact-button {
border-radius: 4px;
background-color: #333;
border: none;
color: #FFFFFF;
text-align: center;
font-size: 18px;
padding: 10px;
width: 100px;
transition: all 0.3s;
cursor: pointer;
margin: 5px;
}

.customer-1 .container .details-customer-1 .details-customer-1-content .transact-button:hover {
transform: scale(1.1);
letter-spacing: 1.5px;
}

.customer-1 .container .details-customer-1 .details-customer-1-content .passbook-button {
border-radius: 4px;
background-color: #333;
border: none;
color: #FFFFFF;
text-align: center;
font-size: 18px;
padding: 10px;
width: 150px;
transition: all 0.5s;
cursor: pointer;
margin: 5px;
}

.customer-1 .container .details-customer-1 .details-customer-1-content .passbook-button:hover {
transform: scale(1.1);
width: 200px;
letter-spacing: 1.5px;
}
/*-------------Cust - 1 ends---------------*/

.customer-2 {
box-shadow: 20px 10px 10px rgba(0,0,0,0.2);
transition: 0.3s;
width: 25%;
margin: -37% 0 0 37.5%;
}

.customer-2:hover {
box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.card-image {
background-color: #B1D0E0;
width: 100%;
height: 50%;
}

.container {
padding: 2px 16px;
background-color: #1A374D;
text-align: center;
}

.customer-2 .container .details-button {
border-radius: 4px;
background-color: #333;
border: none;
color: #FFFFFF;
text-align: center;
font-size: 18px;
padding: 10px;
width: 100px;
transition: all 0.5s;
cursor: pointer;
margin: 5px;
}

.customer-2 .container .details-button .details-button-span {
cursor: pointer;
display: inline-block;
position: relative;
transition: 0.5s;
}

.customer-2 .container .details-button .details-button-span:after {
content: '\203A';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.5s;
}

.customer-2 .container .details-button:hover .details-button-span {
padding-right: 15px;
}

.customer-2 .container .details-button:hover .details-button-span:after {
opacity: 1;
right: 0;
}

.customer-2 .container .transact-details-button {
border-radius: 4px;
background-color: #333;
border: none;
color: #FFFFFF;
text-align: center;
font-size: 18px;
padding: 10px;
width: 100px;
transition: all 0.5s;
cursor: pointer;
margin: 5px;
}

.customer-2 .container .transact-details-button .transact-details-button-span {
cursor: pointer;
display: inline-block;
position: relative;
transition: 0.5s;
}

.customer-2 .container .transact-details-button .transact-details-button-span:after {
content: '\203A';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.5s;
}

.customer-2 .container .transact-details-button:hover .transact-details-button-span {
padding-right: 15px;
}

.customer-2 .container .transact-details-button:hover .transact-details-button-span:after {
opacity: 1;
right: 0;
}

.customer-2 .container .details-customer-2 {
display: none; 
position: fixed;
z-index: 9999; 
padding-top: 100px; 
left: 0;
top: 0;
width: 100%; 
height: 100%; 
overflow: auto; 
background-color: rgb(0,0,0); 
background-color: rgba(0,0,0,0.9); 
}

.customer-2 .container .details-customer-2 .details-customer-2-content {
background-color: #1A374D;
margin: auto;
padding: 20px;
border-radius: 25px;
width: 50%;
text-align: center;
position: relative;
top: 10%;
}

.customer-2 .container .details-customer-2 .details-customer-2-content .close {
color: #666;
float: right;
font-size: 45px;
font-weight: bold;
margin: -3% 2% 0 0;
}

.customer-2 .container .details-customer-2 .details-customer-2-content .close:hover, 
.customer-2 .container .details-customer-2 .details-customer-2-content .close:focus {
color: #000;
transform: scale(1.1);
text-decoration: none;
cursor: pointer;
}

.customer-2 .container .details-customer-2 .details-customer-2-content p {
font-size: 25px;
font-weight: 800;
text-align: justify;
position: relative;
left: 25%;
}

.customer-2 .container .details-customer-2 .details-customer-2-content p span {
font-weight: 600;
font-family: monospace;
}

.customer-2 .container .details-customer-2 .details-customer-2-content .transact-button {
border-radius: 4px;
background-color: #333;
border: none;
color: #FFFFFF;
text-align: center;
font-size: 18px;
padding: 10px;
width: 100px;
transition: all 0.3s;
cursor: pointer;
margin: 5px;
}

.customer-2 .container .details-customer-2 .details-customer-2-content .transact-button:hover {
transform: scale(1.1);
letter-spacing: 1.5px;
}

.customer-2 .container .details-customer-2 .details-customer-2-content .passbook-button {
border-radius: 4px;
background-color: #333;
border: none;
color: #FFFFFF;
text-align: center;
font-size: 18px;
padding: 10px;
width: 150px;
transition: all 0.5s;
cursor: pointer;
margin: 5px;
}

.customer-2 .container .details-customer-2 .details-customer-2-content .passbook-button:hover {
transform: scale(1.1);
width: 200px;
letter-spacing: 1.5px;
}
/*-------------Cust - 2 ends---------------*/

.customer-3 {
box-shadow: 20px 10px 10px rgba(0,0,0,0.2);
transition: 0.3s;
width: 25%;
margin: -37% 0 0 71%;
}

.customer-3:hover {
box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.card-image {
background-color: #B1D0E0;
width: 100%;
height: 50%;
}

.container {
padding: 2px 16px;
background-color: #1A374D;
text-align: center;
}

.customer-3 .container .details-button {
border-radius: 4px;
background-color: #333;
border: none;
color: #FFFFFF;
text-align: center;
font-size: 18px;
padding: 10px;
width: 100px;
transition: all 0.5s;
cursor: pointer;
margin: 5px;
}

.customer-3 .container .details-button .details-button-span {
cursor: pointer;
display: inline-block;
position: relative;
transition: 0.5s;
}

.customer-3 .container .details-button .details-button-span:after {
content: '\203A';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.5s;
}

.customer-3 .container .details-button:hover .details-button-span {
padding-right: 15px;
}

.customer-3 .container .details-button:hover .details-button-span:after {
opacity: 1;
right: 0;
}

.customer-3 .container .transact-details-button {
border-radius: 4px;
background-color: #333;
border: none;
color: #FFFFFF;
text-align: center;
font-size: 18px;
padding: 10px;
width: 100px;
transition: all 0.5s;
cursor: pointer;
margin: 5px;
}

.customer-3 .container .transact-details-button .transact-details-button-span {
cursor: pointer;
display: inline-block;
position: relative;
transition: 0.5s;
}

.customer-3 .container .transact-details-button .transact-details-button-span:after {
content: '\203A';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.5s;
}

.customer-3 .container .transact-details-button:hover .transact-details-button-span {
padding-right: 15px;
}

.customer-3 .container .transact-details-button:hover .transact-details-button-span:after {
opacity: 1;
right: 0;
}

.customer-3 .container .details-customer-3 {
display: none; 
position: fixed;
z-index: 9999; 
padding-top: 100px; 
left: 0;
top: 0;
width: 100%; 
height: 100%; 
overflow: auto; 
background-color: rgb(0,0,0); 
background-color: rgba(0,0,0,0.9); 
}

.customer-3 .container .details-customer-3 .details-customer-3-content {
background-color: #1A374D;
margin: auto;
padding: 20px;
border-radius: 25px;
width: 50%;
text-align: center;
position: relative;
top: 10%;
}

.customer-3 .container .details-customer-3 .details-customer-3-content .close {
color: #666;
float: right;
font-size: 45px;
font-weight: bold;
margin: -3% 2% 0 0;
}

.customer-3 .container .details-customer-3 .details-customer-3-content .close:hover, 
.customer-3 .container .details-customer-3 .details-customer-3-content .close:focus {
color: #000;
transform: scale(1.1);
text-decoration: none;
cursor: pointer;
}

.customer-3 .container .details-customer-3 .details-customer-3-content p {
font-size: 25px;
font-weight: 800;
text-align: justify;
position: relative;
left: 25%;
}

.customer-3 .container .details-customer-3 .details-customer-3-content p span {
font-weight: 600;
font-family: monospace;
}

.customer-3 .container .details-customer-3 .details-customer-3-content .transact-button {
border-radius: 4px;
background-color: #333;
border: none;
color: #FFFFFF;
text-align: center;
font-size: 18px;
padding: 10px;
width: 100px;
transition: all 0.3s;
cursor: pointer;
margin: 5px;
}

.customer-3 .container .details-customer-3 .details-customer-3-content .transact-button:hover {
transform: scale(1.1);
letter-spacing: 1.5px;
}

.customer-3 .container .details-customer-3 .details-customer-3-content .passbook-button {
border-radius: 4px;
background-color: #333;
border: none;
color: #FFFFFF;
text-align: center;
font-size: 18px;
padding: 10px;
width: 150px;
transition: all 0.5s;
cursor: pointer;
margin: 5px;
}

.customer-3 .container .details-customer-3 .details-customer-3-content .passbook-button:hover {
transform: scale(1.1);
width: 200px;
letter-spacing: 1.5px;
}
/*-------------- Cust 3 ends------------*/

/*----------------------Cust 10 ends----------------------*/
/*----------------------Cust Media----------------------*/
@media (max-width: 1200px) {
    .customer-1 {
        width: 40%;
        margin: 0 0 0 27.5%;
    }
    .customer-1 .container .details-customer-1 .details-customer-1-content {
        width: 70%;
    }
    .customer-1 .container .details-customer-1 .details-customer-1-content p {
        font-size: 20px;
        left: 15%;
    }

    .customer-2 {
        width: 40%;
        margin: 5% 0 0 27.5%;
    }
    .customer-2 .container .details-customer-2 .details-customer-2-content {
        width: 70%;
    }
    .customer-2 .container .details-customer-2 .details-customer-2-content p {
        font-size: 20px;
        left: 15%;
    }

    .customer-3 {
        width: 40%;
        margin: 5% 0 0 27.5%;
    }
    .customer-3 .container .details-customer-3 .details-customer-3-content {
        width: 70%;
    }
    .customer-3 .container .details-customer-3 .details-customer-3-content p {
        font-size: 20px;
        left: 15%;
    }


    }


@media (max-width: 420px) {
    .customer-1 .container .details-customer-1 .details-customer-1-content p {
        font-size: 18px;
        left: 5%;
    }

    .customer-2 .container .details-customer-2 .details-customer-1-content p {
        font-size: 18px;
        left: 5%;
    }



}
/*----------------------Cust Media Ends----------------------*/
.footer-distributed{
background-color: #1A374D;
box-sizing: border-box;
width: 100%;
text-align: left;
font: bold 16px sans-serif;
padding: 55px 50px;
margin-top: 10%;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
display: inline-block;
vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
width: 40%;
}

/* The company logo */

.footer-distributed h2{
color:  #000000;
font: normal 40px 'Cookie', cursive;
margin: 0% 0 0 0;
}

.footer-distributed h2 span{
color: red;
font-weight: 700;
}

.footer-distributed img {
width: 30%;
height: auto;
margin: 0 0 -5% 5%;
}

/* Footer links */

.footer-distributed .footer-links{
color:  #000000;
margin: 20px 0 12px;
padding: 0;
}

.footer-distributed .footer-links a{
display:inline-block;
line-height: 1.8;
text-decoration: none;
color:  inherit;
font-size: 18px;
}

.footer-distributed .footer-links a:hover{
text-decoration: underline;
color: red;
}

/* Footer Center */
.footer-center {
width: 30%;
margin: -1.6% 0 0 0;
}

.footer-center .heading {
font-size: 20px;
font-weight: 600;
padding: 0 0 2.5% 0;
}

.footer-center a {
width: 10%;
text-decoration: none;
color: #343638ec;
line-height: 35px;
font-size: 20px;
font-weight: 700;
margin: 0 50% 0 0%;
}

.footer-center a:hover {
color: red;
text-decoration: underline;
font-size: 22px;
font-weight: 800;
}

/* Footer Right */

.footer-distributed .footer-right{
width: 20%;
margin: 0 0 0 4%;
}

.footer-distributed .footer-company-about{
line-height: 20px;
color:  #343638ec;
font-size: 13px;
font-weight: normal;
margin: 0;
}

.footer-distributed .footer-company-about span{
display: block;
color:  #000000;
font-size: 20px;
font-weight: bold;
margin-bottom: 20px;
}

.footer-distributed .footer-icons{
margin-top: 25px;
}

.footer-distributed .footer-icons a{
display: inline-block;
width: 45px;
height: 35px;
cursor: pointer;
background-color:  #33383b;
border-radius: 2px;
font-size: 20px;
color: #ffffff;
text-align: center;
line-height: 35px;
margin: 0;
}

.footer-distributed .footer-icons a:hover{
transform: scale(1.3);
background-color: red;
}

.footer-bottom {
background-color: #333;
padding: 10px;
}

.footer-bottom p {
text-align: center;
color: white;
font-weight: bold;
font-size: 22px;
}

.footer-bottom .footer-content a {
color: white;
}

.footer-bottom .footer-content a:hover{
color: red;
}

@media (max-width: 880px) {
  .footer-distributed {
	  font: bold 14px sans-serif;
	}

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right {
	  display: block;
	  width: 100%;
	  margin-bottom: 40px;
	  text-align: center;
	}

  .footer-distributed .footer-center .heading {
	  margin: 0% 0% 0% 2.5%;
	}

    .footer-distributed .footer-center a {
        margin: -5% 50% 0 44%;
        text-align: center;

    }
}

@media (max-width: 650px) {
    .footer-distributed {
        margin-top: 40%;
    }
}

@media (max-width: 450px) {
    .footer-distributed {
        margin-top:   0%;
    }
}
</style>
</head>
<body>
<?php	
$servername = "localhost:3306";
$username = "root";
$password = "";
$db = "bank";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

$sql = $conn -> query("select * from customer ");
?>
<section class="page-header">
    <div class="header">
        <div class="header-left"> 
            <img src="images/logo.png"  class="header-left-logo">
        </div>    
        <div id="header-right" class="header-right">
          <a href="index.html" class="header-right-links">
            <i class="fas fa-home"></i>
          </a>
          <a href="about.html" class="header-right-links">
            Contact
          </a>
          <a href="contact.html" class="header-right-links">Contact</a>
        </div>
        <a href="javascript:void(0);" class="header-right-icon" onclick="ResponsiveFunction()"><i class="fa fa-bars"></i></a>
        <a href="javascript:void(0);" class="header-right-close-icon" id="closeIcon" onclick="ResponsiveFunction()"><i class="fa fa-close"></i></a>
    </div>
    <div class="fixed-header" id="fixed-header">
        <a href="customers.php" class="fixed-header-links"><i class="fas fa-user"> Customers</i></a>
  
    </div>
</section>
 
<!--Script for header-->
<script>
function ResponsiveFunction()
{  
    var nav = document.getElementById("header-right");
    var closeIcon = document.getElementById("closeIcon");
      
    if (nav.className === "header-right")
    {
        nav.className += " Responsive-SlideDown";
        closeIcon.style.opacity = "1";
    }
    else
    {
        nav.className = "header-right";
        closeIcon.style.opacity = "0";
    }
}       
</script>  
<!--End of Script for header-->
    
<!---Start of sticky header script-->
<script>
window.onscroll = function() {myFunction()};
    var header = document.getElementById("fixed-header");
    var sticky = header.offsetTop;
    
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky-fixed-header");
        }
        else
        {
            header.classList.remove("sticky-fixed-header");
        }
    }
</script>
<!---End of sticky Header-->

<section class="list-customer">
<h1 style="text-align: center; font-size: 40px;">List of All Customers</h1>    


<div >
<?php
// output data of each row
  while($row = $sql->fetch_assoc()) {



echo "<div class='customer-".$row["id"]."'>";
  echo  "<img src='images/—Pngtree—user vector avatar_4830521.png' alt='Male Avatar' class='card-image' >";
  echo  " <div class='container'>";
		
           echo" <h2  ><b style=\"color: white;\">".$row["name"]."</b></h2>";
            echo "<button class='details-button' onclick='openDetailsModal(&quot;".$row["id"]."&quot;,&quot;".$row["Balance"]."&quot;)'><span class='details-button-span'>Details </span></button>"; 
            echo"<button class='transact-details-button' onclick='transferDetaislModal(&quot;".$row["id"]."&quot;,&quot;".$row["Balance"]."&quot;,&quot;".$row["name"]."&quot;,&quot;".$row["Email"]."&quot;)'><span class='transact-details-button-span'>Transact </span></button>";
            echo "<div class='details-customer-".$row["id"]."' id='details-customer-".$row["id"]."'>";
                echo "<div class='details-customer-".$row["id"]."-content'>";
                    echo    " <span class='close' onclick='closeDetailsModal(&quot;".$row["id"]."&quot;)'>&times;</span>";
                    echo    " <p style=\"color: white;\">Name:- <span>".$row["name"]."</span></p>";
                    echo   "<p style=\"color: white;\">Email:- <span>".$row["Email"]."</span></p>";
                    echo    "<p style=\"color: white;\">Phone-Number:- <span>".$row["Phone_Number"]."</span></p>";
                    echo     "<p style=\"color: white;\">Current Balance:- <span id='".$row["name"]."'><i class=\"fas fa-dollar-sign\"></i>".$row["Balance"]."</span></p>";

                    echo   "<button class='transact-button' onclick='transferDetaislModal(&quot;".$row["id"]."&quot;,&quot;".$row["Balance"]."&quot;,&quot;".$row["name"]."&quot;,&quot;".$row["Email"]."&quot;)'>Transact</button>";
                    echo " <button class='passbook-button' onclick='viewPassBook(&quot;".$row["name"]."&quot;);';>View PassBook</button>";
             echo "</div>"; 
          echo " </div> "; 
     echo "</div>";
echo "</div>";
  }
?>

</div>



</section>
<br>
<br>
<br>
<script>



function viewPassBook(userName){
window.location="viewPassBook.php?userName="+userName;

}

function openDetailsModal(val,balance)
{
	//alert("now: "+val);
		
	common(val,balance);
    document.getElementById("details-customer-"+val).style.display= "block";
}

function common(val,balance){
sessionStorage.setItem("Cb Dummy - "+val, balance);

}
  
function closeDetailsModal(val)
{
    document.getElementById("details-customer-"+val).style.display= "none";
}



function transferDetaislModal(val,balance,nameME,Email)
{
	common(val,balance);
	//alert("called : "+"Dummy - "+val+" "+balance+" name: "+nameME+" Email"+Email);
	sessionStorage.setItem("name", nameME);
	sessionStorage.setItem("balance", balance);
	sessionStorage.setItem("email", Email);
	window.location="transaction.php";
	//alert("later");
	
	
}

</script>

<section class="page-footer">
  <footer class="footer-distributed">
      <div class="footer-left" style="color: white;">
          <h2 style="color: white;"><span>TSF</span>-Bank</h2>
          <img src="images/logo.png">
          <p class="footer-links" style="color: white;">
              <a href="index.html">Home</a>
              ·
              <a href="about.html">About</a>
              ·
              <a href="contact.html">Contact</a>
          </p>
    </div>

    <div class="footer-center" >
      <p class="heading" style="color: white;">Quick Links</p>
      <a href="customers.php" style="color: white;">Customers</a>

    </div>

    <div class="footer-right">
        <p class="footer-company-about" style="color:white">
          <span style="color: white;">About the organization</span>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam odit libero temporibus voluptate vitae ipsam laboriosam at, 
        animi possimus, suscipit, fuga quod ab similique esse enim. Obcaecati nobis beatae architecto!
        </p>

        <div class="footer-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
        </div>
    </div>
  </footer>

  <div class="footer-bottom">
      <p class="footer-content">Developed with <i class="fa fa-heart" style="color: red;"></i> by <a href="devloper.html">Zakariae ESSAIYDY</a></p>
  </div>
</section>
</body>
</html> 
