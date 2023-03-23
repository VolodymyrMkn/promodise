<?php get_header()?>
<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-contact" id="page-banner">
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="banner-content content-padding">
                    <h1 class="text-white"><?php the_title()?> </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MAIN HEADER AREA END -->
<section class="section blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <?php while ( have_posts() ) :
                                    the_post(); ?>
                        <div class="blog-post">
                            <?php the_post_thumbnail('full'); ?>
                            <div class="mt-4 mb-3 d-flex">
                                <div class="post-author mr-3">
                                    <i class="fa fa-user"></i>
                                    <span class="h6 text-uppercase"><?php the_author() ?></span>
                                </div>
                                <div class="post-info">
                                    <i class="fa fa-calendar-check"></i>
                                    <span><?php the_date('d F Y')?></span>
                                </div>
                            </div>
                            <?php the_content(); ?>
                        </div>
                        <?php endwhile;
                        if ( comments_open() || get_comments_number()) :
                            comments_template(); // если нет шаблона comments.php, то выведится базовый шаблон wordpressa comments.php
                        endif;
                        ?>
                   </div>
                </div>
            </div>
            <?php get_sidebar() ?>
        </div>
    </div>
    </div>
</section>
<?php get_footer()?>

