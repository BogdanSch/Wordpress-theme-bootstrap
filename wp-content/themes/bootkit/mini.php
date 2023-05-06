<?php
/* Template Name: Mini */
get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-4 mb-3">
                <?php the_title() ?>
            </h1>
            <hr>
            <?php the_content();
            $defaults = array(
                'before' => '<div class="row justify-content-center align-items-center">' . __('Pages:'),
                'after' => '</div>',
            );
            wp_link_pages($defaults);
            ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php query_posts('showposts=8'); ?>
        <?php while (have_posts()) {
            the_post(); ?>
            <?php if (has_post_thumbnail()) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item center">
                    <div class="card h-100">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(
                              'thumbnail',
                              array(
                                  'class' => 'mx-auto d-block w-100 h-auto'
                              )
                          ); ?></a>
                        </p>
                        <div class="card-body">
                            <p>
                                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>