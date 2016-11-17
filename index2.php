<?php 
	$page_id="home"; 
	include ('includes/header.php'); 
	include ('includes/db_include.php');
	include ('includes/home_functions.php');
?>
	
<div class="section" id="main">
	<h2>Success Begins with People.</h2>

	<p id="slideshow">
			<img src="/images/home_photo01.jpg" alt="Photo" />
			<img src="/images/home_photo02.jpg" alt="Photo" />
			<img src="/images/home_photo03.jpg" alt="Photo" />
			<img src="/images/home_photo04.jpg" alt="Photo" />
	</p>

	<div class="l_col">
			
		<p>David Barrett Partners is a boutique retained executive search firm specializing exclusively in investment and wealth management recruiting.</p>  
		<p>Founded in 2005, the firm has grown to a team of eleven consultants in New York, London, and Boston, who have over 150 years of combined global buy-side recruiting experience.  We partner closely with clients in recruiting exceptional senior leadership talent across all functional disciplines in the investment and wealth management marketplace.</p>
		
	</div>
	<div class="r_col">
		<p>Our recruiting experience spans institutional, mutual fund and high net worth organizations; hedge funds and funds of funds; endowments, foundations, and plan sponsors; and family offices.  Our assignments include searches for chief executive, chief operating and chief investment officers; senior professionals in investments, marketing, sales and client service; and business leaders in risk management, legal, compliance, human resources and finance.</p>


	</div>

</div>

<div class="aside" id="press_box">
	
	<h3>Press Mentions</h3>
	
	<div class="article">
		<?php 
			$press_item = getHomeNode();
			while($row = mysql_fetch_array($press_item)){
		?>
		<h4><a href="/press_room/"><?= $row['headline']?></a></h4>
		<p><?= trimContent($row['teaser']) ?></p>

		<cite>
			<span class="ref"><?= $row['publication']?></span>
			<span class="date"><?= formatDate($row['publish_date']) ?></span>
		</cite>

		<a href="/press_room/" class="more">Read More</a>
		<?php
			}
		?>
	</div>
</div>

<?php 
// include ('includes/footer.php');
?>

<div class="footer" style="margin-top: 58px !important;">	
	<cite><a href="http://www.blue-iceberg.com" title="NYC Interactive Agency">Website by Blue Iceberg</a></cite>
</div>


</div>
</body>
</html>