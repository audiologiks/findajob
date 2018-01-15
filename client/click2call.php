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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Searching for Jobs</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<!-- start header -->
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<link rel="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	
</head>
<body>

  <header>
      <div class="blog-masthead">
        <div class="container">
          <nav class="nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="../Americas">Americas</a>
            <a class="nav-link" href="../Asia">Asia</a>
            <a class="nav-link" href="../Europe">Europe</a>
          </nav>
        </div>
      </div>

      <div class="blog-header">
        <div class="container">
          <h1 class="blog-title">Asia</h1>
        </div>
      </div>
    </header>
	<!-- start content -->
	
	<main role="main" class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Find a Job</h2>
    
          <p><span class="wysiwyg-font-size-large">We gather at a Meetup in Tokyo and talk about finding a path to a global career. </span></p>
          <p>I <a href="/hc/ja">created a Help page </a>so please look there or the links at the top of the page. Also happy to add information about working abroad if you have any to share. Right now, I am looking for information on Europe. So one place to look is at <a href="https://eeas.europa.eu/delegations/japan_en">Embassies</a> and <a href="http://japan.ahk.de/en/home/">Chambers of Commerce</a>. </p>
          <p>Let's discuss how to approach companies in Japan for overseas jobs and international companies.</p>
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
			<input type="button" id="call" value="Click to Call"/>
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
					<blockquote>
						
					</blockquote>

 </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        <aside class="col-sm-3 ml-sm-auto blog-sidebar">
          <div class="sidebar-module">
            <ol class="list-unstyled">
        <h2>Asia</h2>
        <li>Singapore</li>
        <li>Hong Kong</li>
        <li>Japan</li>
        <li>Australia</li>
        <h2>Americas</h2>
        <li>Canada</li>
        <li>United States</li>
        <li>Mexico</li>
        <li><a href="Americas/SouthAmerica/argentina.php">Argentina</a></li>
        <li>Brazil</li>
        <li>Chile</li>
        <li>Columbia</li>
        <li>Ecuador</li>
        <li>Peru</li>
        <li>Uruguay</li>
        <li>Venezuela</li>
      <h2>Europe</h2>
        <li>United Kingdom</li>
        <li>France</li>
        <li>Germany</li>
        <li>Sweden</li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Japan Links</h4>
            <ol class="list-unstyled">
              <li><a href="../JpJobs/JobBoards">Job Boards</a>
              <li><a href="../JpJobs/Recruiters">Recruiters</a>
              <li><a href="../JpJobs/Companies">Companies</a>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer">
      <p>Copyright 2018 <a href="https://www.audiologiks.com/">Audiologiks</a></p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>
