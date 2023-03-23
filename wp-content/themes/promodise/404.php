<?php get_header() ?>
    <div class="banner-area banner-3">
        <div class="overlay dark-overlay"></div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                            <div class="banner-content content-padding">
                                <h5 class="subtitle">Ошибка 404</h5>
                                <h1 class="banner-title">Данной страницы не существует!</h1>
                                <p>Вы пытаетесь зайти на страницу, которой нет. Возможно, она раньше была по этому адресу, а теперь мы перенесли ее в новое место. Попробуйте найти нужную информацию в поиске или перейдите на главную страницу.</p>
                                <div class="search"><?php the_widget('WP_Widget_Search'); // подключим виджет поиска?></div>
                                <a href="/" class="btn btn-white btn-circled">Перейти на главную</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer() ?>