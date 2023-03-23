<?php
/*
    Template Name: Шаблон страницы цены
    Template Post Type: page
*/
?>
<?php get_header() ?>

<div class="page-banner-area page-contact" id="page-banner">
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <h1 class="text-white"> <?php the_title()?></h1>
                    <p><?php the_excerpt();?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo get_template_part('template-parts/content','price')?>
<?php echo get_template_part('template-parts/content','testimonial')?>
<section class="section-padding">
    <div class="container">
        <?php echo get_template_part("template-parts/content","partner")?>
    </div>
    </div>
</section>
<?php get_footer() ?>
