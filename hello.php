<?php
	// make an associative array of callers we know, indexed by phone number
	$people = array(
		"+81-xxxx-xxxx"=>"Tom",
		"+81-xxxx-xxxx"=>"BT",
                "+81-xxxx-xxxx"=>"Work",
                "xxxx-xxxx"=>"Boss",
		
	);
	
	// if the caller is known, then greet them by name
	// otherwise, consider them just another monkey
	if(!$name = $people[$_REQUEST['From']])
		$name = "Guest";
		
	// now greet the caller
	header("content-type: text/xml");
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
	<Say>Welcome to the Earnings Call. It is June 29th, 2014 in Tokyo. Please visit www.audiologiks.com to see our homepage. Hello <?php echo $name ?>.</Say>
<Say voice="alice" language="ja-JP">こにちわ</Say>
<Say>
The weather today is:
light rain now and expected later




</Say>

	<Gather numDigits="6" action="http://www.audiologiks.com/tmp/audio/recording/recording/handle-user-input.php" method="POST">

	<Say>To contact the editor, please press 1</Say>
        <Say>To leave a message, please press 2</Say>
        <Say>To listen to a Salesforce . com earnings call, please press 3</Say>
        <Say>To listen to a Linked In earnings call, please press 4</Say>

	</Gather>
        <Say>Sorry, I didn't get your response.</Say>
	<Redirect>http://www.audiologiks.com/tmp/audio/recording/recording/recording/hello-monkey.php</Redirect>
</Response>
