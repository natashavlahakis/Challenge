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
    <?php  
if ( substr_count( $_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip' ) ) {  
    ob_start( "ob_gzhandler" );  
}  
else {  
    ob_start();  
}  
    ?>
    
    <?php wp_head(); ?>
</head>
<body id="section-home" data-spy="scroll" data-target="#main-nav" data-offset="72">
    
    <!--////////// 3-LEVEL PARALLAX BACKGROUND - images can be changed in CSS //////////-->
    <div id="parallax-1" class="parallax"></div>
    <div id="parallax-2" class="parallax"></div>
    <div id="parallax-3" class="parallax"></div>
    