<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';
    
	$user_pushed = (int) $_REQUEST['Digits'];

	if ($user_pushed == 0)
	{
		echo '<Redirect>http://safe-sea-5987.herokuapp.com/public/tk_server/clicktocall/misawa/hello-misawa.php</Redirect>';
	}
	else if ($user_pushed == 1)
	{
        echo '<Gather action="http://safe-sea-5987.herokuapp.com/public/tk_server/clicktocall/misawa/handle-student.php" numDigits="8">';
		echo '<Say voice="alice" language="ja-JP">ありがとうございます。</Say>';
		echo '<Say voice="alice" language="ja-JP">アクセスコードを入力してください。もしなかったら１０００を押してください</Say>';
		echo '<Pause>';
		echo '</Pause>';
		echo '<Say voice="alice" language="ja-JP">サポート担当にをお話したいかた、3番を押してください</Say>';
        echo '</Gather>';
		echo '<Say>Sorry, I did not get that. Please enter the number again. すみません、も一度押してください。</Say>';
        echo '<Redirect method="GET">http://safe-sea-5987.herokuapp.com/public/tk_server/clicktocall/misawa/handle-student-input.php"</Redirect>';
	}
	# @end snippet
	# @start snippet
	else if ($user_pushed == 2291968)
   { 
	echo '<Gather action="http://safe-sea-5987.herokuapp.com/public/tk_server/clicktocall/misawa/20160124.php" numDigits="2">';
	echo "<Say>Press the code or the button for the office or company you want to connect to</Say>";
	echo '</Gather>';
	echo '<Redirect method="GET">http://safe-sea-5987.herokuapp.com/public/tk_server/clicktocall/misawa/20160124.php</Redirect>';   
   } 
   # @end snippet
	# @end snippet
	
	 else if ($user_pushed == 2)
	{
	echo '<Gather action="http://safe-sea-5987.herokuapp.com/public/tk_server/clicktocall/misawa/handle-student-e.php" numDigits="8">';
    echo '<Say>Thank you for using the Twilio at Naka Meguro Meetup Services </Say>';
	echo '<Say>Please enter your access code. If you have one, just press 1 0 0 0</Say>';
	echo '<Pause>';
	echo '</Pause>';
	echo '<Say>To speak to a support representative, press 3</Say>';
	echo '</Gather>';
	echo '<Say>Sorry, I did not get that. Please enter the number again. すみません、も一度押してください。</Say>';
    echo '<Redirect method="GET">http://safe-sea-5987.herokuapp.com/public/tk_server/clicktocall/misawa/handle-student-e.php"</Redirect>';
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
		echo '<Say>Welcome to the Misawa Directory by Tom.</Say>';
		echo '<Say>We include information on local businesses accessible by phone or p c</Say>';
		echo '<Say>Stay tuned. We will update as we get more information.</Say>';
			
		echo '<Redirect>http://safe-sea-5987.herokuapp.com/public/tk_server/clicktocall/misawa/hello-misawa.php</Redirect>';
	
	}
	# @end snippet
	else if ($user_pushed == 4)
	{
		echo '<Play>https://s3-ap-northeast-1.amazonaws.com/all-jp-1/audio/8611/RE841184c9f0be7861fa938b30ceca80ee.wav</Play>';

	}
	# @end snippet
	else if ($user_pushed == 6)
	{
		echo '<Play>https://s3-ap-northeast-1.amazonaws.com/all-jp-1/audio/8611/RE841184c9f0be7861fa938b30ceca80ee.wav</Play>';

	}
	# @end snippet
	echo '</Response>';
?>
