<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    global $post;
                    $author_ID = $post->post_author;
                    $author_URL = get_author_posts_url($author_ID);
                    if (has_post_thumbnail()) {
                        the_post_thumbnail("medium", ["class" => "card-img-top"]);
                    }
                    ?>
                    <h1 class="mt-4">
                        <?php the_title() ?>
                        by
                        <a href="<?php echo $author_URL; ?>"><?php the_author(); ?></a>
                    </h1>
                    <h3 class="mt-2 mb-2">
                        Category: <?php the_category(", ") ?>
                    </h3>
                    <p class="card-text">
                        <?php the_content();
                        $defaults = array(
                            'before' => '<div class="row justify-content-center align-items-center">' . __('Pages:'),
                            'after' => '</div>',
                        );
                        wp_link_pages($defaults);
                        edit_post_link("Edit");
                        ?>
                    </p>
                    <div class="tags mb-4">
                        <?php the_tags('', ', '); ?>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <strong>
                                About
                                <a href="<?php echo $author_URL; ?>"><?php the_author(); ?></a>
                            </strong>
                        </div>
                        <div class="card-body justify-content-space-between">
                            <div class="author-image">
                                <?php echo get_avatar($author_ID, 90, '', false, ['class' => 'img-circle']); ?>
                            </div>
                            <p>
                                <?php echo nl2br(get_the_author_meta('description')); ?>
                            </p>
                        </div>
                    </div>
                    <ul class="pagination justify-content-center mb-4">
                        <li class="page-item">
                            <?php previous_post_link(); ?>
                        </li>
                        <li class="page-item">
                            <?php next_post_link(); ?>
                        </li>
                    </ul>
                    <div class="related-posts">
                        <h4>Related Posts:</h4>
                        <div class="related-posts__list clearfix">
                            <?php
                            $categories = get_the_category();
                            $rp_query = new WP_Query([
                                'posts_per_page' => 2,
                                'post__not_in' => [$post->ID],
                                'cat' => !empty($categories) ? $categories[0]->term_id : null,
                            ]);
                            if ($rp_query->have_posts()) {
                                while ($rp_query->have_posts()) {
                                    $rp_query->the_post();
                                    ?>
                                    <div class="mpost clearfix">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            ?>
                                            <div class="entry-image">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail('thumbnail'); ?>
                                                </a>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h4>
                                            </div>
                                            <ul class="entry-meta clearfix">
                                                <li><i class="icon-calendar3"></i>
                                                    <?php echo get_the_date(); ?>
                                                </li>
                                                <li><i class="icon-comments"></i>
                                                    <?php comments_number('0'); ?>
                                                </li>
                                            </ul>
                                            <div class="entry-content">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                wp_reset_postdata();
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                    if (comments_open() || get_comments_number()) {
                        comments_template();
                    }
                }
            } ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>