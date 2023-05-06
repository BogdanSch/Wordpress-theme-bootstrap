<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php
            if (is_home()) {
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        get_template_part('partials/posts/content-excerpt');
                    }
                }
            } else {
                _e('<h1 class="my-4">Welcome to Modern Business</h1>');
                the_content();
            }
            ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>