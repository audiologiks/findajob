<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	$user_pushed = (int) $_REQUEST['Digits'];

	if ($user_pushed == 0)
	{
		echo '<Redirect>http://www.audiologiks.com/tmp/audio/recording/recording/hello-monkey-handle-key.php</Redirect>';
	}
	# @start snippet
	else if ($user_pushed == 1)
	{
		echo '<Gather action="http://www.audiologiks.com/tmp/audio/recording/recording/handle-extension.php" numDigits="1">';
		echo "<Say>Please enter your party's extension.</Say>";
		echo '<Say>Press 0 to return to the main menu</Say>';
		echo '</Gather>';
		echo "<Say>Sorry, I didn't get your response.</Say>";
		echo '<Redirect method="GET">http://www.audiologiks.com/tmp/audio/recording/recording/hello-monkey-handle-key.php</Redirect>';
	}
	# @end snippet
	
	else if ($user_pushed == 2)
	{
		echo '<Say>Record your message after the tone.</Say>';
	   echo '<Record maxLength="30" action="http://www.audiologiks.com/tmp/audio/recording/hello-monkey-handle-recording.php"/>';
	}
	# @start snippet
	else if ($user_pushed == 3)
	{
		echo '<Play>http://www.audiologiks.com/tmp/audio/recording/recording/welcome-june.mp3</Play>';
		echo '<Play>http://www.audiologiks.com/tmp/audio/recording/recording/salesforce.wav</Play>';
	}
	# @end snippet
	else if ($user_pushed == 4)
	{
		echo '<Play>http://www.audiologiks.com/tmp/audio/recording/recording/welcome-june.mp3</Play>';
		echo '<Play>http://www.audiologiks.com/sites/default/files/linkedinq1.wav</Play>';
	
	}
	# @start snippet
   elseif ($user_pushed == 5) 
   { 
   echo "<Say>Your recording will start soon</Say>";
	echo '<Play>http://www.audiologiks.com/tmp/audio/recording/recording/ciena-quarter.wav</Play>	';
   } 
   # @end snippet
  elseif ($user_pushed == 6)
  { 
  echo "<Say>Your recording will start soon</Say>";
	echo '	<Play>/tmp/audio/recording/recording/LibertyMedia/LibertyMediaQ1Results.mp3</Play>	';
  } 
  elseif ($user_pushed == 7)
  { 
  echo "<Say>Your recording will start soon</Say>";
	echo '	<Play>/tmp/audio/att.wav</Play>	';
	} 
  elseif ($user_pushed == 88) 
  { 
   echo "<Say>Your recording will start soon</Say>";
	echo '<Play>http://www.audiologiks.com/tmp/audio/recording/recording/alcoa-quarter.wav</Play>';
  } 
   elseif ($user_pushed == 9) 
  { 
    echo "<Say>Your recording will start soon</Say>";
	echo '<Play>/tmp/audio/recording/recording/Medidata/14-04-08-22-20-31.wav</Play>';
   } 
   elseif ($user_pushed == 27) 
  { 
    echo "<Say>Your recording will start soon</Say>";
	echo '<Play>/tmp/audio/recording/recording/SAIC/SAIC-Earnings-Part1.mp3</Play>';
   } 
   elseif ($user_pushed == 10) 
   { 
    echo "<Say>Your recording will start soon</Say>";
	echo '<Play>/tmp/audio/recording/recording/Teradata/teradata-qr.mp3</Play>';

   } 
   elseif ($user_pushed == 11) 
   { 
    echo "<Say>Your recording will start soon</Say>";
	echo '<Play>/tmp/audio/recording/recording/VMWARE/14-03-30-23-25-01.wav</Play>';

   } 
   elseif ($user_pushed == 12) 
   { 
    echo "<Say>Your recording will start soon</Say>";
	echo '<Play>/tmp/audio/recording/recording/aol.wav</Play>';
 } 
 elseif ($user_pushed == 13) 
 { 
echo "<Say>Your recording will start soon</Say>";
	echo '<Play>/tmp/audio/recording/recording/trw.wav</Play>';
 } 
 elseif ($user_pushed == 123456) 
 { 
echo "<Say>Your recording will start soon</Say>";
	echo '<Play>/tmp/audio/recording/recording/verint.wav</Play>';
} 
elseif ($user_pushed == 14) 
{ 
echo "<Say>Your recording will start soon</Say>";
	echo '<Play>/tmp/audio/recording/recording/bnymellon.wav</Play>';
 } 
 elseif ($user_pushed == 15) 
 { 
echo "<Say>Your recording will start soon</Say>";
	echo '<Play>/tmp/audio/recording/recording/test2.wav</Play>';
 } 
 elseif ($user_pushed == 16) 
 { 
echo "<Say>Your recording will start soon</Say>";
	echo '<Play>/tmp/audio/recording/recording/test3.mp3</Play>';
 } 
 elseif ($user_pushed == 17) 
 { 
   echo "<Say>Your recording will start soon</Say>";
	echo '<Play>/tmp/audio/recording/recording/test4.wav</Play>';
 } 
 elseif ($user_pushed == 18) 
 { 
echo "<Say>Your recording will start soon</Say>";
	echo '<Play>/tmp/audio/recording/recording/test5.wav</Play>';
 } 
 elseif ($user_pushed == 19) 
 { 
echo "<Say>Your recording will start soon</Say>";
echo '<Play>/tmp/audio/recording/recording/test6.wav</Play>';
 } 
 elseif ($user_pushed == 20) 
 { 
echo "<Say>Your recording will start soon</Say>";
echo '<Play>/tmp/audio/recording/recording/test7.wav</Play>';
 } 
 elseif ($user_pushed == 21) 
 { 
echo "<Say>Your recording will start soon</Say>";
echo '<Play>/tmp/audio/recording/recording/test8.wav</Play>';
 } 
 elseif ($user_pushed == 22) 
 { 
echo "<Say>Your recording will start soon</Say>";
echo '<Play>/tmp/audio/recording/recording/test9.wav</Play>';
 } 
 elseif ($user_pushed == 23) 
 { 
echo "<Say>Your recording will start soon</Say>";
echo '<Play>/tmp/audio/recording/recording/test10.wav</Play>';
 } 
 elseif ($user_pushed == 24) 
 { 
echo "<Say>Your recording will start soon</Say>";
echo '<Play>/tmp/audio/recording/recording/test11.wav</Play>';
 } 
 elseif ($user_pushed == 25) 
 { 
echo "<Say>Your recording will start soon</Say>";
echo '<Play>/tmp/audio/recording/recording/tenneco.wav</Play>';
 } 
 elseif ($user_pushed == 26) 
 { 
echo "<Say>Your recording will start soon</Say>";
echo '<Play>/tmp/audio/recording/recording/test13.wav</Play>';
}

	echo '</Response>';
?>
