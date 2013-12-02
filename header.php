<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title><?php bloginfo ('name') ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="author" content="Natasha Vlahakis">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    
    <!-- Google Webfonts - Roboto Slab & Nunito -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,700|Merriweather:400,700' rel='stylesheet' type='text/css'>
    
    <!--[if IE]>
<script src="js/html5shiv.js"></script>
<![endif]-->
    
    <!-- A few scripts that need to be in the head section -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
    
    <!-- FlexSlider -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider();
        })
    </script>
    
    <?php wp_head(); ?>
</head>
<body id="section-home" data-spy="scroll" data-target="#main-nav" data-offset="72">
    
    <!--////////// 3-LEVEL PARALLAX BACKGROUND - images can be changed in CSS //////////-->
    <div id="parallax-1" class="parallax"></div>
    <div id="parallax-2" class="parallax"></div>
    <div id="parallax-3" class="parallax"></div>
    