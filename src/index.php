<!doctype html>
<!--
	John Newell's Dragon Story
-->
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <title>0.01002</title>

  <meta name="description" content="Get a dragon egg and raise your own dragon in Dragon Story">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

  <meta property="og:title" content="Dragon Story">
  <meta property="og:type" content="Raise your own Dragon game">

  <meta property="og:url" content="dragonstory.hamfingered.com">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="assets/css/main.css" />
  <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

  <meta name="theme-color" content="#fafafa">
</head>




  <!-- Add your site or application content here -->






  <body class="is-preload">

  		<!-- Wrapper -->
  			<div id="wrapper">

  				<!-- Header -->
  					<header id="header" class="alt">
  						<!-- <span class="logo"><img src="images/logo.svg" alt="" /></span> -->
  						<h1>Dragon Story</h1>
  						<p>Raise your very own Dragon!<br />
  						Dragon Story owned and designed by <a href="https://my.indeed.com/p/johnn-1febyr7">John Newell</a></p>
  					</header>

  				<!-- Nav -->
  					<nav id="nav">
  						<ul>
  							<li><a href="#intro" class="active">Top</a></li>
  							<li><a href="#first">Hatchery</a></li>
  							<li><a href="#second">Register</a></li>
  							<li><a href="#cta">Play</a></li>
  						</ul>
  					</nav>

  				<!-- Main -->
  					<div id="main">

  						<!-- Introduction -->
  							<section id="intro" class="main">
  								<div class="spotlight">
  									<div class="content">
  										<header class="major">
  											<h2>Dragon Story</h2>
  										</header>
  										<p>A game where you raise your dragon!</p>
  									</div>
  									<span class="image"><img src="images/egg.png" alt="" /></span>
  								</div>
  							</section>

  						<!-- First Section -->
  							<section id="first" class="main special">
  								<header class="major">
  									<h2>Dragon Hatchery</h2>
  								</header>
  								<ul class="features">
  									<li>
  										<h2><img src="images/redDragon.jpg" width="250" height="250" /></h2>
  										<h3>Western Dragon</h3>
  										<p>Hearty, tough, and strong flyers - western dragons are the dragons for those who want mounts.</p>
  									</li>
  									<li>
  										<h2><img src="images/blueDragon.jpg" width="250" height="250" /></h2>
  										<h3>Northern Dragon</h3>
  										<p>Sleek, slender, and fast northern dragons are often used to race!</p>
  									</li>
  									<li>
  										<h2><img src="images/yellowDragon.jpg" width="250" height="200" /></h2>
  										<h3>Eastern Dragon</h3>
  										<p>Eastern Dragons are small, calm, cuddly, cute, and friendly!  Get yours today!</p>
  									</li>
  								</ul>
  								<footer class="major">
  									<ul class="actions special">
  										<li><a href="hatchery.php" class="button">Shop</a></li>
  									</ul>
  								</footer>
  							</section>

  						<!-- Second Section -->
  							<section id="second" class="main special">
  								<header class="major">
  									<h2>Register</h2>
  									<p>Register an account on this site to raise your new magical best friend! <br />Will yours be cute and cuddly or big and strong?<br />Do you have what it takes to become a Dragon Master?<br />Get one today.</p>
  								</header>
  							<!--	<ul class="statistics">
  									<li class="style1">
  										<span class="icon solid fa-code-branch"></span>
  										<strong>0</strong> Dragon Masters
  									</li>
  									<li class="style2">
  										<span class="icon fa-folder-open"></span>
  										<strong>0</strong> Eggs Hatched
  									</li>
  									<li class="style3">
  										<span class="icon solid fa-signal"></span>
  										<strong>0</strong> Dragons Raised
  									</li>
  									<li class="style4">
  										<span class="icon solid fa-laptop"></span>
  										<strong>0</strong> Dragons Adopted
  									</li>
  									<li class="style5">
  										<span class="icon fa-gem"></span>
  										<strong>0</strong> Dragon Deaths
  									</li>
  								</ul> -->
  								<p class="content">Three Dragon Eggs were found, one red, one yellow, one blue.  After study'ing them for years it was decided that the Red be hatched male and the yellow and blue be hatched female.  Dragons born a boy are incubated in a hotter temperature than dragons born female in a more mild climate.  In the wild, an alpha male dragon would choose a strong egg and the males would take turns heating it with their fire.  The dragon in that egg would be born male.  Today we do it with an oven.</p>
  								<footer class="major">
  									<ul class="actions special">
  										<li><a href="register.php" class="button">Register</a></li>
  									</ul>
  								</footer>
  							</section>

  						<!-- Get Started -->
  							<section id="cta" class="main special">
  								<header class="major">
  									<h2>Log In</h2>
  									<!--
                     This is a fairly ugly table should work and look as intended.

                     It's designed to take user login input and POST it to login.php which will handle
                     calling the classes for checking the users info and returning a successful log in or not.
                    -->
                    <p>
                      <form action="login.php" method="POST" />
                      <table>
                        <tr>
                          <td>Email:</td><td><input type="text" name="email" /></td>
                        </tr>
                        <tr>
                          <td>Password:</td><td><input type="password" name="password" /></td>
                        </tr>
                        <tr>
                          <td><footer class="major">
          									<ul class="actions special">
          										<a href="register.php" class="button">Register</a></td><td>
          										<input type="submit" value="Submit" class="button primary" />
          									</ul>
          								</footer></td>
                        </tr>
                      </table>
                    </form>
                    </p>
  								</header>

  							</section>

  					</div>

  				<?php
          //we need to require the footer.  This is simply so that we can edit the footer once across all php pages.
            require('footer.php');
           ?>
