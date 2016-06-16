<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "HOME";
/*load head-utils.php*/
require_once("php/partials/headutils.php");
?>
<body class="sfooter" xmlns="http://www.w3.org/1999/html">
	<div class="sfooter-content">
		<!--Header-->
		<header class="p-a-2">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
								  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">JARED PADILLA</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a
									href="http://jaredpadilla.com/public_html/portfolio/index.php">Portfolio</a>
							</li>
							<li><a
									href="http://jaredpadilla.com/public_html/contact/index.php">Contact</a>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right hidden-xs">
							<li><a href="https://github.com/JPadilla16" target="_blank"><i class="fa fa-github fa-2x"
																												aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
								</a></li>
							<li><a href="https://www.linkedin.com/in/jaredrpadilla"><i class="fa fa-linkedin-square fa-2x"
																										  aria-hidden="true"></i>
								</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>
		<!--Secion of Welcoming-->
		<!--		<section id="welcome" class="p-y-4">-->
		<div class="container">
			<div class="row">
				<div class="jumbotron text-center">
					<h1>Welcome</h1>
				</div> <!-- jumbotron end -->
			</div> <!-- row end -->
			<!-- container end -->
			<!--		</section>-->
			<!--Page content Here.-->
			<div class="row">
				<div class="col-md-4">
					<div class="well text-center">
						<img class="img-responsive" src="images/anonProfile.png" alt="anon">
					</div>
				</div>
				<div class="col-md-8">
					<div class="well text-center">
						<p>Wyman manderly kill the boy rhaenyra deepwood motte margaery rhaegar viserion egg gendry gift. Storm's end stormlands lady, loras lemonwood brandon stark and now his watch is ended what is dead may never die egg skirling pass olenna castle black alliser thorne cersei theon. Myrcella astapor roose bolton casterly rock maester luwin marillion iron islands brienne quentyn, you know nothing ruby ford mya stone. Brandon stark valar morghulis marillion podrick rhaegar, aegon the twins dragonstone oswell whent davos the knights of summer edd, fetch me a block moon door. Ramsay theon rhaegar, the twins benjen pycelle areo god's eye red keep marillion margaery godsgrace. Samwell rickon areo hotah freefolk.
							</p>

							<p>Yoren olenna is there gold in the village? catelyn. Our knees do not bend easily stormlands only Cat, and now his watch is ended jon connington syrio forel rhaegal ruby ford there are no men like me red keep. Frostfangs nightfort horn hill and now it begins joffrey westerlands red keep jojen orell aegon rickon jeyne westerling. Tormund quaithe robert baratheon obara shaggydog melisandre.
							</p>

							<p>Grey worm oh my sweet summer child only Cat, rickon maester luwin freefolk not today. Jaime the knights of summer robb. Bran hot pie watcher on the walls aemon quaithe dunk, arya ygritte jaehaerys samwell elia. Aemon barristan stormlands, illyrio night's king euron yunkai.
							</p>
					</div>
				</div>
			</div>
		</div>

		<!-- insert footer -->
		<?php require_once("php/partials/footer.php"); ?>

</body>
</html> 