<?php
/*
    Template Name: Шаблон страницы о нас
    Template Post Type: page
*/
?>
<!--MAIN BANNER AREA START -->
<?php get_header() ?>
<div class="page-banner-area page-contact" id="page-banner">
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <h1 class="text-white">Наша история</h1>
                    <p>
                        В этом месте мы рассказываем, как появилась на свет компания <br />
                        и что делала все это время
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php while( have_rows('block_about_us') ):
    the_row(); ?>
<?php  if( get_row_layout() == 'block_seo' ): ?>
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-sm-12 col-md-8 mb-4">
                <h3 class="mb-3"><?php echo get_sub_field('title_block_1') ?></h3>
                <p class="mb-4">
                    <?php echo get_sub_field('text_block_1') ?>
                </p>
                <span class="h5 mb-4"><?php echo get_sub_field('title_trigger') ?></span>
                <?php echo get_sub_field('li_trigger') ?>
                <a href="service.html" class="mt-3 d-inline-block"
                >Подробнее об услугах <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="col-lg-6 col-md-4">
                <img src="<?php echo get_sub_field('img_seoblock') ?>" alt="" class="img-fluid w-100" />
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php  if( get_row_layout() == 'media_block' ): ?>
<section class="section-padding pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="media img-block mb-3 mb-lg-0">
                    <img src="<?php bloginfo('template_url')?>/images/about/h-1.jpg" alt="" class="img-fluid rounded mr-3" />

                    <div class="media-body">
                        <h4 class="mb-3">Оказываем услуги больше 10 лет подряд!</h4>
                        <h4 class="mb-3"><?php echo get_sub_field('text_block_1') ?></h4>
                        <p>К нам обращались тогда, когда соцсети были не так популярны и продвигали только сайты.</p>
                        <p><?php echo get_sub_field('text_media') ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="media img-block">
                    <img src="<?php bloginfo('template_url')?>/images/about/h-2.jpg" alt="" class="img-fluid rounded mr-3" />

                    <div class="media-body">
                        <h4 class="mb-3">Наша задача — достигать целей наших клиентов!</h4>
                        <p>Когда соцсети стали популярны, мы стали оказывать услуги для своих клиентов в соцсетях</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding pt-0">
    <div class="container">
        <div class="row">
            <?php echo get_template_part('template-parts/content','counter',array(
                'class_1'   =>  'col-lg-3 col-md-6',
                'class_2'   =>  'text-center border p-4 rounded mb-4',
                'class_4'   =>  'counter text-dark font-weight-normal',
                'class_5'   =>  'text-uppercase mt-2',
            ))?>
        </div>
    </div>
</section>
<?php  endif; ?>
<?php  if( get_row_layout() == 'block_strategy' ): ?>
<section class="section-padding" id="section-strategy">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                <?php if(have_rows('strategy')):
                        while(have_rows('strategy')):
                        the_row();
                        $iconStr = get_sub_field('icon_strategy');
                        $titleStr = get_sub_field('title_strategy');
                        $textStr = get_sub_field('text_strategy');
                        ?>
                    <div class="col-lg-6">
                        <div class="mb-5">
                            <span class="icon-3x text-default"><i class="<?php echo $iconStr ?>"></i></span>
                            <h4 class="my-3"><?php echo $titleStr ?></h4>
                            <p><?php echo $textStr ?></p>
                        </div>
                    </div>
                    <?php
                        endwhile;
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php  endif; ?>
    <?php  if( get_row_layout() == 'block_experts' ): ?>
<section class="section-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-5">
                    <h3 class="mb-2"><?php echo get_sub_field('title_experts') ?></h3>
                    <p><?php echo get_sub_field('text_experts') ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <img src="<?php bloginfo('template_url')?>/images/team/team-1.jpg" alt="" class="img-fluid rounded w-100" />

                <ul class="list-unstyled list-inline team-social mt-4">
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-google-plus"></i></a>
                    </li>
                </ul>
                <h4 class="mt-3">Марина Клирова</h4>
                <p>Старший менеджер</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <img src="<?php bloginfo('template_url')?>/images/team/team-2.jpg" alt="" class="img-fluid rounded w-100" />

                <ul class="list-unstyled list-inline team-social mt-4">
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-google-plus"></i></a>
                    </li>
                </ul>
                <h4 class="mt-3">Оксана Польская</h4>
                <p>Маркетолог</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <img src="<?php bloginfo('template_url')?>/images/team/team-3.jpg" alt="" class="img-fluid rounded w-100" />

                <ul class="list-unstyled list-inline team-social mt-4">
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-google-plus"></i></a>
                    </li>
                </ul>
                <h4 class="mt-3">Валерий Ханов</h4>
                <p>Разработчик</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <img src="<?php bloginfo('template_url')?>/images/team/team-4.jpg" alt="" class="img-fluid rounded w-100" />

                <ul class="list-unstyled list-inline team-social mt-4">
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-google-plus"></i></a>
                    </li>
                </ul>
                <h4 class="mt-3">Михаил Джоранов</h4>
                <p>Бизнес ассистент</p>
            </div>
        </div>
    </div>
</section>
<?php  endif; ?>
    <?php  if( get_row_layout() == 'block_partner' ): ?>
<section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center text-lg-left">
                    <div class="mb-5">
                        <h3 class="mb-2"><?php echo get_sub_field('title_partner') ?></h3>
                        <p><?php echo get_sub_field('text_partner') ?></p>
                    </div>
                </div>
            </div>
        <?php echo get_template_part("template-parts/content","partner")?>
        </div>
    </section>
<?php  endif; ?>
<?php   endwhile; ?>
<?php get_footer() ?>