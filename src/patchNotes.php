<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)

	Patch Notes page
	Code by John Newell
-->
<html>
	<head>
		<title>Dragon Story Patch Notes</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="/">Dragon Story</a></h1>
						<p>Alpha 0.10004</p>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
								<center><span class="image main"><a href="/">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://dragonstory.hamfingered.com/">Live</a></span></center>

								<h1>Alpha 0.10004 (date)</h1>
								<h3>Patch Notes</h3>
								<p>
									<ul>
										<li>Fixed mysqlnd 500 error</li>
										<li>Downgraded to php 7.2</li>
										<li>Added error handler for blank login form submission.</li>
									</ul>
								</p>
								<p>
									<h3>Known Issues</h3>
									<ul>
										<li>No error handlers on registration or login code.</li>
									</ul>
								</p>


								<h1>Alpha 0.10003 (1/16/2021)</h1>
								<h3>Patch Notes</h3>
								<p>
									<ul>
										<li>Updated Version to 0.01003 in patch notes, package.  Version identifier in index.php removed.</li>
										<li>Removed unfunctional counters in index.php</li>
										<li>Players can now register.  Registering will add you to the email list for further updates.</li>
										<li>Removed learn more button in footer.php</li>
										<li>Updated text on the index</li>
										<li>Created users table in SQL database</li>
										<li>Users can now log in and register - registration adds you to the email list for further updates.</li>
									</ul>
								</p>
								<h3>Known Issues</h3>
								<p>
									<ul>
										<li>Error 500 code after logging in or registering.</li>
									</ul>
								</p>

								<h2>Alpha 0.01002 (1/15/2021)</h2>
								<p>
									<ul>
										<li>Updated Version to 0.01002 in patch notes, package, and index.php</li>
										<li>Added a link to live in the application</li>
										<li>Moved link to patch notes from main navigation to footer.</li>
										<li>Updated generic.php</li>
										<li>Updated docs (added readme.md)</li>
										<li>Created engine.php for user interaction and view of the gamestate.</li>
										<li>Removed name your dragon from the index</li>

									</ul>
								</p>

								<h2>Alpha 0.01001</h2>
								<p>
									<ul>
										<li>Updated Version to 0.01001 in patch notes, package, and index.php</li>
										<li>Updated node-forge</li>
										<li>Updated Yargs-Parser</li>
									</ul>
								</p>

								<h2>Alpha 0.01</h2>
								<p>
									<ul>
										<li>Added patch notes section to better track changes and versioning between sites.</li>
										<li>Fixed mark up in patch notes section</li>
									</ul>
								</p>

								<h2>Alpha 0.00</h2>
								<p>
								<ul>
									<li>Main Engine MVC model design and installed with a lightweight template and sql database.</li>

								</ul>
								</p>
							</section>

					</div>

				<?php
				//require the footer so that the page will be complete.
					require('footer.php');
				 ?>
