<?php
/**
 * Template Name: Template Registrar
 */
get_header(); ?>

<main class="min-h-screen pt-32 pb-20 bg-slate-50 relative overflow-hidden">
    <!-- Decorative background -->
    <div class="absolute top-0 left-0 w-full h-96 bg-gradient-to-br from-primary-blue to-dark-blue -skew-y-6 transform -translate-y-48 z-0"></div>
    <div class="absolute top-1/2 left-1/4 w-96 h-96 bg-primary-blue/5 rounded-full blur-3xl z-0"></div>
    <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-tips-green/5 rounded-full blur-3xl z-0"></div>

    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
            <!-- Left Side: Content -->
            <div class="lg:w-1/2 text-center lg:text-left text-white lg:text-slate-900">
                <div class="inline-flex items-center px-4 py-2 bg-white/10 lg:bg-blue-50 text-white lg:text-primary-blue rounded-full text-sm font-bold mb-6 backdrop-blur-sm border border-white/20 lg:border-blue-100">
                    <i class="fas fa-rocket mr-2"></i> ÚNETE A LA REVOLUCIÓN CLOUD
                </div>
                <h1 class="text-4xl md:text-6xl font-black mb-8 font-outfit leading-tight lg:text-slate-900 text-white">
                    Registra tu Empresa en <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary-blue to-tips-green">tipsCloud</span>
                </h1>
                <p class="text-xl text-blue-100 lg:text-slate-600 mb-10 leading-relaxed font-medium">
                    Estás a un paso de simplificar la gestión de tu negocio. Completa tus datos y comienza a disfrutar de la potencia de la nube.
                </p>
                
                <div class="space-y-6 hidden lg:block">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-blue-100 text-primary-blue rounded-xl flex items-center justify-center text-xl flex-shrink-0">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 border-none">Acceso Inmediato</h4>
                            <p class="text-slate-500">Configura tu perfil en minutos sin instalaciones.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-emerald-100 text-tips-green rounded-xl flex items-center justify-center text-xl flex-shrink-0">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 border-none">Seguridad Garantizada</h4>
                            <p class="text-slate-500">Tus datos están protegidos con la mejor tecnología.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Registration Form -->
            <div class="lg:w-1/2 w-full max-w-xl mx-auto">
                <div class="bg-white rounded-[2.5rem] p-8 md:p-12 shadow-premium border border-slate-100 relative group overflow-hidden">
                    <!-- Form Header -->
                    <div class="mb-10">
                        <h2 class="text-3xl font-bold text-slate-900 mb-2 font-outfit">Crea tu cuenta</h2>
                        <p class="text-slate-500 font-medium">Ingresa la información básica de contacto</p>
                    </div>

                    <!-- The Original Form Action and Fields -->
                    <form action="https://tipscloudapps.ip-zone.com/ccm/subscribe/index/form/j7se4kvpu0" method="post" accept-charset="utf-8" class="space-y-6">
                        <!-- Hidden required fields from original form -->
                        <input type="hidden" name="successUrl" value="https://tipscloudapps.com/r-gracias.html">
                        <input type="hidden" name="errorUrl" value="https://tipscloudapps.com/r.html">
                        <input type="hidden" name="confirmationUrl" value="https://tipscloudapps.com/r-confirmacion.html">
                        <input type="hidden" name="groups[]" value="2">

                        <div class="space-y-4">
                            <!-- Email -->
                            <div class="relative">
                                <label for="email" class="block text-sm font-bold text-slate-700 mb-2 ml-1">Correo Electrónico *</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <input type="email" name="email" id="email" required
                                           placeholder="ejemplo@empresa.com"
                                           class="w-full pl-12 pr-4 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:bg-white focus:ring-4 focus:ring-primary-blue/5 focus:border-primary-blue transition-all duration-300 outline-none">
                                </div>
                            </div>

                            <!-- Name -->
                            <div class="relative">
                                <label for="name" class="block text-sm font-bold text-slate-700 mb-2 ml-1">Nombre Completo *</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <input type="text" name="name" id="name" required
                                           placeholder="Juan Pérez"
                                           class="w-full pl-12 pr-4 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:bg-white focus:ring-4 focus:ring-primary-blue/5 focus:border-primary-blue transition-all duration-300 outline-none">
                                </div>
                            </div>

                            <!-- Phone (f_1) -->
                            <div class="relative">
                                <label for="f_1" class="block text-sm font-bold text-slate-700 mb-2 ml-1">Teléfono / WhatsApp *</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400">
                                        <i class="fas fa-phone"></i>
                                    </span>
                                    <input type="text" name="f_1" id="f_1" required
                                           placeholder="+595 9xx xxx xxx"
                                           class="w-full pl-12 pr-4 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:bg-white focus:ring-4 focus:ring-primary-blue/5 focus:border-primary-blue transition-all duration-300 outline-none">
                                </div>
                            </div>
                        </div>

                        <div class="pt-4">
                            <button type="submit" 
                                    class="w-full py-4 bg-gradient-to-r from-primary-blue to-dark-blue text-white font-bold rounded-2xl shadow-xl shadow-blue-200 hover:shadow-2xl hover:shadow-blue-300 transition-all duration-300 transform hover:-translate-y-1 active:scale-[0.98]">
                                REGISTRARME AHORA
                            </button>
                        </div>

                        <p class="text-xs text-center text-slate-400 px-4">
                            Al hacer clic, aceptas nuestros términos de servicio y política de privacidad.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
