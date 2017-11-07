<?php
// @start snippet
include 'twilio-php-latest/Services/Twilio/Capability.php';

$accountSid = 'xxxxxxx';
$authToken  = 'xxxxxxx';

$token = new Services_Twilio_Capability($accountSid, $authToken);
$token->allowClientOutgoing('xxxxxxxx');
$token->allowClientIncoming("xxxxxxx");
// @end snippet
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Calling On-base and Off-base at Misawa</title>
<meta name="misawa, aomori, directory, speed dials, shops, contacts" content="" />
<meta name="directory of numbers in misawa, both on-base and off-base" content="" />
<link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->


	<?php include_once("analyticstracking.php") ?>
<!-- start header -->
<div id="header">
</div>
<div id="logo">
<font color="black">
<h1>Offering phone-based services in the Misawa area</h1>
</font>
		</div>
		</head>

	
<!-- end header -->
<body>
<hr />
<!-- start page -->
<div id="page">
	<div id="menu">
	<ul>
			<li class="current_page_item">
					<a href="http://misawa.audiologiks.com/">Home</a></li>
						<li><a title="Bars, Beauty & Massage, Churches, Photo Services, Electronics, Real Estate" target="_blank" href="http://misawa.audiologiks.com/dir-2.php">Bars-Real Estate</a></li>
			<li><a title="Restaurants, Rent-a-Car, Shopping, Travel Agencies" target="_blank" href="http://misawa.audiologiks.com/dir-3.php">Restaurants-Travel Agencies</a></li>
						<li><a title="Sign-up for Audiologiks Click-2-Call" target="_blank" href="http://www.audiologiks.com/signup">Sign-up</a></li>
		</ul>
	</div>
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title">April 1７th - Cherry Blossom Season<h1>
			<h2>Call <strong>0120-202-395</strong> from off-base or <strong>1-617-600-7490</strong> from on-base</h2>
   <p>I have been reading two links in the Misawa area, one is <a href="http://www.misawajapan.com/default.asp">Misawajapan.com</a> and the other is <a href="https://www.facebook.com/groups/130973296912955/">Out the Gate</a> by the AFN.</p>
<h3>	<font alignment="center" color="black">
	<a href="http://kite-misawa.com/2015misawaqueen-english/"><img width="500" src="images/misawa_queen.png"></a>
	<a href="http://forecast.io/#/f/40.6759,141.3633"><img width="500" src="images/misawa_queen_america.png"></a>
		<a href="/shorten-phone-menus">Personal Directories</a> | <a href="http://www.audiologiks.com/node/36118">Calling Cards</a> | <a href="http://www.audiologiks.com/node/36128">Emergency Phone Menus</a> | Japanese Language Search
		</font></h3>
<p>To use this page, just click on the Call Us button, and then click on a Directory Button next to a business. The top 3 businesses are clickable without registering.</p>

<h3><a href="/directory_misawa">Phone Directories - Misawa Example</a></h3>
	
	<body>
		<br>
		<!-- end content -->

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

			$.each(['0','1','2','3','4','5','6','7','8','9','star','pound','204', '123456', '102','103','104','105','106','107','108','109','110','111','112', '113','114','115','116','117','118','119','120','121','122','123','124','125','126','127','128','129','130','131','132','63','2291968',], function(index, value) { 
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
			<input type="button" id="call" value="Call Us"/>
			<input type="button" id="hangup" value="Hangup Call" style="display:none;"/>
			<div id="status">
				Click the Call Us button to Reach Us
			</div>
		
			<div id="dialpad" style="display:none;">
				<table>
				<tr>
				<td><input type="image" class="imgClass"  id="button1" src="images/photo_131.jpg" height="75" width="75" name="submit"></td>
				<td><input type="image" id="button2" src="images/photo_132.jpg" height="75" width="75" name="submit"></td>
				<td><input type="image"  id="button3" src="images/photo_133.jpg" height="75" width="75" name="submit"></td>
				</tr>
				<tr>
				<td><input type="image"  id="button4" src="images/photo_134.jpg" height="75" width="75" name="submit"></td>
			  <td><input type="image"  id="button5" src="images/photo_135.jpg" height="75" width="75" name="submit"></td>
			<td><input type="image"  id="button6" src="images/photo_136.jpg"height="75" width="75" name="submit"></td>
				</tr>
				<tr>
				<td><input type="image"  id="button7" src="images/photo_137.jpg"height="75" width="75" name="submit"></td>
				<td><input type="image"  id="button8" src="images/photo_138.jpg" height="75" width="75" name="submit"></td>
				<td><input type="image"  id="button9" src="images/photo_139.jpg" height="75" width="75" name="submit"></td>
				</tr>
				<tr>
			<td><input type="image"  id="button0" src="images/photo_star.jpg" height="75" width="75" name="submit"></td>
				<td><input type="image"  id="buttonstar" src="images/photo_140.jpg" height="75" width="75" name="submit"></td>
				<td><input type="image"  id="buttonsharp" src="images/photo_pound.jpg" height="75" width="75" name="submit"></td>
				</tr>
				<tr><input type="image"  id="button2291968" src="images/demo_calling_card.png" name="submit"></tr>
				</table>
			</div>
					</ul>
					</div>
			<div class="entry">
				<blockquote>	
<img src="images/fss.png">
		<div class="post">
			
		<?php
mysql_set_charset("utf8");
 $con=mysqli_connect("localhost","db_user","password","db_name");
 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 //check table
 $result = mysqli_query($con,"SELECT * FROM `table_name`") or die("Error 1" . mysqli_error($con));

 echo "<table align='center'>
 <tr>
 <th>Key</th>
 <th>Name</th>
 <th>Phone #</th>
 <th>Extension or 226 DSN</th>
 </tr>";

 while($row = mysqli_fetch_array($result)) {
   echo "<tr>";
   echo "<td align='center'>" . $row['Key'] . "</td>";
   echo "<td align='center'>" . $row['Name'] . "</td>";
   echo "<td align='center'>" . $row['Phone #'] . "</td>";
    echo "<td align='center'>" . $row['Extension or 226 DSN'] . "</td>";
   echo "</tr>";
 }
echo "</table>";
mysqli_close($con);
 ?>
		<div class="post">
			
		<div class="post">
				</blockquote>
			
			</div>
				<img src="images/search_keywords.png"><br>
<button  onclick="location.href='http://www.google.co.jp/#q=Misawa%20Base'"> Search</button><strong>Misawa Base</strong> Search information about Misawa Air Force base, a US Air Force base located in Aomori Prefecture, Japan
<br></br>
<button  onclick="location.href='http://www.google.co.jp/#q=Americable'"> Search</button><strong>Americable</strong>  The cable providers on several bases on the Japan mainland.
<br></br>
<button  onclick="location.href='http://www.google.co.jp/#q=Misawa Jobs'">Search</button><strong> Misawa Jobs</strong> This is a general keyword search to show any jobs in the Misawa area.
<br></br>
<button  onclick="location.href='http://www.google.co.jp/#q=Facebook%20Misawa'">Search</button><strong> Facebook Misawa</strong> This is intended to show any Facebook groups in the Misawa area.
<br></br>
<button  onclick="location.href='http://www.google.co.jp/#q=三沢のアパート'">Search</button><strong> 三沢のアパート</strong> A Japanese language search for apartments in Misawa
<br></br>
<button  onclick="location.href='http://www.google.co.jp/#q=三沢の英会話'">Search</button><strong> 三沢の英会話</strong> A Japanese language search for English language study in Misawa
<br></br>
<button  onclick="location.href='http://www.google.co.jp/#q=三沢の仕事'">Search</button><strong> 三沢の仕事</strong> A Japanese language search for Misawa jobs
<br></br>
<button  onclick="location.href='http://www.google.co.jp/#q=AFB Misawa'">Search</button><strong> AFB Misawa</strong> Another search on topics involving Misawa airbase
<br></br>
<button  onclick="location.href='http://www.google.co.jp/#q=Misawa%20Tourism%20English'"> Search</button><strong>Misawa Tourism</strong> A search for tourist places in Misawa, Japan
<br></br>

		</div>
		<img width="550" src=".../sites/default/files/images/Phone%20Menu%20Entry%20Automation.png">
	</div>
	
	<!-- end content -->
	<!-- start sidebar two -->
	<div id="sidebar2" class="sidebar">
		<ul>
			<img width="220"  src="images/auto_accessories.png">
						<?php
	
mysql_set_charset("utf8");
  $con=mysqli_connect("localhost","db_user","password","db_name");
 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 //check table
 $result = mysqli_query($con,"SELECT * FROM `table_name`") or die("Error 1" . mysqli_error($con));

 echo "<table align='center'>
 <tr>
 <th>Key</th>
 <th>Name</th>
 <th>Phone #</th>
 </tr>";

 while($row = mysqli_fetch_array($result)) {
   echo "<tr>";
   echo "<td align='center'>" . $row['Key'] . "</td>";
   echo "<td align='center'>" . $row['Automobile Accessories'] . "</td>";
   echo "<td align='center'>" . $row['Phone #'] . "</td>";
   echo "</tr>";
 }

echo "</table>";

 mysqli_close($con);
 ?>


</ul>
				<ul>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Numerology-Square -->
<ins class="adsbygoogle"
     style="display:inline-block;width:210px;height:250px"
     data-ad-client="xxxxxx"
     data-ad-slot="xxxxxx"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
				</ul>
				<ul>
				<img width="220" src="images/auto_dealers.png">
							<?php
	
mysql_set_charset("utf8");
 $con=mysqli_connect("localhost","db_user","password","db_name");
 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 //check table
 $result = mysqli_query($con,"SELECT * FROM `table_name`") or die("Error 1" . mysqli_error($con));

 echo "<table align='center'>
 <tr>
 <th>Key</th>
 <th>Name</th>
 <th>Phone #</th>
 </tr>";

 while($row = mysqli_fetch_array($result)) {
   echo "<tr>";
   echo "<td align='center'>" . $row['Key'] . "</td>";
   echo "<td align='center'>" . $row['Automobile Dealers'] . "</td>";
   echo "<td align='center'>" . $row['Phone #'] . "</td>";
   echo "</tr>";
 }

echo "</table>";

 mysqli_close($con);
 ?>
							<table border="1"   style="float:left;">
	<tbody>
		<font="4">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Numerology Text -->
<ins class="adsbygoogle"
     style="display:inline-block;width:120px;height:90px"
     data-ad-client="xxxxxx"
     data-ad-slot="xxxxxx"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
				</ul>
				<ul>
				<img width="220" src="images/hotels.png">
				<?php
	
mysql_set_charset("utf8");
$con=mysqli_connect("localhost","db_user","password","db_name");
 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 //check table
 $result = mysqli_query($con,"SELECT * FROM `table_name`") or die("Error 1" . mysqli_error($con));

 echo "<table align='center'>
 <tr>
 <th>Key</th>
 <th>Name</th>
 <th>Phone #</th>
 </tr>";

 while($row = mysqli_fetch_array($result)) {
   echo "<tr>";
   echo "<td align='center'>" . $row['Key'] . "</td>";
   echo "<td align='center'>" . $row['Accomodations'] . "</td>";
   echo "<td align='center'>" . $row['Phone #'] . "</td>";
   echo "</tr>";
 }

echo "</table>";

 mysqli_close($con);
 ?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Numerology Text -->
<ins class="adsbygoogle"
     style="display:inline-block;width:120px;height:90px"
      data-ad-client="xxxxxx"
     data-ad-slot="xxxxxx"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
				</ul>
			</li>
			<img width="220"  src="images/Airlines.png">
							<?php
	
mysql_set_charset("utf8");
$con=mysqli_connect("localhost","db_user","password","db_name");
 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 //check table
 $result = mysqli_query($con,"SELECT * FROM `table_name`") or die("Error 1" . mysqli_error($con));

 echo "<table align='center'>
 <tr>
 <th>Key</th>
 <th>Name</th>
 <th>Phone #</th>
 
 </tr>";

 while($row = mysqli_fetch_array($result)) {
   echo "<tr>";
   echo "<td align='left'>" . $row['Key'] . "</td>";
   echo "<td align='left' >" . $row['Airlines'] . "</td>";
   echo "<td align='left'>" . $row['Phone #'] . "</td>";
   echo "</tr>";
 }

echo "</table>";

 mysqli_close($con);
 ?>
		</ul>
	</div>
	<!-- end sidebar two -->
	<div style="clear: both;">&nbsp;</div>
</div>

<hr />

<!-- start footer -->
<div id="footer">
	<p>&copy;2007 All Rights Reserved. &nbsp;&bull;&nbsp; Designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
</div>
<!-- end footer -->


</body>

</html>
