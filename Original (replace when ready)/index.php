<?php
	$page_id = 1;
?>

<!DOCTYPE html>
<html>
	<head>
<?php include dirname(__FILE__).'/includes/head.inc.php'; ?>
	</head>
<Body>

<?php include dirname(__FILE__).'/includes/header.inc.php'; ?>

<?php include dirname(__FILE__).'/includes/slideshow.inc.php'; ?>

<!-- Home Page Content -->
<!-- Intro -->
<div class="uk-block">
	<div class="uk-container uk-container-center">
		<h2 align=center class="uk-h1">Welcome to WaWeDoo</h2>
		<p align=center class="uk-h4">Here at WeWeDoo we believe that storytime is an amazing experience that you and your child 
		can share. Using the WaWeDoo Creator you and your child can enjoy stories featuring yourselves, your friends 
		and your families.
		</p>
	</div>
</div>
<!-- Storytypes -->
<div class="uk-block uk-block-primary uk-contrast">
<?php include dirname(__FILE__).'/includes/storytypes.inc.php'; ?>
</div>

<!-- Testimonies -->
<div class="uk-block">
	<div class="uk-container uk-container-center">	
		<h1 align=center class="uk-h1"> See what our friends are saying</h2>
		<p align=center class="uk-h3">Have a read through some of the messages that we've received from families who have made their own stories!
		</p>
		<div class="uk-grid">
			<div class="uk-width-medium-1-3">
			<h3 align=center class="uk-h2">Rita</h3>
			<p align=center class="uk-h3"> "Was Ok" </p>
			</div>
			<div align=center class="uk-width-medium-1-3">
			<h3 align=center class="uk-h2">Sue</h3>
			<p align=center class="uk-h3"> "Was Fine" </p>
			</div>
			<div align=center class="uk-width-medium-1-3">
			<h3 align=center class="uk-h2">Bob Too</h3>
			<p align=center class="uk-h3"> "Unbelievable!" </p>
			</div>
		</div>
	</div>
</div>

<?php include dirname(__FILE__).'/includes/footer.inc.php'; ?>	
</Body>
</html>