<?php get_header(); ?>

<!-- Category Header Banner -->
<section class="pt-32 pb-16 bg-slate-100 border-b border-slate-200">
    <div class="container mx-auto px-4 lg:px-8 text-center">
        <nav class="text-sm font-medium text-slate-500 mb-4 flex justify-center items-center space-x-2">
            <a href="<?php echo home_url(); ?>" class="hover:text-primary-blue transition-colors">Inicio</a> 
            <span class="text-slate-300">/</span>
            <span class="text-slate-900"><?php single_cat_title(); ?></span>
        </nav>
        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 font-outfit"><?php single_cat_title(); ?></h1>
    </div>
</section>

<div class="container mx-auto px-4 lg:px-8 py-16">
    <div class="flex flex-col lg:flex-row gap-12">
        <!-- Main Content -->
        <main class="lg:w-8/12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-premium transition-all duration-500 group border border-slate-100 h-full flex flex-col">
                        <div class="relative overflow-hidden aspect-video">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700']); ?>
                                </a>
                            <?php else : ?>
                                <div class="w-full h-full bg-slate-200 flex items-center justify-center text-slate-400">
                                    <i class="fas fa-image text-5xl"></i>
                                </div>
                            <?php endif; ?>
                            <span class="absolute top-4 left-4 bg-primary-blue text-white text-xs font-bold px-4 py-2 rounded-full shadow-lg">
                                <?php echo get_the_date('d M Y'); ?>
                            </span>
                        </div>
                        <div class="p-8 flex-grow flex flex-col">
                            <h4 class="text-xl font-bold text-slate-900 mb-3 font-outfit group-hover:text-primary-blue transition-colors">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h4>
                            <div class="text-sm text-slate-500 mb-6 flex items-center">
                                <i class="fas fa-user-circle mr-2"></i>
                                <b>Autor:</b> <span class="ml-1 text-slate-900"><?php the_author(); ?></span>
                            </div>
                            <div class="text-slate-600 leading-relaxed mb-8 flex-grow">
                                <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="text-primary-blue font-bold inline-flex items-center group/btn">
                                Seguir Leyendo 
                                <i class="fas fa-chevron-right ml-2 group-hover/btn:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
                
                <!-- Pagination -->
                <div class="col-span-full pt-8 flex justify-center">
                    <?php 
                    echo paginate_links([
                        'prev_text' => '<i class="fas fa-arrow-left"></i>',
                        'next_text' => '<i class="fas fa-arrow-right"></i>',
                        'type' => 'list',
                        'class' => 'pagination-tailwind',
                    ]); 
                    ?>
                </div>

                <?php else : ?>
                    <div class="col-span-full py-20 text-center">
                        <p class="text-xl text-slate-400">No se encontraron entradas en esta categoría.</p>
                    </div>
                <?php endif; ?>
            </div>
        </main>

        <!-- Sidebar -->
        <aside class="lg:w-4/12 space-y-12">
            <!-- Search Widget -->
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                <h5 class="text-lg font-bold text-slate-900 mb-6 font-outfit border-b border-slate-100 pb-4">Buscar</h5>
                <form role="search" method="get" class="relative" action="<?php echo home_url('/'); ?>">
                    <input type="search" 
                           class="w-full bg-slate-50 border-none rounded-xl px-5 py-4 focus:ring-2 focus:ring-primary-blue/20 transition-all" 
                           placeholder="Buscar..." 
                           value="" 
                           name="s" />
                    <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-primary-blue hover:text-dark-blue p-2">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>

            <!-- Categories Widget -->
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                <h5 class="text-lg font-bold text-slate-900 mb-6 font-outfit border-b border-slate-100 pb-4">Temas de Categoría</h5>
                <div class="flex flex-wrap gap-2">
                    <?php
                    $categories = get_categories();
                    foreach ($categories as $category) {
                        echo '<a href="' . get_category_link($category->term_id) . '" 
                                 class="px-4 py-2 bg-slate-50 text-slate-600 rounded-lg text-sm font-medium hover:bg-primary-blue hover:text-white transition-all duration-300 border border-slate-100">' . $category->name . '</a>';
                    }
                    ?>
                </div>
            </div>

            <!-- Contact CTA Widget -->
            <div class="bg-primary-blue p-10 rounded-3xl text-white text-center shadow-xl shadow-blue-200 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16 transition-transform duration-700 group-hover:scale-150"></div>
                <h4 class="text-xl font-bold mb-4 relative z-10 font-outfit">¿Necesitas ayuda con tu facturación?</h4>
                <p class="text-blue-100 mb-8 relative z-10">Contáctanos hoy mismo y descubre cómo podemos ayudarte a optimizar tu negocio.</p>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('registrarme'))); ?>" class="inline-block w-full py-4 bg-white text-primary-blue font-bold rounded-xl hover:bg-blue-50 transition-colors relative z-10">
                    Contactar Ahora
                </a>
            </div>

            <?php if (is_active_sidebar('blog-sidebar')) : ?>
                <div class="wp-sidebar-widgets space-y-8">
                    <?php dynamic_sidebar('blog-sidebar'); ?>
                </div>
            <?php endif; ?>
        </aside>
    </div>
</div>

<?php get_footer(); ?>
