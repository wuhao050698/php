<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style type="text/css">
	html{color:#FFF;}
	
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
	div #comment
	{
		
	}

	ul#nav{ width:655px; height:60px; background:#00A2CA;margin:0 auto} 
	ul#nav li{display:inline; height:60px} 
    ul#nav li a{display:inline-block; padding:0 20px; height:60px; line-height:60px;
    color:#FFF; font-family:"\5FAE\8F6F\96C5\9ED1"; font-size:16px} 
    ul#nav li a:hover{background:#0095BB}/*设置鼠标滑过或悬停时变化的背景颜色*/ 
	input:focus{
    outline: 0;
    border: 2px solid #CF0;
    box-shadow: 0px 0px 10px 0px #CF0;
  }
  textarea:focus{
    outline: 0;
    border: 1px solid #CF0;
    box-shadow: 0px 0px 10px 0px #CF0;
  }
  .comment {
	width: 60%;   
  height: 60%;  
  min-width: 200px;  
  max-width: 400px;  
  padding: 40px;  
   text-align:center;
   margin:0 auto;
   border-style: ridge;
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
    <br /><br /><br />
    <div class="comment">
   <form action="insert.php" method="post" style="text-align:left">
	匿名：anonymous<br /><br />
	<label style="vertical-align:top">内容：</label><textarea name="thing"  rows="5" cols="40" placeholder="comment(Maximum length 80)" maxlength="80" required></textarea><br /><br />
	<center><input type="submit" value="提交" class="button button-rounded button-tiny"></center>
	</form>
    </div>
    <?php
$con = mysql_connect("localhost","root","mo9mo9");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db", $con);
$sql = "CREATE TABLE persons 
(
name varchar(20),
thing varchar(80),
)";
 mysql_query($sql,$con);
mysql_close($con);
?>
</body>
</html>