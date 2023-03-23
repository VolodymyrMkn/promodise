<div class="col-lg-12">
    <div class="sidebar-widget search">
        <div class="form-group">
            <form method="post" action="<?php echo home_url("/")?>" id="searchform" class="form-group">
                <input type="text" placeholder="поиск" class="form-control" value="<?php echo get_search_query(); ?>" name="s" id="s">
                <button class="search-button fa fa-search"></button>
            </form>
        </div>
    </div>
</div>
