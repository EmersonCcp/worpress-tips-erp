<?php
// Footer News Loop Query
$recent_news = new WP_Query([
    'posts_per_page' => 4,
    'post_status'    => 'publish',
]);
?>

<section class="py-20 bg-slate-50 border-t border-slate-100">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-16">
            <h3 class="text-3xl font-extrabold text-slate-900 font-outfit">Aprende más sobre TipsCloud en nuestro Blog</h3>
            <div class="w-20 h-1 bg-primary-blue mx-auto mt-4 rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php if ($recent_news->have_posts()) : while ($recent_news->have_posts()) : $recent_news->the_post(); ?>
                <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-premium border border-slate-100 transition-all duration-300 group">
                    <div class="relative overflow-hidden aspect-video">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', ['class' => 'w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500']); ?>
                            </a>
                        <?php else : ?>
                            <div class="w-full h-full bg-slate-100 flex items-center justify-center text-slate-300">
                                <i class="fas fa-image text-3xl"></i>
                            </div>
                        <?php endif; ?>
                        <span class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-primary-blue text-[10px] font-bold px-3 py-1 rounded-full shadow-sm">
                            <?php echo get_the_date('M d, Y'); ?>
                        </span>
                    </div>
                    <div class="p-6">
                        <h5 class="text-lg font-bold text-slate-900 mb-3 font-outfit group-hover:text-primary-blue transition-colors leading-tight">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h5>
                        <div class="flex items-center justify-between mt-6 pt-4 border-t border-slate-50">
                            <div class="flex items-center space-x-2">
                                <span class="text-xs font-bold text-slate-700">
                                    <?php the_author(); ?>
                                </span>
                            </div>
                            <span class="text-[10px] text-slate-400 font-medium">
                                <?php 
                                    $word_count = str_word_count(strip_tags(get_the_content()));
                                    $reading_time = ceil($word_count / 200);
                                    echo $reading_time . ' min read';
                                ?>
                            </span>
                        </div>
                    </div>
                </article>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </div>
</section>

<footer class="bg-dark-footer text-slate-400 pt-20 pb-10">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            <!-- Logo & About -->
            <div class="col-span-1 lg:col-span-1">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block mb-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" 
                         alt="TipsCloud Logo" 
                         class="h-10">
                </a>
                <p class="text-slate-500 leading-relaxed mb-8">
                    Soluciones integrales en la nube para el control total de sus operaciones comerciales. Liderando la transformación digital para PYMEs.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-primary-blue hover:text-white transition-all duration-300">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-primary-blue hover:text-white transition-all duration-300">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-primary-blue hover:text-white transition-all duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <!-- Links 1 -->
            <div>
                <h4 class="text-white font-bold text-lg mb-6 font-outfit">Nuestra Empresa</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="hover:text-primary-blue transition-colors">Sobre Nosotros</a></li>
                    <li><a href="#" class="hover:text-primary-blue transition-colors">Características</a></li>
                    <li><a href="#" class="hover:text-primary-blue transition-colors">Planes y Precios</a></li>
                    <li><a href="#" class="hover:text-primary-blue transition-colors">Casos de Éxito</a></li>
                </ul>
            </div>

            <!-- Links 2 -->
            <div>
                <h4 class="text-white font-bold text-lg mb-6 font-outfit">Soporte</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="hover:text-primary-blue transition-colors">Centro de Ayuda</a></li>
                    <li><a href="#" class="hover:text-primary-blue transition-colors">Documentación API</a></li>
                    <li><a href="#" class="hover:text-primary-blue transition-colors">Estado del Sistema</a></li>
                    <li><a href="#" class="hover:text-primary-blue transition-colors">Contacto</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-white font-bold text-lg mb-6 font-outfit">Contáctanos</h4>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1.5 mr-4 text-primary-blue"></i>
                        <span>Asunción, Paraguay</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone mr-4 text-primary-blue"></i>
                        <span>+595 981 123 456</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope mr-4 text-primary-blue"></i>
                        <span>info@tipscloudapps.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-sm">
            <p>&copy; <?php echo date('Y'); ?> TipsCloud. Todos los derechos reservados.</p>
            <div class="flex space-x-6">
                <a href="#" class="hover:text-white transition-colors">Privacidad</a>
                <a href="#" class="hover:text-white transition-colors">Términos</a>
                <a href="#" class="hover:text-white transition-colors">Cookies</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.main-navbar');
    
    function updateNavbar() {
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }
    }

    window.addEventListener('scroll', updateNavbar);
    updateNavbar(); // Initial check in case page is already scrolled
});
</script>

</body>
</html>
