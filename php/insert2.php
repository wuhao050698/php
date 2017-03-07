<?php
session_start();

//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['username'])){
    header("Locationy:dl.php");
    exit();
}
	$username=$_SESSION['username'];  
    $message= htmlspecialchars($_POST['thing']);  
	$con = mysql_connect("localhost","root","mo9mo9");
	$username=mysql_real_escape_string($username);	
	$message=mysql_real_escape_string($message);
	if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("my_db", $con);
  $sql="INSERT INTO persons (name,thing)
	VALUES
	('{$username}','{$message}')";
	if (!mysql_query($sql,$con))
  	{
  	die('Error: ' . mysql_error());
  	}

	mysql_close($con);
	header('Location: 11.php');
	?>