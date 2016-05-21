<?php
// @start snippet
include 'twilio-php-latest/Services/Twilio/Capability.php';

$accountSid = 'xxxxxxxx';
$authToken  = 'xxxxxxxxx';

$token = new Services_Twilio_Capability($accountSid, $authToken);
$token->allowClientOutgoing('xxxxxxxxxxx');
$token->allowClientIncoming("xxxxxxxxxxx");
// @end snippet
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>**** Name of Client ****</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="https://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
	<!-- Google Tag Manager -->
<noscript><iframe src="xxxxxxxx"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','xxxxxxx');</script>
<!-- End Google Tag Manager -->

	<?php include_once("analyticstracking.php") ?>
<!-- start header -->
<div id="header">
</div>
<div id="logo">
	<h1><font color="white">
Audiologiks: Misawa Directory</font></h1>
		</div>
<!-- end header -->
<hr />
<!-- start page -->
<div id="page">
	<div id="menu">
	<ul>
			<li class="current_page_item">
				<a href="https://www.audiologiks.com/numerology/index.php">Home</a></li>
						<li><a title="Bars, Beauty & Massage, Churches, Photo Services, Electronics, Real Estate" target="_blank" href="dir-2.php">Bars-Real Estate</a></li>
			<li><a title="Restaurants, Rent-a-Car, Shopping, Travel Agencies" target="_blank" href="dir-3.php">Restaurants-Travel Agencies</a></li>
						<li><a title="Sign-up for Audiologiks Click-2-Call" target="_blank" href="http://www.audiologiks.com/signup">Sign-up</a></li>
		</ul>
	</div>
	<!-- start content -->
	
		<br>
			<a href="https://www.audiologiks.com/mobile_vm"><img src="http://www.audiologiks.com/numerology/images/Voicemail.jpg"></a>
	<div id="content">
		<div class="post">
			<h1 class="title"><a href="#">Click2Call</a></h1>
			<p class="meta"><small>Brought to you by<a href="http://www.audiologiks.com">Audiologiks</a></small></p>
			<div class="entry">

				<h2>Click to Dial Audiologiks</h2>
<p> To reach any company in the directory, click the Directory button, and then click the business you would like to reach. </p>
				<ul>
			<title>
			Click to Call
		</title>
		<!-- @start snippet -->
<script type="text/javascript" src="//static.twilio.com/libs/twiliojs/1.1/twilio.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

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
			    
			    function call() {
        // get the phone number or client to connect the call to
        params = {"PhoneNumber": $("#number").val()};
        Twilio.Device.connect(params);
      };

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

			$.each(['0','1','2','3','4','5','6','7','8','9','star','pound', '50', '123456', '51','60','61','52','53','54','55','56','57','58','59', '70','71','62','63','64','65','66','67','68','69','80','81','72','73','74','75','76','77','78','79',], function(index, value) { 
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
				<div align="center">
			<!-- @start snippet -->
			<input type="button" id="call" value="Click to Call the Misawa Directory"/>
			<input type="button" id="hangup" value="Hangup Call" style="display:none;"/>
			<div id="status">
				Offline
			</div>
			<div id="dialpad" style="display:none;">
				<table>
				<tr>
				<td width="2"  height="2"><input type="button" value="1" id="button1"></td>
				<td width="2"  height="2"><input type="button" value="2" id="button2"></td>
				<td width="2"  height="2"><input type="button" value="3" id="button3"></td>
				</tr>
				<tr>
				<td width="2"  height="2"><input type="button" value="4" id="button4"></td>
			    <td width="2"  height="2">	<input type="button" value="5" id="button5"></td>
				<td width="2"  height="2"><input type="button" value="6" id="button6"></td>
				</tr>
				<tr>
				<td width="2"  height="2"><input type="button" value="7" id="button7"></td>
				<td width="2"  height="2"><input type="button" value="8" id="button8"></td>
				<td width="2"  height="2"><input type="button" value="9" id="button9"></td>
				</tr>
				<tr>
				<td width="2"  height="2"><input type="button" value="*" id="buttonstar"></td>
				<td width="2"  height="2"><input type="button" value="0" id="button0"></td>
				<td width="2"  height="2"><input type="button" value="#" id="buttonpound"></td>
				</tr>
				</table>
			</div>
					</ul>
					</div>
					<div class="entry">
					
				<h2>Misawa Directory</h2>
				<blockquote>	
	This is our page to show a directory of businesses in the Misawa Area
		<div class="post">
			<h1 class="title"><a href="#">1. Accomodations</a></h1>
			<ul>
<li><td><input type="button"  value="Click"  id="button50"></td> Airport Misawa (0176)50-2055 	</li>
<li>	<td><input type="button"  value="Click"  id="button51"> Shangri-La Apts. (0176)53-5581 </td></li>
<li><td>	<input type="button"  value="Click"  id="button52"></td> Misawa Inn Koyo (0176)53-4900 </li>
<li>	<td><input type="button"  value="Click"  id="button53"></td> Sapporo Inn (0176)53-1012 </li>
<li><td>	<input type="button"  value="Click"  id="button54"></td> Misawa Princess Hotel (0176)57-2351 </li>
<li><td><input type="button"  value="Click"  id="button55"></td> Misawa Park Hotel(0176)57-3151 </li>
<li><td>	<input type="button"  value="Click"  id="button56"></td> Misawa City Hotel(0176)86-4103 </li>
<li><td><input type="button"  value="Click"  id="button57"></td> Komaki Spa Resort (0176)51-2121 </li>
<li><td>	<input type="button"  value="Click"  id="button58"></td> Hyper Hotel Misawa (0176)51-8181 </li>
<li><td><input type="button"  value="Click"  id="button60"></td> Hotel Route Inn (0176)50-1011 	</li>
<li><td><input type="button"  value="Click"  id="button61"></td> Hotel Grand Hill (0176)53-1000 	</li>
<li><td><input type="button"  value="Click"  id="button62"></td> Hotel Ginza (0176)52-2911 	</li>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Numerology-Text-Long -->
 <!-- Google add ID Information -->
<ins class="adsbygoogle"
     style="display:inline-block;width:468px;height:15px"
     data-ad-client="xxxxxxxxxxxxxxx"
     data-ad-slot="xxxxxxxxxxxxx"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
		<div class="post">
			<h1 class="title"><a href="#">2. Airlines</a></h1>
Japan Airlines (Reservation) 
<li><input type="button"  value="Click"  id="button59"> - Domestic or International  03-6733-3062 </li>
<input type="button"  value="Click"  id="button65"></td> American Airlines (03)4550-2111 <br>
All Nippon Airways
<li>	<input type="button"  value="Click"  id="button66"></td> Reservation (03)-6741-1120 </li>
<input type="button"  value="Click"  id="button68"></td> Cathay Pacific Airways (03)5159-1700 <br>
	<input type="button"  value="Click"  id="button69"></td> China Airlines (03)5520-0333 <br>
<input type="button"  value="Click"  id="button70"></td> United Continental Airlines (03)-6732-5011<br>
<input type="button"  value="Click"  id="button71"></td> Delta Airlines 0476-31-8000<br>
<input type="button"  value="Click"  id="button72"></td> Korean Airlines (017)732-3311 	<br>
<input type="button"  value="Click"  id="button73"></td> Singapore Airlines (03)3213-3431<br>
<input type="button"  value="Click"  id="button74"></td> Thai Airways (03)3503-3311 	<br>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Numerology-Text-Long -->
 <!-- Google add ID Information -->
<ins class="adsbygoogle"
     style="display:inline-block;width:468px;height:15px"
      data-ad-client="xxxxxxxxxxxxxxx"
     data-ad-slot="xxxxxxxxxxxxx"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
		<div class="post">
			<h1 class="title"><a href="#">6. Banks</a></h1>
<input type="button"  value="Click"  id="button75"> Aomori Bank (0176)53-2191 	<br>
<input type="button"  value="Click"  id="button76"> Tokyo Mitsubishi UFJ (0120)860-777 	<br>
<input type="button"  value="Click"  id="button77"> Citibank (0120)03-9104 <br>
<input type="button"  value="Click"  id="button78"> Michinoku Bank (0176)53-3121 	<br>


					</ul>
				</blockquote>
			</div>
			<p class="tags"><strong>Tags:</strong> <a href="http://www.audiologiks.com">Audiologiks</a> </p>
		</div>
	</div>


	<!-- end content -->
	<!-- start sidebar two -->
	<div id="sidebar2" class="sidebar">
		<ul>
			<li>
								<h2>3. Automobile Accessories</h2>
				<ul>

<li><input type="button"  value="Click"  id="button79"> Go Motors (0176)53-7315</li>
<li><input type="button"  value="Click"  id="button80"> Loop Inc. (0176)50-7888</li>
<li><input type="button"  value="Click"  id="button81"> Misawa Parts (0176)50-7132</li>
<li><input type="button"  value="Click"  id="button82"> Misawa Tire Garden (0176)53-8844</li>
<li><input type="button"  value="Click"  id="button83"> Sanwado (0176)53-1130</li>
<li><input type="button"  value="Click"  id="button84"> Tommy's Junk Yard (0176)53-2660</li>
<li><input type="button"  value="Click"  id="button85"> Wheel Shop Arumiya (0178)50-0731</li>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Numerology-Square -->
 <!-- Google add ID Information -->
<ins class="adsbygoogle"
     style="display:inline-block;width:210px;height:250px"
      data-ad-client="xxxxxxxxxxxxxxx"
     data-ad-slot="xxxxxxxxxxxxx"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
				</ul>
			</li>
			<li>
<h2>4. Automobile - Body Repair</h2>
				<ul>
<li>Auto Garage (0176)54-2943</li>
<li>Auto Service Kohi (0176)54-3222</li>
<li>Body Repair Tate (0176)52-2288</li>
<li>Body Make Shiwa (0176)57-0494</li>
<li>Daiwa Jidosha (0120)08-3645</li>
<li>Miura Jidosha (0176)53-2909</li>
<li>Misawa Toso Center (0176)53-2895</li>
<li>Misawa Body (0176)53-3202</li>
<li>Kamikubo Jidosha (0176)53-6048</li>
<li>Kondo Jidosha (0176)53-2871</li>
<li>Tsukuda Body (0176)52-9906</li>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Numerology Text -->
 <!-- Google add ID Information -->
<ins class="adsbygoogle"
     style="display:inline-block;width:120px;height:90px"
      data-ad-client="xxxxxxxxxxxxxxx"
     data-ad-slot="xxxxxxxxxxxxx"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
      <!-- end google ad information -->
				</ul>
			</li>
			<li>
			<h2>5. Automobile Dealers</h2>
				<ul>
<li>A1 Ltd. (0176)57-0483</li>
<li>AMB Ltd. (0176)50-1156</li>
<li>Broadway Auto (0176)57-5777</li>
<li>Eagle Auto Works (0176)52-5300</li>
<li>Hachinohe Shokai (080)3803-0442</li>
<li>Lucky Motors (0176)53-5959</li>
<li>Kawamura Jidosha (0176)53-2982</li>
<li>M-Style (0176)52-6256</li>
<li>Shinwa Shokai (0176)52-5515</li>
<li>Volvo Military Sales (0176)52-9396</li>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Numerology Text -->
<!-- Google add ID Information -->
<ins class="adsbygoogle"
     style="display:inline-block;width:120px;height:90px"
      data-ad-client="xxxxxxxxxxxxxxx"
     data-ad-slot="xxxxxxxxxxxxx"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
      <!-- end google ad information -->
				</ul>
			</li>
		</ul>
	</div>
	<!-- end sidebar two -->
	<div style="clear: both;">&nbsp;</div>
</div>

<hr />
<!-- start footer -->
<!-- using a free template site, And giving credit -->

<div id="footer">
	<p>&copy;2007 All Rights Reserved. &nbsp;&bull;&nbsp; Designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
</div>
<!-- end footer -->

</body>

</html>
