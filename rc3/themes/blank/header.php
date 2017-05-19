<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-brand-logo"></div>
            <div class="container">
                <div class="navbar-header">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tabs-navbar-collapse" aria-expanded="false">
	                    <span class="sr-only">Navegacion</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
		            <span class="navbar-brand md-hidden"></span>
                </div>
                <div class="collapse navbar-collapse" id="tabs-navbar-collapse" aria-expanded="false">
		            <?php html5blank_nav(); ?>
                </div>
            </div>
        </nav>


        <!-- wrapper -->
        <div class="wrapper">
            <header class="header clear" role="banner">
                <?php
                    $category = get_the_category();

                    if (sizeof($category) > 0) {
                        
                        $result = new WP_Query(array(
                            'title' => get_the_category()[0]->slug,
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
