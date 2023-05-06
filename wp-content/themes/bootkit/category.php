<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-4 mb-3">
                <?php the_archive_title(); ?>
            </h1>
            <span>
                <?php the_archive_description(); ?>
            </span>
            <div class="row">
                <div class="col-md-8">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            get_template_part('partials/posts/content', 'excerpt');
                        }
                    } else {
                        get_template_part('partials/posts/content', 'none');
                    }
                    ?>
                    <ul class="pagination justify-content-center mb-4">
                        <li class="page-item">
                            <?php previous_posts_link("← Older"); ?>
                        </li>
                        <li class="page-item">
                            <?php next_posts_link("Newer →"); ?>
                        </li>
                    </ul>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>