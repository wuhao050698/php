
<?php
session_start();
	$username=$_POST['username'];  
    $password=$_POST['password'];
	$con = mysql_connect("localhost","root","mo9mo9");
	if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("my_db", $con);
  $check_query = mysql_query("select * from sessions where username='$username' and password='$password'");
	if($result =  mysql_fetch_array($check_query)){
    //登录成功
    $_SESSION['username'] = $username;
	$_SESSION['userid'] = $result['my_db'];
	header('Location: 11.php');
	}
	else {
                    echo "<script> {window.alert('用户名或密码错误！');location.href='dl.php'} </script>";
}
	?>