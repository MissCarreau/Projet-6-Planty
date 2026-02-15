<?php
add_action('wp_enqueue_scripts', function () {

    // Style du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Style du thème enfant
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', ['parent-style'], wp_get_theme()->get('Version'));

    register_nav_menus(['primary' => __('Menu principal', 'planty')]);

});

function planty_enqueue_scripts() {
  wp_enqueue_script(
    'planty-nav',
    get_stylesheet_directory_uri() . '/script.js',
    [],
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'planty_enqueue_scripts');


add_filter('wp_nav_menu_items', 'planty_add_admin_link_to_menu', 10, 2);

function planty_add_admin_link_to_menu($items, $args) {

    if (!is_user_logged_in()) {
        return $items;
    }

    $admin_item = '<li class="menu-item menu-item-admin">'
                . '<a href="' . esc_url(admin_url()) . '">Admin</a>'
                . '</li>';

    $pattern = '/(<li[^>]*>\s*<a[^>]*>\s*Nous\s*rencontrer\s*<\/a>\s*<\/li>)/i';

    if (preg_match($pattern, $items)) {
        $items = preg_replace($pattern, '$1' . $admin_item, $items, 1);
    } 
    return $items;
}
?>