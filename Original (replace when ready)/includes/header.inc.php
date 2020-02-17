<!-- Start of the Header -->
	<nav class="uk-navbar">
		<div class="uk-container uk-container-centre">
			<a href="" class="uk-navbar-brand uk-hidden-small"></a>
			<ul class="uk-navbar-nav uk-hidden-small">
				<li><a href="/"><img src="Images/Logo/WaWeDoo Logo Small.png" alt="WaWeDoo"></a></li>
					<?php include dirname(__FILE__).'/menu.inc.php'; ?>
			</ul>
			<div class="uk-navbar-flip uk-hidden-small">
				<ul class="uk-navbar-nav">
					<li><a href=""><i class="uk-icon-facebook"></i></a></li>
					<li><a href=""><i class="uk-icon-twitter"></i></a></li>
				</ul>
			</div>
			
			<a href="#offcanvas-nav" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
			<div class="uk-navbar-content uk-navbar-center uk-visible-small"><a href="Index.php"><img src="Images/Logo/WaWeDoo Logo Small.png" alt="WaWeDoo"></a>
			</div>
		</div>
	</nav>
	
	<div id="offcanvas-nav" class="uk-offcanvas">
		<div class="uk-offcanvas-bar">
				<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
					<li><a href="/"><img src="Images/Logo/WaWeDoo Logo Small.png" alt="WaWeDoo"><a></li>
						<?php include dirname(__FILE__).'/menu.inc.php'; ?>
				</ul>			
		</div>
	</div>
<!-- End of the Header -->