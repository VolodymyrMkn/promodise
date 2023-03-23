

<section id="service-head" class="<?php
//print_r($args);
echo $args['class']; ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 m-auto">
                <div class="section-heading text-white">
                    <h4 class="section-title"><?php the_field('title_digital'); ?></h4>
                    <p>
                        <?php the_field('text_digital'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
