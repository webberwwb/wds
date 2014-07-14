<?php 
	function activeClass($toggle){ return $toggle?'class="active"':''; }
	function active($toggle){ return $toggle?'active':''; }
 ?>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Web Development Society</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li <?= activeClass($home) ?>><a href="index.php">Home</a></li>
				<li <?= activeClass($about) ?>><a href="about.php">About</a></li>
				<li <?= activeClass($portfolio) ?>><a href="portfolio.php">Portfolio</a></li>
				<li <?= activeClass($members) ?>><a href="members.php">Members</a></li>
				<li <?= activeClass($contact) ?>><a href="contact.php">Contact</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>