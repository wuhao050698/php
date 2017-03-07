
<?php
	$name=$_POST['name'];  
    $japanese=  htmlspecialchars($_POST['japanese']) ;  
	$zy=$_POST['zy'];  
	$pe=$_POST['pe'];
	$xy=$_POST['xy'];
	$jx=$_POST['jx'];
	$sx=$_POST['sx']; 
	$cx=$_POST['cx'];
	$yy=$_POST['yy'];
	$gs=$_POST['gs']; 
	$xd=$_POST['xd'];  
	$jd=$_POST['jd'];     
	$con = mysql_connect("localhost","root","mo9mo9");
	if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("my_db", $con);
  $sql="INSERT INTO mark (name,japanese,zy,pe,xy,jx,sx,cx,yy,gs,xd,jd)
	VALUES
	('{$name}','{$japanese}','{$zy}','{$pe}','{$xy}','{$jx}','{$sx}','{$cx}','{$yy}','{$gs}','{$xd}','{$jd}')";
	if (!mysql_query($sql,$con))
  	{
  	die('Error: ' . mysql_error());
  	}

	mysql_close($con);
	header('Location: mark.php');
	?>
