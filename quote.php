<!--////////// QUOTE SECTION //////////-->
<section id="quote">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php if($options['quote_title']) { ?>
                <h1 class="text-center"><?php echo $options['quote_title']; ?></h1>
                <?php } ?>
                <?php if($options['quote_body']) { ?>
                <p class="lead text-center"><?php echo $options['quote_body']; ?></p>
                <?php } ?>
            </div><!-- /col-md-10 -->
        </div><!-- /row -->
        <!-- Button trigger modal -->
        <a data-toggle="modal" href="#ambassadorModal" class="btn btn-info btn-large">Ambassador Resources</a>
        
        <!-- Modal -->
        <div class="modal fade" id="ambassadorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Ambassador Resources</h4>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <?php if($options['ambassador_resource_1']) { ?>
                            <li><a href="<?php echo $options['ambassador_resource_1']; ?>" target="_blank">$20 Challenge Ambassador Presentation</a></li>
                            <?php } ?>
                            <?php if($options['ambassador_resource_2']) { ?>
                            <li><a href="<?php echo $options['ambassador_resource_2']; ?>" target="_blank">$20 Challenge Introductory Presentation</a></li>
                            <?php } ?>
                            <?php if($options['ambassador_resource_3']) { ?>
                            <li><a href="<?php echo $options['ambassador_resource_3']; ?>" target="_blank">$20 Challenge Training</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-pricing" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
    </div><!-- /container -->
</section>