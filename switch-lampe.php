<!DOCTYPE HTML>
<html>
<head>
<?
	if ($_SERVER["REMOTE_ADDR"] == "127.0.0.1") {
		return 0;
	}
	$handle = fopen("logs/IPs.log", "a+");
	date_default_timezone_set('Europe/Paris');
	fwrite($handle, date(DATE_RFC2822));
	fwrite($handle, " : ");
	fwrite($handle, $_SERVER["REMOTE_ADDR"]);
	fwrite($handle, " : paulf.tk/switch-lampe.php");
	fwrite($handle, "\n");
?>
<title>
</title>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<meta name="viewport" content="width=800" />
<meta name="description" content="" />
<meta name="generator" content="EverWeb 1.7.3 (1342)" />
<meta name="buildDate" content="mardi 20 janvier 2015" />
<link rel="stylesheet" type="text/css" href="ew_css/textstyles.css" />
<!--[if lt IE 9]>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<![endif]-->
<!--[if (gte IE 9) | (!IE)]><!-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!--<![endif]-->
<script type="text/javascript" src="ew_js/imageCode.js"></script>

<style type="text/css">
.shape_0 {
background-color:#FEFFFF;
}

.shape_2 {
background-color:#273640;
}

#navmenu_menu0 {
clear:both;
float:left;
margin:0;
padding:0;
width:100%;
font-family:'Trebuchet MS',sans-serif;
font-size:17px;
z-index:1000;
position:relative;
}
#navmenu_menu0 ul {
margin:0;
padding:0;
list-style:none;
position:relative;
right:0px;
float:right;
}
#navmenu_menu0 ul li {
margin:0 30px 0 0;
padding:0;
float:left;
position:relative;
left:0px;
}
#navmenu_menu0 ul li a {
display:block;
margin:0;
padding:0px;
height: 20px;
line-height: 20px;
text-decoration:none;
color:#FEFFFF;
font-weight:bold;
text-align: left;
}
#navmenu_menu0 ul li.active a {
text-decoration:none;
color:#FEFFFF;
}
#navmenu_menu0 ul li a:hover {
text-decoration:underline;
color:#FEFFFF;
}
#navmenu_menu0 ul li:hover a,
#navmenu_menu0 ul li.hover a {
text-decoration:underline;
color:#FEFFFF;
}
#navmenu_menu0 ul ul {
display:none;
position:absolute;
left:0;
float:left;
right:auto;
padding-top:2px;
}
#navmenu_menu0 ul ul li {
left:auto;
margin:0;
clear:left;
float:left;
width:100%;
}
#navmenu_menu0 ul ul li a,
#navmenu_menu0 ul li.active li a,
#navmenu_menu0 ul li:hover ul li a,
#navmenu_menu0 ul li.hover ul li a {
background:#FFFFFF;
text-decoration:none;
color:#FEFFFF;
padding-top:0px;
padding-bottom:0px;
border-bottom:1px solid #000000;
float:left;
width:100%;
text-align: left;
white-space:nowrap;
}
#navmenu_menu0 ul ul li a:hover,
#navmenu_menu0 ul li.active ul li a:hover,
#navmenu_menu0 ul li:hover ul li a:hover,
#navmenu_menu0 ul li.hover ul li a:hover {
background:#FFFFFF;
text-decoration:underline;
color:#FEFFFF;
float:left;
}
#navmenu_menu0 ul li.last ul {
left:auto; 
right:0;
}
#navmenu_menu0 ul li.last ul li {
float:right;
position:relative;
right:0px;
}
#navmenu_menu0 ul li:hover ul,
#navmenu_menu0 ul li.hover ul {
display:block;
}

.shape_9 {
background-color:#FEFFFF;
}

.shape_10 {
background: url('images/switch-lampe/shape_10.png') no-repeat;
}

.shape_11 {
background: url('images/switch-lampe/shape_11.png') no-repeat;
}
@media only screen and (-moz-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min-devicepixel-ratio: 1.5), only screen and (min-resolution: 1.5dppx) {

.shape_10 {
background: url('images/switch-lampe/shape_10@2x.png') no-repeat;
background-size: 189px 76px;
}

.shape_11 {
background: url('images/switch-lampe/shape_11@2x.png') no-repeat;
background-size: 189px 76px;
}

}
a img {
border:0px;
}
body {
background: url('images/switch-lampe/browser/bg.jpg');
margin: 0px auto;
}


div.container {
margin: 0px auto;
width: 800px;
height: 1322px;
}
@media only screen and (-moz-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min-devicepixel-ratio: 1.5), only screen and (min-resolution: 1.5dppx) {
body {
background: url('images/switch-lampe/browser/bg@2x.jpg');
background-size: 50px 50px;
}
}
@media only screen and (-moz-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min-devicepixel-ratio: 1.5), only screen and (min-resolution: 1.5dppx) {
	div.container {
}
}
</style>
<script type="text/javascript">
  <!-- 	
  function getParam(name){
  name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
  var regexS = "[\\?&]"+name+"=([^&#]*)";
  var regex = new RegExp( regexS );
  var results = regex.exec (window.location.href);
  if (results == null)
  	return "";
  else
  	return results[1];
  }
  
  function getQueryString() {
    var query = window.location.search.substring(1);
    var vars = query.split('?');
    
    vars = vars.join("");
    
   	if (vars.length > 0) {
   		vars = "?" + vars;
   	} else {
   		vars = query.split('#!');
   		vars = vars.join("");
   		if (vars.length > 0) {
   			vars = "#!" + vars;
   			}
   	
   	}
    return vars;
}
  var vars = getQueryString();
  var fullsite = getParam("fullsite");
  if (screen.width < 700 && fullsite!="true"){
  
  	window.location = "/mobile/switch-lampe.php"+vars;
  	} 	
  //--> 
 </script>
</head>
<body>

<div class="shadow">
<div class="container">
<header>
<div style="position:relative"><div class="shape_0" style="left:36px;top:453px;width:361px;height:69px;z-index: 0;position: absolute;"></div></div>

<div style="position:relative"><div class="shape_1" style="left:10px;top:1px;width:780px;height:360px;z-index: 1;position: absolute;"><img src="images/switch-lampe/Blog_Humanoides_FR_Lampe_Pixar_pic1.jpg" height="360" width="780" /></div></div>

<div style="position:relative"><div class="shape_2" style="left:10px;top:360px;width:780px;height:60px;z-index: 2;position: absolute;"></div></div>

<div style="position:relative"><div class="shape_3" style="left:24px;top:369px;width:246px;height:55px;z-index: 3;position: absolute;"><div style="margin: 4.32px 0px 4.32px 0px; "><p style="line-height:37px;margin-top:0px;margin-bottom:11.25px;" class="Style1">Switch<span class="Style5"> Lampe</span></p></div></div></div>

<div style="position:relative"><div class="ewnavmenu" id="navmenu_menu0" style="left:268px;top:385px;height:40px;width:508px;z-index:10004;position: absolute;"><ul><li><a class="main item0" href="index.php">HOME</a></li><li><a class="main item1" href="switch-lampe.php">SWITCH LAMPE</a></li><li  style='margin-right:0px;' class="last"><a class="main item2" href="#">MOBILE</a><ul> <li> <a href="mobile/home.php"> Home </a> </li> <li> <a href="mobile/switch-lampe.php"> Switch Lampe </a> </li> </ul></li></ul></div></div>

<div style="position:relative"><div class="shape_8" style="left:53px;top:463px;width:338px;height:51px;z-index: 8;position: absolute;"><div style="margin: 4.32px 0px 4.32px 0px; "><p style="line-height:37px;margin-top:0px;margin-bottom:11.25px;" class="Style6">État actuel: 
<?php
	if (trim(@shell_exec("sudo cat /sys/class/gpio/gpio8/value")) == "1") {
		echo "On";
	}
	else {
		echo "Off";
	}
?>
</p></div></div></div>
<div style="position:relative"><a href="switch-lampe.php"><div class="shape_12" style="left:348px;top:469px;width:39px;height:39px;z-index: 12;position: absolute;"><img src="images/switch-lampe/refresh.gif" height="39" width="39" /></div></a></div>
</header>
<div class="content">
<div style="position:relative"><div class="shape_5" style="left:701px;top:765px;width:25px;height:19px;z-index: 5;position: absolute;"><img src="images/switch-lampe/facebook.png" height="19" width="25" data-src2x="images/switch-lampe/facebook@2x.png" /></div></div>

<div style="position:relative"><div class="shape_6" style="left:732px;top:765px;width:25px;height:19px;z-index: 6;position: absolute;"><img src="images/switch-lampe/twitter.png" height="19" width="25" data-src2x="images/switch-lampe/twitter@2x.png" /></div></div>

<div style="position:relative"><div class="shape_7" style="left:764px;top:765px;width:25px;height:19px;z-index: 7;position: absolute;"><img src="images/switch-lampe/linkedin.png" height="19" width="25" data-src2x="images/switch-lampe/linkedin@2x.png" /></div></div>

<div style="position:relative"><div class="shape_9" style="left:36px;top:545px;width:728px;height:190px;z-index: 9;position: absolute;"></div></div>

<div style="position:relative"><a href="http://paulf.tk/switchOn.php"><div class="shape_10" style="left:116px;top:595px;width:189px;height:76px;z-index: 10;position: absolute;"><div style="margin: 24.41px 0px 4.32px 0px; "><p align="center" style="line-height:21px;margin-top:0px;margin-bottom:11.25px;" class="Style4">Switch on</p></div></div></a></div>

<div style="position:relative"><a href="http://paulf.tk/switchOff.php"><div class="shape_11" style="left:454px;top:595px;width:189px;height:76px;z-index: 11;position: absolute;"><div style="margin: 24.41px 0px 4.32px 0px; "><p align="center" style="line-height:21px;margin-top:0px;margin-bottom:11.25px;" class="Style4">Switch off</p></div></div></a></div>
</div>
<footer>

</footer>
</div>
</div>
<script>
function preloader() {
if (document.images) {
var i0=new Image();
i0.src ='images/switch-lampe/shape_10.png';
var i1=new Image();
i1.src ='images/switch-lampe/shape_11.png';
}
}
function addLoadEvent(func) {
window.onload = func;
}
addLoadEvent(preloader);
</script>
</body>
</html>
