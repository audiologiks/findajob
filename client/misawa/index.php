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
<script type="text/javascript">
window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&&t(e,n,a),a||(a={});for(var c=s(e),f=c.length,u=i(a,o,r),d=0;f>d;d++)c[d].apply(u,n);return u}function a(t,e){f[t]=s(t).concat(e)}function s(t){return f[t]||[]}function c(){return n(e)}var f={};return{on:a,emit:e,create:c,listeners:s,_events:f}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],3:[function(t){function e(t,e,n,i,s){try{c?c-=1:r("err",[s||new UncaughtException(t,e,n)])}catch(f){try{r("ierr",[f,(new Date).getTime(),!0])}catch(u){}}return"function"==typeof a?a.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(5),i=t("ee"),a=window.onerror,s=!1,c=0;t("loader").features.err=!0,window.onerror=e,NREUM.noticeError=n;try{throw new Error}catch(f){"stack"in f&&(t(1),t(4),"addEventListener"in window&&t(2),window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&t(3),s=!0)}i.on("fn-start",function(){s&&(c+=1)}),i.on("fn-err",function(t,e,r){s&&(this.thrown=!0,n(r))}),i.on("fn-end",function(){s&&!this.thrown&&c>0&&(c-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:8,2:5,3:9,4:7,5:20,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],4:[function(t){function e(){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var n=t("ee"),r=t("handle"),o=t(2);t("loader").features.stn=!0,t(1),n.on("fn-start",function(t){var e=t[0];e instanceof Event&&(this.bstStart=Date.now())}),n.on("fn-end",function(t,e){var n=t[0];n instanceof Event&&r("bst",[n,e,this.bstStart,Date.now()])}),o.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),o.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),n.on("pushState-start",function(){this.time=Date.now(),this.startPath=location.pathname+location.hash}),n.on("pushState-end",function(){r("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&&(window.performance.addEventListener("webkitresourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1),window.performance.addEventListener("resourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1)),document.addEventListener("scroll",e,!1),document.addEventListener("keypress",e,!1),document.addEventListener("click",e,!1)}},{1:6,2:8,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],5:[function(t,e){function n(t){i.inPlace(t,["addEventListener","removeEventListener"],"-",r)}function r(t){return t[1]}var o=(t(1),t("ee").create()),i=t(2)(o),a=t("gos");if(e.exports=o,n(window),"getPrototypeOf"in Object){for(var s=document;s&&!s.hasOwnProperty("addEventListener");)s=Object.getPrototypeOf(s);s&&n(s);for(var c=XMLHttpRequest.prototype;c&&!c.hasOwnProperty("addEventListener");)c=Object.getPrototypeOf(c);c&&n(c)}else XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&n(XMLHttpRequest.prototype);o.on("addEventListener-start",function(t){if(t[1]){var e=t[1];"function"==typeof e?this.wrapped=t[1]=a(e,"nr@wrapped",function(){return i(e,"fn-",null,e.name||"anonymous")}):"function"==typeof e.handleEvent&&i.inPlace(e,["handleEvent"],"fn-")}}),o.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{1:20,2:21,ee:"QJf3ax",gos:"7eSDFh"}],6:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window.history,["pushState"],"-")},{1:21,2:20,ee:"QJf3ax"}],7:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=r(t[0],"fn-")})},{1:21,2:20,ee:"QJf3ax"}],8:[function(t,e){function n(t,e,n){var r=t[0];"string"==typeof r&&(r=new Function(r)),t[0]=o(r,"fn-",null,n)}var r=(t(2),t("ee").create()),o=t(1)(r);e.exports=r,o.inPlace(window,["setTimeout","setInterval","setImmediate"],"setTimer-"),r.on("setTimer-start",n)},{1:21,2:20,ee:"QJf3ax"}],9:[function(t,e){function n(){c.inPlace(this,d,"fn-")}function r(t,e){c.inPlace(e,["onreadystatechange"],"fn-")}function o(t,e){return e}var i=t("ee").create(),a=t(1),s=t(2),c=s(i),f=s(a),u=window.XMLHttpRequest,d=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];e.exports=i,window.XMLHttpRequest=function(t){var e=new u(t);try{i.emit("new-xhr",[],e),f.inPlace(e,["addEventListener","removeEventListener"],"-",function(t,e){return e}),e.addEventListener("readystatechange",n,!1)}catch(r){try{i.emit("internal-error",[r])}catch(o){}}return e},window.XMLHttpRequest.prototype=u.prototype,c.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",o),i.on("send-xhr-start",r),i.on("open-xhr-start",r)},{1:5,2:21,ee:"QJf3ax"}],10:[function(t){function e(t){if("string"==typeof t&&t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if("undefined"!=typeof FormData&&t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function n(t){var n=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var i=0;c>i;i++)t.removeEventListener(s[i],this.listener,!1);if(!n.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){n.status=t.status;var a=t.responseType,f="arraybuffer"===a||"blob"===a||"json"===a?t.response:t.responseText,u=e(f);if(u&&(r.rxSize=u),this.sameOrigin){var d=t.getResponseHeader("X-NewRelic-App-Data");d&&(n.cat=d.split(", ").pop())}}else n.status=0;r.cbTime=this.cbTime,o("xhr",[n,r,this.startTime])}}}function r(t,e){var n=i(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}if(window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)){t("loader").features.xhr=!0;var o=t("handle"),i=t(2),a=t("ee"),s=["load","error","abort","timeout"],c=s.length,f=t(1);t(4),t(3),a.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=n,this.ended=!1,this.xhrGuids={}}),a.on("open-xhr-start",function(t){this.params={method:t[0]},r(this,t[1]),this.metrics={}}),a.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),a.on("send-xhr-start",function(t,n){var r=this.metrics,o=t[0],i=this;if(r&&o){var f=e(o);f&&(r.txSize=f)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof n.onload))&&i.end(n)}catch(e){try{a.emit("internal-error",[e])}catch(r){}}};for(var u=0;c>u;u++)n.addEventListener(s[u],this.listener,!1)}),a.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),a.on("xhr-load-added",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),a.on("xhr-load-removed",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),a.on("addEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-added",[t[1],t[2]],e)}),a.on("removeEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-removed",[t[1],t[2]],e)}),a.on("fn-start",function(t,e,n){e instanceof XMLHttpRequest&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),a.on("fn-end",function(t,e){this.xhrCbStart&&a.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{1:"XL7HBI",2:11,3:9,4:5,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],11:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");return!r.port&&o[1]&&(r.port=o[1].split("/")[0].split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname),r.sameOrigin=!e.hostname||e.hostname===document.domain&&e.port===n.port&&e.protocol===n.protocol,r}},{}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):(o[t]||(o[t]=[]),void o[t].push(e))}var r=t("ee").create(),o={};e.exports=n,n.ee=r,r.q=o},{ee:"QJf3ax"}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],G9z0Bl:[function(t,e){function n(){var t=p.info=NREUM.info;if(t&&t.agent&&t.licenseKey&&t.applicationID&&c&&c.body){p.proto="https"===d.split(":")[0]||t.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var e=c.createElement("script");e.src=p.proto+t.agent,c.body.appendChild(e)}}function r(){"complete"===c.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),s=window,c=s.document,f="addEventListener",u="attachEvent",d=(""+location).split("?")[0],p=e.exports={offset:i(),origin:d,features:{}};c[f]?(c[f]("DOMContentLoaded",o,!1),s[f]("load",n,!1)):(c[u]("onreadystatechange",r),s[u]("onload",n)),a("mark",["firstbyte",i()])},{handle:"D5DuLP"}],20:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=n},{}],21:[function(t,e){function n(t){return!(t&&"function"==typeof t&&t.apply&&!t[i])}var r=t("ee"),o=t(1),i="nr@wrapper",a=Object.prototype.hasOwnProperty;e.exports=function(t){function e(t,e,r,a){function nrWrapper(){var n,i,s,f;try{i=this,n=o(arguments),s=r&&r(n,i)||{}}catch(d){u([d,"",[n,i,a],s])}c(e+"start",[n,i,a],s);try{return f=t.apply(i,n)}catch(p){throw c(e+"err",[n,i,p],s),p}finally{c(e+"end",[n,i,f],s)}}return n(t)?t:(e||(e=""),nrWrapper[i]=!0,f(t,nrWrapper),nrWrapper)}function s(t,r,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<r.length;c++)s=r[c],a=t[s],n(a)||(t[s]=e(a,f?s+o:o,i,s,t))}function c(e,n,r){try{t.emit(e,n,r)}catch(o){u([o,e,n,r])}}function f(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){u([r])}for(var o in t)a.call(t,o)&&(e[o]=t[o]);return e}function u(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=r),e.inPlace=s,e.flag=i,e}},{1:20,ee:"QJf3ax"}]},{},["G9z0Bl",3,10,4]);
;NREUM.info={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",licenseKey:"xxxxxx",applicationID:"xxxxxx",sa:1,agent:"js-agent.newrelic.com/nr-476.min.js"}
</script>
<body>

	<?php include_once("analyticstracking.php") ?>
<!-- start header -->
<div id="header">
</div>
<div id="logo">
<font color="black">
<h1>Offering phone-based services in the Misawa area</h1>
</font>
		</div>
	
<!-- end header -->
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
	</head>
	<body>
		<br>
		<!-- end content -->
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
<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = xxxxxxxx;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/xxxxxxx/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


</body>

</html>
