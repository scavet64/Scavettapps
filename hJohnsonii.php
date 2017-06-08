<!DOCTYPE HTML>
<html>
	<head>
		<title>Scavettapps: Halophila johnsonii</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Investigating the effects of light intensity on Halophila johnsonii. Presented at the 2016 Rowan Univeristy STEM Symposium">
  		<meta name="keywords" content="Halophila johnsonii,IBM,Modeling,Java,FORTRAN,Ecology,Biology">
  		<meta name="author" content="Vincent Scavetta">
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="testbg">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
				<?php include_once("menu.php"); ?>

				<!-- Wrapper -->
					<section id="wrapper">
						<section id="banner">
							<div class="inner">
								<!--<div class="logo"><span class="icon fa-diamond"></span></div>-->
								<h2><i>Halophila johnsonii</i> Individual Based Model (IBM)</h2>
								<p>Morphological effects of light reduction on the seagrass Halophila johnsonii simulated using an individual-based model.</p>
							</div>
						</section>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">

									<h3 class="major">Abstract</h3>
									<p>Seagrasses are marine flowering plants that live entirely underwater. 
									They reproduce both asexually and sexually, growing by rhizome extension.
									Seagrass meadows are globally distributed in areas with high light levels 
									and clear water, within intertidal and shallow subtidal zones. Due to their
									light constraints, growth is restricted to the photic zone and is not possible
									in deeper waters. Seagrasses are ecological engineers, altering the environment
									by changing the water flow, nutrient cycling, sediment stabilization, and 
									providing refuge for benthic organisms. In recent decades, global seagrasses 
									have dramatically declined in density, extent, and biodiversity. Multiple 
									stressors have directly contributed to these declines, including climate changes,
									shifts in water quality, and increased contaminants entering coastal waters. 
									Conducting studies on why seagrass populations are declining can be complex,
									time consuming, and costly. Designing a simulation model with data collected
									from field and lab experiments allows us to mimic realistic environmental 
									changes and predict their impacts on a model organism. Models can predict how
									populations should react based on stochastic stimuli such as the intensity of
									light reaching seagrasses. Individual-based models (IBMs) are used to predict
									population-level impacts by modeling how individuals react to abiotic and biotic
									conditions in their local environment in terms of their survival, growth, and
									reproduction, each resulting from the individuals’ unique behavior, genetics, 
									and experiences. Halophila johnsonii is a rare threatened seagrass located on
									a 200km stretch of Atlantic Floridian coast. This species has relatively low 
									biomass, a high turnover rate, and is tolerant to fluctuations in temperature 
									and salinity. We constructed an IBM to predict how H. johnsonii should be impacted
									by a variety of light conditions that resemble natural and anthropogenically-driven
									reductions in light levels. The model predicts that seagrass patches will decrease
									in density and extent when exposed to more severe and/or more frequent light 
									reduction. This suggests that without improvements in water quality, H. johnsonii’s
									density and distribution should decrease. While this species is relatively 
									small-bodied, it provides ecosystem services in shallower waters than many 
									species are able to inhabit, increasing concerns about the impacts of its decline.</p>
									
									<h3 class="major">The Model</h3>

									<p>The java implementation of this model was written at Rowan University by Vincent Scavetta
									under the supervision of Dr. Courtney Richmond. The code was initially written in FORTRAN 
									90 by Dr. Richmond in conjunction with Dr. Rose. The model uses real growth data collected
									from field and lab based experiments on the seagrass H. johnsonii. Solar data was collected
									from the NOAA database measured at Miami station #722030 (West Palm Beach Intl Arpt, FL). 
									The raw solar data was transformed to produce a value relative to the maximum solar irradiance
									recorded. These transformed values were implemented into the mode to simulate typical 
									irradiance values throughout a given year.</p>

									<p>In its current state, the model is very basic in its nature. There is currently only one 
									variable for light reduction that is adjusted thoughout the course of the simulation. By the
									end of this project, we hope to have a more realistic simulation that takes into account the 
									following items:</p>
									
									<ul class="listIndent">
										<li>Shading due to other biomass in the area.</li>
										<li>Variable storm lengths.</li>
										<li>Water level calculations to account forlunar tides.</li>
										<li>Localized effects such as boat traffic and dock shading.</li>
									</ul>

									<section class="features">
										<article>
											<a href="images/Picture3.png" class="image"><img src="images/Picture3.png" alt="" /></a>
											<h3 class="major">Storm intensity effect dampens as frequency decreases</h3>
											<p>These figures show that as storm frequency decreases the population size remains more stable.
											Also the deeper the seagras live, the less effect the storms have. As storm frequency increases, the population size and density decreases more rapidly in shallow waters</p>
										</article>
										<article>
											<a href="images/Picture4.png" class="image maxWidth400 marginAuto"><img src="images/Picture4.png" alt=""/></a>
											<h3 class="major">Sequence diagram for the Individual Based Model</h3>
											<p>The model follows this sequence of events. The model starts by initializing the startup parameters, output files, ect.
											Then for every day, the simulation will generate the surface lihgt for that particular day, assign it for each cell, then simulate the population.
											After the simulation is finished, a final statistic analyis is preformed.</p>
										</article>
										<article>
											<a href="images/Simulation black2.PNG" class="image"><img src="images/Simulation black2.PNG" alt="" /></a>
											<h3 class="major">View of simulation after 365 days</h3>
											<p>Each blue "stick" represents a connection between two nodes. The orange "sticks" are 
											new connections that were created this cycle of the simulation</p>
										</article>
										<article>
											<a href="images/Halophila_Seagrass_1000x500.jpg" class="image"><img src="images/Halophila_Seagrass_1000x500.jpg" alt="" /></a>
											<h3 class="major"><i>Halophila</i> johnsonii growing in the wild</h3>
											<p>h.johnsonii are a small species of seagrass. This particular patch was growing off the eastern coast of florida.</p>
										</article>
									</section>

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