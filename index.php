<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

    <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

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

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>