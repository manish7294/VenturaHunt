<?php 

include('config.php'); 
 include('popup-contactform.php');
	error_reporting(0);
	try{
		session_start();
		if(isset($_SESSION['username'])) {
			header("location: home.php");
		}
	
	}
	catch(Exception $e)
	{
	}
	if(isset($_SESSION['loginerror']))
		{
			
			 $loginerror=$_SESSION['loginerror'];
			 unset($_SESSION['loginerror']);
	session_destroy();
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
    <title>VenturaHunt || HuntThePiece</title>
    <meta name="description" content="VenturaHunt is an online treasure hunt event of annual techfest of Indian Institute of Technology (ISM) DHANBAD, Concetto.">
	<meta name="keywords" content="VenturaHunt,Venturahunt Concetto,Venturahunt IIT DHANBAD,treasure hunt,online treasure hunt, Concetto,IIT(ISM) dhanbad, Techfest,Indian Institute of Technology Dhanbad, ISM Dhanbad,VenturaHunt, IIT Dhanbad, Ventura Hunt,Game,Contest">
    <meta name="viewport" content="width=device-width">
<!-- stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">

<script src="https://use.fontawesome.com/759b0dfb0d.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

<script>


	$(window).load(function() {
	
		$(".se-pre-con").fadeOut("slow");;
	});
	</script>
    <link rel="stylesheet" href="assets/css/main.css">
   <link rel="stylesheet" href="assets/css/sl-slide.css">
	<link rel="stylesheet" href="assets/css/logo.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|PT+Serif|Slabo+27px" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Cinzel|Dancing+Script|Josefin+Slab:600" rel="stylesheet"> 
    <script src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

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
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/ico/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  <!-- Custom Modernizr for Foundation -->
  <script src="javascripts/foundation/modernizr.foundation.js"></script>
 
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
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(images/pre.gif) center no-repeat #fff;

}

#cd-timeline {
  position: relative;
  padding: 2em 0;
  margin-top: 2em;
  margin-bottom: 2em;
}
#cd-timeline::before {
  /* this is the vertical line */
  content: '';
  position: absolute;
  top: 0;
  height: 100%;
  width: 4px;
  background: #d7e4ed;
  left: 50%;
  margin-left: -2px;
}
.cd-container::after {
  content: '';
  display: table;
  clear: both;
}
.cd-container {
  width: 90%;
  max-width: 1170px;
  margin: 0 auto;
}
.cd-timeline-block:first-child {
  margin-top: 0;
}
.cd-timeline-block {
  position: relative;
      margin: 4em 0;
}
.cd-timeline-content {
  margin-left: 0;
  padding: 1.6em;
  width: 42%;
  position: relative;
  background: white;
  border-radius: 0.25em;
  padding: 1em;
  box-shadow: 0 3px 0 #d7e4ed;
}
.cd-timeline-content .cd-date {
  position: absolute;
  width: 100%;
  left: 122%;
  top: 6px;
  font-size: 16px;
  font-size: 1rem;
}
.cd-timeline-block:nth-child(even) .cd-timeline-content .cd-date {
  left: auto;
  right: 122%;
  text-align: right;
}
.cd-timeline-block:nth-child(even) .cd-timeline-content {
  float: right;
}
.cd-timeline-block:after {
  content: "";
  display: table;
  clear: both;
}
.cd-timeline-img {
  width: 60px;
  height: 60px;
  left: 50%;
  margin-left: -30px;
  -webkit-transform: translateZ(0);
  -webkit-backface-visibility: hidden;
}
.cd-timeline-img {
  position: absolute;
  top: 0;
  border-radius: 50%;
  box-shadow: 0 0 0 4px white, inset 0 2px 0 rgba(0, 0, 0, 0.08), 0 3px 0 4px rgba(0, 0, 0, 0.05);
  background: #105a8b;
}
.cd-timeline-img img,.cd-timeline-img svg {
  display: block;
  width: 24px;
  height: 24px;
  position: relative;
  left: 50%;
  top: 50%;
  margin-left: -12px;
  margin-top: -12px;
  vertical-align: middle;
}
.cssanimations .cd-timeline-img.is-hidden,.cssanimations .cd-timeline-content.is-hidden {
  visibility: hidden;
}
.cssanimations .cd-timeline-img.bounce-in,.cssanimations .cd-timeline-content.bounce-in {
  visibility: visible;
  animation: cd-bounce-1 0.6s;
}
 
@keyframes cd-bounce-1 {
  0% {
    opacity: 0;
    transform: scale(0.5);
  }
 
  60% {
    opacity: 1;
    transform: scale(1.2);
  }
 
  100% {
    transform: scale(1);
  }
}



	</style>
	<link rel="stylesheet" href="assets/css/popup-contact.css">
</head>

<body  onload="javascript:fg_hideform('fg_formContainer','fg_backgroundpopup');">
    <div class="se-pre-con"></div>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <!-- Page Layout HTML here -->
<!--Header navbar-->

    <nav class="navbar navbar-inverse navbar-fixed-top "  >
	    <div class="navbar-inner ">
			<a class="navbar-brand  router-link-active" href="">
                                <div class="cd-logo header-footer-sprite" style="height:90px; width:120px;">
								<img src="images/logo.png" class="img-rounded img-responsive" style="margin-top:5px;width:110px;
	height:90px;"/>
								</div>
								
                            </a>
            <div class="container" style="margin-top:-95px;">
			
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                
				
                <div class="nav-collapse collapse pull-right" style="font-family: 'Abel', sans-serif;font-size:15px; ">
                    <ul class="nav" >
<li style="margin-top:10px;margin-left:-450px;color:white;"><a target="blank" href="http://www.ismdhanbad.ac.in/">Indian Institute of Technology Dhanbad <i><span style="font-family: 'Josefin Slab', serif;">Presents</span></i></a></li>
                        <li class="active" style="padding:2px; font-weight:bold;"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>
</a></li>
                         <li  style="padding:2px; font-weight:bold;"><a data-toggle="modal" href="#notification"  ><i class="fa fa-bell" aria-hidden="true"></i></a></li>
                        
                        <li  style="padding:2px; font-weight:;"><a data-toggle="modal" href="#guideline">Guidelines</a></li>
                        <li class="dropdown"  style="padding:2px; font-weight:;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Help <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                               
								
								<li><a data-toggle="modal" href="#loginForm">Login</a></li>
                                <li><a href="register.php">Sign Up</a></li>
								<li class="divider"></li>
								<li><a href='javascript:fg_popup_form("fg_formContainer","fg_form_InnerContainer","fg_backgroundpopup");'
>Contact Us</a></li>
                                <li class="divider"></li>
                                <li><a data-toggle="modal" href="#privacy">Privacy Policy</a></li>
                             
                            </ul>
                        </li>
                        
                        <li class="login"  style="padding:2px; font-weight:bold;">
                            <a data-toggle="modal" href="#loginForm"><i class="fa fa-sign-in"></i></a>
                        </li>
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </nav>
    <!-- /header -->

<div class="fb-like"  style ="position:fixed;float:right;"data-href="https://www.facebook.com/venturahunt/" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
    <!--Slider-->
    <section id="slide-show" style="margin-top:-40px;">
     <div id="slider" class="sl-slider-wrapper" >

        <!--Slider Items-->    
        <div class="sl-slider">
            <!--Slider Item1-->
            <div  class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner" style="background-color:#37474F;">
                    <div class="container">
                        <img class="pull-right" src="images/sample/slider/img1.png" style="height:600;width:520;" alt="text"  />
                        <h2>The Game is On!</h2>
                        <h3 class="gap">Find Your Fire</h3>
						
					 
                        <a class="btn btn-large btn-transparent" data-toggle="modal" href="#loginForm"  >Get Started</a>
                    </div>
                </div>
            </div>
            <!--/Slider Item1-->

            <!--Slider Item2-->
            <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner"  style="background-color:#EF6C00;">
                    <div class="container">
                        <img class="pull-right" src="images/sample/slider/img2.png" style="margin-top:20px;"alt="" />
                        <h2>Thrill &amp; Adventure </h2>
                        <h3 class="gap">Aye! Aye! Captain</h3>
                      <!--  <a class="btn btn-large btn-transparent" href="#">Learn More</a> -->
                    </div>
                </div>
            </div>
            <!--Slider Item2-->

            <!--Slider Item3-->
            <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner"  style="background-color:#6A1B99;">
                   <div class="container">
                    <img class="pull-right" src="images/sample/slider/img3.png" alt="" />
                    <h2>Catch Your Venture</h2>
                    <h3 class="gap">Focus &amp; Win!</h3>
                    <!-- <a class="btn btn-large btn-transparent" href="#">Learn More</a> -->
                </div>
            </div>
        </div>
        <!--Slider Item3-->

    </div>
    <!--/Slider Items-->

    <!--Slider Next Prev button-->
    <nav id="nav-arrows" class="nav-arrows">
        <span class="nav-arrow-prev"><i class="fa fa-angle-left"></i></span>
        <span class="nav-arrow-next"><i class="fa fa-angle-right"></i></span> 
    </nav>
    <!--/Slider Next Prev button-->

</div>
<!-- /slider-wrapper -->           
</section>
<!--/Slider-->

<section class="main-info">
    <div class="container">
        <div class="row-fluid">
            <div class="" style="text-align:center;">
                <h4 >â€œNo thief, however skillful, can rob one of knowledge, and that is why knowledge is the best and safest treasure to acquire.â€
 </h4>
                <p class="no-margin">â€• L. Frank Baum, The Lost Princess of Oz</p>
            </div>
			</div>
			<!-- <div class="row-fluid" >
            <div class="span9" style="text-align:center;">
                <a class="btn btn-success btn-large pull-right" href="" disabled>Play Now</a>
            </div>
			</div> -->
        
    </div>
</section>



<!--Services-->
<section id="services">
    <div class="container">
        <div class="center gap">
            <h3>What is VenturaHunt ?</h3>
            <p class="lead">An Online Treasure Hunt !</p>
        </div>

        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-quote-left fa-2x"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Introduction</h4>
                        <p style="font-family: 'Josefin Slab', serif;; font-size:15px;">VenturaHunt is an online treasure hunt which you can be more precisely express as a cryptic hunt organised in the annual techfest ,<b>Concetto</b> of <b>Indian Institute of Technology (Indian School of Mines), Dhanbad</b>.  </p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-quote-left fa-2x"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">What actually will be happening?</h4>
                        <p style="font-family: 'Josefin Slab', serif;; font-size:15px;">
Here, you will be on the lookout, brainstorming for clues and solving the riddles. It is a test of your problem solving skills, your comprehension and your patience. At last it will be a test of whether or not you have the UNAGI in you!.</p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="fa fa-quote-left fa-2x"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">What will I get?</h4>
                        <p style="font-family: 'Josefin Slab', serif;; font-size:15px;">Your thirst for mysteries and mind games shall be quenched as you connect all the dots of the riddles. Your logicality shall be put to test while you sit in your Mind Palace looking for answers. 
Explore, dissect and win every level to reach to the top where the real mystery awaits and the Sherlock in you shall behold the glory. Hail Hydra!</p>
                </div>
            </div>
        </div>

        <div class="gap"></div>

        
        </div>

    </div>
</section>
<!--/Services-->

<section id="cd-timeline" class="cd-container cssanimations well">
    <!-- single timeline event -->
    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-picture">
        <img src="event-calender.png" />
      </div>
      <div class="cd-timeline-content">
        <h2>Registration Starts</h2>
        <p> </p>
        <span class="cd-date">Sunday, 2 October 2016</span>
      </div>
    </div>

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-picture">
        <img src="event-calender.png" />
      </div>
      <div class="cd-timeline-content">
        <h2>Arena Opens</h2>
        <p>Online Hunt will Start</p>
        <span class="cd-date">Friday, 21 October 2016</span>
      </div>
    </div>

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-picture">
        <img src="event-calender.png" />
      </div>
      <div class="cd-timeline-content">
        <h2>Arena Close</h2>
        <p>Online Hunt will End </p>
        <span class="cd-date">Sunday, 23 October 2016</span>
      </div>
    </div>
    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-picture">
        <img src="event-calender.png" />
      </div>
      <div class="cd-timeline-content">
        <h2>Prize Distribution</h2>
        <p>Prize distribution starts and also feedback form will open. </p>
        <span class="cd-date">Sunday, 23 October 2016 Onwards</span>
      </div>
    </div>
   
<div style="height: 2em"></div>
</section>


<section id="clients" class="main">
    <div class="container">
        <div class="row-fluid">
            <div class="span2">
                <div class="clearfix">
                    <h4 class="pull-left">OUR UPHOLDERS</h4>
                    <div class="pull-right">
                        <a class="prev" href="#myCarousel" data-slide="prev"><i class="fa fa-angle-left fa-2x" ></i></a> <a class="next" href="#myCarousel" data-slide="next"><i class="fa fa-angle-right fa-2x"></i></a>
                    </div>
                </div>
                <p><font color="#A9A9A9">"We must find time to STOP & THANK the people who make a difference in our lives."</font></br></p><h6><i>-John F. Kennedy</i></h6>
            </div>
            <div class="span10">
                <div id="myCarousel" class="carousel slide clients">
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                    <div class="active item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                              
                                <li class="span3"><a target="blank" href="http://www.ismdhanbad.ac.in/"><img title="Indian Institute of Technology (ISM), Dhanbad" style="height:160px;width:160px;" src="images/sample/clients/client2.png"></a></li>
                                <li class="span3"><a href="https://www.concetto.co.in/"><img title="Concetto" style="height:160px;width:160px;"src="images/sample/clients/client3.jpg"></a></li>
                           <li class="span3"><a href="https://www.facebook.com/SIAMISMpage/"><img title="SIAM IIT-ISM DHANBAD" style="height:160px;width:160px;" src="images/sample/clients/siam.png"></a></li>
                            <li class="span3"><a href="#"><img title="Freinds & Forks" style="height:160px;width:160px;"src="images/sample/clients/freinds.png"></a></li>
						   </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                               
                                
							<li class="span3"><a href="https://www.concetto.co.in/"><img  title="Concetto"style="height:160px;width:160px;"src="images/sample/clients/client3.jpg"></a></li>
                               <li class="span3"><a href="https://www.facebook.com/SIAMISMpage/"><img title="SIAM IIT-ISM DHANBAD" style="height:160px;width:160px;" src="images/sample/clients/siam.png"></a></li> 
							   <li class="span3"><a href="#"><img title="Freinds & Forks" style="height:160px;width:160px;"src="images/sample/clients/freinds.png"></a></li>
							   <li class="span3"><a href="http://www.ismdhanbad.ac.in/"><img  title="Indian Institute of Technology (ISM), Dhanbad"style="height:160px;width:160px;" src="images/sample/clients/client2.png"></a></li>
                               
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                
							
							 <li class="span3"><a href="https://www.facebook.com/SIAMISMpage/"><img title="SIAM IIT-ISM DHANBAD" style="height:160px;width:160px;" src="images/sample/clients/siam.png"></a></li>
                               <li class="span3"><a href="#"><img title="Freinds & Forks" style="height:160px;width:160px;"src="images/sample/clients/freinds.png"></a></li>
							   <li class="span3"><a href="http://www.ismdhanbad.ac.in/"><img  title="Indian Institute of Technology (ISM), Dhanbad" style="height:160px;width:160px;" src="images/sample/clients/client2.png"></a></li>
                                <li class="span3"><a href="https://www.concetto.co.in/"><img title="Concetto"  style="height:160px;width:160px;" src="images/sample/clients/client3.jpg"></a></li>
                                
                            </ul>
                        </div>
						
                    </div>
					
                    <div class="item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="#"><img title="Freinds & Forks" style="height:160px;width:160px;"src="images/sample/clients/freinds.png"></a></li>
								 <li class="span3"><a href="http://www.ismdhanbad.ac.in/"><img  title="Indian Institute of Technology (ISM), Dhanbad" style="height:160px;width:160px;" src="images/sample/clients/client2.png"></a></li>
                               <li class="span3"><a href="https://www.concetto.co.in/"><img title="Concetto"  style="height:160px;width:160px;" src="images/sample/clients/client3.jpg"></a></li>
							    <li class="span3"><a href="https://www.facebook.com/SIAMISMpage/"><img title="SIAM IIT-ISM DHANBAD" style="height:160px;width:160px;" src="images/sample/clients/siam.png"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Carousel items -->

            </div>
        </div>
		
    </div>
</div>
</section>

<!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid" style="font-family: 'Abel', serif;; font-size:14px;">

            <!--Contact Form-->
            <div class="span4" >
                <h4 style="margin-left:0px; ">ADDRESS</h4>
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
						  <li>Shantanu Patil</li>
                        <li>Siddharth Mishra</li>
                         <li>Shubhangi Bharti</li>
                        <li>Karra Anand </li> 
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
            <div class="span5 cp" style="font-family: 'Josefin Slab', serif;; font-size:15px;">
                &copy; 2016 <a target="blank" href="https://www.facebook.com/Concettoiitdhanbad/?ref=ts&fref=ts" title="Techfest IIT(ISM) DHANBAD"><b>Concetto</b></a>. All Rights Reserved. <h6 style="font-family: 'Josefin Slab', serif;; font-size:14px;">Site developed and maintained by <a data-toggle="modal" href="#manish"><b>Manish Kumar</b></a></h6>
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
<div class="modal hide fade in  " id="loginForm" aria-hidden="false" style="margin-left:20px;width:360px; height:54%;">
    <div class="modal-header">
        <i class="icon-remove" style=" background-color:#FF6347;"   data-dismiss="modal" aria-hidden="true"></i>
        <h3 style="text-align:center;">Login</h3>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form method="post" action="login.php" autocomplete="off">
    
     <div class="col-md-12">
 
            <?php
   if ( isset($errMSG) ) {
    
    ?>
    <div class="form-group">
             <div class="alert alert-danger">
    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   ?>
    <?php if(isset($loginerror))  { ?>
		  	<span class="alert-box alert"><?php echo $loginerror ?></span>
		  	<?php } ?>
           
            <div class="form-group">
             <div class="input-group">
			  </br>
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
             <input type="text" name="username" class="form-control" placeholder="Username" required value="<?php echo $username; ?>" maxlength="40" />
                </div>
              
            </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password" name="password" class="form-control" placeholder="Your Password" maxlength="15" required/>
                </div>
            
            </div>
		<div style="height: 1em"></div>
            <div class="form-group">
			<div class="divider"></div>
             <button type="submit" class="btn btn-primary" name="btn-login">Sign in</button>
            </div>
            <div class="form-group">
             <hr />
            </div>
 
            
            <div class="form-group">
            <a href="fpass.php">Forgot your password?</a></br>
		<h5>Don't have an account ? Create one <a  href="register.php">Sign Up</a></h5>
            </div>
        
        </div>
   
    </form>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="assets/js/vendor/jquery-1.9.1.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="assets/js/jquery.ba-cond.min.js"></script>
<script src="assets/js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>

<!-- /SL Slider -->

<!--  Notification -->
<div class="modal hide fade in well" id="notification" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" style=" background-color:#FF6347;"  data-dismiss="modal" aria-hidden="true"></i>
        <h3 style="margin-left:150px; " class="" >Notifications</h3>
    </div>
    <!--Modal Body-->
	 <div class="span4"></div>
    <div class="modal-body well span4">
     <?php
  $notifications = mysql_query('select * from notifications');
?>

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
 <!--coordi -->
  <!--  Notification -->
  <div class="center">
<div class="modal hide fade in " id="coordinators" aria-hidden="false" >
    <div class="modal-header">
        <i class="icon icon-remove" style=" background-color:#FF6347;" data-dismiss="modal" aria-hidden="true"></i>
        <h3  class="center" >Organizers</h3>
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
  <img src="coordinatorsimages/shantanu.jpg" class="img-circle"  style="height:120px;padding:20px;"/>
<div class="caption"> <a href="https://www.facebook.com/profile.php?id=100004284617032&fref=ts" target="blank">
					<div class="blur"></div>
					<div class="caption-text center" style="margin-left:-10px;">
						<h1 >Shantanu</h1>

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
						<h1>Anand</h1>	
					</div>
				</div></a>
			</li>
			</ul></div>

 
  
	


    </div>
    <!--/Modal Body-->
</div>
</div>

<div class="modal hide fade in" id="guideline" style="" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" style=" background-color:#FF6347;" data-dismiss="modal" aria-hidden="true"></i>
        <h3 style="margin-left:150px; " class="" >Guidelines</h3>
    </div>
    <!--Modal Body-->
	 <div class="span4"></div>
    <div class="modal-body well span4 width:600px;">
  
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


<!--  /coordi -->
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



 <!-- Disable Right Click Code -->
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
LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
po.src = '//www.venturahunt.com/helplhc_ventura/index.php/chat/getstatus/(click)/internal/(position)/bottom_right/(ma)/br/(top)/350/(units)/pixels/(leaveamessage)/true/(theme)/1?r='+referrer+'&l='+location;
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>
<script>
$(window).on('scroll', function(){
  $('.cd-timeline-block').each(function(){
    if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
      $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
    }
  });
});

</script>
<?php
	require_once('contactform-code.php'); ?>
	<script>
	$(window).load(function(){
	$('.se-pre-con').fadeOut('slow',function(){$(this).remove();});
});
	</script>
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