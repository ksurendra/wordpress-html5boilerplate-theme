<?php
			/*
				Template Name: html2wp-front-page
			*/

			?>
<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php  wp_title( '|', true, 'right' );  ?>
</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="<?php  bloginfo('template_url');  ?>/apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/main.css">
        <script src="<?php  bloginfo('template_url');  ?>/js/vendor/modernizr-2.8.3.min.js"></script>
    <?php  wp_head();  ?>
</head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <p>Hello world! This is HTML5 Boilerplate.</p>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="<?php  bloginfo('template_url');  ?>/js/plugins.js"></script>
        <script src="<?php  bloginfo('template_url');  ?>/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    <?php  wp_footer();  ?>
</body>
</html>
