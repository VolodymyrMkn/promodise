<section id="testimonial" class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="mb-5">
                    <h3 class="mb-2">Клиенты, которые доверяют нам</h3>
                    <p>
                        Ниже представлены отзывы от клиентов, с которыми<br />
                        мы работаем уже несколько лет подряд
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 m-auto col-sm-12 col-md-12">
                <div class="carousel slide" id="test-carousel2">
                    <div class="carousel-inner">
                        <?php
                        global $post;
                        $query=new WP_Query(array(
                                'post_type'=>'testimonial',
                                'post_per_page' => -1,
                                'order' => 'DESC'
                        ));
                     //   echo print_anyarray($query);
                        ?>
                        <ol class="carousel-indicators">
                            <li data-target="#test-carousel2" data-slide-to="0" class="active"></li>
                            <?php for($i=1; $i<count($query->posts); $i++): ?>
                                <li data-target="#test-carousel2" data-slide-to="<?php echo $i; ?>"></li>
                            <?php endfor; ?>
                        </ol>
                        <?php
                        $cnt=0;
                            if ($query->have_posts()):
                                while ($query->have_posts()):
                                    $query->the_post();
                        $cnt++;
                        ?>
                        <div class="carousel-item <?php if ($cnt===1) {echo 'active';} ?>">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="testimonial-content style-2">
                                        <div class="author-info">
                                            <div class="author-img">
                                                <?php the_post_thumbnail('full', array('class'=>'img-fluid'))?>
                                            </div>
                                        </div>

                                        <p>
                                            <i class="icofont icofont-quote-left"></i>
                                            <?php the_content();?>
                                            <i class="icofont icofont-quote-right"></i>
                                        </p>
                                        <div class="author-text">
                                            <h5><?php the_title()?></h5>
                                            <p><?php echo get_the_excerpt();?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; else: ?>
                    <p>Нет Постов</p>
                    <?php  endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>