<?php
 include_once 'config.php';
 include('popup-contactform.php');
 ob_start();
 session_start();
if(isset($_SESSION['username'])) {
			header("location: home.php");
		}


 $error = false;

if(isset($_SESSION['hash']))
		{
			
			 $hash=$_SESSION['hash'];
	
		}

 if ( isset($_POST['btn-signup']) ) {
  
  // clean user inputs to prevent sql injections
  
  
 $hash = trim($hash);
  $hash = strip_tags($hash);
  $hash = htmlspecialchars($hash);
 
  $password = trim($_POST['password']);
  $password = strip_tags($password);
  $password = htmlspecialchars($password);
  

  
  // password validation
  if (empty($password)){
   $error = true;
   $passwordError = "Please enter password.";
  } else if(strlen($password) < 6) {
   $error = true;
   $passwordError = "Password must have atleast 6 characters.";
  }
  
 
  
  // if there's no error, continue to signup
  if( !$error ) {
	
   $password = hash('sha256', $password); // password hashing using SHA256
 $res1 = mysql_query("update login set password='$password' where hash='$hash' "); 
  
    
   if ($res1) {
    $errTyp = "success";
   
	
	$to      = $email; // Send email to our user
$subject = 'Password Successfully Changed'; // Give the email a subject 
$message =  '
<html><body style="background-color:#f1f1f1;">

<h2 style=" border-radius:2px;margin-top:6%;text-align:center; color:#191970;margin-bottom:-1.2%; padding-bottom:5px;padding-top:5px;background-color:#6495ED;margin-left:20%;margin-right:20%;">VenturaHunt</h2>
<div style="background-color:#98FB98; margin-left:20%;margin-right:20%; border-radius:4px;">

<p style="font-family: \'Abel\', sans-serif;font-size:15px;background-color:#98FB98; margin-left:2%;margin-right:2%; padding-left:1.6%;">
Your Password has been successfully updated</br></p>
<p style="font-family: \'Abel\', sans-serif;font-size:15px; background-color:#98FB98; margin-left:2%;margin-right:2%; padding-left:1.6%;">
Press the button below to go to VenturaHunt.</br></br></p>
<p style="font-family: \'Abel\', sans-serif;font-size:15px; border-radius:2px; background-color:#98FB98; margin-left:2%;margin-right:2%; padding-left:1.6%;">
<a href="http://www.venturahunt.com/" style="margin-left:35%;  padding: 4px 10px;background: #6495ED; border: solid 1px #20538D; text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);  text-decoration: none;color: #FFF; border-radius:4px;">Confirm Your Account</a></br></br>
</p>
<p style="font-family: \'Abel\', sans-serif;font-size:15px;  background-color:#98FB98; margin-left:2%;margin-right:2%; padding-left:1.6%;">
Or, just open this link to go to VentuaHunt :</br></p>
<p style="font-family: \'Abel\', sans-serif;font-size:15px;  background-color:#98FB98; margin-left:2%;margin-right:2%; padding-left:1.6%;">
http://www.venturahunt.com
</p>
<p style="padding-bottom:3px; font-family: \'Abel\', sans-serif;font-size:15px;  background-color:#98FB98;padding-left:1.6%; margin-left:2%;margin-right:2%;"></br></br>Regards,</br></p>
<p style="font-family: \'Abel\', sans-serif;font-size:15px;  background-color:#98FB98; margin-left:2%;margin-right:2%; padding-left:1.6%;">
Team VenturaHunt - Concetto 2k16</br></p></div>
<p style="margin-top:2%;background-color:#F5DEB3; border-radius:2px;padding-left:1.6%; font-family: \'Abel\', sans-serif;font-size:12px;  margin-left:20%;margin-right:20%;">
Please contact us if you did not requested for password change. </p>
</body></html>
'; // Our message above including the link
             
$headers = 'From:no-reply@venturahunt.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email
	
	
	
	 $errMSG = "Password Successfully Updated";
	unset($_SESSION['hash']);
	session_destroy();
  
    unset($password);
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later..."; 
   } 
    
  }
  
  
 }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Password Change</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">

  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/sl-slide.css">
  <link rel="stylesheet" href="assets/css/logo.css">

  <script src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script> function enableBtn(){
    document.getElementById("submit").disabled = false;
   }</script>
  <!-- Le fav and touch icons -->
  <link rel="shortcut icon" href="images/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
  <script src="https://use.fontawesome.com/759b0dfb0d.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Abel|PT+Serif|Slabo+27px" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cinzel|Dancing+Script|Josefin+Slab:600" rel="stylesheet"> 
  <link rel="stylesheet" href="assets/css/popup-contact.css">
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
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body onload="javascript:fg_hideform('fg_formContainer','fg_backgroundpopup');">
 <!--Header navbar-->

    <nav class="navbar navbar-inverse navbar-fixed-top  " >
	    <div class="navbar-inner ">
			<a class="navbar-brand  router-link-active" href="">
                                <div class="cd-logo header-footer-sprite"  style="height:90px; width:120px;">	<img src="images/logo.png" class="img-rounded img-responsive" style="margin-top:5px;width:120px;
	height:90px;"/></div>
                            </a>
            <div class="container" style="margin-top:-98px;">
			
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                
				
                <div class="nav-collapse collapse pull-right" style="font-family: 'Abel', sans-serif;font-size:15px; ">
                    <ul class="nav">
                        <li class="active" style="padding:8px; font-weight:;"><a href="index.php"><i class="fa fa-home "></i></a></li>
                        <li  style="padding:8px; font-weight:bold;"><a data-toggle="modal" href="#notification"  ><i class="fa fa-bell"></i></a></li>
                       
                        <li  style="padding:8px; font-weight:;"><a data-toggle="modal" href="#guideline" >Guidelines</a></li>
                        <li class="dropdown"  style="padding:8px; font-weight:;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Help <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                               
								
								<li><a href="index.php">Login</a></li>
                                <li><a href="register.php">Sign Up</a></li>
								 <li class="divider"></li>
								<li><a  href='javascript:fg_popup_form("fg_formContainer","fg_form_InnerContainer","fg_backgroundpopup");'
>Contact Us</a></li>
                                <li class="divider"></li>
                                <li><a data-toggle="modal" href="#privacy">Privacy Policy</a></li>
                               
                            </ul>
                        </li>
                        
                        <li class="login"  style="padding:8px; font-weight:bold;">
                            <a data-toggle="modal" href="#loginForm"><i class="fa fa-sign-in"></i></a>
                        </li>
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </nav>
    <!-- /header -->
	 <section class="title" style="margin-top:37px;">
    <div class="container">
      <div class="row-fluid">
        <div class="span6">
          <h1>Password Change</h1>
        </div>
        <div class="span6">
          <ul class="breadcrumb pull-right">
            <li><a href="index.php">Login</a> <span class="divider">/</span></li>
         
            <li class="active">Password Change</li>
          </ul>
        </div>
      </div>
    </div>
  </section>


<div class="container">
 
 <div id="login-form">
    <form method="post"  class="center" action="passchange.php" autocomplete="off">
    
     <div class="col-md-12">
         <div class="form-group">
             <hr />
            </div>
            
            <?php
   if ( isset($errMSG) ) {
    
    ?>
    <div class="form-group">
             <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
          <i class="icon-info-sign"></i>  <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   ?>
	
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key fa-2x"></i></span>
             <input type="password" name="password" class="form-control"  style="width:300px;" placeholder="Enter Password" id="password" maxlength="15" required />
                </div>
               <?php if(isset($passwordError))  { ?>
		  	<span class="alert-box alert"><?php echo $passwordError ?></span>
		  	<?php } ?>
            </div>
			 <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-check fa-2x"></i></span>
             <input type="password"  class="form-control" style="width:300px;"placeholder="Re-Enter Password" maxlength="15" id="confirm_password" required />
                </div>
               <?php if(isset($passwordError))  { ?>
		  	<span class="alert-box alert"><?php echo $passwordError ?></span>
		  	<?php } ?>
            </div>
			
             <div style="margin-left:440px;" class="g-recaptcha " data-sitekey="6LdviQcUAAAAANyRFw-SG2jThZI7axX-NOXp1P54" data-callback="enableBtn"></div> 
            <div class="form-group">
             <hr/>
            </div>
              <div class="control-group">
          <!-- Button -->
             <button type="submit" class="btn btn-success btn-large btn-block-inline" maxlength="50" id="submit" name="btn-signup" disabled>Submit</button>
            </div>
          
            <div class="form-group">
             <hr />
            </div>
              
            
        
        </div>
   
    </form>
    </div> 
	

</div>
<!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid"style="font-family: 'Abel', serif;; font-size:14px;" >

            <!--Contact Form-->
              <div class="span4">
                <h4 style="margin-left:0px;">ADDRESS</h4>
               <ul class="unstyled address">
                    <li>
                        <i class="fa fa-home"></i><strong>Address:</strong> Indian Institute of Technology (ISM) Dhanbad<br>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <strong>Email: </strong> support@venturahunt.com
                    </li>
                    <li>
                        <i class="fa fa-globe"></i>
                        <strong>Website:</strong> www.venturahunt.com
                    </li>
                   
					</ul>
            </div>
            <!--End Contact Form-->

            <!--Important Links-->
                       <div id="tweets" class="span3">
                <h4>MENU</h4>
                <div>
                    <ul class="arrow">
					     <li><a href="home.php">Home</a></li>
                        <li><a href='javascript:fg_popup_form("fg_formContainer","fg_form_InnerContainer","fg_backgroundpopup");'
>Support</a></li>
                        <li><a data-toggle="modal" href="#guideline">Guidelines</a></li>
						   <li><a data-toggle="modal" href="#notification">Notifications</a></li>
                        <li><a data-toggle="modal" href="#privacy">Privacy Policy</a></li>
               

                    </ul>
                </div>  
            </div>
            <!--Important Links-->

            <!--Archives-->
            <div id="archives" class="span5 ">
                <div class="span6">
                    <ul class="arrow">
					    <h4> <a data-toggle="modal" href="#coordinators1" style="color:white;">Coordinator</a></h4>
						   <li>Parardha Kumar</li></br></ul></div>
						<div class="span6">   <ul class="arrow">
						 <h4> <a data-toggle="modal" href="#coordinators" style="color:white;">Organizers</a></h4>
						 
                        <li>Manish Kumar</li>
                        <li>Ayush Tiwari</li>
                        <li>Karra Anand </li>
                        <li>Siddharth Mishra</li>
                        <li>Shantanu Patil</li>  
                    </ul>
                </div>
            </div>
            <!--End Archives-->

      

    </div>
    <!--/row-fluid-->
</div>
<!--/container-->

</section>
<!--/bottom-->

<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
             <div class="span5 cp"style="font-family: 'Josefin Slab', serif;; font-size:15px;" >
                &copy; 2016 <a target="_blank" href="#" title="Techfest IIT(ISM) DHANBAD">Concetto</a>. All Rights Reserved. <h6>Site designed and maintained by <a data-toggle="modal" href="#manish">Manish Kumar</a></h6>
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a target="blank" href="https://www.facebook.com/venturahunt/?ref=ts&fref=ts"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>                       
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>                        
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>                   
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="fa fa-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->


<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove"style=" background-color:#FF6347;" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="login.php" method="post" id="btn-login">
		 
            <input type="text" name="username" class="input-small" placeholder="Username" required>
			
            <input type="password" name="password" class="input-small" placeholder="Password"required>
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->
  <!--coordi -->
 <div class="center">
<div class="modal hide fade in " id="coordinators" aria-hidden="false" >
    <div class="modal-header">
        <i class="icon icon-remove" style=" background-color:#FF6347;" data-dismiss="modal" aria-hidden="true"></i>
        <h3  class="center" >Coordinators</h3>
    </div>
    <!--Modal Body-->
	
    <div class="modal-body well "style="width:auto; height:350px; " >
	<div class="container-a1  center">
		<ul class="caption-style-1 ">
		<li>
<img src="coordinatorsimages/manish.jpg" class="img-circle"style="height:120px;padding:20px; margin-right:10px; " />
<div class="caption"> <a href="https://www.facebook.com/profile.php?viewas=100000686899395&privacy_source=timeline_gear_menu" target="blank">
					<div class="blur"></div>
					<div class="caption-text " style="margin-left:-10px;">
						<h1>Manish</h1>
						
					</div>
				</div></a>
			</li>
			
		
		<li>
  <img src="coordinatorsimages/ayush.jpg" class="img-circle"  style="height:120px;padding:20px;"/>
<div class="caption"> <a href="https://www.facebook.com/ayush.tiwari.11?fref=ts" target="blank">
					<div class="blur"></div>
					<div class="caption-text center" style="margin-left:-10px;">
						<h1 >Ayush</h1>

					</div>
				</div></a>
			</li>
			
		
		<li>
   <img src="coordinatorsimages/siddharth.jpg" class="img-circle" style="height:120px;padding:20px;"/>
<div class="caption"><a href="https://www.facebook.com/siddharth.mishra.31149?fref=ts" target="blank">
					<div class="blur"></div>
					<div class="caption-text center" style="margin-left:-10px;">
						<h1>Siddharth</h1>
						
					</div>
				</div></a>
			</li>
			
			
		
		<li style="margin-left:60px;">
		
  <img src="coordinatorsimages/shubhangi.jpg" class="img-circle"  style="height:120px;padding:20px;"/>
<div class="caption">
					<a href="https://www.facebook.com/shubhangi.bharti?fref=ts" target="blank"><div class="blur"></div>
					<div class="caption-text center" style="margin-left:-10px;">
						<h1>Shubhangi</h1>
						
					</div></a>
				</div>
			</li>
			
			
		<li class="" style="margin-left:50px;; margin-right:auto;">
 <img src="coordinatorsimages/karra.jpg" class="img-circle" style="height:120px; padding:20px;"/>
<div class="caption">
<a href="https://www.facebook.com/profile.php?id=100002797075822&fref=ts" target="blank">
					<div class="blur"></div>
					<div class="caption-text center" style="margin-left:-10px;">
						<h1>Ananad</h1>	
					</div>
				</div></a>
			</li>
			</ul></div>

 
  
	


    </div>
    <!--/Modal Body-->
</div>
</div>

<div class="modal hide fade in" id="guideline" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" style=" background-color:#FF6347;" data-dismiss="modal" aria-hidden="true"></i>
        <h3 style="margin-left:150px; " class="" >Guidelines</h3>
    </div>
    <!--Modal Body-->
	 <div class="span4"></div>
    <div class="modal-body well span4">
  <div >
					<a href="#">

								<div class="well" style="font-family: 'Josefin Slab', serif; font-size:15px;">
								Ventura Hunt is an online cryptic hunt game. Participants will be provided with a picture which they

will have to decipher using deductive skills and adroit reasoning. Answer to these questions can be

based on movies, books, famous quotes, location, different languages important events and more.

 A question will test your ability to decipher a very simple message hidden

somewhere in the picture plus you will need to search properly. Remember Search

Engines are your guns for this intellectual war. Also, you will be provided with

hints which will ultimately get you on the right path.</br></br>
Exampli Gratia.
</br></br>
<img src="images/example.png"/></br></br>
What do you see in the picture?</br>
<i class="fa fa-angle-right"></i> A thermometer</br>
<i class="fa fa-angle-right"></i> A tank</br>
<i class="fa fa-angle-right"></i> A banner of SALE written on it</br></br></br>

So how do we solve it?</br></br>
<i class="fa fa-hand-o-right"></i> Letâ€™s try them all out in the answer box. It says wrong answer.</br></br>
<i class="fa fa-hand-o-right"></i> Searching the â€œthermometer tank saleâ€ on google does not land us anywhere conclusive</br></br>
<i class="fa fa-hand-o-right"></i> Letâ€™s take them two at a time. In this case googling for â€œtanksaleâ€ lands us on some LinkedIn id and a wiki page of Shivani Tanksale, a well-known face on TV serials and movies. Trying both them out also gives us wrong answer.</br></br>
<i class="fa fa-hand-o-right"></i> Looking for hints we go on to check the page source where we find a comment - <seek for a â€œconsortâ€>. Googling the whole thing doesnâ€™t do us any good but just consort lands you with the meaning of the word â€“ wife, husband or companion.</br></br>
<i class="fa fa-hand-o-right"></i> We search for the partners of both of the personalities we found above. Luckily we find out that spouse of Shivani Tanksale is Sumeet Vyas, a famous actor from the exciting series â€œPermanent Roommatesâ€ and â€œTriplingâ€ by TVF.  We know we are on the right track as even TVFâ€™s logo also has a thermometer in it. We try each one of the out.</br> </br>
<i class="fa fa-hand-o-right"></i> Finally writing â€œtheviralfeverâ€ in the answer box gives us the correct answer message</br></br>
In case you think that above mentioned steps are too complicated and illusive. You will be getting a number of hints for questions to guide you on the right track. Have fun hunting!!!</br></br>
</div>
					</a>
					
					
					
					</div>
				
    </div>
    <!--/Modal Body-->
</div>
<!--  Notification -->
<div class="modal hide fade in" id="notification" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" style=" background-color:#FF6347;"data-dismiss="modal" aria-hidden="true"></i>
        <h3 style="margin-left:150px; " class="" >Notifications</h3>
    </div>
    <!--Modal Body-->
	 <div class="span4"></div>
    <div class="modal-body well span4">
     <?php
  $notifications = mysql_query('select * from notifications');
?>
<!-- Leaderboard Page Contents -->
<div class="row " style="margin-left:10px;"id="leaderboardContent">
<div class="ten column centered">	
	<table class="twelve">
  <thead>
    <tr class="title" >
      <th>Date</th>
	    <th class="pull-left" style="margin-left:-20px;">|</th>
      <th class="pull-left">Notification</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = mysql_fetch_assoc($notifications)) { ?>
    <tr>
      <td style="width: 7em;"><?php echo $row['date'] ?></td>
      <td><?php echo $row['notification'] ?></td>
    </tr>
    <?php } ?>
    
  </tbody>
</table>
</div>

</div>

    </div>
    <!--/Modal Body-->
</div>
<!--  /Notification -->

<!--  /coordi -->
<div class="modal hide fade in" id="privacy" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" style=" background-color:#FF6347;" data-dismiss="modal" aria-hidden="true"></i>
        <h3 style="margin-left:150px; " class="" >Privacy Policy</h3>
    </div>
    <!--Modal Body-->
	 <div class="span4"></div>
    <div class="modal-body well span4">
  <div style="font-family: 'Abel', sans-serif; font-size:15px;">
					<a href="#">

						<div class="well">
							<h3>What information do we collect?</h3>
							We collect information from you when you register on our website. You may, however, visit our site anonymously.
						</div>
					</a>
					
					<a target="" href="#">
					
						<div class="well">
							<h3>What do we use your information for?</h3>
							Any of the information we collect from you may be used in one of the following ways:</br></br>
     <p><i class="fa fa-hand-o-right"></i> To personalize your experience</p>
 Your information helps us to respond better to your individual needs and to crete competitive atmosphere using leaderboard. </br></br>
 <p><i class="fa fa-hand-o-right"></i> To improve our website</p>
We continuously strive to improve our website offerings based on the information and feedback we receive from you.</br></br>
 <p><i class="fa fa-hand-o-right"></i> To process transactions</p>
 Your information, whether public or private, will not be sold, exchanged, transferred, or given to any other company for any reason whatsoever, without your consent, other than for the express purpose of delivering the purchased product or service requested.</br></br>
 <p><i class="fa fa-hand-o-right"></i> To administer a contest, promotion. </p>
The email address provided may be used to give you the latest details/updates about the events being conducted.</br>

						</div>
					</a>
						<a  href="#">
						
						<div class="well">
							<h3></h3>
							<i class="fa fa-hand-o-right"></i>  If at any time you would like to unsubscribe from receiving any future emails, you can do this by just  sending us an email at support@venturahunt.com to unsubscribe from the periodic mails.
						</div>
					</a>
					<a  href="#">
						
						<div class="well">
							<h3>How do we protect your information?</h3>
							We implement security measures to maintain the safety of your personal information( email addresss and phone number) .
						</div>
					</a>
					<a  href="#">
						
						<div class="well">
							<h3>Do we disclose any information to outside parties?</h3>
							We do not sell, trade, or otherwise, transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.
						</div>
					</a>
					<a  href="#">
						
						<div class="well">
							<h3>Third party links</h3>
							Occasionally, at our discretion, we may include or offer third party products or services on our website. These third party sites have separate and independent privacy policies. We, therefore, have no responsibility or liability for the content and activities of these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any feedback about these sites.
						</div>
					</a>
					<a  href="#">
						
						<div class="well">
							<h3>Online Privacy Policy Only</h3>
							This online privacy policy applies only to information collected through our website and not to information collected offline.
						</div>
					</a>
							<a  href="#">
						<div class="well">
							<h3>Your Consent</h3>
							By registering on our site, you consent to our online privacy policy.
						</div>
					</a>
							<a  href="#">
						<div class="well">
							<h3>Changes to our Privacy Policy</h3>
							Any changes to change our privacy policy in future, we will mentioned those changes on this page.
						</div>
					</a>
					</div>
				
    </div>
    <!--/Modal Body-->
</div>
<div class="center">
<div class="modal hide fade in " id="coordinators1" style="background-color:transparent; border-radius:150px;width:20%;margin-left:-8%;" aria-hidden="false" >
    <div class="modal-header">
       
        <h3  class="center" ></h3>
    </div>
    <!--Modal Body-->
	
    <div class="modal-body well center" style="width:auto; height:auto;background-color:transparent;margin-left:15%; border:0px ;" >
	<div class="container-a1  center">
		<ul class="caption-style-1 ">
	
		<li>
<img src="coordinatorsimages/parardha.jpg" class="img-circle"style="height:120px;padding:20px; margin-right:10px; " />
<div class="caption"> <a href="https://www.facebook.com/parardha.kumar.7?ref=ts&fref=ts" target="blank">
					<div class="blur"></div>
					<div class="caption-text " style="margin-left:-10px;">
						<h1>Parardha</h1>
						
					</div>
				</div></a>
			</li>
			</ul></div>

    </div>
    <!--/Modal Body-->
</div>
</div>

<div class="center">
<div class="modal hide fade in " id="manish" style="background-color:transparent; border-radius:47%;width:20%;margin-left:-8%;" aria-hidden="false" >
    <div class="modal-header">
       
        <h3  class="center" ></h3>
    </div>
    <!--Modal Body-->
	
    <div class="modal-body well center" style="width:auto; height:auto;background-color:transparent;margin-left:15%;margin-right:10%; border:0px ;" >
	<div class="container-a1  center">
		<ul class="caption-style-1 ">
	
		<li>
<img src="coordinatorsimages/manish.jpg" class="img-circle"style="height:120px;padding:20px; margin-right:10px; " />
<div class="caption"> <a href="https://www.facebook.com/profile.php?viewas=100000686899395&privacy_source=timeline_gear_menu" target="blank">
					<div class="blur"></div>
					<div class="caption-text " style="margin-left:-10px;">
						<h1>Manish</h1>
						
					</div>
				</div></a>
			</li>
			</ul></div>

    </div>
    <!--/Modal Body-->
</div>
</div>
<script src="assets/js/vendor/jquery-1.9.1.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>

  <SCRIPT TYPE="text/javascript"> 
    <!-- 
    //Disable right click script 
    var message="Sorry, right-click has been disabled"; 
    /////////////////////////////////// 
    function clickIE() {if (document.all) {(message);return false;}} 
    function clickNS(e) {if 
    (document.layers||(document.getElementById&&!document.all)) { 
    if (e.which==2||e.which==3) {(message);return false;}}} 
    if (document.layers) 
    {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;} 
    else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;} 
    document.oncontextmenu=new Function("return false") 
    // --> 
  </SCRIPT> 
  
  <script type="text/javascript">
var LHCChatOptions = {};
LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500,domain:'localhost/t/'};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
po.src = '//localhost/lhc_web/index.php/chat/getstatus/(click)/internal/(position)/bottom_right/(ma)/br/(top)/350/(units)/pixels/(leaveamessage)/true?r='+referrer+'&l='+location;
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>

<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
<?php
	require_once('contactform-code.php'); ?>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84943216-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
<?php ob_end_flush(); ?>