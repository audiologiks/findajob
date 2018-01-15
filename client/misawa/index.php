<?php
// @start snippet
// @end snippet
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Searching for Jobs</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<meta name="google-site-verification" content="" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://media.twiliocdn.com/sdk/js/client/v1.4/twilio.min.js"></script>

<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/");</script>

</head>
<body>
	
<!-- start header -->
<div id="header">
</div>
<div id="logo">
<h1>日本か海外に転職を考えていますか？ Finding a Job in Japan or Overseas</h1>
	
		</div>

<!-- end header -->
<!-- start page -->
<div id="page">
	<div id="menu">
	<ul>
		<li class="current_page_item">
		<a href="https://www.audiologiks.com">Home</a></li>
			<li><a title="Research for Jobs in Japan" target="_blank" href="https://audiologiks.zendesk.com/hc/ja/categories/201938766-Looking-for-a-Job-in-Japan-%E6%97%A5%E6%9C%AC%E3%81%A7%E8%8B%B1%E8%AA%9E%E3%82%92%E4%BD%BF%E3%81%86%E4%BB%95%E4%BA%8B%E3%82%92%E6%8E%A2%E3%81%97%E3%81%A6%E3%81%84%E3%82%8B%E6%96%B9">Japan Jobs</a></li>
			<li><a title="Articles" target="_blank" href="https://audiologiks.zendesk.com/hc/ja/categories/201888646-Looking-for-a-Job-Outside-of-Japan-%E6%97%A5%E6%9C%AC%E3%81%AB%E4%BD%8F%E3%82%93%E3%81%A7%E3%81%84%E3%81%BE%E3%81%99%E3%81%8C-%E5%A4%96%E5%9B%BD%E3%81%AB%E5%83%8D%E3%81%8D%E3%81%9F%E3%81%84">Overseas Jobs</a></li>
			<li><a href="https://www.meetup.com/preview/Tokyo-Global-Career-Information-Exchange">About Us</a></li>
			<li><a href="https://www.audiologiks.com/ja/index.php">日本語</a></li>

		</ul>
	</div>

<!-- Audiologiks -->


	<div id="content">
		<div class="post">
			<h2>Find a Job at a Foreign Company in Tokyo</h2>


			<div class="entry">
				<p>Click on the links</p>
				<ul>
			<title>
			Testing the DB
		</title>
	</ul>
</div>

<?php
	
$con=mysqli_connect("");
 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 //check table
 $result = mysqli_query($con,"SELECT * FROM `xxxx`") or die("Error 1" . mysqli_error($con));

 echo "<table align='left'>
 <tr>
 <th>Article</th>
 
 </tr>";

 while($row = mysqli_fetch_array($result)) {
   echo "<tr>";
   echo "<td align='left'>" . $row['Table'] . "</td>";
   echo "</tr>";
 }

echo "</table>";

 mysqli_close($con);
 ?>
					
	<!-- @start snippet -->
		

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

			$.each(['0','1','2','3','4','5','6','7','8','9','star','pound',], function(index, value) { 
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
			<input type="image"  id="call" src="https://xxxxx" name="submit">
			<input type="button" id="hangup" value="Hangup Call" style="display:none;"/>
			<div id="status">
				Offline
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
			<td><input type="image"  id="button6" src="images/photo_136.jpg" height="75" width="75" name="submit"></td>
				</tr>
				<tr>
				<td><input type="image"  id="button7" src="images/photo_137.jpg" height="75" width="75" name="submit"></td>
				<td><input type="image"  id="button8" src="images/photo_138.jpg" height="75" width="75" name="submit"></td>
				<td><input type="image"  id="button9" src="images/photo_139.jpg" height="75" width="75" name="submit"></td>
				</tr>
				<tr>
			<td><input type="image"  id="buttonstar" src="images/photo_star.jpg" height="75" width="75" name="submit"></td>
				<td><input type="image"  id="button0" src="images/photo_140.jpg" height="75" width="75" name="submit"></td>
				<td><input type="image"  id="buttonsharp" src="images/photo_pound.jpg" height="75" width="75" name="submit"></td>
				</tr>
				</table>
			</div>
					</ul>
					</div>
					<div class="entry">
				<blockquote>	
					<img width="500" src="images/img15.png">
		<div class="post">

		<div class="post">

<?php
	
$con=mysqli_connect("");
 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 //check table
 $result = mysqli_query($con,"SELECT * FROM `xxxx`") or die("Error 1" . mysqli_error($con));

 echo "<table align='center'>
 <tr>
 <th>Article</th>
 
 </tr>";

 while($row = mysqli_fetch_array($result)) {
   echo "<tr>";
   echo "<td align='left'>" . $row['Table'] . "</td>";
   echo "</tr>";
 }

echo "</table>";

 mysqli_close($con);
 ?>
		<div class="post">
				</blockquote>
			
				<h2> Links to DB Testing</h2>
			</div>
<?php
	
$con=mysqli_connect("");
 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 //check table
 $result = mysqli_query($con,"SELECT * FROM `xxxxx`") or die("Error 1" . mysqli_error($con));

 echo "<table align='center'>
 <tr>
 <th>Article</th>
 
 </tr>";

 while($row = mysqli_fetch_array($result)) {
   echo "<tr>";
   echo "<td align='left'>" . $row['Table'] . "</td>";
   echo "</tr>";
 }

echo "</table>";

 mysqli_close($con);
 ?>
		</div>

	</div>
	<!-- end content -->
	<!-- start sidebar two -->
	<div id="sidebar2" class="sidebar">
		<ul>
<img width="150" src="images/acct-2.png">
							<table border="1"   style="float:left;">

<?php
	
$con=mysqli_connect("");
 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 //check table
 $result = mysqli_query($con,"SELECT * FROM `xxxx`") or die("Error 1" . mysqli_error($con));

 echo "<table align='center'>
 <tr>
 <th>Position</th>
 
 </tr>";

 while($row = mysqli_fetch_array($result)) {
   echo "<tr>";
   echo "<td align='left'>" . $row['Table'] . "</td>";
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
     data-ad-client=""
     data-ad-slot=""></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
				</ul>
				<ul>
				<img width="150" src="images/admin-2.png">
							<table border="1"   style="float:left;">
	<tbody>
		<font="4">
<?php
	
$con=mysqli_connect("");
 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 //check table
 $result = mysqli_query($con,"SELECT * FROM `admin`") or die("Error 1" . mysqli_error($con));

 echo "<table align='center'>
 <tr>
 <th>Position</th>
 
 </tr>";

 while($row = mysqli_fetch_array($result)) {
   echo "<tr>";
   echo "<td align='left'>" . $row['Table'] . "</td>";
   echo "</tr>";
 }

echo "</table>";

 mysqli_close($con);
 ?>
		Sign up to receive information on how we help with getting a job
		<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="&amp;id=" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Subscribe to our mailing list</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
				</ul>
				<ul>
				<img width="150" src="images/build-2.png">
<?php
	
 $con=mysqli_connect("");
 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 //check table
 $result = mysqli_query($con,"SELECT * FROM `build`") or die("Error 1" . mysqli_error($con));

 echo "<table align='center'>
 <tr>
 <th>Position</th>
 </tr>";

 while($row = mysqli_fetch_array($result)) {
   echo "<tr>";
   echo "<td align='left'>" . $row['Table'] . "</td>";
   echo "</tr>";
 }

echo "</table>";

 mysqli_close($con);
 ?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Numerology Text -->
<ins class="adsbygoogle"
     style="display:inline-block;width:120px;height:90px"
     data-ad-client=""
     data-ad-slot=""></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
				</ul>
			</li>
	</ul>
	</div>
	<!-- end sidebar two -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- start footer -->
<div id="footer">
	<p>&copy;2007 All Rights Reserved. &nbsp;&bull;&nbsp; Designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
</div>
<!-- end footer -->
</body>

</html>

	
