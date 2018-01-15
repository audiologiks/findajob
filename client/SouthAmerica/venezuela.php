<?php
// @start snippet
include 'twilio-php-latest/Services/Twilio/Capability.php';
error_reporting(E_ALL);
ini_set('display_errors', 'On');


$accountSid = 'AC8d3705982042807cbc6b58a8e9bcc76f';
$authToken  = 'a50d12674785292bef22464f43de1410';

$token = new Services_Twilio_Capability($accountSid, $authToken);
$token->allowClientOutgoing('AP0be93dfc7cc88ca70ae54c17266e2135');
$token->allowClientIncoming("al_firstdemo_venezuela_tomsub_misawa_logiks_6");
// @end snippet
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Searching for Jobs in Venezuela</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<meta name="google-site-verification" content="F93N0Z3VogATWfhNpMtrQvJ0XKwtRKqgFZt6JZixpzE" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://media.twiliocdn.com/sdk/js/client/v1.4/twilio.min.js"></script>

</head>
<body>
	
<!-- start header -->
<div id="header">
</div>
<div id="logo">
	<h1> Finding a Job in: Venezuela</h1>
	
		</div>
<!-- end header -->
<!-- start page -->
<div id="page">
	<div id="menu">
	<ul>
		<li class="current_page_item">
		<a href="https://www.audiologiks.com">Home</a></li>
			<li><a href="https://www.meetup.com/preview/Tokyo-Global-Career-Information-Exchange">Career Meetup</a></li>
			<li><a title="Research" target="_blank" href="https://github.com/audiologiks/kb-Articles">Code</a></li>
			<li><a title="Articles" target="_blank" href="https://audiologiks.zendesk.com/">Articles</a></li>
			<li><a title="Articles" target="_blank" href="https://www.meetup.com/preview/Nihonno-Job-Market">Jobs Meetup</a></li>
		</ul>
	</div>

<!-- Audiologiks -->

<!-- amazon banner-->
	<div id="content">
<iframe src="https://www.meetup.com/find/tech/?allMeetups=false&radius=25&userFreeform=Caracas%2C+Venezuela&mcId=c1040362&change=yes&sort=recommended&eventFilter=mysugg" width="728" height="90" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>

<!-- Job Boards -->
	<div class="post">
		<h2>Welcome to the Job Search page with links to look for a job in Venezuela</h2>
<p>Job Boards in Venezuela</p>
<a target="_blank" href="http://www.bumeran.com.ve/">Bumeran Venezuela</a> | <a target="_blank" href="https://www.buscojobs.com.ve/">buscojobs Venezuela</a> | 

<p> <a target="_blank" href="https://www.meetup.com/find/tech/?allMeetups=false&radius=25&userFreeform=Quito%2C+Ecuador&mcId=c1010091&change=yes&sort=recommended&eventFilter=mysugg">Tech Meetups in Quito</a></p>

<p>To practice for overseas phone interviews, try our practice service</p>
	<p>Click the Record Button to start the Question Menu. To look at all the questions, <a href="https://audiologiks.zendesk.com/hc/ja/articles/215114806-Practice-Questions-for-an-Interview">click here</a></p>
<div class="entry">
	<font="4">
		<p>After you click the button below, enter the following numbers:</p>
		<ul>
			<li>Enter 1 to hear the instructions in Japanese or or 2 to hear them in English</li>
			<li>Enter 1003 then press # </li>
			<li>Enter 4242 then press #</li>
		</ul>

		<p>The questions will start. You have 3 minutes to answer, then press # when you are done</p>

<h3>Question Template: Practice Interview Questions</h3>
	<p>If you clicked 1 for Japanese </p>
	<ul><li>What interests you about our product/service?</li>
		<li>What do you think determines a person’s progress in a good company?</li>
		<li> What do you want to be doing in your career five years from now? </li>
</ul>
	<p>If you clicked 2 for English</p>
	<ul><li>Please explain your background and work experience</li>
		<li>How does your work experience help prepare you for the position?</li>
		<li> What is your experience of working with Japanese customers? </li>

		</ul>

	</font="4">
			
	</div>
					
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

			$.each(['0','1','2','3','4','5','6','7','8','9','star','pound', '50', '2291968','123456', '51','60','61','52','53','54','55','56','57','58','59', '70','71','62','63','64','65','66','67','68','69','80','81','72','73','74','75','76','77','78','79','201','202', '#', '*', '1003', '1004', 'sharp', '1968', '4421'], function(index, value) { 
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
			<input type="image"  id="call" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/icons/record_22247881854_o.png" name="submit">
			<input type="button" id="hangup" value="Hangup Call" style="display:none;"/>
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
			<td><input type="image"  id="button6" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_136.jpg"height="75" width="75" name="submit"></td>
				</tr>
				<tr>
				<td><input type="image"  id="button7" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_137.jpg"height="75" width="75" name="submit"></td>
				<td><input type="image"  id="button8" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_138.jpg" height="75" width="75" name="submit"></td>
				<td><input type="image"  id="button9" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_139.jpg" height="75" width="75" name="submit"></td>
				</tr>
				<tr>
			<td><input type="image"  id="buttonstar" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_star.jpg" height="75" width="75" name="submit"></td>
				<td><input type="image"  id="button0" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_140.jpg" height="75" width="75" name="submit"></td>
				<td><input type="image"  id="buttonpound" src="https://s3-ap-northeast-1.amazonaws.com/all-jp-1/img/images/photo_pound.jpg" height="75" width="75" name="submit"></td>
				</tr>
				<tr><input type="image"  id="button2291968" src="images/demo_calling_card.png" name="submit"></tr>
				</table>
			</div>
					</ul>
					</div>
<div class="entry">
<blockquote>	
	<img width="500" src="images/img15.png">
	<div class="post">

	<div class="post">
	<font="4">
	<p><span class="wysiwyg-font-size-large">Are <a href="https://audiologiks.zendesk.com/hc/ja/articles/115001765266-Start-Using-the-Audiologiks-Service" target="_blank" rel="noopener">you looking to change jobs</a>, get a new <a href="https://audiologiks.zendesk.com/hc/ja/categories/201938766-Looking-for-a-Job-in-Japan-%E6%97%A5%E6%9C%AC%E3%81%A7%E8%8B%B1%E8%AA%9E%E3%82%92%E4%BD%BF%E3%81%86%E4%BB%95%E4%BA%8B%E3%82%92%E6%8E%A2%E3%81%97%E3%81%A6%E3%81%84%E3%82%8B%E6%96%B9">job in Japan</a> or <a href="https://audiologiks.zendesk.com/hc/ja/categories/201888646-Looking-for-a-Job-Outside-of-Japan-%E6%97%A5%E6%9C%AC%E3%81%AB%E4%BD%8F%E3%82%93%E3%81%A7%E3%81%84%E3%81%BE%E3%81%99%E3%81%8C-%E5%A4%96%E5%9B%BD%E3%81%AB%E5%83%8D%E3%81%8D%E3%81%9F%E3%81%84">work Overseas</a>, or practice your language skills to do your current job better?</span></p>
	
	<p><strong>Come to our Meetup or contact us to meet</strong></p>

	<p><a href="https://www.meetup.com/preview/Nihonno-Job-Market" target="_blank" rel="noopener">Talk with others about finding a new job in Japan</a>, including the challenges of the job search process. From successfully completing a bilingual Japanese/English resume to getting through to the interview.</p>

	<p><strong>Practice Answering Questions by Listening to Sample Questions and Recording Answers</strong></p>
	<p>We have <a href="https://audiologiks.zendesk.com/hc/ja/articles/215114806-Practice-Questions-for-an-Interview" target="_blank" rel="noopener">listed 60 sample questions and you can record your answers</a> by dialing our service at 050-3131-8611, or access it from this page. </p>

	<p>To start using the service, users are asked to visit <a href="https://www.facebook.com/audiologiks/app/100265896690345/" target="_blank" rel="noopener">our Facebook page to sign up</a></p>

	<p>If you have <a href="http://bit.ly/1PtzSoB" target="_blank" rel="noopener">received an access code and guide to the practice questions, you will just follow the below steps:</a></p>
	<ul>
	<li>Dial the phone number from your phone or access a web URL</li>
	<li>Input the 4-digit access code</li>
	<li>Input the 4-digit menu ID</li>
	<li>The questions will start </li>
	
	</ul>
	<p>There is a limit of 3 minutes per question </p>
</font="4">
</blockquote>
			
	</div>

		</div>
		</div>
		<!-- end content -->
		<!-- start sidebar two -->
		<div id="sidebar2" class="sidebar">
<ul>
<br>
<br>
<br>
<br>
</ul>
<ul>



</ul>
<ul>
	<li>
		<h2>Audiologiks can help you:</h2>
		<li>Practice with a partner, friend or a teacher </li>
		<li>Receive feedback that helps you to improve and feel more confident in speaking a foreign language </li> 

</li>
</ul>
				<ul>
		<li>
		<H2>jobs in South America</H2>

<li><a target="_blank" href="argentina.php">Argentina</a></li>
<li> <a target="_blank" href="brazil.php">Brazil</a> </li>
<li><a target="_blank" href="chile.php">Chile</a> </li>
<li><a href="columbia.php">Colombia </a></li>
<li><a href="ecuador.php">Ecuador </a></li>
<li><a href="peru.php">Peru</a></li>
<li><a href="uruguay.php">Uruguay</a></li>
<li><a href="venezuela.php">Venezuela</a></li>
</li>
</ul>
<ul>
	<li>
<H2>Jobs in Central America</H2>
<li> <a href="costarica.php">Costa Rica</a> </li>
<li> <a href="mexico.php">Mexico</a></li>
<li> <a href="panama.php">Panama</a></li>

</li>
</ul>
<ul>
	<li>
	<style type='text/css'>#indJobContent{padding-bottom: 5px;}#indJobContent .company_location{font-size: 11px;overflow: hidden;display:block;}#indJobContent.wide .job{display:block;float:left;margin-right: 5px;width: 135px;overflow: hidden}#indeed_widget_wrapper{position: relative;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;font-size: 13px;font-weight: normal;line-height: 18px;padding: 10px;height: auto;overflow: hidden;}#indeed_widget_header{font-size:18px; padding-bottom: 5px; }#indeed_search_wrapper{clear: both;font-size: 12px;margin-top: 0px;padding-top: 2px;}#indeed_search_wrapper label{font-size: 12px;line-height: inherit;text-align: left; margin-right: 5px;}#indeed_search_wrapper input[type='text']{width: 100px; font-size: 11px; }#indeed_search_wrapper #qc{float:left;}#indeed_search_wrapper #lc{float:right;}#indeed_search_wrapper.stacked #qc, #indeed_search_wrapper.stacked #lc{float: none; clear: both;}#indeed_search_wrapper.stacked input[type='text']{width: 150px;}#indeed_search_wrapper.stacked label{display: block;padding-bottom: 5px;}#indeed_search_footer{width:295px; padding-top: 5px; clear: both;}#indeed_link{position: absolute;bottom: 1px;right: 5px;clear: both;font-size: 11px; }#indeed_link a{text-decoration: none;}#results .job{padding: 1px 0px;}#pagination { clear: both; }</style><style type='text/css'> #indeed_widget_wrapper{ width: 160px; height: 600px; background: #FFFFFF;} #indeed_widget_wrapper{ border: 1px solid #DDDDDD; } #indeed_widget_wrapper, #indeed_link a{ color: #000000;} #indJobContent, #indeed_search_wrapper{ border-top: 1px solid #DDDDDD; } #indJobContent a { color: #00c; } #indeed_widget_header{ color: #000000; } </style> <script type='text/javascript'> var ind_pub = '5872618037638326'; var ind_el = 'indJobContent'; var ind_pf = ''; var ind_q = 'Japanese, Japan, Teacher, Sensei, Translator'; var ind_l = ''; var ind_chnl = 'voice-menu-sidebar'; var ind_n = 10; var ind_d = 'https://ve.indeed.com'; var ind_t = 20; var ind_c = 10; var ind_pgn = 1; var ind_pgnCnt = 3; </script> <script type='text/javascript' src='https://ve.indeed.com/ads/jobroll-widget-v3.js' charset='UTF-8'></script> <div id='indeed_widget_wrapper' style=''> <div id='indeed_widget_header'>Empleos de Indeed</div> <div id='indJobContent' class=""></div> <div id='indeed_search_wrapper'> <script type='text/javascript'> function clearDefaults() { var formInputs = document.getElementById('indeed_jobform').elements; for(var i = 0; i < formInputs.length; i++) { if(formInputs[i].value == 'puesto, palabras clave' || formInputs[i].value == 'ciudad o estado') { formInputs[i].value = ''; } } } </script> <form onsubmit='clearDefaults();' method='get' action='https://ve.indeed.com/jobs' id='indeed_jobform' target="_new"> <div id="qc"><label>Qué:</label><input type='text' onfocus='this.value=""' value='puesto, palabras clave' name='q' id='q'></div> <div id="lc"><label>Dónde:</label><input type='text' onfocus='this.value=""' value='ciudad o estado' name='l' id='l'></div> <div id='indeed_search_footer'> <div style='float:left'><input type='submit' value='Buscar empleos' class='findjobs'></div> </div> <input type='hidden' name='indpubnum' id='indpubnum' value='5872618037638326'> </form> </div> <div id='indeed_link'> <a title="Búsqueda de empleo" href="https://ve.indeed.com/" rel="nofollow" target="_new">empleos de <img alt=Indeed src='https://www.indeed.com/p/jobsearch.gif' style='border: 0;vertical-align: bottom;'> </a> </div> </div>
	</li>
</ul>

</div>
	<!-- end sidebar two -->
	<!-- start sidebar -->

		<div id="sidebar" class="sidebar">
	<table border="1"   style="float:left;">
	<tbody>
			<h2> Record your speech with Audiologiks using these headsets and microphones</h2>
	<font="4">
	<a target="_blank"  href="https://www.amazon.co.jp/gp/product/B000WM8S6O/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=B000WM8S6O&linkCode=as2&tag=eslsoftcom-22&linkId=60d504b3ac5a8ff83056b8692c5d7c28"><img border="0" src="//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=B000WM8S6O&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=eslsoftcom-22" ></a><img src="//ir-jp.amazon-adsystem.com/e/ir?t=eslsoftcom-22&l=am2&o=9&a=B000WM8S6O" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
 	</font="4">
 </tbody>
</table>

 			<table border="1"   style="float:left;">
	<tbody>
	<font="4">
<a target="_blank"  href="https://www.amazon.co.jp/gp/product/B005M2HDA6/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=B005M2HDA6&linkCode=as2&tag=eslsoftcom-22&linkId=acd45154962bc52506911c4f8d39e5ab"><img border="0" src="//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=B005M2HDA6&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=eslsoftcom-22" ></a><img src="//ir-jp.amazon-adsystem.com/e/ir?t=eslsoftcom-22&l=am2&o=9&a=B005M2HDA6" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
 		 	</font="4">
 </tbody>
</table>
		<table border="1"   style="float:left;">
	<tbody>
	<font="4">
	<a target="_blank"  href="https://www.amazon.co.jp/gp/product/B0129JHP98/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=B0129JHP98&linkCode=as2&tag=eslsoftcom-22&linkId=7ccc0d45233896b8d5322b493631d8aa"><img border="0" src="//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=B0129JHP98&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=eslsoftcom-22" ></a><img src="//ir-jp.amazon-adsystem.com/e/ir?t=eslsoftcom-22&l=am2&o=9&a=B0129JHP98" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
 		 	</font="4">
 </tbody>
</table>
</div>
<!-- end sidebar -->

		</ul>
		</li>
	</ul>
	
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- start footer -->
<div id="footer">
	<p>&copy;2007 All Rights Reserved. &nbsp;&bull;&nbsp; Designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
</div>
<!-- end footer -->
</body>

</html>

	
