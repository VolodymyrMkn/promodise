<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <!-- Required meta tags -->
    <meta charset=<?php bloginfo( 'charset' ); ?> />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="seo & digital marketing" />
    <meta
        name="keywords"
        content="marketing,digital marketing,creative, agency, startup,promodise,onepage, clean, modern,seo,business, company"
    />
    <?php wp_head();    ?>
</head>
<body data-spy="scroll" data-target=".fixed-top">
<nav class="navbar navbar-expand-lg fixed-top trans-navigation">
    <div class="container">
            <?php if (has_custom_logo()){
                echo  '<a class="img-fluid b-logo">'. get_custom_logo() .'<a/>' ;
            } ?>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#mainNav"
            aria-controls="mainNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon">
            <i class="fa fa-bars"></i>
          </span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
            <?php
            wp_nav_menu(array(
                    "menu" => "Header menu",
                    "container" => false,
                    "menu_class" =>"navbar-nav",
                    "deps" =>2,
                    "walker" => new WP_Bootstrap_Navwalker(),
            ));
            ?>
        </div>
    </div>
</nav>
