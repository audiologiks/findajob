<?php
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';


	echo '<Gather numDigits="8" action="http://safe-sea-5987.herokuapp.com/public/tk_server/clicktocall/misawa/handle-user-input.php" method="POST">';
	echo '<Say>Hello, welcome to the Audio lojiks service in. We have set up this web application to help provide Japanese and English exchange services.</Say>';
	echo '<Say voice="alice" language="ja-JP">日本語を聞きたいかた、一番を押してください。</Say>';
	echo '<Say>If you would like to listen to this menu in English, please press 2 now</Say>';
	echo '<Say voice="alice" language="ja-JP">サポート担当にをお話したいかた、3番を押してください</Say>';
	echo '<Say>To speak to a support representative, please press 3</Say>';
	echo '</Gather>';
	echo '<Say>Sorry, I did not get that. Please enter the number again.</Say>';
	echo '<Say voice="alice" language="ja-JP">すみません、も一度押してください。</Say>';
	echo '<Redirect>http://safe-sea-5987.herokuapp.com/public/tk_server/clicktocall/misawa/hello-misawa.php</Redirect>';
    echo '</Response>';
?>
