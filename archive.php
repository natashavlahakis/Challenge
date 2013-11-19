<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
            <section id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
        
                <?php if ( have_posts() ) : ?>
        
                    <header class="page-header">
                        <h1 class="page-title">
                            <?php
                                if ( is_category() ) :
                                    single_cat_title();
        
                                elseif ( is_tag() ) :
                                    single_tag_title();
        
                                elseif ( is_author() ) :
                                    /* Queue the first post, that way we know
                                     * what author we're dealing with (if that is the case).
                                    */
                                    the_post();
                                    printf( __( 'Author: %s', 'challenge' ), '<span class="vcard">' . get_the_author() . '</span>' );
                                    /* Since we called the_post() above, we need to
                                     * rewind the loop back to the beginning that way
                                     * we can run the loop properly, in full.
                                     */
                                    rewind_posts();
        
                                elseif ( is_day() ) :
                                    printf( __( 'Day: %s', 'challenge' ), '<span>' . get_the_date() . '</span>' );
        
                                elseif ( is_month() ) :
                                    printf( __( 'Month: %s', 'challenge' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
        
                                elseif ( is_year() ) :
                                    printf( __( 'Year: %s', 'challenge' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
        
                                elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
                                    _e( 'Asides', 'challenge' );
        
                                elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
                                    _e( 'Images', 'challenge');
        
                                elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
                                    _e( 'Videos', 'challenge' );
        
                                elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
                                    _e( 'Quotes', 'challenge' );
        
                                elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
                                    _e( 'Links', 'challenge' );
        
                                else :
                                    _e( 'Archives', 'challenge' );
        
                                endif;
                            ?>
                        </h1>
                        <?php
                            // Show an optional term description.
                            $term_description = term_description();
                            if ( ! empty( $term_description ) ) :
                                printf( '<div class="taxonomy-description">%s</div>', $term_description );
                            endif;
                        ?>
                    </header><!-- .page-header -->
        
                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
        
                        <?php
                            /* Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part( 'content', get_post_format() );
                        ?>
        
                    <?php endwhile; ?>
        
                    <?php challenge_content_nav( 'nav-below' ); ?>
        
                <?php else : ?>
        
                    <?php get_template_part( 'no-results', 'archive' ); ?>
        
                <?php endif; ?>
        
                </main><!-- #main -->
            </section><!-- #primary -->
        </div>

        <div class="col-xs-6 col-sm-6 col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div><!-- .row -->

</div><!-- #wrap -->
<?php get_footer(); ?>
