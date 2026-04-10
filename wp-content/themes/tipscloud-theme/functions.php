<?php
function tipscloud_enqueue_styles() {
    // Bootstrap CSS from CDN
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    
    // Theme CSS
    wp_enqueue_style('tipscloud-style', get_stylesheet_uri());
    
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap');
    
    // FontAwesome
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');

    // jQuery (WordPress core)
    wp_enqueue_script('jquery');

    // EasyTabs JS
    wp_enqueue_script('easytabs', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.easytabs/3.2.0/jquery.easytabs.min.js', array('jquery'), null, true);
    
    // Initialize EasyTabs
    wp_add_inline_script('easytabs', "
        jQuery(document).ready(function($) {
            $('#tab-features').easytabs();
        });
    ");

    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'tipscloud_enqueue_styles');

// Register Menus
function tipscloud_register_menus() {
    register_nav_menus(array(
        'header-menu' => __('Main Menu'),
    ));
}
add_action('init', 'tipscloud_register_menus');

// Filter to add 'nav-item' class to <li>
function tipscloud_add_li_class($classes, $item, $args) {
    if (isset($args->theme_location) && $args->theme_location == 'header-menu') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'tipscloud_add_li_class', 10, 3);

// Filter to add 'nav-link' class to <a>
function tipscloud_add_a_class($atts, $item, $args) {
    if (isset($args->theme_location) && $args->theme_location == 'header-menu') {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'tipscloud_add_a_class', 10, 3);

// Theme support
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

// Register Sidebars
function tipscloud_widgets_init() {
    register_sidebar(array(
        'name'          => __('Blog Sidebar'),
        'id'            => 'blog-sidebar',
        'description'   => __('Sidebar for category and archive pages.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ));
}
add_action('widgets_init', 'tipscloud_widgets_init');

// Dynamically add categories to the "Blog" menu item
function tipscloud_add_categories_to_blog_menu($items, $menu, $args) {
    // Only target the frontend and specific menu if needed
    if (is_admin()) return $items;

    $blog_item_id = 0;
    foreach ($items as $item) {
        if (strtoupper(trim($item->title)) == 'BLOG') {
            $blog_item_id = $item->ID;
            break;
        }
    }

    if ($blog_item_id) {
        $categories = get_categories(array('hide_empty' => false));
        $new_items = array();
        $index = 1;
        foreach ($categories as $category) {
            $cat_item = new stdClass();
            $cat_item->ID = 10000 + $category->term_id;
            $cat_item->db_id = 10000 + $category->term_id;
            $cat_item->title = $category->name;
            $cat_item->url = get_category_link($category->term_id);
            $cat_item->menu_item_parent = $blog_item_id;
            $cat_item->classes = array('menu-item', 'menu-item-type-taxonomy', 'menu-item-object-category', 'nav-item');
            $cat_item->type = 'taxonomy';
            $cat_item->object = 'category';
            $cat_item->object_id = $category->term_id;
            $cat_item->menu_order = $index++;
            $cat_item->target = '';
            $cat_item->attr_title = '';
            $cat_item->description = '';
            $cat_item->xfn = '';
            $cat_item->status = 'publish';
            $new_items[] = $cat_item;
        }
        $items = array_merge($items, $new_items);
    }
    return $items;
}
add_filter('wp_get_nav_menu_items', 'tipscloud_add_categories_to_blog_menu', 20, 3);
?>
