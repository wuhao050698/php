<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
* {
overflow: hidden;
margin: 0;
}
body {
background: #000;
}
@keyframes circle {
from {
transform: scale(0)
}
to {
transform: scale(6)
}
}
.circle {
margin: 0 auto;
width: 300px;
height: 300px;
border: 20px solid CadetBlue;
border-radius: 50%;
position: absolute;
top: 5%;
left: 40%;
}
.one {
animation: circle 4s infinite linear;
}
.two {
animation: circle 3s infinite linear;
}
.three {
animation: circle 2s infinite linear;
}
</style>
</head>

<body>
<div class="circle one"></div>
<div class="circle two"></div>
<div class="circle three"></div>
</body>
</html>

