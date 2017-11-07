<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';
    
	$user_pushed = (int) $_REQUEST['Digits'];

	if ($user_pushed == 0)
	{
	echo '<Redirect>http://xxxxxxx/tk_server/clicktocall/misawa/hello-misawa.php</Redirect>';
	}
	else if ($user_pushed == 1)
	{
        echo '<Gather action="http://safe-sea-5987.herokuapp.com/public/tk_server/clicktocall/misawa/handle-student.php" numDigits="8">';
 	echo '<Say voice="alice" language="ja-JP">日本語のメニューです。弊社のウェブサイトかフェースブークに番号が表示されています。ログイン番号と専用メニュー番号も入力できます。</Say>';
	echo '<Say voice="alice" language="ja-JP">毎月の英語練習メニューを探してるかた、１０９９番を入力してください。</Say>';
	echo '<Say voice="alice" language="ja-JP">６番を入力すると練習内容を録音できます。弊社の担当が評価させていただきます。３分までの録音ができます。</Say>';
	echo '<Say voice="alice" language="ja-JP">15番から19番までのそれぞれの番号を入力すると写真の質問に対する答えいを録音できます。弊社の担当が評価させていただきます。３分までの録音ができます。</Say>';
	echo '<Say voice="alice" language="ja-JP">３２番を入力すると、２行の日本語と英語の翻訳内容を聞きます。</Say>';
	echo '<Say voice="alice" language="ja-JP">３２番を入力すると、２行の日本語と英語の翻訳内容を聞きます。</Say>';
	echo '<Say voice="alice" language="ja-JP">３３番を入力すると日本語の記事を聞くことができます。</Say>';
	echo '<Say voice="alice" language="ja-JP">３４番を入力すると、日本語と英語のヘードラインを聞きます。</Say>';
	echo '</Gather>';
	echo '<Say voice="alice" language="ja-JP">最初のメニューに戻ります。少々お待ちください。</Say>';
        echo '<Redirect method="GET">http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-input.php"</Redirect>';
	}
	# @end snippet
	 else if ($user_pushed == 2)
	{
	echo '<Gather action="http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-e.php" numDigits="8">';
	echo '<Say>Welcome to the English menu. </Say>';
	echo '<Say>Please look at our website for our monthly practice Menu. If you know the option you want, please enter that.</Say>';
	echo '<Say>If you are looking at our Monthly English Practice menu, please enter 1099. If you know the option you want, please enter that.</Say>';
	echo '<Say>Press 6 to record your own speech and send it to us. You have 3 minutes</Say>';
	echo '<Say>Press 15 to 19 to record answers to different questions for the picture description practice and send it to us. You have 3 minutes</Say>';
	echo '<Say>Press 32 to listen to a short translation of two sentences from Japanese to English from the newspaper.</Say>';
	echo '<Say>Press 33 to listen to an article in Japanese</Say>';
	echo '<Say>Press 34 to listen to a collection of headlines in Japanese and English.</Say>';
	echo '</Gather>';
	echo "<Say>Sorry, I didn't get your response.</Say>";
	echo "<Say>Going back to the beginning of the menu. If you are finished, please hang up.</Say>";
	echo '<Say>Sorry, I did not get that. Please enter the number again. すみません、も一度押してください。</Say>';
    	echo '<Redirect method="GET">http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-e.php"</Redirect>';
    }
	# @start snippet
	else if ($user_pushed == 3)
	{
	echo '<Say>Connecting you to Support.</Say>';
	echo '<Dial record="true" callerId="xxxxxxxx">';
	echo '<Client>jenny</Client>';
	echo '</Dial>';
	}
	# @end snippet
	# @start snippet
  	elseif ($user_pushed == 5)
	{
	echo "<Say>Connecting to Sales Force dot com.</Say>";
     	echo '<Redirect>http://xxxxxxx/kddiweb/sf/mail-e.php</Redirect>';
    }
# @start snippet
  	elseif ($user_pushed == 6)
	{
	echo "<Say>Connecting to the Recording System.  </Say>";
     	echo '<Redirect>http://xxxxxxx/kddiweb/inte/mail-e.php</Redirect>';
    }
	# @start snippet
  	elseif ($user_pushed == 7)
	{
	echo "<Say>Connecting to Zen Desk for Audio lojiks</Say>";
     	echo '<Redirect>http://xxxxxxx/kddiweb/inte/mail-zendesk-e.php</Redirect>';
    }
	# @start snippet
  	elseif ($user_pushed == 8) 
  {
   	echo "<Say>Connecting to Tumbler </Say>";
   	echo '<Redirect>http://xxxxxxx/kddiweb/inte/mail-tumblr-e.php</Redirect>';
  } 
  	# @start snippet
	else if ($user_pushed == 9)
	{
	echo "<Say>Connecting to outlook</Say>";
	echo '<Redirect>http://xxxxxxx/kddiweb/inte/mail-work-e.php</Redirect>';
	}
   	elseif ($user_pushed == 1099) 
  {
   	echo '<Redirect>http://xxxxxxx/uk_server/prod01a/qt10/hello-101.php</Redirect>';
?>
