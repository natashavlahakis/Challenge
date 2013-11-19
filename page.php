<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Challenge
 */

get_header(); ?>

    <!--/////////// HEADER SECTION //////////-->
    <header>
        <nav role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle blue" data-toggle="collapse" data-target=".navbar-collapse">
                        <span data-icon="&#xf00b;" aria-hidden="true"></span>
                    </button>
                    <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/css/img/logo-1.png" alt=""></a>
                </div>
                <div id="main-nav" class="collapse navbar-collapse navbar-collapse">          
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '<ul class="nav navbar-nav fancy-nav navbar-right"><li id="item-id">Menu: </li>%3$s</ul>' ) ); ?>
                </div><!-- /navbar-collapse -->
            </div><!-- /container -->
        </nav>
    </header>

    <div id="wrap" class="container">
    
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-8">
            <div id="primary" class="content-area container">
                <main id="main" class="site-main" role="main">
        
                    <?php while ( have_posts() ) : the_post(); ?>
        
                        <?php get_template_part( 'content', 'page' ); ?>
        
                        <?php
                            // If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || '0' != get_comments_number() )
                                comments_template();
                        ?>
        
                    <?php endwhile; // end of the loop. ?>
        
                </main><!-- #main -->
            </div><!-- #primary -->
        </div>

        <div class="col-xs-6 col-sm-6 col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div><!-- .row -->

</div><!-- #wrap -->
<?php get_footer(); ?>
