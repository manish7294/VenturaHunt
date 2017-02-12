<?php
include("config.php");
$username=trim($_POST['username']);
$username = strip_tags($username);
  $username = htmlspecialchars($username);
$password=trim($_POST['password']);
$password = strip_tags($password);
  $password = htmlspecialchars($password);
 $password = hash('sha256', $password); // password hashing using SHA256
  $loginerror="Either of Username or Password is Incorrect.";
	

	$sel=mysql_query("select * from login where username='$username' ");
	$arr=mysql_fetch_array($sel);
 
	if(($arr['username']==$username) and ($arr['password']==$password) and $arr['active']=='1')	{
		session_start();
		$_SESSION['username']=$username;
		echo "<script>location.href='home.php'</script>";
	} 
	if(($arr['username']!=$username) || ($arr['password']!=$password) || $arr['active']!='1'){
		session_start();
		$_SESSION['loginerror']=$loginerror;
		echo "<script>location.href='index.php'</script>";
		
	}
	
?>