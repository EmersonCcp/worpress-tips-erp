<?php
require_once('wp-load.php');

// Create Detail Pages (Posts)
$detail_pages = [
    [
        'title' => 'Cómo JHF optimizó su facturación con FacturaSend',
        'content' => 'Jorge Hugo Fariña, CEO de JHF, destaca el respaldo recibido y la rapidez del equipo de soporte para responder dudas sobre la API, incluyendo el envío de ejemplos de código reales para facilitar la integración.',
        'slug' => 'jhf-facturacion'
    ],
    [
        'title' => 'Mastersys: Flexibilidad e infraestructura propia',
        'content' => 'Ever Ramirez, CEO de Mastersys, valora la flexibilidad de poder instalar la solución en su propia infraestructura con dominio personalizado, sin estar obligados a usar la nube de terceros.',
        'slug' => 'mastersys-flexibilidad'
    ],
    [
        'title' => 'Odonto Excellence: Gestión manual intuitiva',
        'content' => 'Gabriel Serpa Boni, CEO de Directa Soluciones, menciona que, para el caso de Odonto Excellence, utilizan el sistema con una interfaz intuitiva que facilita la carga de datos sin complicaciones técnicas.',
        'slug' => 'odonto-excellence-gestion'
    ]
];

$urls = [];

foreach ($detail_pages as $page) {
    if (!get_page_by_path($page['slug'], OBJECT, 'post')) {
        $post_id = wp_insert_post([
            'post_title'   => $page['title'],
            'post_content' => $page['content'],
            'post_status'  => 'publish',
            'post_type'    => 'post',
            'post_name'    => $page['slug']
        ]);
        $urls[] = get_permalink($post_id);
    } else {
        $urls[] = get_permalink(get_page_by_path($page['slug'], OBJECT, 'post')->ID);
    }
}

// Create Testimonials (Custom Post Type: testimonial)
// Note: The plugin uses 'testimonial' CPT
$testimonials = [
    [
        'title'   => 'Jorge Hugo Fariña',
        'content' => 'Destaca el respaldo recibido como gerente y la rapidez del equipo de soporte para responder dudas sobre la API.',
        'position'=> 'CEO JHF',
        'url'     => $urls[0],
        'rating'  => 5
    ],
    [
        'title'   => 'Ever Ramirez',
        'content' => 'Valora la flexibilidad de poder instalar la solución en su propia infraestructura con dominio personalizado.',
        'position'=> 'CEO Mastersys',
        'url'     => $urls[1],
        'rating'  => 5
    ],
    [
        'title'   => 'Gabriel Serpa Boni',
        'content' => 'Menciona que utilizan el sistema sin integración compleja gracias a la interfaz intuitiva del sistema.',
        'position'=> 'CEO Directa Soluciones',
        'url'     => $urls[2],
        'rating'  => 5
    ]
];

foreach ($testimonials as $t) {
    $t_id = wp_insert_post([
        'post_title'   => $t['title'],
        'post_content' => $t['content'],
        'post_status'  => 'publish',
        'post_type'    => 'testimonial'
    ]);
    
    if ($t_id) {
        // Meta keys depend on the plugin. Usually:
        update_post_meta($t_id, 'testimonial_position', $t['position']);
        update_post_meta($t_id, 'testimonial_rating', $t['rating']);
        // The plugin use 'testimonial_url' or similar for custom links
        update_post_meta($t_id, 'testimonial_url', $t['url']);
    }
}

echo "Successfully created detail pages and testimonials.";
unlink(__FILE__);
?>
