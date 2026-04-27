<?php
get_header();
?>

<main class="container mx-auto px-4 lg:px-8 py-20">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>

<?php
get_footer();
?>
