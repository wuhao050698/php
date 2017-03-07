
<?php
	$username=anonymous;
    $message=$_POST['thing']; 

	$con = mysql_connect("localhost","root","mo9mo9");
	$message=mysql_real_escape_string($message);
	if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("my_db", $con);
  $sql="INSERT INTO persons (name,thing)
	VALUES
	('$username','$message')";
	if (!mysql_query($sql,$con))
  	{
  	die('Error: ' . mysql_error());
  	}

	mysql_close($con);
	header('Location: 1.php');
	?>
