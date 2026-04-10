<?php get_header(); ?>

<!-- Category Header Banner -->
<section class="category-header-banner">
    <div class="container text-center">
        <div class="breadcrumb">
            <a href="<?php echo home_url(); ?>">Inicio</a> > <?php single_cat_title(); ?>
        </div>
        <h1 class="category-title"><?php single_cat_title(); ?></h1>
    </div>
</section>

<div class="container py-5">
    <div class="row">
        <!-- Main Content -->
        <main class="col-lg-8">
            <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-md-6 mb-4">
                        <article class="category-card position-relative h-100">
                            <div class="card-img-wrapper position-relative">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium_large', ['class' => 'card-img-top']); ?>
                                    </a>
                                <?php else : ?>
                                    <div class="placeholder-img bg-secondary text-white d-flex align-items-center justify-content-center" style="height: 220px;">
                                        <i class="fas fa-image fa-3x"></i>
                                    </div>
                                <?php endif; ?>
                                <span class="date-overlay"><?php echo get_the_date('d M Y'); ?></span>
                            </div>
                            <div class="card-body">
                                <h4 class="fw-bold mb-2">
                                    <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <div class="author-meta">
                                    <b>Autor:</b> <?php the_author(); ?>
                                </div>
                                <div class="card-text">
                                    <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="read-more">Seguir Leyendo ></a>
                            </div>
                        </article>
                    </div>
                <?php endwhile; ?>
                
                <!-- Pagination -->
                <div class="col-12 text-center mt-4">
                    <?php the_posts_pagination([
                        'prev_text' => '<i class="fas fa-chevron-left"></i>',
                        'next_text' => '<i class="fas fa-chevron-right"></i>',
                    ]); ?>
                </div>

                <?php else : ?>
                    <div class="col-12">
                        <p>No se encontraron entradas en esta categoría.</p>
                    </div>
                <?php endif; ?>
            </div>
        </main>

        <!-- Sidebar -->
        <aside class="col-lg-4 sidebar">
            <!-- Search Widget -->
            <div class="widget">
                <h5 class="widget-title">Buscar</h5>
                <form role="search" method="get" class="search-form d-flex" action="<?php echo home_url('/'); ?>">
                    <input type="search" class="form-control me-2" placeholder="Buscar..." value="" name="s" />
                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                </form>
            </div>

            <!-- Categories Widget -->
            <div class="widget">
                <h5 class="widget-title">Temas de Categoría</h5>
                <div class="tagcloud">
                    <?php
                    $categories = get_categories();
                    foreach ($categories as $category) {
                        echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                    }
                    ?>
                </div>
            </div>

            <!-- Contact CTA Widget -->
            <div class="contact-cta-widget">
                <h4>¿Necesitas ayuda con tu facturación?</h4>
                <p>Contáctanos hoy mismo y descubre cómo podemos ayudarte a optimizar tu negocio.</p>
                <a href="/#contact" class="btn btn-cta">Contactar Ahora</a>
            </div>

            <?php if (is_active_sidebar('blog-sidebar')) : ?>
                <?php dynamic_sidebar('blog-sidebar'); ?>
            <?php endif; ?>
        </aside>
    </div>
</div>

<?php get_footer(); ?>
