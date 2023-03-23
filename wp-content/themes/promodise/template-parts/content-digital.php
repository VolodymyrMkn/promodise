<section id="service">
    <div class="container">
        <div class="row">
                <?php
            $query = new WP_Query (array(
                    'posts_per_page' => 6,
                    'order' => 'DESC',
                    'post_type' => 'digital'
            ));
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                        $query->the_post();
            ?>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="service-box">
                    <div class="service-img-icon">
                        <?php the_post_thumbnail('full',array(
                            'class' => 'img-fluid'
                        ));?>
<!--                        --><?php //bloginfo('template_url')?>
                    </div>
                    <div class="service-inner">
                        <h4><?php the_title()?></h4>
                        <p>
                            <?php the_excerpt();?>
                         <!--   <span>видео маркетинга</span>. -->
                        </p>
                    </div>
                </div>
            </div>
                <?php
                }
                } else {
                    echo 'Постов нет!';// Постов не найдено
                }
                wp_reset_postdata(); // Сбрасываем $post
                ?>
        </div>
    </div>
</section>
