<?php

	header("content-type: text/xml");
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
	<Say>Thanks for leaving a message... please listen to it or hangup.</Say>
	<Play><?php echo $_REQUEST['RecordingUrl']; ?></Play>
	<Say>Goodbye.</Say>
</Response>
