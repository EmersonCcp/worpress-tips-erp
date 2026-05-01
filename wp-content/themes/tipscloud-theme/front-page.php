<?php get_header(); ?>

<!-- Hero Section -->
<section id="inicio" class="relative min-h-[700px] flex items-center pt-32 pb-20 overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute inset-0 bg-gradient-to-br from-primary-blue to-dark-blue z-0"></div>
    <div class="absolute inset-0 opacity-20 z-0" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-bg.jpg'); background-size: cover; background-position: center;"></div>
    
    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-7/12 text-center lg:text-left">
                <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight mb-6 font-outfit">
                    Gestione su negocio desde <span class="text-tips-green">cualquier parte del mundo</span>
                </h1>
                <p class="text-xl text-blue-50 mb-10 leading-relaxed max-w-2xl mx-auto lg:mx-0">
Sistema de Gestión inteligente en la Nube

                </p>
                <div class="flex flex-wrap justify-center lg:justify-start gap-4">
                    <!-- <a href="#" class="btn-main">Saber más</a> -->
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('registrarme'))); ?>" class="inline-flex items-center justify-center px-8 py-3 border-2 border-white/30 text-white font-semibold rounded-lg hover:bg-white/10 transition-all duration-300">
                        Saber más
                    </a>
                </div>
            </div>
            <div class="lg:w-5/12">
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-tips-green to-primary-blue rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/devices.png" 
                         alt="Devices" 
                         class="relative w-full h-auto drop-shadow-2xl transform transition duration-500 hover:scale-105">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Advisory Section -->
<section class="py-12 bg-primary-blue">
    <div class="container mx-auto px-4 lg:px-8 text-center text-white">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold mb-8 leading-tight font-outfit">
                Te asesoramos sin costo con sugerencias para poner en orden tu negocio en 30 días o menos.
            </h2>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('registrarme'))); ?>" class="inline-flex items-center justify-center px-10 py-4 bg-tips-green hover:bg-emerald-600 text-white font-bold rounded-full shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <i class="fas fa-cloud mr-3"></i> RECIBIR SUGERENCIAS
            </a>
        </div>
    </div>
</section>

<!-- Intelligent System Section -->
<section id="acerca-de" class="py-24 bg-white relative overflow-hidden">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6 font-outfit">
                Un sistema inteligente, sencillo y con actualizaciones constantes
            </h2>
            <div class="w-20 h-1.5 bg-primary-blue mx-auto mb-8 rounded-full"></div>
            <p class="text-lg text-slate-600">
                Controle su negocio de manera eficiente y aumente sus ganancias
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- Feature 1 -->
            <div class="group p-8 rounded-3xl border border-slate-100 bg-slate-50/50 hover:bg-white hover:shadow-premium transition-all duration-500">
                <div class="w-16 h-16 bg-blue-100 text-primary-blue rounded-2xl flex items-center justify-center text-3xl mb-8 group-hover:bg-primary-blue group-hover:text-white transition-colors duration-500">
                    <i class="fas fa-desktop"></i>
                </div>
                <h4 class="text-xl font-bold text-slate-900 mb-4 font-outfit">Desde cualquier lugar</h4>
                <p class="text-slate-600 leading-relaxed">
                    Conéctese a Internet y listo, sin demoras en la instalación ni procesos complicados, utilizando el navegador web desde cualquier equipo, al instante.
                </p>
            </div>
            
            <!-- Feature 2 -->
            <div class="group p-8 rounded-3xl border border-slate-100 bg-slate-50/50 hover:bg-white hover:shadow-premium transition-all duration-500 md:translate-y-6">
                <div class="w-16 h-16 bg-emerald-100 text-tips-green rounded-2xl flex items-center justify-center text-3xl mb-8 group-hover:bg-tips-green group-hover:text-white transition-colors duration-500">
                    <i class="fas fa-window-maximize"></i>
                </div>
                <h4 class="text-xl font-bold text-slate-900 mb-4 font-outfit">Seguridad y el Control</h4>
                <p class="text-slate-600 leading-relaxed">
                    Controle quién accede a los datos confidenciales y los procedimientos importantes configurando distintos privilegios para cada usuario.
                </p>
            </div>
            
            <!-- Feature 3 -->
            <div class="group p-8 rounded-3xl border border-slate-100 bg-slate-50/50 hover:bg-white hover:shadow-premium transition-all duration-500">
                <div class="w-16 h-16 bg-amber-100 text-amber-600 rounded-2xl flex items-center justify-center text-3xl mb-8 group-hover:bg-amber-600 group-hover:text-white transition-colors duration-500">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <h4 class="text-xl font-bold text-slate-900 mb-4 font-outfit">Bajo Costo</h4>
                <p class="text-slate-600 leading-relaxed">
                    Ahorre dinero gracias a la baja inversión mensual, sin gastar en infraestructura física ni servidores y obtenga todos los beneficios de un sistema repleto de funcionalidades.
                </p>
            </div>
        </div>
        
        <div class="mt-20 text-center text-primary-blue font-medium italic">
            <span class="inline-flex items-center px-6 py-2 bg-blue-50 rounded-full border border-blue-100">
                <i class="fas fa-star mr-2"></i> Actualizaciones gratuitas para mantenerte al día y con mejores prestaciones!
            </span>
        </div>
    </div>
</section>

<!-- Tranquilidad y Seguridad Section -->
<section class="py-24 bg-gradient-to-br from-primary-blue to-dark-blue text-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-6/12">
                <h2 class="text-sm font-bold tracking-widest text-blue-200 uppercase mb-4">Tranquilidad y Seguridad</h2>
                <h3 class="text-4xl md:text-5xl font-bold mb-8 font-outfit">Saber que todo marcha sobre ruedas no tiene precio</h3>
                <p class="text-lg text-blue-50 mb-10 leading-relaxed">
                    Nos preocupamos por tu tranquilidad y la prosperidad de tu negocio, brindándote el mejor servicio y apoyo.

                </p>
                                <p class="text-lg text-blue-50 mb-10 leading-relaxed">
                                    tipsCloud está aprobado por empresas reales iguales a la tuya, cuyos propietarios hoy tienen la oportunidad de ocuparse de otras cosas que traen más significado a sus vidas.

                                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('registrarme'))); ?>" class="px-8 py-3 border-2 border-white/30 rounded-lg font-bold hover:bg-white/10 transition-all duration-300 uppercase text-sm tracking-wider">
                        SABER MÁS
                    </a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('registrarme'))); ?>" class="px-8 py-3 bg-tips-green text-white rounded-lg font-bold shadow-xl hover:bg-emerald-600 transition-all duration-300 uppercase text-sm tracking-wider flex items-center">
                        <i class="fas fa-cloud mr-2"></i> RECIBIR SUGERENCIA
                    </a>
                </div>
            </div>
           <div class="lg:w-6/12">
    <div class="rounded-3xl overflow-hidden shadow-2xl skew-y-3 transform hover:skew-y-0 transition-transform duration-700">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tranquilidad-seguridad.jpg" 
             alt="Tranquilidad y Seguridad" 
             class="w-full h-[500px] object-cover">
    </div>
</div>
        </div>
    </div>
</section>

<!-- La solución ideal para cualquier negocio Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center max-w-4xl mx-auto mb-16">
            <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6 font-outfit">
                La solución ideal para cualquier negocio
            </h2>
            <p class="text-lg text-slate-600">
                Empresas pequeñas o medianas como librerías, boutiques, mini-mercados, ferreterías, farmacias o auto servicios.
            </p>
        </div>

        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-6/12">
                <h3 class="text-2xl font-bold text-slate-900 mb-6 font-outfit">Altamente configurable</h3>
                <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                    Con una muy fácil especificación de opciones tipsCloud te ayudará a optimizar y mejorar todos los procesos de tu negocio, descartando aquellos procedimientos o actividades que no son útiles o hacen perder tiempo, dejando a la vista sólo las funciones necesarias de acuerdo a tus necesidades.
                </p>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('registrarme'))); ?>" class="text-primary-blue font-bold text-lg hover:underline inline-flex items-center group">
                    Regístrate ahora y pruébalo, sin compromiso
                    <i class="fas fa-chevron-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
            <div class="lg:w-6/12">
                <div class="rounded-3xl overflow-hidden shadow-premium">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/atencion-farmacia.jpg" 
                         alt="Solución ideal para cualquier negocio" 
                         class="w-full h-auto">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Adaptado a los controles vigentes Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-6/12 order-2 lg:order-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/venta-electronicos.jpg" alt="Adaptado a los controles vigentes" class="w-full h-auto rounded-3xl shadow-premium">
            </div>
            <div class="lg:w-6/12 order-1 lg:order-2">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-8 font-outfit">Adaptado a los controles vigentes</h2>
                <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                    Confeccionar facturas, recibos, notas de remisiones y documentos son fáciles y rápidos. 
                    En poco tiempo notarás un cambio significativo en los resultados, apreciarás cómo los recursos de tu empresa se auto-ogranizan para producir más y mejor, trabajando coordinadamente para avanzar y obtener más beneficios.
                </p>
                <a href="#" class="text-primary-blue font-bold text-lg hover:underline inline-flex items-center group">
                    Conozca las características de tipsCloud 
                    <i class="fas fa-chevron-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Accedé a tipsCloud desde cualquier equipo Section -->
<section class="py-24 bg-slate-50">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-6/12">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-8 font-outfit leading-tight">Accedé a tipsCloud desde cualquier equipo conectado a Internet</h2>
                <p class="text-lg text-slate-600 mb-10 leading-relaxed">
Gracias a la facilidad de la movilidad entérate al instante de todo el funcionamiento de tu negocio, visualizá los valores de ventas diarias así como los detalles de los mismos, los cobros que se realizaron, las cuentas pagadas y todos los demás movimientos confirmados y pendientes realizados por los usuarios del sistema.                </p>
                <a href="#" class="inline-flex items-center text-primary-blue font-bold text-lg hover:text-dark-blue">
                    Registrá tu Empresa en tipsCloud ahora <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            <div class="lg:w-6/12">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/showcase.png" alt="Acceso desde cualquier equipo" class="w-full h-auto drop-shadow-xl">
            </div>
        </div>
    </div>
</section>

<!-- Descubre tipsCloud Tabs Section (ALpine.js) -->
<section id="features" class="py-24 bg-dark-blue relative overflow-hidden" x-data="{ activeTab: 'tab-feature-1' }">
    <!-- Decor Elements -->
    <div class="absolute top-0 right-0 w-64 h-64 bg-primary-blue opacity-10 rounded-full -mr-32 -mt-32"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-tips-green opacity-5 rounded-full -ml-48 -mb-48"></div>

    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 font-outfit">Descubre TipsCloud</h2>
            <div class="w-20 h-1.5 bg-tips-green mx-auto mb-8 rounded-full"></div>
            <p class="text-lg text-blue-100">¡tipsCloud es más que un Sistema! Es un funcionario fiel que te ayudará a producir y vender más.</p>
        </div>

        <div class="max-w-6xl mx-auto">
            <!-- Tabs Navigation -->
            <div class="flex flex-wrap justify-center gap-4 md:gap-8 mb-12">
                <button @click="activeTab = 'tab-feature-1'" 
                        :class="activeTab === 'tab-feature-1' ? 'bg-primary-blue text-white shadow-lg scale-105' : 'bg-white/5 text-blue-200 hover:bg-white/10'"
                        class="px-8 py-5 rounded-2xl flex flex-col items-center transition-all duration-300 w-32 md:w-44 group">
                    <i class="fas fa-layer-group text-3xl mb-3"></i>
                    <span class="font-bold text-sm">Módulos</span>
                </button>
                <button @click="activeTab = 'tab-feature-2'" 
                        :class="activeTab === 'tab-feature-2' ? 'bg-primary-blue text-white shadow-lg scale-105' : 'bg-white/5 text-blue-200 hover:bg-white/10'"
                        class="px-8 py-5 rounded-2xl flex flex-col items-center transition-all duration-300 w-32 md:w-44 group">
                    <i class="fas fa-sync-alt text-3xl mb-3"></i>
                    <span class="font-bold text-sm">Integración</span>
                </button>
                <button @click="activeTab = 'tab-feature-3'" 
                        :class="activeTab === 'tab-feature-3' ? 'bg-primary-blue text-white shadow-lg scale-105' : 'bg-white/5 text-blue-200 hover:bg-white/10'"
                        class="px-8 py-5 rounded-2xl flex flex-col items-center transition-all duration-300 w-32 md:w-44 group">
                    <i class="fas fa-desktop text-3xl mb-3"></i>
                    <span class="font-bold text-sm">Visualización</span>
                </button>
                <button @click="activeTab = 'tab-feature-4'" 
                        :class="activeTab === 'tab-feature-4' ? 'bg-primary-blue text-white shadow-lg scale-105' : 'bg-white/5 text-blue-200 hover:bg-white/10'"
                        class="px-8 py-5 rounded-2xl flex flex-col items-center transition-all duration-300 w-32 md:w-44 group">
                    <i class="fas fa-graduation-cap text-3xl mb-3"></i>
                    <span class="font-bold text-sm">Capacitación</span>
                </button>
                <button @click="activeTab = 'tab-feature-5'" 
                        :class="activeTab === 'tab-feature-5' ? 'bg-primary-blue text-white shadow-lg scale-105' : 'bg-white/5 text-blue-200 hover:bg-white/10'"
                        class="px-8 py-5 rounded-2xl flex flex-col items-center transition-all duration-300 w-32 md:w-44 group">
                    <i class="fas fa-rocket text-3xl mb-3"></i>
                    <span class="font-bold text-sm">Actualizaciones</span>
                </button>
            </div>

            <!-- Tabs Content Container -->
            <div class="bg-white rounded-[2rem] p-8 md:p-16 shadow-2xl overflow-hidden min-h-[500px] flex items-center">
                
                <!-- Tab 1 -->
                <div x-show="activeTab === 'tab-feature-1'" 
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 translate-x-12"
                     x-transition:enter-end="opacity-100 translate-x-0"
                     class="w-full">
                    <div class="flex flex-col lg:flex-row items-center gap-12">
                        <div class="lg:w-1/2">
                            <h4 class="text-3xl font-bold text-primary-blue mb-6 font-outfit">tipsCloud es inteligente, dinámico y flexible</h4>
                            <p class="text-lg text-slate-700 mb-6 leading-relaxed">tipsCloud es una solución destinada a las pequeñas, medianas y grandes empresas que posee una variedad de características tales como la gestión del inventario de productos gracias a sus procesos de Compras, Ventas, Presupuestos, permitiendo la gestión de múltiples depósitos, múltiples monedas y múltiples sucursales (opcional).</p>
                            <p class="text-lg text-slate-700 leading-relaxed">Además de los procesos para control de inventario también se pueden llevar el control financiero y administrativo de la Empresa a traves de Ingresos y Egresos de Efectivo (Cajas) y Cuentas Corrientes (Banco). Estos módulos trabajan de forma independiente, pero también pueden están integrados al momento de la facturacion de compras y ventas así como también de cobros y pagos.</p>
                        </div>
                        <div class="lg:w-1/2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features/feature1.png" alt="Módulos" class="w-full h-auto rounded-2xl shadow-premium">
                        </div>
                    </div>
                </div>

                <!-- Tab 2 (Integración) -->
                <div x-show="activeTab === 'tab-feature-2'" 
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 translate-x-12"
                     x-transition:enter-end="opacity-100 translate-x-0"
                     class="w-full">
                    <div class="flex flex-col lg:flex-row items-center gap-12">
                        <div class="lg:w-1/2">
                            <h4 class="text-3xl font-bold text-primary-blue mb-8 font-outfit">tipsCloud hace más eficiente tu día a día.</h4>
                            <div class="space-y-6">
                                <div class="flex gap-4">
                                    <div class="flex-shrink-0 w-12 h-12 bg-blue-100 text-primary-blue rounded-xl flex items-center justify-center text-xl">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-bold text-slate-900 mb-1">Integración de Calendario</h5>
                                        <p class="text-slate-600">El sistema organiza la agenda de acuerdo a las fechas de vencimientos de cuentas a cobrar o pagar, cumpleaños, fechas festivas, etc. Utiliza la agenda privada para gerenciar tareas diarias.</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div class="flex-shrink-0 w-12 h-12 bg-emerald-100 text-tips-green rounded-xl flex items-center justify-center text-xl">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-bold text-slate-900 mb-1">Envío de SMS</h5>
                                        <p class="text-slate-600">Envía SMS a tus clientes cuando se acercan sus vencimientos de cuentas, promocionar tus productos y envía mensajes personalizados por sus cumpleaños, todo desde el Sistema. Puedes creerlo?.</p>
                                    </div>
                                </div>

                                <div class="flex gap-4">
                                    <div class="flex-shrink-0 w-12 h-12 bg-emerald-100 text-tips-green rounded-xl flex items-center justify-center text-xl">
                                        <i class="fas fa-refresh"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-bold text-slate-900 mb-1">Multiples funciones</h5>
                                        <p class="text-slate-600">Dentro de poco podrás acceder a tu correo desde dentro del propio sistema, así como contar con más funciones que se encuentran en desarrollo, para que lo puedas hacer todo desde un mismo lugar.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/2">
                            <img src="https://tipscloudapps.com/assets/images/features/feature2.png" alt="Integración" class="w-full h-auto rounded-2xl shadow-premium">
                        </div>
                    </div>
                </div>

                <!-- Tab 3 (Visualización) -->
                <div x-show="activeTab === 'tab-feature-3'" 
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 translate-x-12"
                     x-transition:enter-end="opacity-100 translate-x-0"
                     class="w-full">
                    <div class="flex flex-col lg:flex-row items-center gap-12">
                        <div class="lg:w-1/2">
                            <h4 class="text-3xl font-bold text-primary-blue mb-6 font-outfit">Visualización cómoda en el dispositivo móvil o tablet.</h4>
                            <p class="text-lg text-slate-700 leading-relaxed mb-6">Estamos adaptando la visualización de las pantallas del sistema para que te sea más sencillo visualizar su contenido desde tu smartphone.</p>
                            <p class="text-lg text-slate-700 leading-relaxed mb-6">Así ya no tendrás excusa para estar desconectado. En un futuro podrás consultar todas las transacciones, verificar procesos, examinar y otorgar permisos, recibir notificaciones y varias otras cosas.</p>
                            <p class="text-lg text-slate-700 leading-relaxed mb-6">Dentro de muy poco tiempo llegaremos al 100% de las funciones implementadas en la vista móvil.</p>
                        </div>
                        <div class="lg:w-1/2">
                            <img src="https://tipscloudapps.com/assets/images/features/feature3.png" alt="Visualización" class="w-full h-auto rounded-2xl shadow-premium">
                        </div>
                    </div>
                </div>

                <!-- Repeat similar structure for other tabs ... I'll be brief here -->
                 <div x-show="activeTab === 'tab-feature-4'" style="display:none" x-transition:enter="transition duration-500" class="w-full">
                    <div class="flex flex-col lg:flex-row items-center gap-12">
                        <div class="lg:w-1/2">
                            <h4 class="text-3xl font-bold text-primary-blue mb-6 font-outfit">tipsCloud es fácil</h4>
                            <p class="text-lg text-slate-700 leading-relaxed mb-6">Los procesos estandarizados simples y fáciles de entender hacen que el sistema sea entendido por el funcionario en pocas horas casi sin ser necesario una capacitación.</p>

                            <div class="flex gap-4">
                                    <div class="flex-shrink-0 w-12 h-12 bg-emerald-100 text-tips-green rounded-xl flex items-center justify-center text-xl">
                                        <i class="fas fa-person"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-bold text-slate-900 mb-1">Soporte personalizado gratuito</h5>
                                        <p class="text-slate-600">Brindamos una asistencia técnica vía acceso remoto con cada usuario con el objetivo de guiar y esclarecer dudas en la operatividad del sistema.</p>
                                    </div>
                                </div>

                                <div class="flex gap-4">
                                    <div class="flex-shrink-0 w-12 h-12 bg-emerald-100 text-tips-green rounded-xl flex items-center justify-center text-xl">
                                        <i class="fas fa-refresh"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-bold text-slate-900 mb-1">Llegamos hasta donde estás</h5>
                                        <p class="text-slate-600">Los problemas que requieran solución IN-SITU, lo agendamos y te hacemos una visita, trabajamos para darte las soluciones a la medida de tus necesidades.</p>
                                    </div>
                                </div>
                        </div>
                        <div class="lg:w-1/2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features/feature4.png" alt="Capacitación" class="w-full h-auto rounded-2xl shadow-premium">
                        </div>
                    </div>
                </div>

                <div x-show="activeTab === 'tab-feature-5'" style="display:none" x-transition:enter="transition duration-500" class="w-full">
                    <div class="flex flex-col lg:flex-row items-center gap-12">
                        <div class="lg:w-1/2">
                            <h4 class="text-3xl font-bold text-primary-blue mb-6 font-outfit">Actualizaciones Constantes</h4>
                            <p class="text-lg text-slate-700 leading-relaxed mb-6">tipsCloud evoluciona con su negocio. Reciba actualizaciones automáticas con nuevas funcionalidades y mejoras de seguridad.</p>

                            <div class="flex gap-4">
                                    <div class="flex-shrink-0 w-12 h-12 bg-emerald-100 text-tips-green rounded-xl flex items-center justify-center text-xl">
                                        <i class="fas fa-refresh"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-bold text-slate-900 mb-1">Multiples funciones</h5>
                                        <p class="text-slate-600">Dentro de poco podrás acceder a tu correo desde dentro del propio sistema, así como contar con más funciones que se encuentran en desarrollo, para que lo puedas hacer todo desde un mismo lugar.</p>
                                    </div>
                                </div>
                        </div>
                        <div class="lg:w-1/2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/features/feature5.png" alt="Actualizaciones" class="w-full h-auto rounded-2xl shadow-premium">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories Section -->
<section id="cases" class="py-24 bg-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-20">
            <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6 font-outfit">Lo que dicen nuestros expertos</h2>
            <div class="w-20 h-1 bg-primary-blue mx-auto mb-6"></div>
            <p class="text-lg text-slate-600">Nuestros clientes comparten su experiencia con tipsCloud</p>
        </div>
        
        <div class="testimonial-plugin-container">
            <?php echo do_shortcode('[rt-testimonial id="29" title="Casos de Exito"]'); ?>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="plans" class="py-24 bg-slate-50 border-t border-slate-200">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-20">
            <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6 font-outfit">Nuestros Planes</h2>
            <p class="text-lg text-slate-600">Elija el plan que mejor se adapte al tamaño de su empresa</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
            <!-- Estandar -->
            <div class="bg-white rounded-3xl p-8 border border-slate-200 flex flex-col shadow-sm hover:shadow-xl transition-shadow duration-500">
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Estandar</h3>
                    <div class="text-4xl font-black text-primary-blue mb-1">380.000 <span class="text-sm font-medium text-slate-500">Gs./mes</span></div>
                </div>
                <ul class="space-y-4 mb-10 flex-grow text-slate-600">
                    <li class="flex items-center"><i class="fas fa-check-circle text-tips-green mr-3"></i> 5 usuarios simultáneos</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-tips-green mr-3"></i> 15 MB espacio</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-tips-green mr-3"></i> Hasta 1500 productos</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-tips-green mr-3"></i> 1 sucursal</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-tips-green mr-3"></i> Multi moneda</li>
                </ul>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('registrarme'))); ?>" class="w-full py-4 text-center bg-slate-100 text-slate-900 font-bold rounded-xl hover:bg-primary-blue hover:text-white transition-colors duration-300">
                    REGISTRAR
                </a>
            </div>

            <!-- PYMEs (Featured) -->
            <div class="bg-white rounded-3xl p-8 border-2 border-primary-blue flex flex-col shadow-premium relative transform scale-105 z-10">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-primary-blue text-white px-6 py-1 rounded-full text-xs font-black tracking-widest uppercase">
                    MÁS POPULAR
                </div>
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">PYMEs</h3>
                    <div class="text-4xl font-black text-primary-blue mb-1">450.000 <span class="text-sm font-medium text-slate-500">Gs./mes</span></div>
                </div>
                <ul class="space-y-4 mb-10 flex-grow text-slate-600 font-medium">
                    <li class="flex items-center"><i class="fas fa-check-circle text-tips-green mr-3"></i> 10 usuarios simultáneos</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-tips-green mr-3"></i> 25 MB espacio</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-tips-green mr-3"></i> Hasta 3500 productos</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-tips-green mr-3"></i> 2 sucursales</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-tips-green mr-3"></i> Soporte prioritario</li>
                </ul>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('registrarme'))); ?>" class="w-full py-4 text-center bg-primary-blue text-white font-bold rounded-xl hover:bg-dark-blue shadow-lg shadow-blue-200 transition-all duration-300">
                    REGISTRAR AHORA
                </a>
            </div>

            <!-- Corporativo -->
            <div class="bg-white rounded-3xl p-8 border border-slate-200 flex flex-col shadow-sm hover:shadow-xl transition-shadow duration-500">
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Corporativo</h3>
                    <div class="text-4xl font-black text-primary-blue mb-1">650.000 <span class="text-sm font-medium text-slate-500">Gs./mes</span></div>
                </div>
                <ul class="space-y-4 mb-10 flex-grow text-slate-600">
                    <li class="flex items-center"><i class="fas fa-check-circle text-tips-green mr-3"></i> 20 usuarios simultáneos</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-tips-green mr-3"></i> 50 MB espacio</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-tips-green mr-3"></i> Productos ilimitados</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-tips-green mr-3"></i> Multi sucursal</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-tips-green mr-3"></i> 30 sesiones soporte</li>
                </ul>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('registrarme'))); ?>" class="w-full py-4 text-center bg-slate-100 text-slate-900 font-bold rounded-xl hover:bg-primary-blue hover:text-white transition-colors duration-300">
                    REGISTRAR
                </a>
            </div>
        </div>

        <div class="mt-20 max-w-4xl mx-auto bg-blue-50 border border-blue-100 p-8 rounded-[2rem] text-center">
            <p class="text-slate-700 text-lg">
                <span class="font-bold text-primary-blue">¿Más opciones?</span> — Cuéntanos tu necesidad. Si tienes una empresa pequeña que recién está empezando, pocos productos y transacciones al mes o si pertenecés a una gran compañía que deseas recomendar la instalación del Sistema en el local propio de tu empresa, veremos la mejor forma de llegar a un acuerdo. 
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('registrarme'))); ?>" class="text-primary-blue font-bold hover:underline ml-2">Contáctanos ahora ›</a>
            </p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
