<?php
include('config.php');
session_start();

$username = $_SESSION['username'];
//echo $username;
$questionPath = $_POST['questionpath'];
//echo $questionPath;
$usernameQuery = mysql_query("select round1, current, hint, solvedquestions,thint from profile where username='$username'");
$questionQuery = mysql_query("select id, questionpath, hint1, hint2 from questions where questionPath='$questionPath'");

$usernameResult = mysql_fetch_assoc($usernameQuery);
$questionResult = mysql_fetch_assoc($questionQuery);

$solvedquestions = explode(',', $usernameResult['solvedquestions']);
//echo $usernameResult['solvedquestions'];
foreach($solvedquestions as $solvedquestion) {
	if($solvedquestion==$questionResult['id']) {
		$flag = true;
		break;
	}
}

if(!($usernameResult['current']==$questionResult['id'])) {
	$notSolved = true;
}
if($flag==true) {
	echo "You have already cleared the level!";
} else if($notSolved==true) {
	echo "Please haven't hunt down the level #".$usernameResult['current'];
} else {
	$points = $usernameResult['round1'];
	//echo $points;
	$valueHint = $usernameResult['hint'];
$thint=$usernameResult['thint'];
	if($valueHint==1&&$thint<5) {
		$points-=50;
		$thint++;
		echo $questionResult['hint1'];
	} else if($thint>=5) {
		
		echo "You have exhausted all your available hints";
	} else {
		//$points-=100;
		echo"Sorry no more hint available for this Level";
		//echo $questionResult['hint3'];
	//	echo "Next Question is unlocked. You have recieved Zero points for this question!";
	//	$insertSolved = $usernameResult['solvedquestions'].",".$usernameResult['current'];
	//	$insertCurrent = intval($usernameResult['current']);
	//	$insertCurrent+=1;
	//	mysql_query("update profile set solvedquestions='$insertSolved',current='$insertCurrent' where username='$username'");
	//	$valueHint=0;
	}
	$valueHint++;
	//echo $points;



mysql_query("update profile set hint='$valueHint',round1=$points , thint=$thint where username='$username'");
}

?>