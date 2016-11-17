<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php if ($title) echo $title . "David Barrett Partners"; else echo "David Barrett Partners | Specialists in Investment and Wealth Management Executive Search"; ?></title>
	<meta charset="utf-8" />
	<meta name="description" content="Executive search specialists in recruiting
	exceptional talents in all functional areas of investment management, asset management and wealth management." >
	<meta name="author" content="Blue Iceberg  |  www.blue-iceberg.com  |  212.337.9920">
	
	<!-- Styles -->
	<link rel="stylesheet" media="screen" href="/styles/standard.css?v=2" />
	<link rel="stylesheet" media="print" href="/styles/print.css" />
 	<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="/styles/ie6.css" /><![endif]-->
 	<!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href="/styles/ie7.css" /><![endif]-->
 	<!--[if IE 8]><link rel="stylesheet" type="text/css" media="screen" href="/styles/ie8.css" /><![endif]-->

	<!-- Scripts -->	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
	<script src="/scripts/selectivizr.js" type="text/javascript"></script>
	<script src="/scripts/application.js" type="text/javascript"></script>
	
	<!-- Favicon -->	
	<link rel="shortcut icon" href="/favicon.ico">
	
	<!-- Google Analytics -->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-435173-3']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

</head>

<body>

<!--[if IE 6]><div style="text-align:center; background: #003D79;"><p style="width:700px; padding: 20px 0; color: #fff;">This site does not support Internet Explore 6 or lower.  Please consider updating your browser to the latest version of <a style="color: #fff; text-decoration: underline;" href="http://www.microsoft.com/windows/internet-explorer/">Internet Explorer</a> or <a style="color: #fff; text-decoration: underline;" href="http://www.google.com/chrome">Google Chrome</a>.</p></div><![endif]-->

<div class="page" id="<?php echo $page_id ?>">
	<div class="header">
		<h1><a href="/" title="Home"><img src="/images/identity.gif" alt="David Barrett Partners" /></a></h1>
		<ul id="practice">
			<li>Asset Management</li>
			<li>Wealth Management</li>
			<li>Alternative Investment Management</li>
		</ul>

		<h3><a href="/">David Barrett Partners</a></h3>
		
		<ul class="location">
			<li><a class="locnyc" href="/contact/#london">New York</a></li>
			<li><a class="loclon" href="/contact/#london">London</a></li>
			<li><a class="locbos" href="/contact/#boston">Boston</a></li>
			<li><a class="lochk" href="/contact/#hongkong">Hong Kong</a></li>
		</ul>
		
		<ul class="nav" id="main">
			<li<?php if ($page_id=="home") echo " id=\"current\""; ?> class="home"><a href="/" >Home</a></li>
	 		<li<?php if ($page_id=="approach") echo " id=\"current\""; ?> class="approach"><a href="/our_approach">Our Approach</a></li>
			<li<?php if ($page_id=="team") echo " id=\"current\""; ?> class="team"><a id="team_current" href="/our_team">Our Team</a>
 				<ul class="subnav">
			
							<li class="david_nav"><a href="/our_team/david_barrett/">David Barrett</a></li>
							<li class="darryl_nav"><a href="/our_team/darryl_adachi/">Darryl Adachi</a></li>
							<li class="robert_nav"><a href="/our_team/robert_gorog/">Robert Gorog</a></li>
							<li class="marcus_nav"><a href="/our_team/marcus_hanbury/">Marcus Hanbury</a></li>
							<li class="elizabeth_nav"><a href="/our_team/elizabeth_havens/">Elizabeth Havens</a></li>
							<li class="nick_nav"><a href="/our_team/nick_huggett/">Nick Huggett</a></li>
							<li class="harriet_nav"><a href="/our_team/harriet_hyde/">Harriet Hyde</a></li>
							<li class="tory_nav"><a href="/our_team/tory_hyndman/">Tory Hyndman</a></li>
							<li class="anne_nav"><a href="/our_team/anne_m_keyser/">Anne Keyser</a></li>
							<li class="ted_nav"><a href="/our_team/edward_a_kister/">Edward Kister</a></li>
							<li class="john_nav"><a href="/our_team/john_f_knapp/">John Knapp</a></li>
							<li class="zoe_nav"><a href="/our_team/zoe_manners/">Zoe Manners</a></li>
							<li class="adwoa_nav"><a href="/our_team/adwoa_m_taylor/">Adwoa Taylor</a></li>
							<li class="philip_nav"><a href="/our_team/philip_williams/">Philip Williams</a></li>
							<li class="jiayin_nav"><a href="/our_team/jiayin_yu/">Jiayin Yu</a></li>
							
			
				</ul>
			</li>
			<!--<li<?php if ($page_id=="specialties") echo " id=\"current\""; ?> class="specialties"><a href="/specialties">Specialties</a></li>-->
			<li<?php if ($page_id=="press" || $page_id=="media") echo " id=\"current\""; ?> class="press"><a href="/press_room/">Press Room</a>
				<ul class="subnav">
					<li class="news_nav"><a href="/press_room/in_the_news.php">In the News</a></li>
					<li class="media_nav"><a href="/press_room/media_assets.php">Media Assets</a></li>
				</ul>
			</li>
			<li<?php if ($page_id=="contact") echo " id=\"current\""; ?> class="contact"><a href="/contact/">Contact Us</a></li>
		</ul>
	</div>