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
<script type="text/javascript">
		(function(document,navigator,standalone) {
			// prevents links from apps from oppening in mobile safari
			// this javascript must be the first script in your <head>
			if ((standalone in navigator) && navigator[standalone]) {
				var curnode, location=document.location, stop=/^(a|html)$/i;
				document.addEventListener('click', function(e) {
					curnode=e.target;
					while (!(stop).test(curnode.nodeName)) {
						curnode=curnode.parentNode;
					}
					// Condidions to do this only on links to your own app
					// if you want all links, use if('href' in curnode) instead.
					if(
						'href' in curnode && // is a link
						(chref=curnode.href).replace(location.href,'').indexOf('#') && // is not an anchor
						(	!(/^[a-z\+\.\-]+:/i).test(chref) ||                       // either does not have a proper scheme (relative links)
							chref.indexOf(location.protocol+'//'+location.host)===0 ) // or is in the same protocol and domain
					) {
						e.preventDefault();
						location.href = curnode.href;
					}
				},false);
			}
		})(document,window.navigator,'standalone');
	</script>
 
        <title>Switched off !</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Switched off !</h2>

        <p>
                La lumière a été éteinte
        </p>
<?
	// Render page
//	flush();	

	require "twitteroauth/autoload.php";
	use Abraham\TwitterOAuth\TwitterOAuth;

	// Get everything you need from the dev.twitter.com/apps page
	$consumer_key = 'IFVAz6ntL0xQoM5OiNApNunh1';
	$consumer_secret = 'FAKieTWfnh87ktrKSRsUtQWBCOIYHyDXdGGNttrTBucoMqg7IJ';
	$oauth_token = '3030260469-9JMhdatw1gy6tpqlAqY9c9M5ZKR35feyvYLwtuA';
	$oauth_token_secret = '8NvbhJtTVrmEjjJs4mhJs1DXBeJdYbDRoRm8sTUUqZtpo';

	// Initialize the connection
	$connection = new TwitterOAuth($consumer_key, $consumer_secret, $oauth_token, $oauth_token_secret);

	// Get IP adress and write it in logs/IPs.log
	$handle = fopen("logs/IPs.log", "a+");
	date_default_timezone_set('Europe/Paris');
	fwrite($handle, date(DATE_RFC2822));
	fwrite($handle, " : ");
	fwrite($handle, $_SERVER["REMOTE_ADDR"]);
	fwrite($handle, " : paulf.tk/switchOffBed.php");
	fwrite($handle, "\n");

	// Send a direct message
	$options = array("screen_name" => "@fleurypaul", "text" => "{$_SERVER["REMOTE_ADDR"]} a éteint la lampe Bed");
	$connection->post('direct_messages/new', $options);

	// Switch light on
	shell_exec('sudo gpio write 11 0');
	header('Location: switch-lamp.php#bed');
?>
        
    </body>
</html>
