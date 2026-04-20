<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- ═══ HERO ════════════════════════════════════════ -->
<section class="hero-section">
    <div class="hero-headline container animate-fade-up">
        <div class="row align-items-end">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <span class="insight-date">
                    <time datetime="<?php the_time( 'Y-m-d' ); ?>">
                        <?php echo esc_html( get_the_date() ); ?>
                    </time>
                    <?php
                    $categories = get_the_category();
                    if ( $categories ) :
                        echo ' &nbsp;·&nbsp; ';
                        echo esc_html( $categories[0]->name );
                    endif;
                    ?>
                </span>
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

                    <?php
                    $tags = get_the_tags();
                    if ( $tags ) : ?>
                        <div class="mt-4 d-flex flex-wrap gap-2">
                            <?php foreach ( $tags as $tag ) : ?>
                                <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>"
                                   class="btn-outline-dark-sm rounded-pill">
                                    <?php echo esc_html( $tag->name ); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <?php edit_post_link(); ?>
                </article>

                <!-- Navegación entre entradas -->
                <nav class="d-flex justify-content-between mt-5 pt-4" style="border-top: 1px solid #e8e8e8;">
                    <div><?php previous_post_link( '%link', '&larr; %title' ); ?></div>
                    <div><?php next_post_link( '%link', '%title &rarr;' ); ?></div>
                </nav>
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
                <h1><?php esc_html_e( 'Entrada no encontrada', 'gsf' ); ?></h1>
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
