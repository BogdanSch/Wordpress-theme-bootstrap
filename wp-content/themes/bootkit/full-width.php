<?php
/*
* Template Name: Full Width Page
* Template Post Type: post, page, movies
*/
get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php
            while (have_posts()) {
                the_post();
                ?>
                <h1 class="mt-4 mb-3">
                    <?php the_title() ?>
                </h1>
                <hr>
                <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail("full", ["class" => "img-fluid rounded"]);
                    }
                ?>
                <?php the_content();
                ?>
                <hr>
                <?php
                edit_post_link();
                ?>
                <?php the_tags('', ', '); ?>
                <hr>
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        <?php previous_post_link(); ?>
                    </li>
                    <li class="page-item">
                        <?php next_post_link(); ?>
                    </li>
                </ul>
                <?php
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
                ?>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>