<?php
	if($_POST['submit']) {
		$to_email = urldecode($_POST['email']);
		$to_email = ereg_replace("(\n|\r).+","",$to_email);
		if(!$_POST['first_name']) { $err[] = "Please enter your first name. <br/>"; }
		if(!$_POST['last_name']) { $err[] = "Please enter your last name.<br/>"; }
		if(!$to_email) { $err[] = "Please enter your e-mail address.<br/>"; } elseif(!ereg(".+@.+\..+", $to_email)) { $err[] = "Please enter a valid e-mail address.<br/>"; }

		if($err || $_POST['hp_input'] != "")
		{
			$output = "<div class=\"error\"><h4>There was an error sending your message:</h4><p>"
					 . implode("\n", $err)."</p></div>";
		}else{
			$first_name = $_POST['first_name'];
			$name = $_POST['first_name']." ".$_POST['last_name'];
			$message = $_POST['message'];
			$mailcontent = "David Barrett Partners Website Inquiry\n\n"
							. "From: " . $name . "\n\n"
							. "Message: " . $message;
			$headers = "From: " . $name ."<". $to_email .">\r\n"
					  ."Reply-To: ".$to_email."\r\n"
					  ."X-Mailer: PHP/".phpversion();
			if(mail("info@davidbarrettpartners.com", "David Barrett Partners Website Inquiry", $mailcontent, $headers))
			{
				$newmailcontent = "Dear ".$first_name.",\n\n"
								 ."Thank you for contacting David Barrett Partners. Here's a copy of your message for your reference.\n\n"
								. "----------- \n\n"
								.$mailcontent;
				mail($to_email, "David Barrett Partners Website Inquiry", $newmailcontent, "From: info@davidbarrettpartners.com");
				Header("Location: thankyou.php");
				exit;
			}else{
				$output = "There was an error sending your request. Please send an e-mail to info@davidbarrettpartners.com with your information and you will receive a response shortly.";
			}
		}
	}

$title='Contact Us | '; $page_id="contact"; include ('../includes/header.php');
?>

<div class="section" id="main">

	<p class="img"><img src="/images/contact_photo02.jpg" alt="Contact Us" /></p>

	<div class="l_col">
		<h3 class="ny_head">New York</h3>
		<ul class="info">
			<li class="address">
				230 Park Avenue, Suite 450<br/>
				New York, NY 10169
			</li>
			<li class="tel"><strong>+1.212.710.8840</strong></li>
			<li><a href="../our_team/david_barrett/">David Barrett</a></li>
			<li><a href="../our_team/darryl_adachi/">Darryl Adachi</a></li>
			<li><a href="../our_team/elizabeth_havens/">Elizabeth Havens</a></li>
			<li><a href="../our_team/edward_a_kister/">Edward A. Kister</a></li>
			<li><a href="../our_team/james_mcavey/">James McAvey</a></li>
			<li><a href="../our_team/adwoa_m_taylor/">Adwoa M. Taylor</a></li>
			<li><a href="../our_team/jiayin_yu/">Jiayin Yu</a></li>
		</ul>

		<br><br>

		<h3 id="boston" class="bos_head">Boston</h3>
		<ul class="info">
			<li class="address">
				60 State Street, Suite 700<br/>
				Boston, MA 02109<br/><br/>
			</li>
			<li><a href="../our_team/robert_gorog/">Robert Gorog</a></li>
			<li class="tel"><strong>+1.617.854.6500</strong></li>
			<li><a href="../our_team/john_f_knapp/">John F. Knapp</a></li>
			<li class="tel"><strong>+1.617.854.6575</strong></li>
			<li><a href="../our_team/anne_m_keyser/">Anne M. Keyser</a></li>
			<li class="tel"><strong>+1.617.491.1115</strong></li>
		</ul>
	</div>

	<div class="r_col">

		<h3 id="london" class="lon_head">London</h3>
		<ul>
			<li class="address">
				16 Old Queen Street<br/>
				London SW1H 9HP
			</li>
			<li class="tel"><strong>+44.20.3170.5774</strong></li>
			<li><a href="../our_team/tory_hyndman/">Tory Hyndman</a></li>
			<li><a href="../our_team/marcus_hanbury/">Marcus Hanbury</a></li>
			<li><a href="../our_team/nick_huggett/">Nick Huggett</a></li>
			<li><a href="../our_team/harriet_hyde/">Harriet Hyde</a></li>
			<li><a href="../our_team/zoe_manners/">Zoë Manners</a></li>
			<br>
		</ul>

		<br><br>

		<h3 id="hongkong" class="hk_head">Hong Kong</h3>
		<ul>
			<li class="address">
				Level 16, The Hong Kong Club Building<br/>
				3A Chater Road, Central, Hong Kong<br/>
			</li>
			<li class="tel"><strong>+852.3974.8576</strong></li>
			<li><a href="../our_team/philip_williams/">Philip Williams</a></li>
		</ul>

	</div>

	<br><br>
	<div class="contact-form">

		<p class="intro">If you would like more information about David Barrett Partners, please call us or send us a message at
			<script type="text/javascript">
			//<![CDATA[

			function hiveware_enkoder(){var i,j,x,y,x=
			"x=\"966656567966;6:655g6;:52%@{\\\"=x668666:666666696669696966676667666:66" +
			"686969666866696667696966696665666:666:666:666869656665666;6665666866696667" +
			"666:666<6669666966686969666<6669666566646669666766696663666766696969666966" +
			"676669666<66696669666:66696665666:6665666:6664666966656663666:6667666:6667" +
			"666:6668666869696667666:6665666:6664666969656666666:6665666:66686669666566" +
			"676969666969696666666966686663666666656966666<66656665666:656:6567966<6:65" +
			"9665656569666667966<696;65656:6999696965966869669968956;6:66966<6965966366" +
			"65956<6965966;69676:6:696899686:679665956<6:659:6<65656667956869636:646966" +
			"69666:68696899666:68956;6:65956:6568656:656;656<696;65656:676:666:6569686:" +
			"6e655<6:679:65966<656<656566669f6<9e636g6<9;55:i999e6:5:5g6<:e:<556g6e5<9e" +
			"6;97::9h989f9h5;::585:5;5893:49696:89h98:g6e5<:<5<556f5<9;55:7:6:598:6:h5;" +
			":e5qho1{?l>3@l+uri>**@|>52%<:g:e6xv1{.*(*+hsdfvhqx@.|~,5@.l>kwjacsenu=x;''" +
			"=y;\\\"|22%>,,5/l+uwve{)++i;htgnel.x<i;0=i(rof;)x(ep+j)23<j(fi;3-)i(tAedoC" +
			"rahc.x=j})j(edoCrahCmorf.gnirtS=+y;49=y\";y='';for(i=0;i<x.length;i+=30){f" +
			"or(j=Math.min(x.length,i+30);--j>=i;){y+=x.charAt(j);}}y;";
			while(x=eval(x));}hiveware_enkoder();

			//]]>
			</script>
		using the form below:</p>


			<?= $output ?>


		<form action="index.php" method="post">
			<fieldset>
				<label for="first_name">First Name</label>
				<input type="text" id="first_name" name="first_name" value="<?= $_POST['first_name']?>">
				<label for="last_name">Last Name</label>
				<input type="text" id="last_name" name="last_name" value="<?= $_POST['last_name']?>">
				<label for="email">Email</label>
				<input type="text" id="email" name="email" value="<?= $_POST['email']?>">
				<label for="message">Message</label>
				<textarea id="message" name="message"><?= $_POST['message']?></textarea>
				<div style="display:none">
					<label for='hp_input'>Message:</label>
					<input name="hp_input" value="<?= $_POST['hp_input'] ?>" size="28" maxlength="" />
				</div>
			</fieldset>
			<fieldset>
 				<input type="submit" id="submit" name="submit" value="Send"></td>
			</fieldset>
		</form>

	</div>

</div>

<p class="notice">David Barrett Partners LLC is a State of Delaware, USA registered limited liability company with its head office in New York, NY (Registration No 4006199).  David Barrett Partners trades in the United Kingdom as David Barrett Partners Limited, a UK registered limited liability company (Company No 07883835) with its head office in London and its registered office at 32 Portland Terrace, Newcastle Upon Tyne NE21QP. David Barrett Partners trades in Hong Kong as David Barrett Partners (HK) Limited, a company incorporated with limited liability and registered in Hong Kong.</p>

<?php $page_id="contact"; include ('../includes/footer.php'); ?>
