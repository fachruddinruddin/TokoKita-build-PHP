<?php
session_start();
include 'dbconnect.php';

?>

<!DOCTYPE html>
<html>

<head>
	<title>TOKO KITA</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Falenda Flora, Ruben Agung Santoso" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/okok.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!-- js -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- //js -->
	<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->


</head>

<body>
	<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>WELCOME TO TOKO KITA , <a>AYOOO BELANJA SEKARANG!</a></p>
			</div>
			<div class="agile-login">
				<ul>
					<?php
					if (!isset($_SESSION['log'])) {
						echo '
					<li><a href="registered.php"> Daftar</a></li>
					<li><a href="login.php">Masuk</a></li>
					';
					} else {

						if ($_SESSION['role'] == 'Member') {
							echo '
					<li style="color:white">Halo, ' . $_SESSION["name"] . '
					<li><a href="logout.php">Keluar?</a></li>
					';
						} else {
							echo '
					<li style="color:white">Halo, ' . $_SESSION["name"] . '
					<li><a href="admin">Admin Panel</a></li>
					<li><a href="logout.php">Keluar?</a></li>
					';
						};
					}
					?>

				</ul>
			</div>
			<div class="product_list_header">
				<a href="cart.php"><button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</a>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Contact Kami : (+6281) 222 333</li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">TOKO KITA</a></h1>
			</div>
			<div class="w3l_search">
				<form action="search.php" method="post">
					<input type="search" name="Search" placeholder="Cari produk...">
					<button type="submit" class="btn btn-default search" aria-label="Left Align">
						<i class="fa fa-search" aria-hidden="true"> </i>
					</button>
					<div class="clearfix"></div>
				</form>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php" class="act">Home</a></li>
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori Produk<b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="multi-gd-img">
										<ul class="multi-column-dropdown">
											<h6>Kategori</h6>

											<?php
											$kat = mysqli_query($conn, "SELECT * from kategori order by idkategori ASC");
											while ($p = mysqli_fetch_array($kat)) {

											?>
												<li><a href="kategori.php?idkategori=<?php echo $p['idkategori'] ?>"><?php echo $p['namakategori'] ?></a></li>

											<?php
											}
											?>
										</ul>
									</div>

								</div>
							</ul>
						</li>
						<li><a href="#promo">Promo</a></li>
						<li><a href="#berita">Berita</a></li>
						<li><a href="#video">Video</a></li>
						<li><a href="#contact">Contact</a></li>
						<li><a href="#sosmed">Sosmed</a></li>
						<li><a href="cart.php">Keranjang Saya</a></li>
						<li><a href="daftarorder.php">Daftar Order</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>

	<!-- //navigation -->
	<!-- main-slider -->
	<ul id="demo1">
		<li>
			<img src="images/slider1.png" alt="" />
		</li>
		<li>
			<img src="images/slider2.png" alt="" />
		</li>

		<li>
			<img src="images/slider3.png" alt="" />
		</li>
	</ul>
	<!-- //main-slider -->
	<!-- //top-header and slider -->
	<!-- top-brands -->
	<div id="promo" class="top-brands">
		<div class="container">
			<h2>Produk Kami</h2>
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							<div class="agile-tp">
								<h5>Promo Bulan Ini
									<?php
									if (!isset($_SESSION['name'])) {
									} else {
										echo 'Untukmu, ' . $_SESSION['name'] . '!';
									}
									?>
								</h5>
							</div>
							<div class="agile_top_brands_grids">

								<?php
								$brgs = mysqli_query($conn, "SELECT * from produk order by idproduk ASC");
								$no = 1;
								while ($p = mysqli_fetch_array($brgs)) {

								?>
									<div class="col-md-4 top_brand_left">
										<div class="hover14 column">
											<div class="agile_top_brand_left_grid">
												<div class="agile_top_brand_left_grid_pos">
													<img src="images/offer.png" alt=" " class="img-responsive" />
												</div>
												<div class="agile_top_brand_left_grid1">
													<figure>
														<div class="snipcart-item block">
															<div class="snipcart-thumb">
																<a href="product.php?idproduk=<?php echo $p['idproduk'] ?>"><img title=" " alt=" " src="<?php echo $p['gambar'] ?>" width="200px" height="200px" /></a>
																<p><?php echo $p['namaproduk'] ?></p>
																<div class="stars">
																	<?php
																	$bintang = '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
																	$rate = $p['rate'];

																	for ($n = 1; $n <= $rate; $n++) {
																		echo '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
																	};
																	?>
																</div>
																<h4>Rp<?php echo number_format($p['hargaafter']) ?> <span>Rp<?php echo number_format($p['hargabefore']) ?></span></h4>
															</div>
															<div class="snipcart-details top_brand_home_details">
																<fieldset>
																	<a href="product.php?idproduk=<?php echo $p['idproduk'] ?>"><input type="submit" class="button" value="Lihat Produk" /></a>
																</fieldset>
															</div>
														</div>
													</figure>
												</div>
											</div>
										</div>
									</div>
								<?php
								}
								?>


								<div class="clearfix"> </div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //top-brands -->

	<!-- berita -->
	<div id="berita" class="top-brands">
		<section id="news" class="home-section text-center">
			<?php
			include "berita.php";
			?>
		</section>
	</div>
	<!-- end berita -->

	<!-- video -->
	<div id="video" class="top-brands">
		<section id="news" class="video">
			<?php
			include "video.php";
			?>
		</section>
	</div>
	<!-- end video -->

	<!-- Contact Section -->
	<div id="contact" class="top-brands py-5">
		<div class="container">
			<h2 class="text-center">Kontak Kami</h2><br>
			<?php
			
			$nameErr = $emailErr = "";
			$name = $email = $comment = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$valid = true;

				if (empty($_POST["name"])) {
					$nameErr = "Name is required";
					$valid = false;
				} else {
					$name = test_input($_POST["name"]);
				}

				if (empty($_POST["email"])) {
					$emailErr = "Email is required";
					$valid = false;
				} else {
					$email = test_input($_POST["email"]);
				}

				if (empty($_POST["comment"])) {
					$comment = "";
				} else {
					$comment = test_input($_POST["comment"]);
				}

				if ($valid) {
					$to = "poenyoex@gmail.com";
					$subject = "New Contact Form Submission";
					$message = "Name: $name\nEmail: $email\nMessage: $comment";
					$headers = "From: $email";

					if (mail($to, $subject, $message, $headers)) {
						echo "<p class='text-success'>Message sent successfully!</p>";
					} else {
						echo "<p class='text-danger'>Message delivery failed...</p>";
					}
				}
			}

			function test_input($data)
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
			?>

			<form class="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				<p><span class="error">* required field</span></p><br>
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $name; ?>">
					<span class="error text-danger">* <?php echo $nameErr; ?></span>
				</div>
				<br>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
					<span class="error text-danger">* <?php echo $emailErr; ?></span>
				</div>
				<br>
				<div class="form-group">
					<label for="comment">Pesan</label>
					<textarea class="form-control" id="comment" name="comment" rows="5" placeholder="Pesan"><?php echo $comment; ?></textarea>
				</div>
				<br>
				<button type="submit" class="btn btn-primary btn-block">Submit</button>
			</form><br>
		</div>
	</div>

	<!-- //footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-4 w3_footer_grid">
					<h3>Hubungi Kami</h3>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Semarang. JATENG</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="poenyoex@gmail.com">poenyoex@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+62 878 025 988 41</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profil Ku</h3>
					<ul class="info">
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.html">About Us</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

		<div class="footer-copy">

			<div class="container">
				<p>© 2022 Muhammad Fachruddin</p>
			</div>
		</div>

	</div>
	<div class="footer-botm">
		<div class="container">
			<div id="sosmed" class="w3layouts-foot">
				<ul>
					<li><a href="https://instagram.com/facruttt___?igshid=YmMyMTA2M2Y=" class="w3_agile_instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="https://www.facebook.com/fachrudin01?mibextid=LQQJ4ds" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="payment-w3ls">
				<img src="images/card.png" alt=" " class="img-responsive">
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //footer -->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- top-header and slider -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {

			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 4000,
				easingType: 'linear'
			};


			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->

	<!-- main slider-banner -->
	<script src="js/skdslider.min.js"></script>
	<link href="css/skdslider.css" rel="stylesheet">
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('#demo1').skdslider({
				'delay': 5000,
				'animationSpeed': 2000,
				'showNextPrev': true,
				'showPlayButton': true,
				'autoSlide': true,
				'animationType': 'fading'
			});

			jQuery('#responsive').change(function() {
				$('#responsive_wrapper').width(jQuery(this).val());
			});

		});
	</script>
	<!-- //main slider-banner -->
</body>

</html>