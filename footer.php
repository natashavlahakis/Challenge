<?
//get theme options
$options = get_option( 'theme_settings' ); ?>

    <!--////////// SUBFOOTER SECTION //////////-->
    <section id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p class="copyright">Copyright &copy; 2013 <a href="<?php bloginfo ('url'); ?>"><?php bloginfo ('name'); ?></a>. All Rights Reserved.</p>
                </div>
                <div class="col-lg-4">
                    <ul class="social-links">
                        <?php if($options['facebook_url']) { ?>
                        <li><a href="<?php echo $options['facebook_url']; ?>" target="_blank"><span data-icon="&#xe16e;" aria-hidden="true"></span></a></li><!-- Facebook Link -->
                        <?php } ?>
                        <?php if($options['youtube_url']) { ?>
                        <li><a href="<?php echo $options['youtube_url']; ?>" target="_blank"><span data-icon="&#xe178;" aria-hidden="true"></span></a></li><!-- YouTube Link -->
                        <?php } ?>
                    </ul>
                </div><!-- /col-lg-4 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>
    
    <!--////////// JAVASCRIPT FILES INCLUDES //////////-->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>    
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fitvids.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.isotope.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/baseline.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

<?php wp_footer(); ?>
</body>
</html>