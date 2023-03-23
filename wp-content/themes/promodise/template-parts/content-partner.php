        <div class="row">
            <?php
            $query = new WP_Query (array(
                'post_type' => 'partner',
                'posts_per_page' => 4,
                'meta_key' => 'prioritet_partnerov',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
            ));
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
            ?>
            <div class="col-lg-3 col-sm-6 col-md-3 text-center">
                <?php the_post_thumbnail('full', array('class'=>'img-fluid'));
             //   echo print_anyarray($query);
                ?>
            </div>
            <?php
            }
            } else {
                echo 'Партнеров нет!';// Постов не найдено
            }
            wp_reset_postdata(); // Сбрасываем $post
            ?>
        </div>


        <!--                <img src="--><?php //bloginfo('template_url')?><!--/images/clients/client01.png" alt="partner" class="img-fluid" />-->

        <!--            <div class="col-lg-3 col-sm-6 col-md-3 text-center">-->
        <!--                <img src="--><?php //bloginfo('template_url')?><!--/images/clients/client06.png" alt="partner" class="img-fluid" />-->
        <!--            </div>-->
        <!--            <div class="col-lg-3 col-sm-6 col-md-3 text-center">-->
        <!--                <img src="--><?php //bloginfo('template_url')?><!--/images/clients/client04.png" alt="partner" class="img-fluid" />-->
        <!--            </div>-->
        <!--            <div class="col-lg-3 col-sm-6 col-md-3 text-center">-->
        <!--                <img src="--><?php //bloginfo('template_url')?><!--/images/clients/client05.png" alt="partner" class="img-fluid" />-->
        <!--            </div>-->


