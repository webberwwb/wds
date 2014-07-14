<?php

$projects_array = array(
	array(
		"name" => "Project Manager",
		"description" => "Complete Agile Development Project Management System",
		"img" => "",
		"link" => "http://github.com/websocity/project-manager"
	),
);

?>

<!DOCTYPE html>
<html lang="en">
	<? include('head.php') ?>
	<body>
		<? $portfolio = true ?>
		<? include('navbar.php') ?>

		<!-- Begin page content -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="page-header">
						<h1 class="text-center">Portfolio</h1>
					</div>
					<div class="lead">
						<? if ( empty($projects_array) ): ?>
							Coming soon.
						<? else: ?>
							<? foreach($projects_array as $project): ?>
								<div class="row text-center">
									<div class="col-xs-12">
										<a href="<?= $project['link'] ?>">
											<img src="images/<?= $project['img'] ?>" alt="<?= $project['name'] ?>" class="img-circle responsive-img col-xs-12 col-sm-4">
										</a>
										<br>
										<h3 class="col-xs-12 col-sm-8">
											<a href="<?= $project['link'] ?>"><?= $project['name'] ?></a>
										</h3>
										<p><?= $project['description'] ?></p>
									</div>
								</div>
								<hr>
							<? endforeach ?>
						<? endif ?>
					</div>
				</div>
			</div>
		</div>

		<? include('footer.php') ?>
		<? include('javascript.php') ?>
	</body>
</html>
