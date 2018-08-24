<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Palma Hotel</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="booking/css/booking.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '444',
				thumbnails: false,
				height: '48.375%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			/*carousel*/
			var owl=$("#owl");
				owl.owlCarousel({
				items : 2, //10 items above 1000px browser width
				itemsDesktop : [995,2], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 2], // betweem 900px and 601px
				itemsTablet: [700, 2], //2 items between 600 and 0
				itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
				pagination : false
				});
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
	<body class="page1" id="top">
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
		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="images/slide.jpg">
					<div class="caption fadeIn">
						<h2></h2>
						<div class="price">
							
							<span></span>
						</div>
						
					</div>
				</div>
				<div data-src="images/slide1.jpg">
					<div class="caption fadeIn">
						<h2></h2>
						<div class="price">
						
							<span></span>
						</div>
						
					</div>
				</div>
				<div data-src="images/slide2.jpg">
					<div class="caption fadeIn">
						<h2></h2>
						<div class="price">
						
							<span></span>
						</div>
						
					</div>
				</div>
			</div>
		</div>
<!--==============================Content=================================-->
		<div class="content"><div class="ic"></div>
			<div class="container_12">
				<div class="grid_4">
					<div class="banner">
						<img src="images/page2_img2.jpg" alt="">
						<div class="label">
							<div class="title"></div>
							<div class="price"><span></span></div>
							
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="images/page2_img1.jpg" alt="">
						<div class="label">
							<div class="title"></div>
							<div class="price"><span></span></div>
							
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="images/page2_img4.jpg" alt="">
						<div class="label">
							<div class="title"></div>
							<div class="price"><span></span></div>
						
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="grid_6">
					<h3>REZERVO ONLINE</h3>
					<form method="post" action="mysql.php" id="bookingForm">
						<div class="fl1">
							<div class="tmInput">
								<input name="Emri" placeHolder="Emri:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
							</div>
							<div class="tmInput">
								<input name="Country" placeHolder="Vendi:" type="text" data-constraints="@NotEmpty @Required">
							</div>
						</div>
						<div class="fl1">
							<div class="tmInput">
								<input name="Mbiemri" placeHolder="Mbiemri:" type="text" data-constraints="@NotEmpty @Required ">
							</div>
							
						</div>
						<div class="clear"></div>
						<strong>Arritja</strong>
						<label class="tmDatepicker">
							<input type="text" name="Check-in" placeHolder='20/12/2016' data-constraints="@NotEmpty @Required @Date">
						</label>
						<div class="clear"></div>
						<strong>Largimi</strong>
						<label class="tmDatepicker">
							<input type="text" name="Check-out" placeHolder='25/12/2016' data-constraints="@NotEmpty @Required @Date">
						</label>
						<div class="clear"></div>
						
						<div class="clear"></div>
						<div class="fl1 fl2">
							<em>Të rritur</em>
							<select name="Adults" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option>1</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
							<div class="clear"></div>
							<em>Dhoma</em>
							<select name="Rooms" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option>1</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
						</div>
						<div class="fl1 fl2">
							<em>Femijë</em>
							<select name="Children" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option>0</option>
								<option>0</option>
								<option>1</option>
								<option>2</option>
							</select>
						</div>
						<div class="clear"></div>
						<div class="tmTextarea">
							<textarea name="Message" placeHolder="Informata shtesë" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
						</div>
						<a href="#" class="btn" name="submit" data-type="submit">Dergo</a>
					</form>
				</div>
			
				<div class="grid_5 prefix_1">
					<h3>PALMA HOTEL</h3>
					<img src="images/logo.png" alt="" class="img_inner fleft">
					<div class="extra_wrapper">
						<p>Palma Hotel është më shumë se vetëm Hotel, me resortin e vet që përfshin objekte dhe salla të takimeve të cilat mund të shfrytëzohen për kuvende, ekspozita, konferenca dhe ahengje.Objektet e tij janë pa konkurrencë . </p>
						
					</div>
					<div class="clear cl1"></div>
					<p> <span class="col1"></span> </p>
					<p><span class="col1"></span>  </p>
				
					<h4>KOMPLIMENTET</h4>
					<blockquote class="bq1">
						<img src="images/page1_img2.jpg" alt="" class="img_inner noresize fleft">
						<div class="extra_wrapper">
							<p>Palma Hotel paraqet një vend shumë të mirë per kalim të kohës se lirë </p>
							<div class="alright">
								<div class="col1">Jeta Berisha</div>
								<a href="#" class="btn">Tjera</a>
							</div>
						</div>
					</blockquote>
				</div>
				<div class="grid_12">
					<h3 class="head1">Lajmet e Fundit</h3>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time datetime="2014-01-01">20<span>Qer</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">Ridizajnim</a></div>
						Palma Hotel ka filluar ridizajnimin e disa hapsirave te saja.
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time datetime="2014-01-01">21<span>Tet</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">Bashkëpunim</a></div>
							Palma Hotel ka nënshkruar memorandum bashkëpunimi me dy hotele tjera.
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time datetime="2014-01-01">28<span>Tet</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">Organzimi</a></div>
							Palma Hotel do të jetë organizator i 3 konferencave.
						</div>
					</div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="socials">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-google-plus"></a>
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
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script>
	</body>
</html>

