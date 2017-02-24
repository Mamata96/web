<!DOCTYPE HTML>
<html>
	<head>
		<title>Home</title>
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
						<li><a href="index.php" class="active"><span class="icon fa-home"></span></a></li>
						<li><a href="gallery.php"><span class="icon fa-camera-retro"></span></a></li>
						<li><a href="generic.php"><span class="icon fa-file-text-o"></span></a></li>
					</ul>
				</nav>

			<!-- Main -->
				<section id="main">

					<!-- Banner -->
						<section id="banner">
							<div class="inner">
								<h1>Hey, I'm Mamata</h1>
								<p>This site is dedicated to Chatrapati Shivaji Maharaj.</p>
								<ul class="actions">
									<li><a href="#galleries" class="button alt scrolly big">Continue</a></li>
								</ul>
							</div>
						</section>

					<!-- Gallery -->
						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">
									<header class="special">
										<h2>What's New</h2>
									</header>
									<div class="content">
										<div class="media">
											<a href="images/fulls/01.jpg"><img src="images/pics/01.jpg" alt="" title="Shivaji Maharaj"/></a>
										</div>
										<div class="media">
											<a href="images/fulls/v7.jpg"><img src="images/vastu/v7.jpg" alt="" title="Swords used by Shivaji Maharaj" /></a>
										</div>
										<div class="media">
											<a href="images/fulls/05.jpg"><img src="images/pics/05.jpg" alt="" title="Shivaji Maharaj"/></a>
										</div>
										<div class="media">
											<a href="images/fulls/v8.jpg"><img src="images/vastu/v8.jpg" alt="" title="Tigers's claw which was used by Shivaji Maharaj" /></a>
										</div>
										<div class="media">
											<a href="images/fulls/rajgad.jpg"><img src="images/rajgad.jpg" alt="" title="Rajgad fort." /></a>
										</div>
										<div class="media">
											<a href="images/fulls/vijaydurg-fort.jpg"><img src="images/vijaydurg-fort.jpg" alt="" title="Vijaydurg fort." /></a>
										</div>
										<div class="media">
											<a href="images/fulls/06.jpg"><img src="images/pics/06.jpg" alt="" title="Shivaji Maharaj's original paiting at England." /></a>
										</div>
										<div class="media">
											<a href="images/fulls/07.jpg"><img src="images/pics/07.jpg" alt="" title=" " /></a>
										</div>
									</div>
									<footer>
										<a href="gallery.php" class="button big">Full Gallery</a>
									</footer>
								</div>
						</section>
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
