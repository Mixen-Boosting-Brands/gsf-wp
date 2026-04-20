<?php get_header(); ?>

<!-- ═══ HERO ════════════════════════════════════════ -->
<section class="hero-section">
    <!-- Headline -->
    <div class="hero-headline container animate-fade-up">
        <div class="row align-items-end">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1>
                    Las marcas que conoces<br />tienen
                    <em>un mismo origen.</em>
                </h1>
            </div>
            <div class="col-lg-4 offset-lg-2 my-auto text-end">
                <p>
                    Más de cuatro décadas operando<br />
                    y desarrollando marcas líderes.
                </p>
            </div>
        </div>
    </div>

    <!-- Imagen hero -->
    <div class="hero-img-wrap animate-fade-up delay-1">
        <!-- Sustituye el src por la imagen real de la ciudad -->
        <img
            src="<?php echo esc_url(
                get_template_directory_uri(),
            ); ?>/assets/images/bg-hero.png"
            alt="Vista del Cerro Coronel, Chihuahua, Chih., México"
        />
        <div class="hero-btn-overlay">
            <a href="#" class="btn-negro rounded-pill"
                >Conoce el grupo</a
            >
        </div>
    </div>
</section>

<!-- ═══ GRUPO EMPRESARIAL ════════════════════════════ -->
<section class="grupo-section">
    <div class="container-fluid px-0">
        <div class="row g-0">
            <!-- Texto -->
            <div class="col-lg-6 d-flex align-items-center">
                <div class="grupo-texto px-4 px-md-5 animate-fade-up">
                    <div class="tarjeta">
                        <div class="contenedor-texto">
                            <h2>
                                Un grupo empresarial<br />con visión de
                                crecimiento
                            </h2>
                            <p>
                                Grupo San Francisco administra y opera
                                marcas reconocidas que forman parte del
                                día a día de miles de personas.
                            </p>
                            <p>
                                A través de disciplina operativa,
                                liderazgo y desarrollo del talento, el
                                grupo impulsa el crecimiento de cada una
                                de sus unidades de negocio.
                            </p>
                            <p>
                                Su enfoque se basa en construir un
                                ecosistema empresarial sólido donde cada
                                marca pueda crecer, generar valor y
                                fortalecer su presencia en el mercado.
                            </p>
                        </div>

                        <div class="pie">
                            <a
                                href="#"
                                class="btn-negro"
                                style="padding: 12px 40px"
                                >Conoce el grupo</a
                            >
                        </div>
                    </div>
                </div>
            </div>

            <!-- swiperGrupo -->
            <div class="col-lg-6 position-relative overflow-hidden">
                <!-- Slider main container -->
                <div class="swiperGrupo">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="grupo-img">
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri(),
                                    ); ?>/assets/images/bg-grupo-empresarial.png"
                                    alt="Equipo de trabajo"
                                />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="grupo-img">
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri(),
                                    ); ?>/assets/images/bg-grupo-empresarial.png"
                                    alt="Equipo de trabajo"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("template-parts/marcas"); ?>

<!-- ═══ CIFRAS ════════════════════════════════════════ -->
<section class="cifras-section">
    <div class="container">
        <h2 class="section-title animate-fade-up">
            <em>Cifras que respaldan</em> nuestra trayectoria
        </h2>
        <p class="section-subtitle animate-fade-up delay-1">
            Estos números representan más que cifras. Representan
            décadas de trabajo, crecimiento y compromiso con las marcas
            que operamos.
        </p>

        <div class="row g-4">
            <div class="col-lg-3">
                <div class="cifra-card animate-fade-up">
                    <div class="cifra-card-inner">
                        <div class="cifra-numero">+40</div>
                        <div class="cifra-label">
                            Años de trayectoria empresarial
                        </div>
                        <i class="fa-solid fa-award cifra-icon"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="cifra-card animate-fade-up delay-1">
                    <div class="cifra-card-inner">
                        <div class="cifra-numero">6</div>
                        <div class="cifra-label">
                            Unidades de negocio
                        </div>
                        <i class="fa-solid fa-building cifra-icon"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="cifra-card animate-fade-up delay-2">
                    <div class="cifra-card-inner">
                        <div class="cifra-numero">+800</div>
                        <div class="cifra-label">Colaboradores</div>
                        <i class="fa-solid fa-users cifra-icon"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="cifra-card animate-fade-up delay-3">
                    <div class="cifra-card-inner">
                        <div class="cifra-numero">4</div>
                        <div class="cifra-label">
                            Estados donde operamos
                        </div>
                        <i
                            class="fa-solid fa-location-dot cifra-icon"
                        ></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ NUESTRA GENTE ════════════════════════════════ -->
<section class="gente-section">
    <img
        class="gente-bg"
        src="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/assets/images/bg-gente.png"
        alt="Nuestro equipo"
    />
    <div class="container gente-content">
        <div class="row">
            <div class="col-lg-8 animate-fade-up">
                <h2>Nuestro mayor activo<br />es nuestra gente</h2>
                <p>
                    Detrás de cada operación exitosa existe un equipo
                    comprometido con la excelencia. Grupo San Francisco
                    impulsa el crecimiento profesional de sus
                    colaboradores y promueve una cultura basada en
                    disciplina, liderazgo y desarrollo continuo.
                </p>
                <p>
                    Creemos que cuando las personas crecen, las empresas
                    también lo hacen.
                </p>
            </div>
        </div>
    </div>
    <div class="gente-btn-overlay">
        <a href="#" class="btn-rojo rounded-pill"
            >Conoce nuestra cultura</a
        >
    </div>
</section>

<!-- ═══ CONSTRUYENDO VALOR ═══════════════════════════ -->
<section class="seccion-tipo-1-section overflow-hidden">
    <div class="container-fluid px-0">
        <div class="row g-0">
            <!-- Imagen -->
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="seccion-tipo-1-img">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/bg-valor.png"
                        alt="Reunión de equipo"
                    />
                </div>
            </div>

            <!-- Texto rojo -->
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="seccion-tipo-1-texto animate-fade-up">
                    <h2>Construyendo valor<br />a largo plazo</h2>
                    <p>
                        Grupo San Francisco busca maximizar el valor de
                        las empresas que opera, creando un ecosistema
                        donde las marcas se fortalecen a través de una
                        gestión responsable, visión empresarial y
                        ejecución estratégica.
                    </p>
                    <p>
                        Cuando las marcas se conectan bajo una misma
                        visión, sus fortalezas se potencian y generan
                        nuevas oportunidades de crecimiento.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ INSIGHTS ════════════════════════════════════════ -->
<section class="insights-section">
    <div class="container">
        <h2 class="section-title animate-fade-up">
            <em>Insights</em> que construyen.
        </h2>
        <p class="section-subtitle animate-fade-up delay-1">
            Perspectivas, aprendizajes y experiencias que reflejan cómo
            operamos, crecemos y generamos valor en cada industria.
        </p>

        <?php
        $delays = [ '', 'delay-1', 'delay-2' ];
        $insights = new WP_Query( [
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => 3,
            'orderby'        => 'date',
            'order'          => 'DESC',
        ] );
        ?>

        <?php if ( $insights->have_posts() ) : ?>
        <div class="row g-0">
            <?php $i = 0; while ( $insights->have_posts() ) : $insights->the_post(); ?>
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div class="insight-card animate-fade-up <?php echo esc_attr( $delays[ $i ] ); ?>">
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'large', [ 'class' => 'insight-card-img', 'alt' => get_the_title() ] ); ?>
                        <?php else : ?>
                            <div class="insight-card-img img-placeholder"></div>
                        <?php endif; ?>
                    </a>
                    <div class="insight-card-body">
                        <span class="insight-date"><?php echo esc_html( get_the_date() ); ?></span>
                        <a href="<?php the_permalink(); ?>" class="insight-title"><?php the_title(); ?></a>
                        <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
                    </div>
                </div>
            </div>
            <?php $i++; endwhile; wp_reset_postdata(); ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
