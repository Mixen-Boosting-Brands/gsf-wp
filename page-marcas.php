<?php
/*
Template Name: Marcas
*/
get_header(); ?>

<!-- ═══ HERO ════════════════════════════════════════ -->
<section class="hero-section">
    <!-- Headline -->
    <div class="hero-headline container animate-fade-up">
        <div class="row align-items-end">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1>
                    Marcas que forman<br />
                    <em>parte de la vida diaria.</em>
                </h1>
            </div>
            <div class="col-lg-4 offset-lg-2 my-auto text-end">
                <p>
                    Grupo San Francisco opera y desarrolla marcas
                    líderes en distintos sectores, construyendo
                    experiencias, servicios y espacios que impactan a
                    miles de personas todos los días.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ═══ MARCAS QUE CONFÍAN ═══════════════════════════ -->
<section class="seccion-tipo-2-section overflow-hidden">
    <div class="container-fluid px-0">
        <div class="row g-0">
            <!-- Imagen -->
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="seccion-tipo-2-img">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/bg-potencia.png"
                        alt="Incredible Pizza"
                    />
                </div>
            </div>

            <!-- Texto rojo -->
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="seccion-tipo-2-texto animate-fade-up">
                    <h2>Marcas que confían en nuestra operación</h2>
                    <p>
                        Nuestro portafolio está conformado por marcas
                        consolidadas que, desde distintos giros,
                        comparten un mismo respaldo: una operación
                        sólida, visión estratégica y enfoque en
                        resultados.
                    </p>
                    <p>
                        Cada una representa una oportunidad de
                        crecimiento, innovación y generación de valor
                        dentro del ecosistema del grupo.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("template-parts/marcas"); ?>

<!-- ═══ DESCANSO GENÉRICO ════════════════════════════════ -->
<section class="descanso-section">
    <img
        class="gente-bg"
        src="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/assets/images/bg-descanso.png"
        alt="Nuestro equipo"
    />
    <div class="container descanso-content text-center">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 animate-fade-up">
                <h2>
                    Más que <span id="marcas">marcas</span>,<br />
                    <strong>un ecosistema empresarial</strong>
                </h2>
                <p>
                    En Grupo San Francisco, cada marca forma parte de
                    una estructura que potencia su crecimiento.
                </p>
                <p>
                    La integración bajo una misma visión permite
                    compartir experiencia, optimizar operaciones y
                    generar nuevas oportunidades de valor.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ═══ PRESENCIA ══════════════════════════════════ -->
<section class="presencia-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 animate-fade-up">
                <h2>Presencia <em>regional</em></h2>
                <p>
                    Nuestras operaciones se concentran en el norte del
                    país, donde hemos consolidado una red empresarial
                    con impacto en múltiples industrias.
                </p>
                <ul>
                    <li>Chihuahua</li>
                    <li>Sonora</li>
                    <li>Baja California</li>
                    <li>Baja California Sur</li>
                </ul>
            </div>
            <div class="col-lg-6 animate-fade-up delay-1">
                <img
                    class="img-fluid"
                    src="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/mapa.png"
                    alt="Presencia regional"
                />
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
