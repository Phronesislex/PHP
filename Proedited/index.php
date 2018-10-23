<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="css/css1.css">
<style>
h1{
	text-align: center;
	font-family: arial, times new roman;
}

form{
	border:2px solid;
	color: 000;
	background-color: grey;
}
</style>
<script>
	function toggle_visibility(id){
		var e = document.getElementById(id);
		if(e.style.display=='block')
			e.style.display = 'none';
		else
			e.style.display = 'block';
		}
</script>

<link rel="stylesheet" href="cs/jbgallery-2.0.css" type="text/css">
<link href="cs/style.css" rel="stylesheet" type="text/css" />
<link href="cs/layout.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../../info.template-help.com/files/ie6_warning/ie6_script.js"></script>
<script type="text/javascript" src="js/jbgallery-2.0.js"></script>
<script type="text/javascript">
$(function(){
	$('#jbgallery').jbgallery({style:'sliceup',caption:false,slideshow:true,interval:500})								   
})
</script>

</head>

<?php
session_start();
if(isset($_POST['username'])){
	header('localhost:index.php');
	}

?>

<body id="splash">
<div id = "container">
<!-- Header -->
<div id = "header">
    
</div>
<!-- Content -->
<div id = "content_area">
<br>
  
</div>

<!-- Footer -->
<div id = "footer"> 
<table border="0" cellpadding="15px" align="center"; style="size: 12px; font-family: 'Courier New', Courier, monospace; color: #FFF; font-size: 12px;">
<tr>
	<td>
    &copy; 2017 All Rights Reserved.  |  Designed By Nelson	
    </td>
</tr>
</table>
 </div>

<div id="popup-box1" class="popup-position">
<div id="popup-wrapper">
<div id="popup-container">
<div id="popup-head-color3">
    <p style="text-align:right !important; font-family: 'Courier New', Courier, monospace;font-size:15px;"><a href= "javascript:void(0)" onclick="toggle_visibility('popup-box1')"><font color="#FFF"> X </font></a></p>
    <p style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:16px;"><h1> Login Form </h1></p>
    </div>
<br><br><br><br>

<form action="login_process.php" method="POST">
<table border="0" align="center">
<tr>
<td>Username:</td>
<td align="center"><input type="text" id="txtbox" name="username" placeholder="username" required><br></td>
</tr>

<tr>
<td>Password:</td>
<td align="center"><input type="password" id="txtbox" name="password" placeholder="password" required><br></td>
</tr>

<tr>
	<td>&nbsp;  </td>
</tr>

<tr>
	<td>&nbsp;  </td>
	<td  align="left"><input type="SUBMIT" id="btnnav" value="Login"></td>
</tr>

</table>
</form>

</div>
</div>
</div>



</div>

</body>
</html>
