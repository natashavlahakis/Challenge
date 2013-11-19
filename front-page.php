<?php
/**
 * The front page template.
 *
 * @package Challenge
 */

get_header(); 

//get theme options
$options = get_option( 'theme_settings' ); ?>

    <header class="logo">
        <a href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/css/img/logo-1.png" alt=""></a>
    </header>
    
    <!--////////// LEAD SECTION ////////// -->
    <section id="section-lead"><!-- Edit name -->
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-5 col-md-offset-1 slider-text"><!-- Edit name -->
                    <?php if($options['lead_title']) { ?>
                    <h1 class="animated bounceInDown"><?php echo $options['lead_title']; ?></h1>
                    <?php } ?>
                    <?php if($options['lead_body']) { ?>
                    <p class="animated bounceInDown"><?php echo $options['lead_body']; ?></p>
                    <?php } ?>
                    <!-- Button trigger modal -->
                    <a data-toggle="modal" href="#studentModal" class="btn btn-pricing btn-large animated bounceInLeft">Student Resources</a>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="studentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Student Resources</h4>
                                </div>
                                <div class="modal-body">
                                    <ul>
                                        <?php if($options['student_resource_1']) { ?>
                                        <li><a href="<?php echo $options['student_resource_1']; ?>" target="_blank">Student Guidelines</a></li>
                                        <?php } ?>
                                        <?php if($options['student_resource_2']) { ?>
                                        <li><a href="<?php echo $options['student_resource_2']; ?>" target="_blank">$20 Challenge Training</a></li>
                                        <?php } ?>
                                        <?php if($options['student_resource_3']) { ?>
                                        <li><a href="<?php echo $options['student_resource_3']; ?>" target="_blank">Student Declaration Form 2013</a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-pricing" data-dismiss="modal">Close</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <a class="btn btn-pricing btn-large animated bounceInLeft" href="#section-contact">Contact us</a>
                    
                </div><!-- /slider-text --><!-- Edit name -->
                <div class="col-md-6">
                    <?php if($options['media_source']) { ?>
                    <iframe class="img-responsive animated bounceInRight" style="width: 460px; height: 340px; margin-top: 38px !important;" src="<?php echo $options['media_source']; ?>" ></iframe>
                    <?php } ?>
                </div>
                
            </div><!-- /row -->
        </div><!-- /container -->
    </section>
    
    <?php include( TEMPLATEPATH . '/tour.php' ); ?>

    <?php include( TEMPLATEPATH . '/features.php' ); ?>
    
    <?php include( TEMPLATEPATH . '/quote.php' ); ?>

    <?php include( TEMPLATEPATH . '/portfolio.php' ); ?>
    
    <?php include( TEMPLATEPATH . '/contact.php' ); ?>

<?php get_footer(); ?>