<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- ═══ HERO ════════════════════════════════════════ -->
<section class="hero-section">
    <div class="hero-headline container animate-fade-up">
        <div class="row">
            <div class="col-lg-8">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="hero-img-wrap">
            <?php the_post_thumbnail( 'full', [ 'alt' => get_the_title() ] ); ?>
        </div>
    <?php endif; ?>
</section>

<!-- ═══ CONTENIDO ════════════════════════════════════════ -->
<section class="py-72">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php the_content(); ?>
                    <?php wp_link_pages(); ?>
                    <?php edit_post_link(); ?>
                </article>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>

<?php else : ?>

<!-- ═══ HERO ════════════════════════════════════════ -->
<section class="hero-section">
    <div class="hero-headline container animate-fade-up">
        <div class="row">
            <div class="col-lg-8">
                <h1><?php esc_html_e( 'Página no encontrada', 'gsf' ); ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="py-72">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <p><?php esc_html_e( 'No hay contenido disponible.', 'gsf' ); ?></p>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<?php get_footer(); ?>
