<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	# @start snippet
	$user_pushed = (int) $_REQUEST['Digits'];
	# @end snippet

	if ($user_pushed == 0)
	{
		echo '<Say>Taking you back to the main menu</Say>';
		echo '<Redirect>http://www.audiologiks.com/tmp/audio/recording/recording/hello-monkey-handle-key.php</Redirect>';
	}
	# @start snippet
	else if ($user_pushed == 1)
	{
		echo '<Say>Connecting you to Tom.</Say>';
		echo '<Dial>+81-xxxx-xxxx</Dial>';
	}
	# @end snippet
	else if ($user_pushed == 2)
	{
		echo '<Say>Connecting you to the Editor.</Say>';
		echo '<Dial>+81-xxxx-xxxx</Dial>';
	}
	else {
		echo "<Say>Sorry, that extension is unknown.</Say>";
		echo '<Redirect method="GET">http://www.audiologiks.com/tmp/audio/recording/recording/handle-user-input.php?Digits=0</Redirect>';
	}

	echo '</Response>';
?>
