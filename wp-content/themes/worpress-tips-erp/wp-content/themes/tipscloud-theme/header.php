<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-slate-50 text-slate-900 selection:bg-primary-blue selection:text-white'); ?>>

<?php
    // Determine if the header should be transparent initially
    $is_transparent_page = is_front_page() || is_page_template('template-registrar.php');
?>

<header x-data="{ scrolled: false, mobileMenuOpen: false }" 
        @scroll.window="scrolled = (window.pageYOffset > 50) ? true : false"
        :class="(scrolled || <?php echo $is_transparent_page ? 'false' : 'true'; ?>) ? 'bg-slate-900/95 backdrop-blur-md shadow-lg py-3' : 'bg-transparent py-6'"
        class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <nav class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between">
            <a class="flex-shrink-0" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" 
                     alt="TipsCloud Logo" 
                     class="transition-all duration-300"
                     :class="scrolled ? 'h-8' : 'h-10'">
            </a>
            
            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center space-x-2">
                <?php
                // Get dynamic link to registration page
                $registrar_url = '#';
                $page_registrar = get_page_by_path('registrarme');
                if ($page_registrar) {
                    $registrar_url = get_permalink($page_registrar->ID);
                }

                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container'      => false,
                    'menu_class'     => 'flex items-center space-x-1',
                    'fallback_cb'    => '__return_false',
                    'depth'          => 2,
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s <li class="ml-4"><a class="bg-primary-blue text-white px-6 py-2.5 rounded-full font-semibold shadow-md hover:bg-dark-blue hover:shadow-lg transition-all duration-300" href="' . esc_url($registrar_url) . '">Registrarme</a></li></ul>',
                ));
                ?>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-white focus:outline-none">
                <svg x-show="!mobileMenuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                <svg x-show="mobileMenuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <!-- Mobile Menu Panel -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             class="lg:hidden mt-4 bg-white rounded-2xl shadow-xl border border-slate-100 p-6">
             <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container'      => false,
                    'menu_class'     => 'flex flex-col space-y-4',
                    'fallback_cb'    => '__return_false',
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s <li class="pt-4"><a class="block text-center bg-primary-blue text-white px-6 py-3 rounded-xl font-semibold" href="' . esc_url($registrar_url) . '">Registrarme</a></li></ul>',
                ));
             ?>
        </div>
    </nav>
</header>
