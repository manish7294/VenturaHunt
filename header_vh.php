<?php
error_reporting(0);
include('config.php');
include('popup-contactform.php');
try{
	session_start();
}
catch(Exception $e)
{
	
}

if (!isset($_SESSION['username'])) {
	header("location: index.php");
}
$username=$_SESSION['username'];

$result = mysql_query("select * from login where username='$username'");
$result2 = mysql_query("select * from profile where username='$username'");
$user = mysql_fetch_assoc($result);
$userscore = mysql_fetch_assoc($result2);
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <title><?php echo $title; ?></title>
    <meta name="description" content="VenturaHunt is a online treasure hunt event of techfest of IIT(ISM) DHANBAD , Concetto.">
	<meta name="keywords" content="treasure hunt, concetto,IIT(ISM) dhanbad, Techfest, ISM Dhanbad,VenturaHunt, IIT Dhanbad, Ventura Hunt,Game,Contest">
    <meta name="viewport" content="width=device-width">
<!-- stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">-->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/sl-slide.css">
	<link rel="stylesheet" href="assets/css/logo.css">
	<link rel="stylesheet" href="assets/css/material.css">
<link rel="stylesheet" href="assets/css/popup-contact.css">
    <script src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
 <link rel="stylesheet" href="assets/css/TimeCircles.css">
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 		
   
    <!-- fav and touch icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/ico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/ico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/ico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/ico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/ico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/ico/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/ico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/ico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/ico/favicon-16x16.png">
<link href="https://fonts.googleapis.com/css?family=Abel|PT+Serif|Slabo+27px" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Cinzel|Dancing+Script|Josefin+Slab:600" rel="stylesheet"> 
<script src="https://use.fontawesome.com/759b0dfb0d.js"></script>

<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/ico/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
	<style>
	@media (max-width: 800px) {
  main {
    flex-direction: column;
  }
}
	</style>

	 <style type="text/css">


	.caption-style-1{
		list-style-type: none;
		margin: 0px;
		padding: 0px;
		
	}

	.caption-style-1 li{
		float: left;
		padding: 0px;
		position: relative;
		overflow: hidden;
	}

	.caption-style-1 li:hover .caption{
		opacity: 1;

	}

	.caption-style-1 img{
		margin: 0px;
		padding: 0px;
		float: left;
		z-index: 4;
	}


	.caption-style-1 .caption{
		cursor: pointer;
		position: absolute;
		opacity: 0;
		-webkit-transition:all 0.45s ease-in-out;
		-moz-transition:all 0.45s ease-in-out;
		-o-transition:all 0.45s ease-in-out;
		-ms-transition:all 0.45s ease-in-out;
		transition:all 0.45s ease-in-out;

	}
	.caption-style-1 .blur{
		background-color: rgba(0,0,0,0.65);
		height: 160px;
		width: 160px;
		-moz-border-radius: 80px; -webkit-border-radius: 80px; border-radius: 80px;
		z-index: 5;
		position: absolute;
	}

	.caption-style-1 .caption-text h1{
		text-transform: uppercase;
		font-size: 24px;
	}
	.caption-style-1 .caption-text{
		z-index: 10;
		color: #fff;
		position: absolute;
		width: 180px;
		height: 180px;
		text-align: center;
		top:60px;
	}

	/** Nav Menu */
	ul.nav-menu{
		padding: 0px;
		margin: 0px;
		list-style-type: none;
		
		margin: 0px auto;
	}

	ul.nav-menu li{
		display: inline;
		margin-right: 10px;
		padding:10px;
		border: 1px solid #ddd;
	}

	ul.nav-menu li a{
		color: #eee;
		text-decoration: none;
		text-transform: uppercase;
	}

	ul.nav-menu li a:hover, ul.nav-menu li a.active{
		color: #2c3e50;
	} 

	/** content **/
	.content{
		margin-top: 10px;
		margin-left: 10px;
		width: 0px;
	}
	.content h1, .content h2{
		font-family: "Source Sans Pro",sans-serif;
		color: #ecf0f1;
		padding: 0px;
		margin: 0px;
		font-weight: normal;
	}

	.content h1{
		font-weight: 900;
		font-size: 64px;
	}

	.content h2{
		font-size:26px;
	}

	.content p{
		color: #ecf0f1;
		font-family: "Lato";
		line-height: 28px;
		font-size: 15px;
		padding-top: 50px;
	}

	p.credit{
		padding-top: 10px;
		font-size: 12px;
	}

	p a{
		color: #ecf0f1;
	}



	</style>
</head>

<body  onload="javascript:fg_hideform('fg_formContainer','fg_backgroundpopup');">

    <!--Header navbar-->

    <nav class="navbar navbar-inverse navbar-fixed-top  " >
	    <div class="navbar-inner ">
			<a class="navbar-brand  router-link-active" href="">
                                <div class="cd-logo header-footer-sprite" style="height:90px; width:120px;"><img src="images/logo.png" class="img-rounded img-responsive" style="margin-top:5px;width:110px;
	height:90px;"/></div>
                            </a>
            <div class="container" style="margin-top:-100px;">
			
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                
				
                <div class="nav-collapse collapse pull-right" style="font-family: 'Abel', sans-serif; font-size:15px;">
                    <ul class="nav" >
                        <li class="active" style="padding:8px; font-weight:bold;" ><a href="index.php"> <i class="fa fa-home"></i></a></li>
                       <li  style="padding:8px; font-weight:bold;"><a data-toggle="modal" href="#notification"  id=""> <i class="fa fa-bell"></i></a></li>
                        
                        <li  style="padding:8px; font-weight:bold;"><a href="#"> <i class="fa fa-bar-chart"></i></a></li>
                        <li class="dropdown"  style="padding:8px; font-weight:;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Help <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="faq.php">FAQ</a></li>
								 <li class="divider"></li>
								<li><a href="logout.php"><i class="icon-off"></i> Logout</a></li>
								<li class="divider"></li>
								<li><a href='javascript:fg_popup_form("fg_formContainer","fg_form_InnerContainer","fg_backgroundpopup");'
>Contact Us</a></li>
                                <li class="divider"></li>
								<li><a data-toggle="modal" href="#guideline">Guidelines</a></li>
                                <li><a data-toggle="modal" href="#privacy">Privacy Policy</a></li>
                               
                            </ul>
                        </li>
						  <li class="dropdown"    >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" style="padding:17px;" aria-expanded="false">
				<i class="fa fa-user" style="font-weight:bold; "></i></a>
             <ul class="dropdown-menu center " >
			  <li style="color:black;">Hi<span style="font-weight:bold ;color:black;"> <?php echo $user['username']; ?></span></li>
			  <li  style="padding:8px; color:black;">Score <span style="font-weight:bold ;color:black;"><?php echo $userscore['round1']; ?></span></li>     
			  <div class="divider"></div>
                <li><a href="logout.php"><i class="icon-off"></i> Logout</a></li>
              </ul>
            </li>
                 
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </nav>
    <!-- /header -->