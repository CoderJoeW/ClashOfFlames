<?
	include 'config.php';
	include 'engine/functions.php';
	require('engine/version/global_functions.php');
	require('engine/version/core.php');
	require_once("engine/PHPPaging.lib.php");
	require ("language_config.php"); 
	$pagina = new PHPPaging;
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-cache, must-revalidate");
	header("Pragma: no-cache");	
	$core['version'] = crypt_it($engine,'','1'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$serverName;?></title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/custom.min.css">   
	<link rel="icon" type="image/png" href="https://clashofclans.com/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="https://clashofclans.com/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="https://clashofclans.com/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="https://clashofclans.com/favicon-16x16.png" sizes="16x16">
	<script src='https://www.google.com/recaptcha/api.js'></script>
    <meta name="keywords" content="Clash of Clans, COC, unOfficial, About, Site, Store, Free, Full, Real, How to, Find, Download, Install, Forum, Game, Play, Mobile, Strategy, Multiplayer, Online, Offline, PC Update, iPhone, iOS, Android, iPad, App, Smartphone, Tablet, App Store, Google Play, Screenshot, Combat, Rating, War, Tips, Tricks" />
    <meta name="description" content="Behold the Clashiest of Clashers" />
    <script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#open').click(function(){
				$('#popup').fadeIn('slow');
				$('.popup-overlay').fadeIn('slow');
				$('.popup-overlay').height($(window).height());
				return false;
			});
				$('#close').click(function(){
				$('#popup').fadeOut('slow');
				$('.popup-overlay').fadeOut('slow');
				return false;
			});
		});
	</script>
</head>
<body onLoad="ini();">
	<div class="container">
		<div class="jumbotron">
			<?
				if(empty($_GET['page_id'])) { 
					include("pages_modules/ranking.php"); 
				}
			?>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="css/bootstrap.min.js"></script>
    <script src="css/custom.js"></script>
	<script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script>
</body>
</html>
