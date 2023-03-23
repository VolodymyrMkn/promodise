<div class="col-lg-4">
    <div class="row">
        <?php get_search_form() ?>
        <div class="col-lg-12">
            <div class="sidebar-widget about-bar">
                <h5 class="mb-3">О нас</h5>
                <p>Мы — маркетинговое агентство полного цикла, которое оказывает диджитал услуги стартапам и крупным
                    компаниям</p>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="sidebar-widget category">
                <h5 class="mb-3">Рубрики</h5>
                <?php if (!dynamic_sidebar('category_widget')) : dynamic_sidebar('category_widget'); endif; ?>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="sidebar-widget category">
                <h5 class="mb-3">Рубрики</h5>
                <?php
                    $categories = get_categories();
                  //  print_anyarray($categories);
                    foreach ($categories as $category){
                        echo '<a href="" class="ajax-category-link" data-id="'.$category->cat_ID.'" data-link="'.get_category_link($category->cat_ID).'">'.$category->name.'</a>';
                    }
                ?>
            </div>
        </div>
        <div class="col-lg-12">
            <?php if (!dynamic_sidebar('category_tags')) : dynamic_sidebar('category_tags'); endif; ?>
        </div>
        <div class="col-lg-12">
            <?php if (!dynamic_sidebar('text-widget')) : dynamic_sidebar('text-widget'); endif; ?>
            <?php if (!dynamic_sidebar('category_text')) : dynamic_sidebar('category_text'); endif; ?>
        </div>
        <div class="col-lg-12">
            <div class="sidebar-widget tag">
                <?php
                $categoryes = get_categories();
                //                print_anyarray($categoryes);
                foreach ($categoryes as $cat):
                    ?>
                    <a href="<?php echo get_category_link($cat->cat_ID) ?>"> <?php echo $cat->name ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>