<!--////////// TOUR SECTION //////////-->
<section id="section-tour">
    <div class="container">
        <div class="row">
            <h1 class="text-center">The concept is simple</h1>
            <ul class="media-list">
                
                <!--///// STEP 1 ///// -->
                <li class="media col-md-12" id="step-1">
                    <div class="tour-step-icon">1</div>
                    <span class="tour-line-half"></span>
                    <div class="row">
                        <div class="col-md-1">
                            <span class="tour-line-vert"></span>
                        </div>
                        <div class="tour-step-container">
                            <div class="col-md-2 icon"><span data-icon="&#xf155;" aria-hidden="true"></span></div>
                            <div class="media-body col-md-8">
                                <?php if($options['step_1_title']) { ?>
                                <h3 class="media-heading"><?php echo $options['step_1_title']; ?></h3>
                                <?php } ?>
                                <?php if($options['step_1_body']) { ?>
                                <p class="media-desc"><?php echo $options['step_1_body']; ?></p>
                                <?php } ?>
                            </div><!-- /media-body -->
                        </div><!-- /tour-step-container -->
                    </div><!-- /row -->
                </li>
                
                <!-- ///// STEP 2 ///// -->
                <li class="media col-md-12" id="step-2">
                    <div class="tour-step-icon">2</div>
                    <span class="tour-line-full"></span>
                    <div class="row">
                        <div class="col-md-1 col-md-push-11">
                            <span class="tour-line-vert pull-right"></span>
                        </div>
                        <div class="tour-step-container">
                            <div class="col-md-2 col-md-push-8 icon"><span data-icon="&#xe076;" aria-hidden="true"></span></div>
                            <div class="media-body col-md-8 col-md-pull-2">
                                <?php if($options['step_2_title']) { ?>
                                <h3 class="media-heading"><?php echo $options['step_2_title']; ?></h3>
                                <?php } ?>
                                <?php if($options['step_2_body']) { ?>
                                <p class="media-desc"><?php echo $options['step_2_body']; ?></p>
                                <?php } ?>
                            </div><!-- /media-body -->
                        </div><!-- /tour-step-container -->
                    </div><!-- /row -->
                </li>
                
                <!--///// STEP 3 ///// -->
                <li class="media col-md-12" id="step-3">
                    <div class="tour-step-icon">3</div>
                    <span class="tour-line-full"></span>
                    <div class="row">
                        <div class="col-md-1">
                            <span class="tour-line-vert"></span>
                        </div>
                        <div class="tour-step-container">
                            <div class="col-md-2 icon final"><span data-icon="&#xf024;" aria-hidden="true"></span></div>
                            <div class="media-body col-md-8">
                                <?php if($options['step_3_title']) { ?>
                                <h3 class="media-heading"><?php echo $options['step_3_title']; ?></h3>
                                <?php } ?>
                                <?php if($options['step_3_body']) { ?>
                                <p class="media-desc"><?php echo $options['step_3_body']; ?></p>
                                <?php } ?>
                            </div><!-- /media-body -->
                        </div><!-- /tour-step-container -->
                    </div><!-- /row -->
                </li>
                
                <!-- ///// TOUR END ///// -->
                <li class="media last-step col-md-12" id="tour-end">
                    <div class="tour-step-icon final"><span data-icon="&#xf091;" aria-hidden="true"></span></div>
                    <span class="tour-line-half"></span>
                    <?php if($options['end_tour']) { ?>
                    <p class="lead launch col-md-5 col-md-push-7"><?php echo $options['end_tour']; ?></p>
                    <?php } ?>
                </li>
            </ul>
        </div><!-- /row -->
    </div><!-- /container -->
</section>