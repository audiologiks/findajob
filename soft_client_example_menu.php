<!-- for the client to access an application to dial a twilio phone number with a dial pad for IVR input-->

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

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/style/favicon-al.png">

    <title>Talk to Us</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<link rel="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://media.twiliocdn.com/sdk/js/client/v1.4/twilio.min.js"></script>

    <!-- Custom styles for this template -->

  </head>

  <body>

    <header>
      <div class="blog-masthead">
        <div class="container">
          <nav class="nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="https://github.com/audiologiks">Github Code</a>
            <a class="nav-link" href="https://audiologiks.zendesk.com/hc/ja">Knowledge Base</a>
            <a class="nav-link" href="../../ja">Japanese (日本語)</a>
          </nav>
        </div>
      </div>

      <div class="blog-header">
        <div class="container">
          <h1 class="blog-title">Check out our Content</h1>
        </div>
      </div>
    </header>

    <main role="main" class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Desktop App</h2>

        <p>This should be used with browsers on a desktop or laptop computer. Our mobile page will be developed soon but no release date yet. This page is to demonstrate access to the audiologiks platform for recording content, listening to content and sharing content. We use <a href="https://github.com/audiologiks/webclient">a Github page to discuss</a> building the desktop web client which is the basis for this page.</p>

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
	<div align="center">
			<!-- @start snippet -->
			<input type="image"  id="call" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/icons/record.png" name="submit">
			<input type="image" id="hangup" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/icons/cancel.png" style="display:none;"/>
			<div id="status">
				Offline
			</div>
			
			<div id="dialpad" style="display:none;">
					<table>
				<tr>
				<td><input type="image" class="imgClass"  id="button1" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_131.jpg" height="75" width="75" name="submit"></td>
				<td><input type="image" id="button2" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_132.jpg" height="75" width="75" name="submit"></td>
				<td><input type="image"  id="button3" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_133.jpg" height="75" width="75" name="submit"></td>
				</tr>
				<tr>
				<td><input type="image"  id="button4" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_134.jpg" height="75" width="75" name="submit"></td>
			  <td><input type="image"  id="button5" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_135.jpg" height="75" width="75" name="submit"></td>
			<td><input type="image"  id="button6" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_136.jpg" height="75" width="75" name="submit"></td>
				</tr>
				<tr>
				<td><input type="image"  id="button7" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_137.jpg" height="75" width="75" name="submit"></td>
				<td><input type="image"  id="button8" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_138.jpg" height="75" width="75" name="submit"></td>
				<td><input type="image"  id="button9" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_139.jpg" height="75" width="75" name="submit"></td>
				</tr>
				<tr>
			<td><input type="image"  id="buttonstar" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_star.jpg" height="75" width="75" name="submit"></td>
				<td><input type="image"  id="button0" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_140.jpg" height="75" width="75" name="submit"></td>
				<td><input type="image"  id="buttonpound" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_pound.jpg" height="75" width="75" name="submit"></td>
				</tr>
				</table>
			</div>
					</ul>
					</div>
 <blockquote>
<table>
	<h3>Choose the language of the Menu, English or Japanese. You can also contact Support.</h3>
	<tr><th>Button</th><th>Feature</th></tr>
		<tr><td><input type="image"  id="button1" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_131.jpg" height="75" width="75" name="submit"></td><td> Japanese</td></tr>
		<tr><td><input type="image" id="button2" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_132.jpg" height="75" width="75" name="submit"></td><td> English</td></tr>
		<tr><td><input type="image"  id="button3" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_133.jpg" height="75" width="75" name="submit"></td><td> Contact support</td></tr>
	</table>

<h3>After choosing English or Japanese, choose from one of the below options and press the pound key</h3>
	<table>
		<tr><td><input type="image"  id="button4" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_134.jpg" height="75" width="75" name="submit"></td><td> Here is the list of upcoming Meetup times and dates in 2018</td></tr>
		<tr><td><input type="image"  id="button5" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_135.jpg" height="75" width="75" name="submit"></td><td>Connecting to the Document Library.</td></tr>
		<tr><td><input type="image"  id="button6" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_136.jpg" height="75" width="75" name="submit"></td><td>Connecting to the Recording Menu.</td></tr>
		<tr><td><input type="image"  id="button7" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_137.jpg" height="75" width="75" name="submit"></td><td>About to start the Recording Session </td></tr>
		<tr><td><input type="image"  id="button0" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_140.jpg" height="75" width="75" name="submit"></td><td>Back to Start</td></tr>
		<tr><td><input type="image"  id="buttonpound" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_pound.jpg" height="75" width="75" name="submit"></td><td>Press pound after choosing an option</td></tr>
		</table>
    </blockquote>


          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        <aside class="col-sm-3 ml-sm-auto blog-sidebar">
          <div class="sidebar-module">
            <ol class="list-unstyled">
     <h4>Dial 050-3131-8611</h4>
<p>You can dial the menu above from your mobile phone and access the menu.</p>
<h4>Example of a Self-Interview</h4>
<p>Here is <a href="https://audiologiks.zendesk.com/hc/ja/articles/215115346-Self-Interview-in-English-or-Japanese">an example of a self-interview menu accessible by 1099</a></p>
<h4>Recording Audio Content</h4>
<p>Here is <a href="https://audiologiks.zendesk.com/hc/ja/articles/217911143-Recording-Audio-Content">an article on using our Menu to record content</a> and get links emailed to you.</p>
<h4>Using Pinterest for Studying English</h4>
<p><a href="https://www.pinterest.jp/pin/518617713329076229/" target="_blank" rel="noopener">Using images to record descriptions of the pictures</a> posted on Pinterest page. </p>
<h4>Creating Documents</h4>
<p><a href="https://drive.google.com/open?id=1SXrq5cPWnzw6aDzFq_EldPjfNuQYpRsB" target="_blank" rel="noopener">Using Google Docs to Share Audio Content</a>. <a href="https://docs.google.com/document/d/1mcTmgLIaiHU8gc6LNwnrAnd12VWQxBIoZi05MUDfOUk/edit?usp=sharing">QR barcodes can be used</a> to access listening practice content</p>
<h4>Listening to English Examples for Learning</h4>
<p><a href="https://audiologiks.zendesk.com/hc/ja/articles/115003088666-Audio-English-Listening-Practice-Links" target="_blank" rel="noopener">List of Audio links for examples of content for listening practice</a></p>
          </div>
          <div class="sidebar-module">
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer">
      <p>Copyright 2018 <a href="https://www.audiologiks.com/">Audiologiks</a> <a href="#">Back to top</a></p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>