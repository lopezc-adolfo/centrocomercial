<?php
    get_header();
?>

    <main class="contenedor seccion con-sidebar">
        <section>
            <?php
                get_template_part('template-parts/clase');
            ?>
        </section>
        <?php get_sidebar('clases'); ?>
    </main>

<?php
    get_footer();
?>