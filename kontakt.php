<!DOCTYPE html>
<html lang="en">
	<head>
		<title>KONTAKT</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/TMForm.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body>
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
							<li class="current"><a href="index.php">BALLINA</a></li>
								<li><a href="galeri.php">GALERI</a></li>
								<li><a href="eventet.php">EVENTET</a></li>
								<li><a href="rrethnesh.php">RRETH NESH</a></li>
								<li><a href="kontakt.php">KONTAKT</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_12">
					<h1>
						
					</h1>
				</div>
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content"><div class="ic"></div>
			<div class="container_12">
				<div class="grid_5">
					<h3>Palma Hotel</h3>
					<div class="map">
						<p>Palma Hotel ofron sherbimet e saja 24/7. <span class="col1"></span></p>
						<p><span class="col1"></span> Nese ju nevojiten sherbimet tona kontaktet i gjeni më poshtë.</p>
						<div class="clear"></div>
						<figure class="">
							<iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Ulcinj,+Montenegro&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Ulcinj,+Montenegro&amp;ll=41.939652, 19.215564&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
						</figure>
						<address>
							<dl>
								<dt>Palma Hotel  <br>
									Magjistralja M-2.4,<br>
									Ulqin.
								</dt>
								<dd><span>Email:</span>palmahotel@gmail.com</dd>
								<dd><span>Telefon:</span>+38649000000</dd>
								<dd><span>Telefon:</span>+37744000000</dd>
								
							</dl>
						</address>
					</div>
				</div>
				<div class="grid_6 prefix_1">
					<h3>MERR NJOFTIMET</h3>
					<form id="form">
						<div class="success_wrapper">
							<div class="success-message">Contact form submitted</div>
						</div>
						<label class="name">
							<input type="text" placeholder="Emri:" data-constraints="@Required @JustLetters" />
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid name.</span>
						</label>
						<label class="email">
							<input type="text" placeholder="Email:" data-constraints="@Required @Email" />
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid email.</span>
						</label>
						<label class="country">
							<input type="text" placeholder="Vendi:" data-constraints="@Required @JustLetters"/>
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid phone.</span>
						</label>
						<label class="message">
							<textarea placeholder="Koment:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*The message is too short.</span>
						</label>
						<div>
							<div class="clear"></div>
							<div class="btns">
								<a href="#" data-type="reset" class="btn">Pastro</a>
								<a href="#" data-type="submit" class="btn">Dergo</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="socials">
						<a href="https://fb.com" class="fa fa-facebook"></a>
						<a href="https://twitter.com" class="fa fa-twitter"></a>
						<a href="https://plus.google.com/" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						Palma Hotel(c) 2016 || Te gjitha të drejtat e rezervuara !
					</div>
				</div>
			</div>
		</footer>
		<script>
		$(function (){
			$('#bookingForm').bookingForm({
				ownerEmail: '#'
			});
		})
		</script>
	</body>
</html>