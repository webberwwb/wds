<?php
// TODO:
// Generate token and store into hidden file
// Send token as part of the form
?>

<!DOCTYPE html>
<html lang="en">
	<?php include('head.php') ?>
	<body>
		<?php $contact = true ?>
		<?php include('navbar.php') ?>

		<!-- Begin page content -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="page-header">
						<h1 class="text-center">Contact</h1>
					</div>
					<p class="lead">
						<form action="email.php" method="POST">
							<div class="form-group">
								<label for="email">Email Address:</label>
								<input type="email" id="email" placeholder="Email Address" 
									class="form-control">
								<br>
								<label for="subject">Subject:</label>
								<input type="text" id="subject" placeholder="Subject" 
									class="form-control">
								<br>
								<label for="message">Message:</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
								<br>
								<input type="submit" value="Send" class="btn btn-block btn-primary">
							</div>
						</form>
					</p>		
				</div>
			</div>
		</div>

		<?php include('footer.php') ?>
		<?php include('javascript.php') ?>
	</body>
</html>
