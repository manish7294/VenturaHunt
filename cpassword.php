<?php

include('config.php');

 if( isset($_SESSION['user'])!="" ){
  header("Location: home.php");
 }

if (empty($_GET['username'])) {
	header("location: index.php");
}
$username=$_GET['username'];
$hash=$_GET['hash'];
if(isset($_GET['username']) && !empty($_GET['username']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
    $username = mysql_escape_string($_GET['username']); // Set email variable
    $hash = mysql_escape_string($_GET['hash']); // Set hash variable
                
    $search = mysql_query("SELECT * FROM login WHERE username='".$username."' AND hash='".$hash."' AND active='1'"); 
    $match  = mysql_num_rows($search);
                 
    if($match > 0){
		echo"<div>Successfully Verified ! Please enter your new password.</div>";
		session_start();
		$_SESSION['hash']=$hash;
		header("location: passchange.php");
        // We have a match, activate the account
          }else{
        // No match -> invalid url or account has already been activated.
        echo '<div>The url is either invalid or you have not requested to change password.</div>';
		echo '<div><a href="index.php">Click here to go to Home Page</a></div>';
    }
                 
}else{
    // Invalid approach
   echo '<div>Invalid approach, please use the link that has been send to your email address.</div>';
   	echo '<div><a href="index.php">Click here to go to Home Page</a></div>';
}
?>