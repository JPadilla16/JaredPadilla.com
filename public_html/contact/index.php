<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "CONTACT ME!";
/*load head-utils.php*/
require_once(dirname(__DIR__)."/php/partials/headutils.php");
?>
<body class="sfooter">
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
							<li><a href="https://bootcamp-coders.cnm.edu/~jmedley4/jaredpadilla/public_html/index.php"><i class="fa fa-home"></i></a></li>
							<li><a href="https://bootcamp-coders.cnm.edu/~jmedley4/jaredpadilla/public_html/portfolio/index.php">Portfolio</a></li>
							<li class="active"><a href="https://bootcamp-coders.cnm.edu/~jmedley4/jaredpadilla/public_html/contact/index.php">Contact <span class="sr-only">(current)</span></a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right hidden-xs">
							<li><a href="https://github.com/JPadilla16" target="_blank"><i class="fa fa-github fa-2x"
																												aria-hidden="true"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
								</a></li>
							<li><a href="#" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
								</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>
		<!--Secion of Welcoming-->
		<section id="welcome" class="p-y-4">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<!--						style="list-style-type:none"-->
						<div class="jumbotron">
							<h2 align="center">Contact Me</h2>
							<p class="intro">Do you speak High Valyrian? It's ok if you don't, I speak English too.</p>

							<ul class="fa-ul">
								<li><a class="list-group-item" href="#" target="_blank"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i>&nbsp; Follow me on Twitter</a></li>
								<li><a class="list-group-item" href="#" target="_blank"><i class="fa fa-linkedin fa-3x" aria-hidden="true"></i>&nbsp; Connect on LinkedIn</a></li>
								<li><a class="list-group-item" href="#" target="_blank"><i class="fa fa-github fa-3x" aria-hidden="true"></i>&nbsp; Follow me on GitHub</a></li>
							</ul>

<!--							<div class="list-group">-->
<!--								<a class="list-group-item" href="#" target="_blank"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i>&nbsp; Follow me on Twitter</a>-->
<!--								<a class="list-group-item" href="#" target="_blank"><i class="fa fa-linkedin fa-3x" aria-hidden="true"></i>&nbsp; Connect on LinkedIn</a>-->
<!--								<a class="list-group-item" href="#" target="_blank"><i class="fa fa-github fa-3x" aria-hidden="true"></i>&nbsp; Follow me on GitHub</a>-->
<!---->
<!---->
<!---->
<!--							</div> <!-- list-group end -->
						</div> <!--jumbotron end -->

					</div>
					<div class="col-md-7">
						<div class="jumbotron">
							<!--Begin Contact Form-->
							<form id="contact-form" action="../php/mailer.php" method="post">
								<div class="form-group">
									<label for="name">Name <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user" aria-hidden="true"></i>
										</div>
										<input type="text" class="form-control" id="name" name="name" placeholder="Name">
									</div>
								</div>
								<div class="form-group">
									<label for="email">Email <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-envelope" aria-hidden="true"></i>
										</div>
										<input type="email" class="form-control" id="email" name="email" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label for="subject">Subject</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil" aria-hidden="true"></i>
										</div>
										<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
									</div>
								</div>
								<div class="form-group">
									<label for="message">Message <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-comment" aria-hidden="true"></i>
										</div>
									<textarea class="form-control" rows="5" id="message" name="message"
												 placeholder="Message (2000 characters max)"></textarea>
									</div>
								</div>

								<!-- reCAPTCHA -->
								<div class="g-recaptcha" data-sitekey="6Le7DiITAAAAADG8HQlKrBdsGJtKb56G5x82P-h7"></div>

								<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
								<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
							</form>

							<!--empty area for form error/success output-->
							<div class="row">
								<div class="col-xs-12">
									<div id="output-area"></div>
								</div>
							</div>
						</div> <!--jumbotron end -->
					</div> <!-- column 8 for email form -->
				</div> <!-- row end -->
			</div> <!-- container end -->
		</section>
		<!--Page content Here.-->
	</div>

	<footer class="p-y-4">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<div class="copyright text-left">
						&copy; 2016 Jared Padilla
					</div>
				</div>
				<div class="col-xs-6">
					<div class="social pull-right hidden-lg hidden-md hidden-sm">

						<a href="https://github.com/JPadilla16" target="_blank"><i class="fa fa-github fa-2x"
																									  aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>