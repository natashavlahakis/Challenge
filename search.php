<?php
/**
 * The template for displaying Search Results pages.
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
          <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'challenge' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
         </header><!-- .page-header -->
         
         <?php /* Start the Loop */ ?>
         <?php while ( have_posts() ) : the_post(); ?>
         
         <?php get_template_part( 'content', 'search' ); ?>
         
         <?php endwhile; ?>
         
         <?php challenge_content_nav( 'nav-below' ); ?>
         
         <?php else : ?>
         
         <?php get_template_part( 'no-results', 'search' ); ?>
         
         <?php endif; ?>
         
        </main><!-- #main -->
       </section><!-- #primary -->
      </div>
      
      <div class="col-xs-6 col-sm-6 col-md-4">
       <?php get_sidebar(); ?>
      </div>
     </div>
    </div><!-- .wrap -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>