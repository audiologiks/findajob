// for the client to access an application to dial a twilio phone number with a dial pad for IVR input


<?php
// @start snippet.  Put in your Twilio token and password, as well as the app token
include 'xxxxxxx/Services/Twilio/Capability.php';

$accountSid = 'Axxxxxxxxx';
$authToken  = 'xxxxxxxxxx';

$token = new Services_Twilio_Capability($accountSid, $authToken);
$token->allowClientOutgoing('application #');
$token->allowClientIncoming("xxxxxxx");
// @end snippet
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Title for the html page and metadata, style sheet-->
<title>Example of a soft client for Twilio</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="https://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
		<title>
			Click to Call
		</title>
		<!-- updated the js from Twilio and Google-->
<script type="text/javascript" src="//static.twilio.com/libs/twiliojs/1.4/twilio.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

		<script type="text/javascript">
	

		$(document).ready(function(){

			Twilio.Device.setup("<?php echo $token->generateToken();?>");
			var connection=null;
			
			$("#call").click(function() {  
				params = { "tocall" : $('#tocall').val()};
				connection = Twilio.Device.connect(params);
			});
			$("#hangup").click(function() {  
				Twilio.Device.disconnectAll();
			});

			Twilio.Device.ready(function (device) {
				$('#status').text('Ready to start call');
			});

			Twilio.Device.incoming(function (conn) {
				if (confirm('Accept incoming call from ' + conn.parameters.From + '?')){
					connection=conn;
				    conn.accept();
				}
			});

			Twilio.Device.offline(function (device) {
				$('#status').text('Offline');
			});

			Twilio.Device.error(function (error) {
				$('#status').text(error);
			});

			Twilio.Device.connect(function (conn) {
				$('#status').text("Successfully established call");
				toggleCallStatus();
			});

			Twilio.Device.disconnect(function (conn) {
				$('#status').text("Call ended");
				toggleCallStatus();
			});
			
			function toggleCallStatus(){
				$('#call').toggle();
				$('#hangup').toggle();
				$('#dialpad').toggle();
			}

			$.each(['0','1','2','3','4','5','6','7','8','9','star','pound'], function(index, value) { 
		    	$('#button' + value).click(function(){ 
					if(connection) {
						if (value=='star')
							connection.sendDigits('*')
						else if (value=='pound')
							connection.sendDigits('#')
						else
							connection.sendDigits(value)
						return false;
					} 
					});
			});


		});

		</script>
		<!-- @end snippet -->
	</head>
	<body>
				<div align="center">
			<!-- @start snippet -->
			Number to call: <input type="text" id="tocall" value="">
			<input type="button" id="call" value="Start Call"/>
			<input type="button" id="hangup" value="Hangup Call" style="display:none;"/>
			<div id="status">
				Offline
			</div>
			<div id="dialpad" style="display:none;">
				<table>
				<tr>
				<td><input type="button" value="1" id="button1"></td>
				<td><input type="button" value="2" id="button2"></td>
				<td><input type="button" value="3" id="button3"></td>
				</tr>
				<tr>
				<td><input type="button" value="4" id="button4"></td>
				<td><input type="button" value="5" id="button5"></td>
				<td><input type="button" value="6" id="button6"></td>
				</tr>
				<tr>
				<td><input type="button" value="7" id="button7"></td>
				<td><input type="button" value="8" id="button8"></td>
				<td><input type="button" value="9" id="button9"></td>
				</tr>
				<tr>
				<td><input type="button" value="*" id="buttonstar"></td>
				<td><input type="button" value="0" id="button0"></td>
				<td><input type="button" value="#" id="buttonpound"></td>
				</tr>
				</table>
			</div>
<div>
<table border="1"  style="float:left;">
	<tbody>
		<font="4">
<tr><th>Button</th><th>Company</th></tr>
<tr><td>#12 </td><td> <a href="http://www.VMWare.com"> VMWare</a> update</td>
<tr><td>#13</td><td><a href="http://www.aol.com">AOL </a> update - An internet content company</td>
<tr><td>#14 </td><td><a href="http://www.trw.com">TRW</a> earnings</a> update - An Automotive Parts Company</td>
<tr><td>#19 </td><td><a href="http://www.facebook.com">Facebook</a> update A social network company</td>
<tr><td>#20 </td><td><a href="http://www.broadcom.com"> Broadcom</a> update - A semiconductor company (bought by Avago)</td>
<tr><td>#21 </td><td><a href="http://www.emc.com">EMC</a> update - A storage networking company (bought by Dell)</td>
<tr><td>#22 </td><td> <a href="http://www.cognizant.com">Cognizant</a> earnings update - An IT and Business Process Outsourcing company</td>
<tr><td>#23 </td><td> <a href="http://www.cisco.com">Cisco</a> update - A networking equipment company</td>
<tr><td>#24 </td><td><a target="_blank" href="http://www.intel.com">Intel</a> update - A semiconductor company</td>
<tr><td>#25</td><td> <a href="http://www.microsoft.com">Microsoft</a> update - A software company</td>
<tr><td>#26 </td><td><a href="http://www.salesforce.com">Salesforce</a> update - A Software as a Service company</td>
<tr><td>#27</td><td><a href="http://www.tesla.com">Tesla</a>update - An electric car and battery company</td>


<tr></tr>
</font>
</tbody>
</table>	
			<table border="1"   style="float:left;">
	<tbody>
		<font="4">
<tr><th>Button</th><th>Company</th></tr>
<tr><td>#15</td><td><a href="http://www.libertymedia.com">Liberty Media Q4 2013</a>update</td>
<tr><td>#16 </td><td><a target="_blank" href="http://www.saic.com">SAIC</a> update</td>
<tr><td>#17</td><td> <a href="http://www.novagold.com">Novagold</a> update</td>
<tr><td>#18 </td><td><a href="http://www.jpmorgan.com">JP Morgan</a> update</td>
<tr><td>#19</td><td><a href="http://www.abbott.com">Abbott (Duplicate)</a> update</td>
<tr><td>#20 </td><td> <a href="http://www.cs.com">Credit Suisse</a> Q1 2014 update</td>
<tr><td>#21 </td><td><a href="http://www.cs.com">Credit Suisse (Part 2)</a> update</td>
<tr><td>#22</td><td><a href="http://www.netflix.com"> Netflix</a> update</td>
<tr><td>#23 </td><td> <a href="http://www.rambus.com"> Rambus</a> update</td>
<tr><td>#24</td><td> <a href="http://www.checkpointsoftware.com">Checkpoint Software</a> earnings update</td>
<tr><td>#25</td><td><a href="http://www.tenneco.com">Tenneco </a> update</td>
<tr><td>#26</td><td><a href="http://www.limelightnetworks.com">Limelight Networks</a> earnings</a> update</td>
<tr></tr>
</font>
</tbody>
</table>
			<table border="1"   style="float:left;">
	<tbody>
		<font="4">
<tr><th>Button</th><th>Company Webcast / Application</th></tr>
<tr><td>#1</td><td><a href="http://www.audiologiks.com/m">Main Call Client (logiks app)</a></td>

<tr><td>#30</td><td><a href="http://www.yahoo.com">Yahoo</a> update</td>
<tr><td>#8 </td><td> <a href="http://www.Alcoa.com">Alcoa</a> update</td>
<tr><td>#9 </td><td><a href="http://www.Salesforce.com">Salesforce</a> update</td>
<tr><td>#10 </td><td><a href="http://www.Teradata.com"> Teradata</a> update</td>
<tr><td>#11 </td><td> <a href="http://www.VMWare.com"> VMWare</a> update</td>
<tr><td>#12 </td><td> <a href="http://www.aol.com">Aol</a> earnings update</td>
<tr><td>#13</td><td><a href="http://www.trw.com">TRW </a> update</td>
<tr><td>#14 </td><td><a href="http://www.bnymellon.com">BNY Mellon</a> earnings</a> update</td>
<tr></tr>
</font>
</tbody>
</table>
			
			</div>
	</body>
</html>
