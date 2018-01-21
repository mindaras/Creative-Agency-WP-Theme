<?php
	$hs_background_image = get_field('hs_background_image');
	$hs_logo = get_field('hs_logo');
	$hs_title = get_field('hs_title');
	$hs_description = get_field('hs_description');
	$hs_button1_text = get_field('hs_button1_text');
	$button_1_link = get_field('button_1_link');
	$button_2_text = get_field('button_2_text');
	$button_2_link = get_field('button_2_link');
?>
<!-- Header -->
	<header  <?php echo !is_single() ? 'id="home"' : ''; ?>>
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('<?php echo $hs_background_image['url']; ?>');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar <?php echo !is_single() ? 'nav-transparent' : ''; ?> ">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<?php if (!empty($hs_logo)): ?>
						<a href="index.html">
							<img class="logo" src="<?php echo $hs_logo['url']; ?>" alt="<?php echo $hs_logo['alt']; ?>">
						</a>
						<?php endif; ?>
					</div>
					<!-- /Logo -->


					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<?php
					wp_nav_menu(array(
						'theme_location' => 'header',
						'menu_class' => 'main-nav nav navbar-nav navbar-right',
						'walker' => new Custom_Walker_Nav_Menu
					));
				?>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<?php if (!is_single()): ?>
		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text"><?php echo $hs_title; ?></h1>
							<p class="white-text"><?php echo $hs_description; ?></p>
							<a href="<?php echo $button_1_link; ?>" target="_blank"><button class="white-btn"><?php echo $hs_button1_text; ?></button></a>
							<a href="<?php echo $button_2_link; ?>" target="_blank"><button class="main-btn"><?php echo $hs_button1_text; ?></button></a>
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- home wrapper -->
		<?php endif; ?>

		<?php if (is_single()): ?>
		<!-- header wrapper -->
		<div class="header-wrapper sm-padding bg-grey">
			<div class="container">
				<h2>Blog Page</h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
					<li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>#blog">Blog</a></li>
					<li class="breadcrumb-item active">Single Post</li>
				</ul>
			</div>
		</div>
		<!-- /header wrapper -->

		<?php endif; ?>

	</header>
	<!-- /Header -->
