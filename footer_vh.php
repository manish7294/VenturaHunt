<div style="height: 2em"></div>

<!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid" style="font-family: 'Abel', serif;; font-size:14px;">

            <!--Contact Form-->
            <div class="span4 ">
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
            <div id="tweets" class="span3 ">
                <h4>MENU</h4>
                <div>
                    <ul class="arrow">
					    <li><a href="home.php">Home</a></li>
                        <li><a href='javascript:fg_popup_form("fg_formContainer","fg_form_InnerContainer","fg_backgroundpopup");'
>Support</a></li>
                        <li><a data-toggle="modal" href="#guideline">Guidelines</a></li>
						  <li><a data-toggle="modal" href="#notification">Notifications</a></li>
                        <li><a href="#">Leaderboard</a></li>
               

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
            <div class="span5 cp"  style="font-family: 'Josefin Slab', serif;; font-size:15px;">
                &copy; 2016 <a target="blank" href="https://www.facebook.com/Concettoiitdhanbad/?ref=ts&fref=ts" title="Techfest IIT(ISM) DHANBAD"><b>Concetto</b></a>. All Rights Reserved. <h5>Site designed and maintained by <a data-toggle="modal" href="#manish"><b>Manish Kumar</b></a></h5>
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
        slitslider = $( '#slider1' ).slitslider( {
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
<div class="modal hide fade in" id="notification" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" style=" background-color:#FF6347;" data-dismiss="modal" aria-hidden="true"></i>
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
      <th  style="margin-left:-60px;">Date</th>
	  <th class="pull-left" style="margin-left:-20px;">|</th>
      <th class="pull-left">Notification</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = mysql_fetch_assoc($notifications)) { ?>
    <tr>
      <td style="width: 9em;"><?php echo $row['date'] ?></td>
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


<!--  Notification -->
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


  <!-- Latest version of jQuery -->
  <script src="javascripts/jquery.js"></script>
  <!-- <script src="javascripts/questionsjs.js"></script> -->
  <script>
  <?php include("questionsjs.php"); ?>
  </script>

  <script src="javascripts/subnavigation.js"></script>
  <!-- Included JS Files (Unminified) -->
  <!-- [JS Files] -->
  <script type='text/javascript'>
  
   
   $(document).ready(function() {

   
    
    $("#answerbutton").click(function() {
      var useranswer = $("#answertext").val();
      var questionpath = $("#questionPic").attr('src');
      $.post('checkanswer.php', {'questionpath': questionpath, 'useranswer': useranswer}, function(data) {
        if(data==="true") {
          $("#answercorrectlabel").html("Congratulations Key Accepted! Now you can move to next level.");
          $("#answercorrectlabel").removeClass("alert");
         $("#answercorrectlabel").css("background-color","#5bc0de");
		  $("#answercorrectlabel").css("color","#428bca");
		  $("#answercorrectlabel").css("font-size","16px");
		   $("#changecolor").css("background-color","#5bc0de");
        } else {
          $("#answercorrectlabel").removeClass("success");
         
          $("#answercorrectlabel").html(data);
		    $("#answercorrectlabel").css("font-size","16px");
          $("#changecolor").css("background-color","#E65100");
          $("#answercorrectlabel").css("background-color","#f2dede");
		  $("#answercorrectlabel").css("color","#E65100");
        }
        $('#answertext').val('');
        $('#getHint').val('');
      });
    });

    $("#linkHint").click(function() {
      var questionpath = $("#questionPic").attr('src');
      //alert(questionpath);
      $.post('checkHint.php', {'questionpath': questionpath}, function(data) {
        $("#getHint").val(data);
      });
    });

    $('#photoimg').live('change', function()  
    { 
      $("#preview").html('');
      $("#preview").html('<img src="images/loader.gif" alt="Uploading...."/>');
      $("#imageform").ajaxForm(
      {
        target: '#preview'
      }).submit();
    });

    
  });

</script>

  <!--coordi -->
  <!--   -->
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

  <!-- Included JS Files (Minified) -->
  <script src="javascripts/foundation.min.js"></script>

  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>

  <!-- Disable Right Click Code 
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
    // 
  </SCRIPT> -->
  
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
<script type="text/javascript">
    document.title = "<?=$title;?>"
</script>
<script id="dsq-count-scr" src="//venturahunt.disqus.com/count.js" async></script>
<script type="text/javascript">
$(".dropdown .titl").click(function () {
  $(this).parent().toggleClass("closed");
});

$(".dropdown li").click(function () {
  $(this).parent().parent().toggleClass("closed").find(".titl").text($(this).text());
});
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/TimeCircles.js"></script>
  
    <script>
      $("#count-down").TimeCircles(
       {   
           circle_bg_color: "#2dcc70",
           use_background: true,
           bg_width: 1.0,
           fg_width: 0.02,
           time: {
                Days: { color: "#8a7f71" },
                Hours: { color: "#8a7f71" },
                Minutes: { color: "#8a7f71" },
                Seconds: { color: "#8a7f71" }
            }
       }
    );

    </script>
	<?php
	require_once('contactform-code.php'); 	  echo $r; ?>

<script>
   $(document).ready(function(){
        $("#div1").hover(
            function(){
                $(this).animate({ "width" : "5%", "height" : "25px","font-size":"25px" }, 500); 
				
            },
            function(){
                $(this).animate({ "width" : "3%", "height" : "25px" }, 500);
				 $(this).css('font-size','15px');
				 $(this).animate({ "font-size":"20px" }, 50);
            }
        );  

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