<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>

            <!--<?php // to use a image just replace the <?php bloginfo('name'); ?>  ?> -->
            <div id="logo">
                <div class="wrap clearfix">
                    <a class="left" href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" alt="BOSAL logo" /></a>
                    <div class="right" id="header-search">
                        <?php echo bones_wpsearch('$form'); ?>
                    </div>
                </div>
            </div>
            
		<div id="container">
                    
			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

					

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>

                                    <!-- ============== RESPONSIVE SLIDES ================ -->
                                    <ul class="rslides">
                                        <li><div class="caption clearfix"><p>Brand New Bosal Toyota Land Cruiser Sidesteps...</p><div class="right caption_btn"><a href="<?php echo site_url('brand-new-bosal-toyota-land-cruiser-sidesteps'); ?>">More &rang;</a></div></div><img src="<?php echo get_template_directory_uri(); ?>/library/images/sidesteps.jpg" alt="Sidesteps"></li>
                                        <li><div class="caption clearfix"><p>The Bosal Tando – Car Tow Stabilizer Unit...</p><div class="right caption_btn"><a href="<?php echo site_url('the-bosal-tando-car-tow-stabilizer-unit'); ?>">More &rang;</a></div></div><img src="<?php echo get_template_directory_uri(); ?>/library/images/tando.jpg" alt="Tando"></li>
                                        <li><div class="caption clearfix"><p>Bosal Automotive introduces Stainless Steel Range...</p><div class="right caption_btn"><a href="<?php echo site_url('bosal-automotive-introduces-stainless-steel-range'); ?>">More &rang;</a></div></div><img src="<?php echo get_template_directory_uri(); ?>/library/images/stainlesssteel.jpg" alt="stainless steel range"></li>
                                    </ul>
                                    <!-- ============== END RESPONSIVE SLIDES ================ -->
					<nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>

				</div>

			</header>
