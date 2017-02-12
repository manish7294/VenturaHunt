<?php include('header_vh.php'); 

 $userscore['thint']=5- $userscore['thint'];
	$questions = mysql_query('select id from questions');
	
$title="Hunt Arena";
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
  		
}(document, 'script', 'facebook-jssdk'));</script>
 <script>
$(document).ready(function(){
   
        $("#hey").hide();
   
});
</script>
	
<div class="row ">
	<div class="six column centered ">
		<div class="alert-box success col-8">
			<center><span ><h5  style=" margin-top:18px;">Welcome to the Ventura hunt Arena, Hope you are ready to go!</h5></span></center>
		</div>
	</div>
	<div style="margin-left:94%;">
<div class="fb-like pull-right" style="position:fixed;float:right;margin-left:31px;margin-top:80px;z-index:1;" data-href="https://www.facebook.com/venturahunt/" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
</div>
<div id="count-down" data-date="2016-10-23 12:00:00" class="pull-right col-4 " style="height:100px; margin-right:25px;margin-top:-60px;">
           <h6 style="margin-right:300px;float:center;">&nbsp;&nbsp;&nbsp;&nbsp;HUNT WILL END IN -</h6>                             
                                    </div></div>
<div style="height: 1em"></div>

                       
<style>
	#questionsShow li {
		margin-top: 0.5em;
		margin-bottom: 0.5em;
	}
	#questionsShow li a:hover {
		background-color:transparent;
	}
		#questionsShow li :hover {
		background-color:#2dcc70;
-webkit-filter: hue-rotate(180deg); filter: hue-rotate(180deg);
	}
		#questionsShow li img:hover {
		-webkit-filter: hue-rotate(180deg); filter: hue-rotate(180deg);
		
	}



	
</style>

                     


	<div id="questionBar" class="row center well">
	<div class="twelve column centered">
	<section id="content">
	<ul style="list-style: none;">
	 <li class="dropdown list-group"  style="padding:8px; font-weight:bold; ">
	 <a href="#" style="cursor: url('http://www.rw-designer.com/cursor-extern.php?id=37321'),auto; " class="dropdown-toggle" data-toggle="dropdown"><h4>⚓ Level <span class="titl "> </span>  <i class="fa fa-angle-down"></i></h4></a>
	
	<ul id="questionsShow" class="dropdown-menu pull-left well helix" style="overflow-y:scroll ; margin-top:30px;z-index:100;  height:466px;">
		<?php while($row = mysql_fetch_assoc($questions)) { $id = $row['id']; ?>
		  	<li style="margin-bottom:-9px;"><a href="#" id="<?php echo 'question'.$id ?>" class="" ><img src="images/line-stop.png" style="display:inline-block;float:left; position: relative; background: transparent;opacity:0.7;margin-top:0px;padding:-10px;margin-bottom:px;margin-left:20px;"/><span class="round label pull-right " style="margin-right:20px; border-radius:2px; " id="questionSpan">#<?php echo $id ?></span></a></li>
		  
		<?php } ?>
		 
	</ul>
	</li></div>
	</ul>
	</div>
</div>


<div style="height: 1em"></div>

		  
		  
<div id="mainContent" class="row " >
	
	<div class="row twelve column title center " id ="changecolor" style="width:70%; margin-left:auto;margin-right:auto; border-radius:6px;">
		<center><a class="th "><img src="images/welcome.jpg" class="img-rounded" style="width: 700px; height: 300px; margin-top:35px;"  id="questionPic" /></a></center>
		<div style="height: 3em"></div>
	</div>
	<div style="height: 1em"></div>
		<div class="row ">
			<div class="six column centered">
				<center><p><span id="answercorrectlabel" ></span></p></center>
			</div>
			
		</div>

		<div class="row center well">
			<div class="six column centered">
			  <div class="ten mobile-three columns">
				<input type="text" style="width: 300px;"  placeholder="Enter Your Key Here..." id="answertext"/>
			</div>
			<div class="two mobile-one columns">
				<a class=" btn btn-raised  btn-success" id="answerbutton">Answer</a>
		  	</div>
		</div>
	</div>
</div>

<div style="height: 1em"></div>
<div style="margin-left:39%;">

<button id="show" class="btn btn-primary btn-raised">Show Hint</button>
<button id="hide" class="btn btn-warning btn-raised">Hide Hint</button></div>
<div style="height: 1em"></div>
<div id="hey">
<div id="contents "  style="width:50%; margin-left:auto;margin-right:auto; border-radius:5px;" class=" title center row">
<div class="twelve column">

	<div class="row">
		<p><span class="label alert center" style="margin-left: 2em;background-color:#f2dede;""><i class="icon-info-sign"></i>Each hint will lead you to a deduction of 50 points !</span><br/> <span class="title pull-right" style="padding :6px; background-color:rgb(111,111,111);">Hints left <?php echo $userscore['thint'] ?><span></p>
	</div>

	<div id="searchBar" class="row">

		<div class="nine column">
		<ul class="search">
		  <form>
		    <input type="text" style="width: 250px;" disabled id="getHint" />
		  </form>
		</ul>
		</div>

		<div class="three column">
		<ul class="has-button">
		  <a class="btn btn-info btn-raised" id="linkHint" style="background-color:rgb(102,102,102);">Take Hint!</a>
		</ul>
		</div>

	</div>



</div>
</div> <!-- Contents div --></div>

<div style="height: 1em"></div>

<div class="center well" style="width:70%;margin-left:auto;margin-right:auto; border-left:2px;">

<div id="disqus_thread"  style="overflow-y: scroll; height:500px;"></div>

<script>

/**
 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables */
/*
var disqus_config = function () {
    this.page.url = localhost/t/showPage.php;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = showPage.php; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = '//venturahunt.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
   </div>     
 <script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("#hey").hide();
    });
    $("#show").click(function(){
        $("#hey").show();
    });
});
</script>
<?php include('footer_vh.php'); ?>