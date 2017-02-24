<!DOCTYPE HTML>
<html>
	<head>
		<title>Gallery</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	</head>
	<body>
		<div class="page-wrap">

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.php"><span class="icon fa-home"></span></a></li>
						<li><a href="gallery.php" class="active"><span class="icon fa-camera-retro"></span></a></li>
						<li><a href="generic.php"><span class="icon fa-file-text-o"></span></a></li>
					</ul>
				</nav>

			<!-- Main -->
				<section id="main">

					<!-- Header -->
						<header id="header">
							<div>Gallary <span>by Mamata :)</span></div>
						</header>

					<!-- Gallery -->
						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">

									<!-- Filters -->
										<header>
											<h1>Gallery</h1>
											<ul class="tabs">
												<li><a href="#" data-tag="all" class="button active">All</a></li>
												<li><a href="#" data-tag="people" class="button">Shivaji Maharaj</a></li>
												<li><a href="#" data-tag="Forts" class="button">Forts</a></li>
												<li><a href="#" data-tag="thing" class="button">Museum</a></li>
											</ul>
										</header>

										<div class="content">
											<div class="media all people">
												<a href="images/fulls/01.jpg"><img src="images/pics/01.jpg" alt="" title="This right here is a caption." /></a>
											</div>
											<div class="media all Forts">
												<a href="images/lohagad.jpg"><img src="images/lohagad.jpg" alt="" title="This right here is a caption." /></a>
											</div>
											<div class="media all thing">
												<a href="images/fulls/v5.jpg"><img src="images/vastu/v5.jpg" alt="" title="v5" /></a>
											</div>
											<div class="media all thing">
												<a href="images/fulls/v1.jpg"><img src="images/vastu/v1.jpg" alt="" title="v1" /></a>
											</div>
											<div class="media all people">
												<a href="images/fulls/02.jpg"><img src="images/pics/02.jpg" alt="" /></a>
											</div>
											<div class="media all Forts">
												<a href="images/fulls/torna.jpg"><img src="images/torna.jpg" alt="" title="Torna fort" /></a>
											</div>
											<div class="media all thing">
												<a href="images/fulls/v2.jpg"><img src="images/vastu/v2.jpg" alt="" title="v2"/></a>
											</div>
											<div class="media all people">
												<a href="images/fulls/03.jpg"><img src="images/pics/03.jpg" alt="" /></a>
											</div>
											<div class="media all Forts">
												<a href="images/fulls/raigad.jpg"><img src="images/raigad.jpg" alt="" title="Raigad fort" /></a>
											</div>
											<div class="media all thing">
												<a href="images/fulls/v3.jpg"><img src="images/vastu/v3.jpg" alt="" title="v3" /></a>
											</div>
											<div class="media all thing">
												<a href="images/fulls/v6.jpg"><img src="images/vastu/v6.jpg" alt="" title="v6" /></a>
											</div>
											<div class="media all people">
												<a href="images/fulls/04.jpg"><img src="images/pics/04.jpg" alt=""  /></a>
											</div>
											<div class="media all thing">
												<a href="images/fulls/v7.jpg"><img src="images/vastu/v7.jpg" alt="" title="v7" /></a>
											</div>
											<div class="media all Forts">
												<a href="images/fulls/rajgad.jpg"><img src="images/rajgad.jpg" alt="" title="Rajgad fort" /></a>
											</div>
											<div class="media all Forts">
												<a href="images/fulls/shivneri-fort.jpg"><img src="images/shivneri-fort.jpg" alt="" title="Shivneri-fort" /></a>
											</div>			
											<div class="media all people">
												<a href="images/fulls/05.jpg"><img src="images/pics/05.jpg" alt=""  /></a>
											</div>
											<div class="media all Forts">
												<a href="images/fulls/sindhudurg-fort.jpg"><img src="images/sindhudurg-fort.jpg" alt="" title="Sindhudurg-fort" /></a>
											</div>
											<div class="media all thing">
												<a href="images/fulls/v8.jpg"><img src="images/vastu/v8.jpg" alt="" title="v8" /></a>
											</div>
											<div class="media all people">
												<a href="images/fulls/06.jpg"><img src="images/pics/06.jpg" alt="" /></a>
											</div>
											<div class="media all Forts">
												<a href="images/fulls/sinhagad-fort.jpg"><img src="images/sinhagad-fort.jpg" alt="" title="Sinhagad-fort" /></a>
											</div>
											<div class="media all people">
												<a href="images/fulls/07.jpg"><img src="images/pics/07.jpg" alt=""  /></a>
											</div>
											<div class="media all Forts">
												<a href="images/fulls/vijaydurg-fort.jpg"><img src="images/vijaydurg-fort.jpg" alt="" title="Vijaydurg-fort" /></a>
											</div>
											<div class="media all people">
												<a href="images/fulls/08.jpg"><img src="images/pics/08.jpg" alt="" /></a>
											</div>	
											<div class="media all thing">
												<a href="images/fulls/v4.jpg"><img src="images/vastu/v4.jpg" alt="" title="v4" /></a>
											</div>
										</div>
								</div>
						</section>

					<!-- Contact -->
						<section id="contact">
				
						</section>

					<!-- Footer -->
						<footer id="footer">
							<div class="copyright">
								&copy; By - Mamata Tayade.
							</div>
						</footer>
				</section>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script type="text/javascript">
				$(function()
				{
					$("#contact").load("contact.php");
				});
			</script>
	</body>
</html>
