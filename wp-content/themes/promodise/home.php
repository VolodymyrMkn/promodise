<?php get_header()?>
<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-contact" id="page-banner">
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <h1 class="text-white">Promodise журнал</h1>
                    <p>Полезные статьи про маркетинг и диджитал</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MAIN HEADER AREA END -->
<section class="section blog-wrap ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <?php
                    $cnt=0;
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                            $cnt++;
                            switch ($cnt) {
                                case "3":
                    ?>
                    <div class="col-lg-12">
                        <?php echo get_template_part('template-parts/content','post')?>
                    </div>
                                <?php break;default: ?>
                    <div class="col-lg-6">
                        <?php echo get_template_part('template-parts/content','post')?>
                    </div>
                        <?php } endwhile; ?>
                    <?php  endif; ?>
                </div>
            </div>
            <?php get_sidebar() ?>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php
                $args = array(
                    'prev_text' => __('<span class="p-2 border">« Предыдущие посты</span>'),
                    'next_text' => __('<span class="p-2 border">Следующие посты »</span>'),
                    'before_page_number' => '<span class="p-2 border">', // можем добавить текст перед каждым числом
                    'after_page_number' => '</span>'  // можем добавить текст после каждого числа
                );
                ?>
                <?php the_posts_pagination($args); ?>
            </div>
        </div>
    </div>
    </div>
</section>
<?php get_footer()?>
