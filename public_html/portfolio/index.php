<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "PORTFOLIO";
/*load head-utils.php*/
require_once(dirname(__DIR__)."/php/partials/headutils.php");
?>
<body class ="sfooter">
	<div class="sfooter-content">
		<!--Header-->
		<header class="p-a-2">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
							<li><a href="http://jaredpadilla.com"><i class="fa fa-home"></i></a></li>
							<li class="active"><a href="http://jaredpadilla.com/portfolio">Portfolio<span class="sr-only">(current)</span></a></li>
							<li><a href="http://jaredpadilla.com/contact">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right hidden-xs">
							<li><a href="https://github.com/JPadilla16" target="_blank"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
								</a></li>
							<li><a href="https://www.linkedin.com/in/jaredrpadilla"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
								</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>
		<!--Secion of Welcoming-->
		<div class="container">
			<div class="row">
				<div class="jumbotron text-center">
					<h1>My Work!</h1>
				</div> <!-- jumbotron end -->
			</div> <!-- row end -->
			<!-- container end -->
			<!--		</section>-->
			<!--Page content Here.-->
			<div class="row">
				<div class="col-md-6">
					<div class="well text-center">
						<img class="img-responsive" src="../images/baseballClose.jpg" alt="Baseball">
					</div>
				</div>
				<div class="col-md-6">
					<div class="well text-center">
						<p>Baseball ipsum dolor sit amet losses plunked sacrifice tapper pinch runner balk. Sidearm slider fielder's choice basehit stretch foul line red sox cardinals hardball. Triple-A 4-6-3 ground rule double loss fastball sabremetrics knuckle inside. Baseball small ball corner leather astroturf yankees passed ball slide. Defensive indifference perfect game shift passed ball dodgers, cup of coffee bases loaded loss. Knuckleball slugging ejection series off-speed peanuts relief pitcher fenway blue.a
						</p>

							<p>Pennant baltimore chop mitt run batted in cellar grand slam rally away choke up. Range bandbox hall of fame no-hitter save slugging rip designated hitter. Pinch hit rotation starter mound catcher right field strikeout. Strike zone assist interleague inning pull, strikeout inside bush league steal. Foul pole grounder team ball base baseball card corner breaking ball national pastime. Base on balls moneyball arm basehit take balk hitter base on balls.
							</p>
					</div>
				</div>
			</div>
		</div>

	<!-- insert footer -->
	<?php require_once(dirname(__DIR__)."/php/partials/footer.php");?>

</body>
</html>