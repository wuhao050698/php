<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style type="text/css">
	html{color:#FFF;}
		 /*<a class=gl href="gl.php"><ul class=ma>管理</ul></a>*/
	html {
  	background: url(20.jpg) no-repeat center center fixed;
 	 -webkit-background-size: cover;
 	 -moz-background-size: cover;
	  -o-background-size: cover;
 	 background-size: cover;
	}
	ul
	{
	list-style-type:none;
	margin:0;
	padding:0;
	overflow:hidden;
	}
	a
	{
	text-align:center;
	font-size:24px;
	display:block;
	width:120px;
	background-color:#333;
	}
	ul#nav{ width:655px; height:60px; background:#00A2CA;margin:0 auto} 
	ul#nav li{display:inline; height:60px} 
    ul#nav li a{display:inline-block; padding:0 20px; height:60px; line-height:60px;
    color:#FFF; font-family:"\5FAE\8F6F\96C5\9ED1"; font-size:16px;} 
    ul#nav li a:hover{background:#0095BB}/*设置鼠标滑过或悬停时变化的背景颜色*/

	.board{
		width: 60%;   
  height: 60%;  
  min-width: 500px;  
  max-width: 700px;  
  padding: 5px;  
   text-align:left;
   margin:0 auto;
   border-style: groove;
	}
	.name{
		border-width:5px;
  padding: 20px;   
   text-align:left;
   margin:0 auto;
   border-style: outset;
	}
	.com{
		border-width:5px;
  padding: 20px;   
   text-align:left;
   margin:0 auto;
   border-style: outset;
	}
	.na{
	font-weight:bold;
	font-size:20px;
	}
	.ti{font-size:12px; float:right; font-style:italic; padding-right:250px;padding-top:10px;}
	.re{float:right; margin-left:5px; background: transparent;color:#FFF;}
	.ma{ color:#000; padding-top:0px; display:inline; }
	.gl{
	font-size:8px;
	display:inline;
	width:10px;
	background-color:!important;
	}
	</style>
    
	<title>留言板</title>	
</head>
<body>
	<h1 align="center">留言板</h1>
    <ul id="nav">
    <li><a href="1.php">主页</a></li>
    <li><a href="dl.php">登录</a></li>
    <li><a href="zc.php">注册</a></li>
    <li><a href="nm.php">匿名</a></li>
    </ul>
    <?php
	$con = mysql_connect("localhost","root","mo9mo9");
	if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("my_db", $con);
  

  $result = mysql_query("SELECT * FROM Persons");
  while($row = mysql_fetch_array($result))
  {
	echo"<br>";
	echo "<div class=board>";
  echo "<div class=name>";
  echo "<span class=na>";
  echo $row['name'];
  echo "</span>";
  echo "<button class=re>回复</button>";
  echo "<span class=ti>";
  echo $row['time'];
  echo "</span>";
  echo "</div>";
  echo "<div class=com>";
  echo $row['thing'];
  echo "<br /><br><br></div>";
  echo "</div>";
  }
  mysql_close($con);
	?>
   
</body>
</html>