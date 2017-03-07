<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>

</head>

</body>

<?php
	$username=$_POST['username'];  
    $password=$_POST['password'];
	$mail=$_POST['mail'];  
	$con = mysql_connect("localhost","root","mo9mo9");
	if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("my_db", $con);
  $check_query = mysql_query("SELECT * FROM sessions
WHERE username='$username'");
  if($result = mysql_fetch_array($check_query))
  {
	  mysql_close($con);
	  header('Location: warning.php');
	  }
	else
	{  
  $sql="INSERT INTO sessions (username,password,mail)
	VALUES
	('{$username}','{$password}','{mail}')";
	if (!mysql_query($sql,$con))
  	{
  	die('Error: ' . mysql_error());
  	}

	mysql_close($con);
	header('Location: 1.php');
	}
	?>
<body>
</html>
