<!--////////// FEATURES SECTION //////////-->
<section id="features">
    <div class="logo">
        <a href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/css/img/logo-2.png" alt=""></a>
    </div>
    <div class="container">
        <?php if($options['feature_title']) { ?>
        <h1 class="text-center"><?php echo $options['feature_title']; ?></h1>
        <?php } ?>
        <div class="row">
            <?php if($options['feature_body_left']) { ?>
            <div class="col-md-6 feature">
                <p><?php echo $options['feature_body_left']; ?></p>
            </div>
            <?php } ?>
            <?php if($options['feature_body_right']) { ?>
            <div class="col-md-6 feature">
                <p><?php echo $options['feature_body_right']; ?></p>
            </div>
            <?php } ?>
        </div><!-- /row -->
        <?php if($options['feature_button_url']) { ?>
        <a class="btn btn-primary btn-large text-center" href="<?php echo $options['feature_button_url']; ?>" target="_blank">Visit Site</a>
        <?php } ?>
    </div><!-- /container -->
</section>