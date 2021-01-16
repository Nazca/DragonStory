<?php
require_once("classes/DisplayManager.php");
?>
<!DOCTYPE HTML>
<!--
	This file is part of the Dragon Story Project
-->
<html>
	<head>
		<title>Generic Steller Page</title>
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
						<h1>Login</h1>
						<p>Come play with your dragon...</p>

					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
								<span class="image main"><img src="" alt="Dragon Hatchery Image" /></span>
								<h2>Login Here</h2>
								<p>
                  <form action="engine.php?login=true" method="POST" name="command" value="login">

                    <input type="text" name="email" placeholder="Email..." /><br />
                    <input type="password" name="password" placeholder="Password..." /><br />

                    <input type="submit" name="submit" value="Login" />
                  </form>
								</p>

							</section>

					</div>

			<?php
				require('footer.php');
			 ?>
