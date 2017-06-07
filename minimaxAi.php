<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Scavettapps: Applying AI to Online Trading Card Games</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="aibg">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
				<?php include_once("menu.php"); ?>

				<!-- Wrapper -->
					<section id="wrapper">
						
						<section id="banner">
							<div class="inner">
								<h2>Applying AI to Online Trading Card Games</h2>
								<p>Artificial Intelligence for a Computerized Player using a minimax inspired algorithm in a heavily probablistic card game.</p>
							</div>
						</section>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">

									<h3 class="major">Abstract</h3>
									<p>Online collectible card games or trading card games are complex to model due to the uniqueness
									of each card and the specific modes of action such as attacking, enhancement and defensive cards.
									To develop a challenging multi-user game with a computerized player, AI algorithms were designed
									which simulate a human player’s actions through programming, mathematical and often heuristic techniques. 
									Moreover, since each trading card game has its own unique game play, developing a reusable gaming framework
									enabled by object-oriented design patterns has more utility than developing a specific instance of a game. </p>
									
									<h3 class="major">Artificial Intelligence Algorithm</h3>

									<p>The design is based on the minimax algorithm which operates on the premise that the AI’s opponent is trying
									to minimize whatever value for game state that the AI is trying to maximize. Minimax is extended by incorporating
									chance-based child nodes on every non-deterministic move, and allowing a node depth greater than one for each turn
									to allow for multi-move.</p>
									
									<article style="margin:auto;">
											<a href="images/aiintro.jpg" class="image fit" style="margin:auto;display:block"><img src="images/aiintro.jpg" alt="" style="margin:auto;max-width: 600px;margin-bottom: 20px;"/></a>
											<h3 class="minor">Game Mechanics</h3>
											<p>Players start with three cards randomly chosen from their deck of cards. On each turn, a player can place any number
											of cards and/or make any number of attacks with any card on the field within the constraints laid out for that turn.</p>
											<h3 class="">Constraints</h3>
											<p>Players have a limited amount of resources(mana) to carry out attacks or place cards.
											The field has a limited amount of slots for cards to be placed.
											Your hand has a limited amount of cards it can hold.
											You can only attack the other player's face if and only if there are no other cards on the field.</p>
											<h3 class="">Probabilities</h3>
											<p>Each card has individual probabilities of hitting a target. As a result of cards defending themselves when attacked by another card, there are 4 possible outcomes.
											<ul style="margin-left:25px; margin-top:-25px;">
												<li>
													Hit - Hit
												</li>
												<li>
													Hit - Miss
												</li>
												<li>
													Miss - Hit
												</li>
												<li>
													Miss - Miss
												</li>
											</ul> </p>
									</article>
									
									<section>
										<div class="box alt">
											<div class="row uniform">
												<div class="12u$"><span class="image fit"><a href="images/Flow.jpg"> <img src="images/Flow.jpg" alt="" /> </a> </span></div>
											</div>
										</div>
									</section>

									<p>While the AI only goes one layer deep in our application due to the sheer number of possibilities, it provides a very good challenge.
									The card game we created values more direct play rather than long term holding out for specific cards which adds to the strength of this AI.
									With more optimization and implementation of more sophisticated methods, it could be possible to reduce the total calculation time enough that
									we could simulate up to two turns worth of probabilities in a realistic amount of time.</p>
									
								</div>
							</div>

					</section>

				<!-- Footer -->
				<?php include_once("footer.php") ?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>