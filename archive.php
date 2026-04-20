<?php get_header(); ?>

<!-- ═══ HERO ════════════════════════════════════════ -->
<section class="hero-section">
    <div class="hero-headline container animate-fade-up">
        <div class="row">
            <div class="col-lg-8">
                <?php if ( is_day() ) : ?>
                    <h1><?php esc_html_e( 'Archivo:', 'gsf' ); ?> <em><?php the_date(); ?></em></h1>
                <?php elseif ( is_month() ) : ?>
                    <h1><?php esc_html_e( 'Archivo:', 'gsf' ); ?> <em><?php the_date( 'F Y' ); ?></em></h1>
                <?php elseif ( is_year() ) : ?>
                    <h1><?php esc_html_e( 'Archivo:', 'gsf' ); ?> <em><?php the_date( 'Y' ); ?></em></h1>
                <?php elseif ( is_author() ) : ?>
                    <h1><?php esc_html_e( 'Autor:', 'gsf' ); ?> <em><?php the_author(); ?></em></h1>
                <?php else : ?>
                    <h1><em><?php esc_html_e( 'Archivo', 'gsf' ); ?></em></h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- ═══ LISTADO ════════════════════════════════════════ -->
<section class="post-list-section">
    <div class="container">

        <?php if ( have_posts() ) : ?>

            <div class="d-flex flex-column gap-4">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-list-card animate-fade-up' ); ?>>
                        <div class="post-list-card-img">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'large', [ 'alt' => get_the_title() ] ); ?>
                                </a>
                            <?php else : ?>
                                <div class="img-placeholder"></div>
                            <?php endif; ?>
                        </div>
                        <div class="post-list-card-body">
                            <span class="insight-date"><?php echo esc_html( get_the_date() ); ?></span>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 28 ) ); ?></p>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="post-list-pagination mt-5 d-flex justify-content-center">
                <?php echo bootstrap_pagination(); ?>
            </div>

        <?php else : ?>

            <p><?php esc_html_e( 'No hay entradas disponibles.', 'gsf' ); ?></p>

        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>
