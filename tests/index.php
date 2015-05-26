<!DOCTYPE html>
<html>
    <head>
        <title>index.php</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>paulf.tk/tests/index.php</h2>
        
        <p>
		PHP output:</br>
<?php
        echo exec('whoami');
	echo("Ton adresse IP est: ");
	echo $_SERVER["REMOTE_ADDR"];
	$handle = fopen("../logs/IPs.log", "a+");
	date_default_timezone_set('Europe/Paris');
	fwrite($handle, date(DATE_RFC2822));
	fwrite($handle, " : ");
	fwrite($handle, $_SERVER["REMOTE_ADDR"]);
	fwrite($handle, " : paulf.tk/tests/index.php");
	fwrite($handle, "\n");
?>
        </p>
        
    </body>
</html>
