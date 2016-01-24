<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';
    
	$user_pushed = (int) $_REQUEST['Digits'];

	if ($user_pushed == 0)
	{
		echo '<Redirect>http://safe-sea-5987.herokuapp.com/public/tk_server/clicktocall/misawa/hello-misawa.php</Redirect>';
	}
	# @start snippet
	else if ($user_pushed == 20160124)
   { 
	echo '<Gather action="http://safe-sea-5987.herokuapp.com/public/tk_server/clicktocall/misawa/web_jenny.php" numDigits="2">';
	echo "<Say>Press the key code or the button on the web client for the word you want to listen to</Say>";
	echo '</Gather>';
	echo '<Redirect method="GET">http://safe-sea-5987.herokuapp.com/public/tk_server/clicktocall/misawa/web_jenny.php</Redirect>';   
   } 
   # @end snippet
	# @end snippet
	
	else if ($user_pushed ==2)
	{
     echo '<Redirect method="GET">http://safe-sea-5987.herokuapp.com/public/uk_server/prod01a/mail/menu-e.php</Redirect>';
    }
	# @start snippet
	else if ($user_pushed == 3)
	{
		echo '<Say>Connecting you to Support.</Say>';
		echo '<Dial record="true" callerId="+819072840430">';
		echo '<Client>jenny</Client>';
		echo '</Dial>';
	}
	# @end snippet
		# @start snippet
	else if ($user_pushed == 5)
	{
		echo '<Say>Welcome to the Language Exchange .</Say>';
		echo '<Say>To create your own set of words, just send us a text file with the words separated by commas</Say>';
		echo '<Say>Click How to on the page to find instructions how to submit your own word sets</Say>';
		echo '<Say>To record words, please listen for the beep. Recordings are kept for 7 days and then deleted. Please contact us at the meetup to register for this app.</Say>';
		echo '<Say>Please record your words and phrases. You have 30 seconds for each</Say>';
		echo '<Record maxLength="30" action="http://www.audiologiks.com/m/kddiweb/handle-candidate-recording-e.php"/>';
	
	}
	# @end snippet
	else if ($user_pushed == 6)
	{
		echo '<Play>https://s3-ap-northeast-1.amazonaws.com/all-jp-1/audio/8611/RE841184c9f0be7861fa938b30ceca80ee.wav</Play>';

	}
	# @end snippet
	else if ($user_pushed == 1)
	{
		echo '<Play>https://s3-ap-northeast-1.amazonaws.com/all-jp-1/audio/8611/RE841184c9f0be7861fa938b30ceca80ee.wav</Play>';

	}
	# @end snippet
	echo '</Response>';
?>
