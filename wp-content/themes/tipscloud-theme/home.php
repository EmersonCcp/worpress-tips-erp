<?php get_header(); ?>

<section class="blog-header">
    <div class="container">
        <h1>Nuestro Blog</h1>
        <p>Noticias, consejos y actualizaciones de TipsCloud</p>
    </div>
</section>

<div class="container py-5">
    <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-md-4">
                <div class="card blog-card">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                    <?php else: ?>
                        <img src="https://via.placeholder.com/400x250/1A4E7A/FFFFFF?text=TipsCloud" class="card-img-top" alt="Default">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn-read-more">Leer más <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        <?php endwhile; else : ?>
            <p>No se encontraron entradas.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
