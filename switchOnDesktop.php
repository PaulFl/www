<!DOCTYPE html>
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta name="apple-mobile-web-app-capable" content="yes">
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
 
        <title>Switched on !</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Switched on !</h2>

        <p>
                La lumière a été allumée
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
	fwrite($handle, " : paulf.tk/switchOnDesktop.php");
	fwrite($handle, "\n");

	// Send a direct message
	$options = array("screen_name" => "@fleurypaul", "text" => "{$_SERVER["REMOTE_ADDR"]} a allumé la lampe Desktop");
	$connection->post('direct_messages/new', $options);

	// Switch light on
	shell_exec('sudo gpio write 10 1');
	header('Location: switch-lamp.php#desktop');
?>
        
    </body>
</html>
