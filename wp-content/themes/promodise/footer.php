<section id="footer" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-8 col-md-8">
                <?php if (!dynamic_sidebar('info_footer')):dynamic_sidebar('info_footer'); endif;?>
            </div>
            <div class="col-lg-2 col-sm-4 col-md-4">
                <?php if (!dynamic_sidebar('left_menu_footer')) : dynamic_sidebar('left_menu_footer'); endif; ?>
            </div>
            <div class="col-lg-2 col-sm-6 col-md-6">
                <?php if (!dynamic_sidebar('right_menu_footer')) : dynamic_sidebar('right_menu_footer'); endif; ?>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
                <?php if (!dynamic_sidebar('contacts')) : dynamic_sidebar('contacts'); endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <?php if (!dynamic_sidebar('footer_law')) : dynamic_sidebar('footer_law'); endif; ?>
            </div>
        </div>
    </div>
</section>
<?php wp_footer(); ?>
</body>
</html>
