<?php
// Footer News Loop Query
$recent_news = new WP_Query([
    'posts_per_page' => 4,
    'post_status'    => 'publish',
]);
?>

<section class="footer-news-loop py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold">Aprende más sobre TipsCloud en nuestro Blog</h3>
        </div>
        <div class="row">
            <?php if ($recent_news->have_posts()) : while ($recent_news->have_posts()) : $recent_news->the_post(); ?>
                <div class="col-md-3 mb-4">
                    <div class="footer-news-card h-100">
                        <div class="card-img-wrapper position-relative">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                                </a>
                            <?php else : ?>
                                <div class="placeholder-img bg-secondary text-white d-flex align-items-center justify-content-center" style="height: 180px;">
                                    <i class="fas fa-image fa-3x"></i>
                                </div>
                            <?php endif; ?>
                            <span class="date-badge"><?php echo get_the_date('M d, Y'); ?></span>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title mb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <p class="card-author mb-1">
                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                    <?php the_author(); ?>
                                </a>
                            </p>
                            <p class="card-meta text-muted small">
                                <?php echo get_the_date('F d, Y'); ?> • 
                                <?php 
                                    $word_count = str_word_count(strip_tags(get_the_content()));
                                    $reading_time = ceil($word_count / 200);
                                    echo $reading_time . ' min read';
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </div>
</section>

<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo">
                <p class="mt-3">Optimiza la gestión de tu empresa con soluciones en la nube de alta seguridad y bajo costo.</p>
            </div>
            <div class="col-md-4">
                <h5>Contacto</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-envelope me-2"></i> info@tipscloudapps.com</li>
                    <li><i class="fas fa-phone me-2"></i> +595 981 000 000</li>
                    <li><i class="fas fa-map-marker-alt me-2"></i> Asunción, Paraguay</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Síguenos</h5>
                <div class="social-links">
                    <a href="#" class="me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="me-3"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="me-3"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <hr class="mt-5 mb-4">
        <div class="text-center">
            <p>&copy; <?php echo date('Y'); ?> TipsCloud. Todos los derechos reservados.</p>
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
