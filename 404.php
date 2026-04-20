<?php get_header(); ?>

<!-- ═══ 404 ════════════════════════════════════════ -->
<section class="py-72">
    <div class="container">
        <div class="row align-items-center" style="min-height: 50vh;">
            <div class="col-lg-6 animate-fade-up">
                <p class="insight-date mb-2">Error 404</p>
                <h1>Página no<br /><em>encontrada.</em></h1>
                <p class="mt-3 mb-4" style="color: var(--gris-medio);">
                    La página que buscas no existe o fue movida.<br />
                    Regresa al inicio y continúa navegando.
                </p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-rojo rounded-pill">
                    Volver al inicio
                </a>
            </div>
            <div class="col-lg-5 offset-lg-1 text-end animate-fade-up delay-1 d-none d-lg-block">
                <span style="font-family: var(--font-titulo); font-size: clamp(8rem, 18vw, 14rem); font-weight: 900; color: #f0f0f0; line-height: 1; display: block;">
                    404
                </span>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
