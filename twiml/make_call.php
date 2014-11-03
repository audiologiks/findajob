<?php
require "xxxxx/Services/Twilio.php";
/* Set our AccountSid and AuthToken */
$accountSid = 'Axxxxxxxxxxxxxxxxxxxxxxx';
$authToken = 'xxxxxxxxxxxxxxxxxxxxxxx';
/* Your Twilio Number or an Outgoing Caller ID you have previously validated
with Twilio */
$from= '+81xxxxxxxxx';
/* Number you wish to call */
$to= '+81xxxxxxxxx';
/* Directory location for callback.php file (for use in REST URL)*/
$url = 'xxxxxxxx/makecall.php';
/* Instantiate a new Twilio Rest Client */
$client = new Services_Twilio($AccountSid, $AuthToken);
if (!isset($_REQUEST['called']) || strlen($_REQUEST['called']) == 0) {
$err = urlencode("Must specify your phone number");
header("Location: index.php?msg=$err");
die;
}
/* make Twilio REST request to initiate outgoing call */
$call = $client->account->calls->create($from, $to, $url . 'callback.php?number=' . $_REQUEST['called']);
/* redirect back to the main page with CallSid */
$msg = urlencode("Connecting... ".$call->sid);
header("Location: index.php?msg=$msg");
?>
