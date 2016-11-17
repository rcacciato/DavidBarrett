<?php
	$page_id="home";
	include ('includes/header.php');
	include ('includes/db_include.php');
	include ('includes/home_functions.php');
?>

<div class="section" id="main">
	<h2>Success Begins with People.</h2>

	<p id="slideshow">
		<img src="/images/home_photo_hk.jpg" alt="Photo" class="photo-link" data-link="/press_room/view.php?id=112"/>
		<img src="/images/home_photo_ny.jpg" alt="Photo"  class="photo-link" data-link="/press_room/view.php?id=112"/>
		<img src="/images/home_photo_london.jpg" alt="Photo"  class="photo-link" data-link="/press_room/view.php?id=112"/>
		<img src="/images/home_photo_boston.jpg" alt="Photo"  class="photo-link" data-link="/press_room/view.php?id=112"/>
			<img src="/images/home_cio_captions_11pt.jpg" alt="Photo" class="photo-link" data-link="/press_room/view.php?id=105"/>
<!--			<img src="/images/home_photo5.jpg" alt="Photo"/>-->
	</p>

	<div class="l_col">

		<p>David Barrett Partners is a global boutique retained executive search firm specializing exclusively in investment and wealth management recruiting.</p>
		<p>Founded in 2005, the firm is comprised of a team of  fifteen consultants in New York, London, Boston and Hong Kong, who have over 180 years of combined global buy-side recruiting experience. We partner closely with clients in recruiting exceptional senior leadership talent across all functional disciplines in the investment and wealth management marketplace.</p>

	</div>
	<div class="r_col">
		<p>Our recruiting experience spans institutional, mutual fund and high net worth organizations; hedge funds and funds of funds; endowments, foundations, and plan sponsors;  family offices; and sovereign wealth funds. Our assignments include searches for chief executive, chief operating and chief investment officers; senior professionals in investments, marketing, sales and client service; and senior functional business leaders.</p>
		<br>
		<br>
		<br>
		<br>
		<br>
		David Barrett Partners (HK) limited, a company incorporated with limited liability and registered in Hong Kong


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
