<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php get_sidebar('second'); ?>
            </div>
        </div>
        <div id="top-social">
            <ul>
                <?php
                if (get_theme_mod('bootkit_facebook_handle')) {
                    ?>
                    <li><a href="<?php echo get_theme_mod('bootkit_facebook_handle'); ?>" target="_blank">
                            <i class="fa fa-facebook"></i></a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <p class="m-0 text-center text-white">Copyright &copy; All rights reserved by Bohdan Shcherbak!</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>