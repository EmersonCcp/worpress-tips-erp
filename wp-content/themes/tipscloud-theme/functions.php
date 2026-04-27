<?php
function tipscloud_enqueue_styles() {
    // Tailwind CSS (Compiled)
    wp_enqueue_style('tipscloud-tailwind', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0');
    
    // Theme CSS (Metadata mostly)
    wp_enqueue_style('tipscloud-style', get_stylesheet_uri());
    
    // Google Fonts - Using modern Outfit and Inter fonts for premium feel
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@400;600;700&display=swap');
    
    // FontAwesome
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');

    // jQuery (WordPress core) - Keeping for potential plugin compatibility
    wp_enqueue_script('jquery');
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
        $classes[] = 'nav-item relative group';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'tipscloud_add_li_class', 10, 3);

// Filter to add 'nav-link' class and fix anchor links
function tipscloud_add_a_class($atts, $item, $args) {
    if (isset($args->theme_location) && $args->theme_location == 'header-menu') {
        $atts['class'] = 'nav-link px-4 py-2 text-sm font-medium uppercase tracking-wider transition-all duration-300 hover:text-dark-blue';
        
        // Fix anchor links (e.g. #inicio) when not on the front page
        if (!is_front_page() && !empty($item->url) && $item->url[0] === '#') {
            $atts['href'] = home_url('/') . $item->url;
        }
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

// Change site title programmatically
function tipscloud_custom_site_title($title) {
    return 'tipsCloud - Sistema de Gestión Empresarial en la Nube';
}
add_filter('pre_get_document_title', 'tipscloud_custom_site_title', 10);
?>
