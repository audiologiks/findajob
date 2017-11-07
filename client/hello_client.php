<?php
include 'xxxxxxx/Services/Twilio/Capability.php';
 
// put your Twilio API credentials here
$accountSid = 'Axxxxxxxxxxxx';
$authToken  = 'xxxxxxxxxxxxx';
 
// put your Twilio Application Sid here
$appSid     = 'xxxxxxxxxxxxxx';
 
// put your default Twilio Client name here
$clientName = 'xxxxxx A';
 
// get the Twilio Client name from the page request parameters, if given
if (isset($_REQUEST['logiks'])) {
    $clientName = $_REQUEST['xxxxxxx B'];
}
 
$capability = new Services_Twilio_Capability($accountSid, $authToken);
$capability->allowClientOutgoing($appSid);
$capability->allowClientIncoming($clientName);
$token = $capability->generateToken();
?>
 
<!DOCTYPE html>
<html>
  <head>
    <title>jenny</title>

    <!-- updated the js from Twilio and Google-->
<script type="text/javascript" src="//static.twilio.com/libs/twiliojs/1.4/twilio.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <link href="http://static0.twilio.com/packages/quickstart/client.css"
      type="text/css" rel="stylesheet" />
      
    <script type="text/javascript">
 
      Twilio.Device.setup("<?php echo $token; ?>");
 
      Twilio.Device.ready(function (device) {
        $("#log").text("Client '<?php echo $clientName ?>' is ready");
      });
 
      Twilio.Device.error(function (error) {
        $("#log").text("Error: " + error.message);
      });
 
      Twilio.Device.connect(function (conn) {
        $("#log").text("Successfully established call");
      });
 
      Twilio.Device.disconnect(function (conn) {
        $("#log").text("Call ended");
      });
 
      Twilio.Device.incoming(function (conn) {
        $("#log").text("Incoming connection from " + conn.parameters.From);
        // accept the incoming connection and start two-way audio
        conn.accept();
      });
 
      Twilio.Device.presence(function (pres) {
        if (pres.available) {
          // create an item for the client that became available
          $("<li>", {id: pres.from, text: pres.from}).click(function () {
            $("#number").val(pres.from);
            call();
          }).prependTo("#people");
        }
        else {
          // find the item by client name and remove it
          $("#" + pres.from).remove();
        }
      });
 
      function call() {
        // get the phone number or client to connect the call to
        params = {"PhoneNumber": $("#number").val()};
        Twilio.Device.connect(params);
      }
 
      function hangup() {
        Twilio.Device.disconnectAll();
      }
    </script>
  </head>
  <body>
    <button class="call" onclick="call();">
      Call
    </button>
 
    <button class="hangup" onclick="hangup();">
      Hangup
    </button>
 
    <input type="text" id="number" name="number"
      placeholder="Enter a phone number or client to call"/>
 
    <div id="log">Loading pigeons...</div>
 
    <ul id="people"/>
  </body>
</html>
