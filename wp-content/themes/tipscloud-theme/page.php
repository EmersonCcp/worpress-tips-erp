<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <!-- Page Header (Hero Section) -->
    <section class="pt-32 pb-20 bg-slate-50 border-b border-slate-200 relative overflow-hidden">
        <!-- Background accents -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-primary-blue/5 rounded-full -mr-32 -mt-32"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-tips-green/5 rounded-full -ml-48 -mb-48"></div>
        
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <nav class="text-sm font-bold text-primary-blue/60 uppercase tracking-widest mb-6 flex justify-center items-center space-x-2">
                    <a href="<?php echo home_url(); ?>" class="hover:text-primary-blue transition-colors">Inicio</a> 
                    <span class="text-slate-300">/</span>
                    <span class="text-slate-900"><?php the_title(); ?></span>
                </nav>
                <h1 class="text-4xl md:text-6xl font-black text-slate-900 font-outfit leading-tight mb-4"><?php the_title(); ?></h1>
                <div class="w-20 h-1.5 bg-primary-blue mx-auto rounded-full"></div>
            </div>
        </div>
    </section>

    <!-- Main Content Area -->
    <main class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <article class="prose prose-lg prose-slate max-w-none">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="mb-12 rounded-3xl overflow-hidden shadow-premium">
                            <?php the_post_thumbnail('full', ['class' => 'w-full h-auto']); ?>
                        </div>
                    <?php endif; ?>

                    <div class="content-body text-slate-600 leading-relaxed space-y-6">
                        <?php the_content(); ?>
                    </div>
                </article>
            </div>
        </div>
    </main>

    <!-- Bottom CTA (Optional, can be removed if preferred) -->
    <section class="py-20 bg-slate-50 border-t border-slate-100">
        <div class="container mx-auto px-4 lg:px-8 text-center">
            <div class="max-w-2xl mx-auto">
                <h3 class="text-2xl font-bold text-slate-900 mb-6 font-outfit">¿Listo para llevar tu negocio al siguiente nivel?</h3>
                <p class="text-slate-600 mb-10">Únete a cientos de empresas que ya confían en tipsCloud para su gestión diaria.</p>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('registrarme'))); ?>" class="btn-main shadow-xl">
                    Comenzar Ahora Gratis
                </a>
            </div>
        </div>
    </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
