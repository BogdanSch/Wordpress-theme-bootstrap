<?php
function kc_create_menu()
{
    add_menu_page('Kit Carousel Plugin Settings', 'Kit Carousel Settings', 'administrator', __FILE__, 'kc_settings_page', plugins_url('/images/icon.png', __FILE__));
    add_action('admin_init', 'register_settings');
}
function register_settings()
{
    register_setting('kc-settings-group', 'kc_post_type');
    register_setting('kc-settings-group', 'kc_category_name');
    register_setting('kc-settings-group', 'kc_tag');
    register_setting('kc-settings-group', 'kc_count');
}
function kc_settings_page()
{
    $kc_post_types = get_post_types(['public' => true]);
    unset($kc_post_types['attachment']);
    $kc_categories = get_categories([
        'taxonomy' => 'category'
    ]);
    $kc_categories["empty"]["name"] = "";
    ?>
    <div class="wrap">
        <h2>Kit Carousel</h2>
        <form method="post" action="options.php">
            <?php settings_fields('kc-settings-group'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Post Type</th>
                    <td>
                        <select name="kc_post_type" id="kc_post_type">
                            <?php foreach ($kc_post_types as $kc_post_type) {
                                echo '<option value="' . $kc_post_type . '" ' . selected(get_option('kc_post_type'), $kc_post_type) . '>' . $kc_post_type . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Category Name</th>
                    <td>
                        <select name="kc_category_name" id="kc_category_name">
                            <?php foreach ($kc_categories as $kc_category) {
                                echo '<option value="' . $kc_category->name . '" ' . selected(get_option('kc_category_name'), $kc_category->name) . '>' . ($kc_category->name ? $kc_category->name : "none") . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Tags</th>
                    <td><input type="text" name="kc_tag" value="<?php echo get_option('kc_tag'); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Count</th>
                    <td><input type="number" name="kc_count" value="<?php echo get_option('kc_count'); ?>" min="1"
                            max="12" /></td>
                </tr>

            </table>
            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
            </p>
        </form>
    </div>
<?php } ?>