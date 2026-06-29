<?php
/**
 * Template Name: Template Prueba
 */
get_header(); ?>

<main class="min-h-screen pt-32 pb-20 bg-slate-50 relative overflow-hidden">
    <!-- Fondo decorativo -->
    <div class="absolute top-0 left-0 w-full h-96 bg-gradient-to-br from-primary-blue to-dark-blue -skew-y-6 transform -translate-y-48 z-0"></div>
    <div class="absolute top-1/2 left-1/4 w-96 h-96 bg-primary-blue/5 rounded-full blur-3xl z-0"></div>

    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="max-w-2xl mx-auto bg-white rounded-[2.5rem] p-8 md:p-12 shadow-premium border border-slate-100 text-center mt-12">
            <div class="w-20 h-20 bg-emerald-100 text-tips-green rounded-full flex items-center justify-center text-4xl mx-auto mb-6">
                <i class="fas fa-check-circle"></i>
            </div>
            
            <h1 class="text-3xl md:text-4xl font-black mb-6 font-outfit text-slate-900 leading-tight">
                ¡Página de Prueba Exitosa!
            </h1>
            
            <p class="text-slate-600 mb-8 leading-relaxed font-medium">
                Esta es una plantilla de prueba creada para validar el flujo completo de despliegue automático desde Git a tu servidor de producción. Si estás viendo este diseño, significa que la sincronización funciona de maravilla.
            </p>
            
            <div class="inline-flex items-center px-4 py-2 bg-blue-50 text-primary-blue rounded-full text-sm font-bold border border-blue-100">
                <i class="fas fa-sync-alt fa-spin mr-2"></i> Git Deployer: Sincronizado
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
