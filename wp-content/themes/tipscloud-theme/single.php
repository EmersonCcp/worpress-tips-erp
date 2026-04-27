<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <!-- Post Header -->
    <section class="pt-32 pb-16 bg-slate-900 border-b border-slate-800 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-primary-blue/20 to-dark-blue/20 z-0"></div>
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <nav class="text-sm font-medium text-slate-400 mb-6 flex justify-center items-center space-x-2">
                    <a href="<?php echo home_url(); ?>" class="hover:text-primary-blue transition-colors">Inicio</a> 
                    <span class="text-slate-600">/</span>
                    <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="hover:text-primary-blue transition-colors">Blog</a>
                </nav>
                <h1 class="text-3xl md:text-5xl lg:text-6xl font-extrabold text-white font-outfit leading-tight mb-8"><?php the_title(); ?></h1>
                
                <div class="flex flex-wrap justify-center items-center gap-6 text-slate-300">
                    <div class="flex items-center">
                        <i class="fas fa-calendar-alt mr-2 text-primary-blue"></i>
                        <?php echo get_the_date(); ?>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-user mr-2 text-primary-blue"></i>
                        Por <?php the_author(); ?>
                    </div>
                    <?php if (has_category()) : ?>
                        <div class="flex items-center">
                            <i class="fas fa-folder-open mr-2 text-primary-blue"></i>
                            <?php the_category(', '); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <div class="container mx-auto px-4 lg:px-8 py-16">
        <div class="flex flex-col lg:flex-row gap-16">
            <!-- Post Content -->
            <article class="lg:w-8/12">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="rounded-3xl overflow-hidden shadow-2xl mb-12">
                        <?php the_post_thumbnail('full', ['class' => 'w-full h-auto']); ?>
                    </div>
                <?php endif; ?>

                <div class="prose prose-lg prose-slate max-w-none prose-headings:font-outfit prose-headings:font-bold prose-a:text-primary-blue prose-img:rounded-2xl shadow-none">
                    <?php the_content(); ?>
                </div>

                <!-- Post Footer -->
                <div class="mt-16 pt-8 border-t border-slate-100 flex flex-wrap justify-between items-center gap-4">
                    <div class="flex items-center space-x-4">
                        <span class="font-bold text-slate-900">Compartir:</span>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition-all"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center hover:bg-sky-400 hover:text-white transition-all"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="tags">
                        <?php the_tags('<span class="font-bold text-slate-900 mr-2">Tags:</span> ', ' ', ''); ?>
                    </div>
                </div>

                <!-- Navigation -->
                <nav class="mt-16 flex justify-between border-t border-slate-100 pt-8">
                    <div class="prev">
                        <?php previous_post_link('%link', '<span class="text-xs text-slate-400 uppercase font-bold block mb-1">Anterior</span> <span class="font-bold text-slate-900 hover:text-primary-blue transition-colors">%title</span>'); ?>
                    </div>
                    <div class="next text-right">
                        <?php next_post_link('%link', '<span class="text-xs text-slate-400 uppercase font-bold block mb-1">Siguiente</span> <span class="font-bold text-slate-900 hover:text-primary-blue transition-colors">%title</span>'); ?>
                    </div>
                </nav>
            </article>

            <!-- Sidebar -->
            <aside class="lg:w-4/12">
                <div class="sticky top-28 space-y-12">
                    <!-- Modern Search Widget -->
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                        <h5 class="text-lg font-bold text-slate-900 mb-6 font-outfit border-b border-slate-100 pb-4">Buscar en Blog</h5>
                        <form role="search" method="get" class="relative" action="<?php echo home_url('/'); ?>">
                            <input type="search" class="w-full bg-slate-50 border-none rounded-xl px-5 py-4" placeholder="Buscar..." name="s" />
                            <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-primary-blue p-2">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>

                    <!-- CTA Widget -->
                    <div class="bg-gradient-to-br from-primary-blue to-dark-blue p-10 rounded-3xl text-white shadow-xl">
                        <h4 class="text-2xl font-bold mb-4 font-outfit">Prueba tipsCloud Hoy</h4>
                        <p class="text-blue-100 mb-8 leading-relaxed">Únete a cientos de empresas que ya automatizaron sus procesos.</p>
                        <a href="#" class="btn-main w-full">Registrarme Gratis</a>
                    </div>

                    <?php if (is_active_sidebar('blog-sidebar')) : ?>
                        <?php dynamic_sidebar('blog-sidebar'); ?>
                    <?php endif; ?>
                </div>
            </aside>
        </div>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
