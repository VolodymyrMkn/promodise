<?php
/*
    Template Name: Шаблон страницы услуги
    Template Post Type: page
*/
?>
<?php get_header();?>
    <!--MAIN BANNER AREA START -->
    <div class="page-banner-area page-service" id="page-banner">
        <div class="overlay dark-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                    <div class="banner-content content-padding">
                        <h1 class="text-white"><?php the_title()?></h1>
                        <p><?php echo get_the_content() ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--MAIN HEADER AREA END -->
    <!--  SERVICE BLOCK2 START  -->
    <section id="service-2" class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
               <?php
               $block=0;
                    if(have_rows('column_block3')):
                        while (have_rows('column_block3')):
                            the_row();
                            $block++;
               ?>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box-2">
                         <span>0<?php echo $block; ?></span>
                        <h4><?php echo get_sub_field('title_block'); ?></h4>
                        <p>
                            <?php echo get_sub_field('text_block'); ?>
                        </p>
                    </div>
                </div>
                <?php
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
    </section>
    <!--  SERVICE BLOCK2 END  -->

    <!--  SERVICE AREA START  -->
    <section class="section pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-sm-12 col-md-6 mb-4">
                    <?php $image = get_field('img_block'); ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid" />
                </div>

                <div class="col-lg-7 pl-4">
                    <div class="mb-5">
                        <h3 class="mb-4"><?php the_field('title_efficiency'); ?></h3>
                        <p>
                            <?php the_field('text_efficiency'); ?>
                        </p>
                    </div>
                    <?php
                    if(have_rows('column_block4')):
                        while (have_rows('column_block4')):
                            the_row();
                            ?>
                        <ul class="about-list">
                            <li>
                                <h5 class="mb-2"><i class="<?php echo get_sub_field('icon_block'); ?>"></i><?php echo get_sub_field('title_block'); ?></h5>
                                <p><?php echo get_sub_field('text_block'); ?></p>
                            </li>
                        </ul>

                        <?php
                        endwhile;
                    endif;
                    ?>
                    <?php the_field('li_column'); ?>
                </div>
            </div>
        </div>
    </section>
    <!--  SERVICE AREA END  -->
    <!--  SERVICE PARTNER START  -->
<?php echo get_template_part("template-parts/content", "service", array('class' => 'service-style-two'))?>
    <!--  SERVICE PARTNER END  -->
    <!--  SERVICE AREA START  -->
<?php echo get_template_part("template-parts/content", "digital")?>
    <!--  SERVICE AREA END  -->
    <!--  PARTNER START  -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center text-lg-left">
                    <div class="mb-5">
                        <h3 class="mb-2">Эти компании доверяют нам</h3>
                        <p>Компании, с которыми мы работаем давно</p>
                    </div>
                </div>
            </div>
            <?php echo get_template_part("template-parts/content","partner")?>
        </div>
    </section>
    <!--  PARTNER END  -->

<?php get_footer(); ?>