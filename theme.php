<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Encoding, browser compatibility, viewport -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Search Engine Optimization (SEO) -->
		<meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
		<meta property="og:url" content="<?= $Wcms->getCurrentPageUrl() ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
		<meta name="twitter:site" content="@YourTwitterUsernameGoesHere" />
		<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />

		<!-- Website and page title -->
		<title>
			<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>

		</title>

		<!-- Admin CSS -->
		<?= $Wcms->css() ?>
		
		<!-- Theme CSS -->
		
		<?php 		
		$rnd = rand(1,10000);
		?>
		
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css?' . $rnd) ?>">


	</head>
	
<body>
	
	<?= $Wcms->settings() ?>
	<?= $Wcms->alerts() ?>
	
	<nav class="topnav">	
		<ul class="navigation">
			<?= $Wcms->menu() ?>
		</ul>
	</nav>
	
	<div class="content">		
		
		<div class="main-content">
			<?= $Wcms->page('content') ?>
		</div>
		<div class="sidebar">
			<h2>Sidebar</h2>
			<?= $Wcms->block('sidebar') ?>
		</div>		
		
		
	</div>
	
	
	

	<footer class="footer">
		<?= $Wcms->footer() ?>
	</footer>


	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<?= $Wcms->js() ?>

</body>
</html>	