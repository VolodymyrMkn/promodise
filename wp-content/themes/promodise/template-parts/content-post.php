<div class="blog-post">
<?php the_post_thumbnail('full',array(
    'class' => 'img-fluid'
));?>
    <div class="mt-4 mb-3 d-flex">
        <div class="post-author mr-3">
            <i class="fa fa-user"></i>
            <span class="h6 text-uppercase"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID') )?>"><?php the_author() ?></a></span>
        </div>

        <div class="post-info">
            <i class="fa fa-calendar-check"></i>
            <span><?php the_date('d F Y')?></span>
        </div>
    </div>
    <a href="<?php the_permalink();?>" class="h4 "><?php the_title() ?></a>
    <p class="mt-3"><?php the_excerpt();?></p>
    <a href="<?php the_permalink();?>" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
</div>
