<!DOCTYPE HTML>
<html>
<head>
<?
        $handle = fopen("../logs/IPs.log", "a+");
	        date_default_timezone_set('Europe/Paris');
	        fwrite($handle, date(DATE_RFC2822));
		        fwrite($handle, " : ");
		        fwrite($handle, $_SERVER["REMOTE_ADDR"]);
			        fwrite($handle, " : paulf.tk/mobile/home.php");
			        fwrite($handle, "\n");
?>
<title>

</title>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<meta name="viewport" content="width=480, user-scalable=no" />
<meta name="description" content="" />
<meta name="generator" content="EverWeb 1.7.3 (1342)" />
<meta name="buildDate" content="mardi 20 janvier 2015" />
<link rel="stylesheet" type="text/css" href="../ew_css/textstyles.css" />
<!--[if lt IE 9]>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<![endif]-->
<!--[if (gte IE 9) | (!IE)]><!-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!--<![endif]-->
<script type="text/javascript" src="../ew_js/imageCode.js"></script>

<style type="text/css">
.shape_0 {
background-color:#FEFFFF;
}

.shape_1 {
background-color:#273640;
}

.shape_4 {
background-color:#273640;
}

.shape_7 {
background-color:#FEFFFF;
}

.shape_8 {
background: url('images/home/shape_8.png') no-repeat;
}
@media only screen and (-moz-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min-devicepixel-ratio: 1.5), only screen and (min-resolution: 1.5dppx) {

.shape_8 {
background: url('images/home/shape_8@2x.png') no-repeat;
background-size: 160px 61px;
}

}
a img {
border:0px;
}
body {
background: url('images/home/browser/bg.jpg');
margin: 0px auto;
}


div.container {
margin: 0px auto;
width: 480px;
height: 703px;
}
@media only screen and (-moz-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min-devicepixel-ratio: 1.5), only screen and (min-resolution: 1.5dppx) {
body {
background: url('images/home/browser/bg@2x.jpg');
background-size: 50px 50px;
}
}
@media only screen and (-moz-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min-devicepixel-ratio: 1.5), only screen and (min-resolution: 1.5dppx) {
	div.container {
}
}
</style>
</head>
<body>

<div class="shadow">
<div class="container">
<header>
<div style="position:relative"><div class="shape_1" style="left:0px;top:0px;width:479px;height:84px;z-index: 1;position: absolute;"></div></div>

<div style="position:relative"><div class="shape_2" style="left:114px;top:20px;width:252px;height:55px;z-index: 2;position: absolute;"><div style="margin: 4.32px 0px 4.32px 0px; "><p align="center" style="line-height:37px;margin-top:0px;margin-bottom:11.25px;" class="Style1">Paul Fleury</p></div></div></div>
</header>
<div class="content">
<div style="position:relative"><div class="shape_0" style="left:0px;top:339px;width:480px;height:112px;z-index: 0;position: absolute;"></div></div>

<div style="position:relative"><div class="shape_3" style="left:16px;top:365px;width:452px;height:56px;z-index: 3;position: absolute;"><div style="margin: 4.32px 4.32px 4.32px 4.32px; "><p style="line-height:25.5px;margin-top:0px;margin-bottom:11.25px;" class="Style3">Bonjour !</p></div></div></div>

<div style="position:relative"><div class="shape_6" style="left:0px;top:84px;width:480px;height:222px;z-index: 6;position: absolute;"><img src="images/home/African_elephant_warning_raised_trunk.jpg" height="222" width="480" /></div></div>
</div>
<footer>
<div style="position:relative"><div class="shape_4" style="left:0px;top:482px;width:479px;height:84px;z-index: 4;position: absolute;"></div></div>

<div style="position:relative"><div class="shape_5" style="left:114px;top:502px;width:252px;height:55px;z-index: 5;position: absolute;"><div style="margin: 4.32px 0px 4.32px 0px; "><p align="center" style="line-height:37px;margin-top:0px;margin-bottom:11.25px;" class="Style1">Switch Lampe</p></div></div></div>

<div style="position:relative"><div class="shape_7" style="left:0px;top:591px;width:480px;height:112px;z-index: 7;position: absolute;"></div></div>

<div style="position:relative"><a href="switch-lampe.php"><div class="shape_8" style="left:158px;top:614px;width:160px;height:61px;z-index: 8;position: absolute;"><div style="margin: 6.41px 0px 4.32px 0px; "><p align="center" style="line-height:21px;margin-top:0px;margin-bottom:11.25px;" class="Style4">Allumer / éteindre ma lampe</p></div></div></a></div>
</footer>
</div>
</div>
<script>
function preloader() {
if (document.images) {
var i0=new Image();
i0.src ='images/home/shape_8.png';
}
}
function addLoadEvent(func) {
window.onload = func;
}
addLoadEvent(preloader);
</script>
</body>
</html>
