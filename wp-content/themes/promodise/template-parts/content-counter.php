<?php
$query = new WP_Query (array(
    'posts_per_page' => 6,
    'order' => 'DESC',
    'post_type' => 'counter'
));
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
?>
<div class="<?php echo $args['class_1']?>">
    <div class="<?php echo $args['class_2']?>">
        <i class="<?php
            if(is_front_page()){
                the_field('ikonka_counter');
                }?>">
        </i>
        <span class="<?php echo $args['class_4']?>"><?php the_title() ?></span>
        <h5 class="<?php echo $args['class_5']?>"><?php the_content(); ?></h5>
    </div>
</div>
    <?php
}
} else {
    echo 'Счетчика нету!';// Постов не найдено
}
wp_reset_postdata(); // Сбрасываем $post
// print_anyarray($query);
?>