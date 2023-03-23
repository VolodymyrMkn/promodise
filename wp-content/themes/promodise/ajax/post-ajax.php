<?php
add_action('wp_ajax_nopriv_get_post_ajax', 'postMyAjax');
add_action('wp_ajax_get_post_ajax', 'postMyAjax');

function postMyAjax()
{
    $catId = $_POST ['catId'];
    $catLink = $_POST['catLink'];
    $argc = array(
        'posts_per_page' => -1,
        'cat' => $catId
    );
    $posts = new WP_Query($argc);
    if ($posts->have_posts()): ?>
        <?php while ($posts->have_posts()): $posts->the_post() ?>
            <?php echo get_template_part('template-parts/content', 'post-filter') ?>

        <?php
            endwhile;
    endif;?>
    <a href="<?php echo $catLink ?>" class="show-all">Show all</a>
<?php
    wp_die();
}

?>
