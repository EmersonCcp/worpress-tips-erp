<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="blog-header">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <div class="post-meta text-white-50">
                Por <?php the_author(); ?> | <?php echo get_the_date(); ?>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="mb-4">
                        <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid rounded shadow" alt="<?php the_title(); ?>">
                    </div>
                <?php endif; ?>
                
                <div class="post-content">
                    <?php the_content(); ?>
                </div>

                <div class="mt-5 pt-4 border-top">
                    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="btn btn-outline-primary">
                        <i class="fas fa-arrow-left me-2"></i> Volver al Blog
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
