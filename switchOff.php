<!DOCTYPE html>
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
	fwrite($handle, " : paulf.tk/switchOff.php");
	fwrite($handle, "\n");

	// Send a direct message
	$options = array("screen_name" => "@fleurypaul", "text" => "{$_SERVER["REMOTE_ADDR"]} a éteint la lampe");
	$connection->post('direct_messages/new', $options);

	// Switch light on
	shell_exec('rpio --setoutput 8:0');
?>
        
    </body>
</html>
