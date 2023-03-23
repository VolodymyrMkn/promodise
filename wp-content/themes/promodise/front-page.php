<?php get_header() ?>
<div class="banner-area banner-3">
    <div class="overlay dark-overlay"></div>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                        <div class="banner-content content-padding">
                            <h5 class="subtitle">Диджитал агентство</h5>
                            <h1 class="banner-title"><?php echo get_the_content();?></h1>
                            <p>
                                <?php the_field('zagolovok_sekczii'); ?>
                            </p>
                            <a href="<?php the_field('ssylka_nachat_sotrudnichestvo'); ?>" class="btn btn-white btn-circled">Начать сотрудничество</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="intro" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12">
                <div class="section-heading">
                    <p class="lead">
                        <?php the_field('zagolovok_marketuslugi'); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block col-sm-12">
                <div class="intro-img">
                    <?php
                    $image = get_field('kartinka_marketuslugi');
                    if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid" />
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="row">
                    <?php if(have_rows('blok_iz_4h_kolonok')):
                        while(have_rows('blok_iz_4h_kolonok')):
                            the_row();
                        $number_bloc = get_sub_field('nomer_bloka');
                        $title_bloc = get_sub_field('zagolovok_bloka');
                        $text_bloc = get_sub_field('tekst_bloka');
                    ?>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="intro-box">
                            <span>0<?php echo $number_bloc ?>.</span>
                            <h4><?php echo get_sub_field('zagolovok_bloka') ?></h4>
                            <p>
                                <?php echo $text_bloc ?>
                            </p>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    endif;
                    ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro-cta">
                            <p class="lead">Остались вопросы? <a href="#contact" class="smoth-scroll">Напишите нам</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about" class="bg-light">
    <?php $img_about_us= get_field ('img_about_us');?>
    <div class="about-bg-img d-none d-lg-block d-md-block" style="background: url('<?php echo $img_about_us ?>')"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-12 col-md-8">
                <div class="about-content">
                    <h5 class="subtitle">О нас</h5>
                    <h3><?php the_field('title_about_us'); ?></h3>
                    <p><?php the_field('content_about_us');?></p>
                    <?php if( have_rows('list_specialists') ):
                    while( have_rows('list_specialists') ) : the_row();
                     $specialists = get_sub_field('specialists');
                    ?>
                    <ul class="about-list">
                        <li><i class="icofont icofont-check-circled"></i> <?php echo $specialists?></li>
                    </ul>
                    <?php
                    endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo get_template_part("template-parts/content", "service", array('class' => 'bg-feature'))?>
<?php echo get_template_part("template-parts/content", "digital",)?>
<?php echo get_template_part('template-parts/content','price')?>
<?php echo get_template_part('template-parts/content','testimonial')?>
<section class="section-padding">
    <div class="container">
            <?php echo get_template_part("template-parts/content","partner")?>
        </div>
    </div>
</section>
<section id="blog" class="section-padding bg-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 m-auto">
                <div class="section-heading">
                    <h4 class="section-title"><?php the_field('title_journal');?></h4>
                    <div class="line"></div>
                    <p>
                        <?php the_field('content_journal');?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $query = new WP_Query (array(
                    'posts_per_page' => 3,
                    'order' => 'DESC'
            ));
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                        $query->the_post();
            ?>
            <div class="col-lg-4 col-sm-6 col-md-4">
                <div class="blog-block">
                    <?php the_post_thumbnail('full', array('class'=>'img-fluid')); ?>
                    <div class="blog-text">
                        <?php $category= get_the_category();
//                        print_anyarray($category)
                        ?>
                        <h6 class="author-name"><a href="<?php echo get_category_link($category[0]->cat_ID); ?>"><span> <?php echo $category[0]->name;?></span><a/><?php the_author()?></h6>
                        <a href="<?php the_permalink(); ?>" class="h5 my-2 d-inline-block"> <?php the_title()?> </a>
                        <p><?php the_excerpt();?></p>
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
<section id="counter" class="section-padding">
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row">
            <?php echo get_template_part('template-parts/content','counter', array(
                'class_1'   =>  'col-lg-3 col-sm-6 col-md-6',
                'class_2'   =>  'counter-stat',
                'class_4'   =>  'counter',
                'class_5'   =>  ''
            )) ?>
        </div>
    </div>
</section>
<?php get_footer() ?>





