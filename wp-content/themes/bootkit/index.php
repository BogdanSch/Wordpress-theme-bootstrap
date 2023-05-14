<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    if(is_home()){
                        get_template_part('partials/posts/content-excerpt');
                    }
                    else{
                        if(is_front_page()){
                            _e('<h1 class="my-4">Welcome to Modern Business</h1>');
                        }
                        the_content();
                    }
                }
            }
            ?>
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <?php previous_posts_link("&larr; Older");?>
                    <!-- <a class="page-link" href="#">&larr; Older</a> -->
                </li>
                <li class="page-item">
                    <?php next_posts_link("Newer &rarr;");?>
                    <!-- <a class="page-link" href="#">Newer &rarr;</a> -->
                </li>
            </ul>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>