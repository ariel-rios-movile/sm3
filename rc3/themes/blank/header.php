<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<header class="header clear" role="banner">

				<nav class="nav" role="navigation">
					<?php html5blank_nav(); ?>
				</nav>

                <?php
                $category = get_the_category();

                if (sizeof($category) > 0) {
                    $result = new WP_Query(array(
                        'post_title' => get_the_category()[0]->slug,
                        'post_status'  => 'inherit',
                        'post_type' => 'attachment'
                    ));


                    if (sizeof($result->posts)) {
                        $src = $result->posts[0]->guid;
                    }
                } else {
                    $src = get_template_directory_uri()."/img/logo.svg";
                }
                ?>

				<!-- logo -->
                <img src="<?php echo $src; ?>" alt="Logo" class="logo-img">
				<!-- /logo -->

			</header>
