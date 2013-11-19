<!--/////////// CONTACT SECTION ////////// -->
<section id="section-contact">
    <div class="container">
        <h1 class="text-center">Get in touch</h1>
        <div class="row">
            <div class="col-md-5 col-sm-7">
                <h2 class="hidden-xs">We're here to help!</h2>
                <?php if($options['contact_info']) { ?>
                <p><?php echo $options['contact_info']; ?></p>
                <?php } ?>
            </div><!-- /col-md-5 -->
            
            <div class="col-md-7 col-sm-5">
                <!--////////// CONTACT FORM STARTS HERE ///////////-->
                <div class="contact-form">
                    <?php echo do_shortcode( '[contact-form-7 id="1699" title="Contact form 1"]' ); ?>
                </div><!-- /contact-form -->
                <!-- ////////// END CONTACT FORM -->
            </div><!-- /col-md-7 -->
        </div><!-- /row -->
    </div><!-- end container -->
</section>