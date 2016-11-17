<?php $title='Our Team | '; $page_id="team"; include ('../includes/header.php'); ?>
	
<div class="section" id="main">
<script type="text/javascript">
	$(document).ready(function() {
	
	imgset = $("p > img");
	imgset.hide();
		
		$(window).load(function() {
			imgset.fadeIn('medium');
		});
	
		$(".lineup > li").click(function(){ 
			window.location=$(this).find("a").attr("href"); return false;	
		});

	});
</script>

	<h2>Our Team</h2>

	<ul class="lineup" id="li_top">
		<li class="empty">
		<li>
			<h4><a href="/our_team/david_barrett/">David Barrett</a></h4>
			<p><img src="/images/team_david.jpg" alt="" /></p>
		</li>
		<li>
			<h4><a href="/our_team/darryl_adachi/">Darryl Adachi</a></h4>
			<p><img src="/images/team_darryl.jpg" alt="" /></p>
		</li>
		<li>
			<h4><a href="/our_team/robert_gorog/">Robert Gorog</a></h4>
			<p><img src="/images/team_bob.jpg" alt="" /></p>
		</li>
		<li>
			<h4><a href="/our_team/marcus_hanbury/">Marcus Hanbury</a></h4>
			<p><img src="/images/team_marcus.jpg" alt="" /></p>
		</li>
		<li class="empty">
		<li>
			<h4><a href="/our_team/elizabeth_havens/">Elizabeth Havens</a></h4>
			<p><img src="/images/team_elizabeth.jpg" alt="" /></p>
		</li>
		<li>
			<h4><a href="/our_team/nick_huggett/">Nick Huggett</a></h4>
			<p><img src="/images/team_nick.jpg" alt="" /></p>
		</li>
		<li>
			<h4><a href="/our_team/harriet_hyde/">Harriet Hyde</a></h4>
			<p><img src="/images/team_harriet.jpg" alt="" /></p>
		</li>
		<li>
			<h4><a href="/our_team/tory_hyndman/">Tory Hyndman</a></h4>
			<p><img src="/images/team_tory.jpg" alt="" /></p>
		</li>	
		<li class="empty">
		<li>
			<h4><a href="/our_team/anne_m_keyser/">Anne M. Keyser</a></h4>
			<p><img src="/images/team_anne2.jpg" alt="" /></p>
		</li>
		<li>
			<h4><a href="/our_team/edward_a_kister/">Edward A. Kister</a></h4>
			<p><img src="/images/team_ted.jpg" alt="" /></p>
		</li>
		<li>
			<h4><a href="/our_team/john_f_knapp/">John F. Knapp</a></h4>
			<p><img src="/images/team_john.jpg" alt="" /></p>
		</li>
		<li>
			<h4><a href="/our_team/zoe_manners/">Zoë Manners</a></h4>
			<p><img src="/images/team_zoe.jpg" alt="" /></p>
		</li>
		<li class="empty">
		<li>
			<h4><a href="/our_team/james_mcavey/">James McAvey</a></h4>
			<p><img src="/images/team_james.jpg" alt="" /></p>
		</li>
		<li>
			<h4><a href="/our_team/adwoa_m_taylor/">Adwoa M. Taylor</a></h4>
			<p><img src="/images/team_adwoa.jpg" alt="" /></p>
		</li>
		<li>
			<h4><a href="/our_team/philip_williams/">Philip Williams</a></h4>
			<p><img src="/images/team_philip.jpg" alt="" /></p>
		</li>
	</ul>
	
</div>

<?php include ('../includes/team_side_nav.php'); ?>

<?php include ('../includes/footer.php'); ?>