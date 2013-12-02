<?php
/**
 * The template for displaying 404 pages (Not Found).
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
      <div id="primary" class="content-area">
       <main id="main" class="site-main" role="main">
        
        <section class="error-404 not-found">
         <header class="page-header">
          <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'challenge' ); ?></h1>
         </header><!-- .page-header -->
         
         <div class="page-content">
          <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'challenge' ); ?></p>
          
          <?php get_search_form(); ?>
          
          <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
          
          <?php if ( challenge_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
          <div class="widget widget_categories">
           <h2 class="widgettitle"><?php _e( 'Most Used Categories', 'challenge' ); ?></h2>
           <ul>
            <?php
   wp_list_categories( array(
    'orderby'    => 'count',
    'order'      => 'DESC',
    'show_count' => 1,
    'title_li'   => '',
    'number'     => 10,
   ) );
            ?>
           </ul>
          </div><!-- .widget -->
          <?php endif; ?>
          
          <?php
   /* translators: %1$s: smiley */
   $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'challenge' ), convert_smilies( ':)' ) ) . '</p>';
   the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
          ?>
          
          <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
          
         </div><!-- .page-content -->
        </section><!-- .error-404 -->
        
       </main><!-- #main -->
      </div><!-- #primary -->
     </div>
    </div>
 
 <?php get_footer(); ?>