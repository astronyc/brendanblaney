<?php 
  $page = get_queried_object();
?>
<!DOCTYPE html>
<!--[if lte IE 11]><html <?php language_attributes(); ?> class="no-js lte-ie11"> <![endif]-->
<!--[if gte IE 11]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cleartype" content="on">
    <?php wp_head(); ?>

    <?php
	// Connect to the Browsersync server
	$dev_hostname = "localhost:8888";
	if( (strpos($_SERVER['SERVER_NAME'], ".") === false) || ($_SERVER['SERVER_NAME'] === $dev_hostname) ) {
		echo "<script type=\"text/javascript\" id=\"__bs_script__\">document.write(\"<script async src='http://HOST:3000/browser-sync/browser-sync-client.js'><\/script>\".replace(\"HOST\", window.location.hostname));</script>";
	}
?>
    <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxygen&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>


</head>

<body <?php body_class(); ?>>
    <div class="site-container">
        <header id="primary-nav" class="navbar">
            <div class="inner-wrap">
                <div class="logo-wrap">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <h1>Brendan Blaney</h1>
                    </a>
                </div>

                <div class="links-wrap">
                    <nav class="navigation" id="mainNav">
                        <a class="navigation__link" href="#home">Home</a>
                        <a class="navigation__link" href="#portraits">Portraits</a>
                        <a class="navigation__link" href="#animals">Animals</a>
                        <a class="navigation__link" href="#stills">Stills</a>
                        <a class="navigation__link" href="#contact">Contact</a>
                    </nav>
                </div>
            </div>
        </header>
        <div class="site-content">