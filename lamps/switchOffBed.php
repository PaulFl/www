<!DOCTYPE html>
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta name="apple-mobile-web-app-capable" content="yes">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-63581217-1', 'auto');
    ga('send', 'pageview');

    </script>
 
        <title>Switched off !</title>
        <meta charset="utf-8" />
    </head>
    <body>
<?
	// Switch light on
	shell_exec('sudo gpio write 11 0');
	header('Location: switch-lamp.php#bed');
?>
        
    </body>
</html>
