<?php get_header(); ?>

<!-- Blog Home Header -->
<section class="pt-32 pb-16 bg-slate-900 overflow-hidden relative">
    <div class="absolute inset-0 bg-primary-blue/10 backdrop-blur-3xl"></div>
    <div class="container mx-auto px-4 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold text-white font-outfit mb-6">Nuestro Blog</h1>
        <p class="text-xl text-blue-100 max-w-2xl mx-auto">Noticias, consejos y actualizaciones de tipsCloud para potenciar tu negocio.</p>
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
                            <h2 class="text-xl font-bold text-slate-900 mb-3 font-outfit group-hover:text-primary-blue transition-colors">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="text-sm text-slate-500 mb-6 flex items-center">
                                <i class="fas fa-user-circle mr-2"></i>
                                <b>Autor:</b> <span class="ml-1 text-slate-900"><?php the_author(); ?></span>
                            </div>
                            <div class="text-slate-600 mb-8 flex-grow">
                                <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="text-primary-blue font-bold inline-flex items-center group/btn uppercase text-sm tracking-widest">
                                Leer Más 
                                <i class="fas fa-arrow-right ml-2 group-hover/btn:translate-x-2 transition-transform"></i>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
                
                <!-- Pagination -->
                <div class="col-span-full pt-12 flex justify-center">
                    <?php 
                    echo paginate_links([
                        'prev_text' => '<i class="fas fa-chevron-left"></i>',
                        'next_text' => '<i class="fas fa-chevron-right"></i>',
                        'type' => 'list',
                        'class' => 'pagination-list flex space-x-2',
                    ]); 
                    ?>
                </div>

                <?php else : ?>
                    <div class="col-span-full py-20 text-center">
                        <p class="text-xl text-slate-400">No hay entradas publicadas aún.</p>
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
                    <input type="search" class="w-full bg-slate-50 border-none rounded-xl px-5 py-4 focus:ring-2 focus:ring-primary-blue/20 transition-all outline-none" placeholder="Buscar..." name="s" />
                    <button type="submit" class="absolute right-4 top-1/2 -translate-y-1/2 text-primary-blue"><i class="fas fa-search"></i></button>
                </form>
            </div>

            <!-- Categories -->
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                <h5 class="text-lg font-bold text-slate-900 mb-6 font-outfit border-b border-slate-100 pb-4">Categorías</h5>
                <ul class="space-y-3">
                    <?php 
                    $cats = get_categories();
                    foreach ($cats as $cat) : ?>
                        <li>
                            <a href="<?php echo get_category_link($cat->term_id); ?>" class="flex justify-between items-center text-slate-600 hover:text-primary-blue transition-colors group">
                                <span><?php echo $cat->name; ?></span>
                                <span class="bg-slate-100 text-slate-400 text-xs px-2 py-1 rounded group-hover:bg-primary-blue group-hover:text-white transition-colors"><?php echo $cat->count; ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Promo -->
            <div class="bg-tips-green p-10 rounded-3xl text-white text-center shadow-xl shadow-emerald-100">
                <h4 class="text-2xl font-bold mb-4 font-outfit">Súmate a la Nube</h4>
                <p class="text-emerald-50 mb-8">El sistema de facturación más ágil del mercado.</p>
                <a href="#" class="inline-block w-full py-4 bg-white text-tips-green font-bold rounded-xl hover:bg-emerald-50 transition-colors">Empezar Ahora</a>
            </div>
        </aside>
    </div>
</div>

<?php get_footer(); ?>
