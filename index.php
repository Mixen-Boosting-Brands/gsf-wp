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

<!-- ═══ MARCAS ════════════════════════════════════════ -->
<section class="marcas-section">
    <div class="container">
        <h2 class="section-title animate-fade-up">
            Marcas que <em>confían</em> en nuestra operación.
        </h2>
        <p class="section-subtitle animate-fade-up delay-1">
            Cada una de nuestras marcas representa una historia de
            crecimiento, colaboración y excelencia operativa.
        </p>

        <!-- Fila 1 -->
        <div class="row g-0">
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div class="marca-card animate-fade-up">
                    <img
                        class="marca-card-img"
                        src="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/marcas/thumbnails/mcdonalds.png"
                        alt="McDonald's"
                    />
                    <div class="marca-card-body">
                        <img
                            class="marca-logo"
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/marcas/logos/mcdonalds@2x.png"
                            alt="McDonald's"
                        />
                        <a href="#" class="btn-negro rounded-pill my-3"
                            >Visitar Sitio</a
                        >
                        <span class="marca-logo-text">McDonald's</span>
                        <p>
                            Excelencia global entrenada en servicio,
                            calidad y satisfacción del cliente.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div class="marca-card animate-fade-up delay-1">
                    <img
                        class="marca-card-img"
                        src="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/marcas/thumbnails/smart-fit.png"
                        alt="SmartFit"
                    />
                    <div class="marca-card-body">
                        <img
                            class="marca-logo"
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/marcas/logos/smart-fit@2x.png"
                            alt="SmartFit"
                        />
                        <a href="#" class="btn-negro rounded-pill my-3"
                            >Visitar Sitio</a
                        >
                        <span class="marca-logo-text">SmartFit</span>
                        <p>
                            Una de las cadenas de fitness más
                            importantes de América Latina.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div class="marca-card animate-fade-up delay-2">
                    <img
                        class="marca-card-img"
                        src="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/marcas/thumbnails/incredible-pizza.png"
                        alt="Incredible Pizza"
                    />
                    <div class="marca-card-body">
                        <img
                            class="marca-logo"
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/marcas/logos/incredible-pizza@2x.png"
                            alt="Incredible Pizza"
                            style="max-width: 176px"
                        />
                        <a href="#" class="btn-negro rounded-pill my-3"
                            >Visitar Sitio</a
                        >
                        <span class="marca-logo-text"
                            >Incredible Pizza</span
                        >
                        <p>
                            Entretenimiento familiar diseñado para crear
                            momentos inolvidables.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fila 2 -->
        <div class="row g-0">
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div class="marca-card animate-fade-up">
                    <img
                        class="marca-card-img"
                        src="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/marcas/thumbnails/sfcc.png"
                        alt="San Francisco Country Club"
                    />
                    <div class="marca-card-body">
                        <img
                            class="marca-logo"
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/marcas/logos/sfcc@2x.png"
                            alt="San Francisco Country Club"
                        />
                        <a href="#" class="btn-negro rounded-pill my-3"
                            >Visitar Sitio</a
                        >
                        <span class="marca-logo-text"
                            >San Francisco Country Club</span
                        >
                        <p>
                            Experiencia directa con tradición, comunidad
                            y estilo de vida excepcionales.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div class="marca-card animate-fade-up delay-1">
                    <img
                        class="marca-card-img"
                        src="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/marcas/thumbnails/comsa.png"
                        alt="Comsa Steel"
                    />
                    <div class="marca-card-body">
                        <img
                            class="marca-logo"
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/marcas/logos/comsa@2x.png"
                            alt="Comsa Steel"
                        />
                        <a href="#" class="btn-negro rounded-pill my-3"
                            >Visitar Sitio</a
                        >
                        <span class="marca-logo-text">Comsa Steel</span>
                        <p>
                            Soluciones industriales que impulsan
                            infraestructura y desarrollo.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div class="marca-card animate-fade-up delay-2">
                    <img
                        class="marca-card-img"
                        src="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/marcas/thumbnails/audi.png"
                        alt="Audi"
                    />
                    <div class="marca-card-body">
                        <img
                            class="marca-logo"
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/marcas/logos/audi@2x.png"
                            alt="Audi"
                            style="max-width: 100px; margin: 7px 0"
                        />
                        <a href="#" class="btn-negro rounded-pill my-3"
                            >Visitar Sitio</a
                        >
                        <span class="marca-logo-text">Audi</span>
                        <p>
                            Una marca global que representa innovación,
                            tecnología y lujo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

        <!-- Fila 1 -->
        <div class="row g-0">
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div class="insight-card animate-fade-up">
                    <a href="#">
                        <img
                            class="insight-card-img"
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/marcas/thumbnails/mcdonalds.png"
                            alt=""
                        />
                    </a>
                    <div class="insight-card-body">
                        <span class="insight-date">1 enero, 2026</span>
                        <a href="#" class="insight-title"
                            >De la operación al liderazgo: cómo se
                            construyen carreras dentro del grupo</a
                        >
                        <p>
                            Detrás de cada unidad de negocio hay
                            historias de crecimiento real. Este artículo
                            explora cómo el desarrollo interno y la
                            disciplina operativa impulsan trayectorias
                            que evolucionan hacia roles de liderazgo.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div class="insight-card animate-fade-up delay-1">
                    <a href="#">
                        <img
                            class="insight-card-img"
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/marcas/thumbnails/mcdonalds.png"
                            alt=""
                        />
                    </a>
                    <div class="insight-card-body">
                        <span class="insight-date">1 enero, 2026</span>
                        <a href="#" class="insight-title"
                            >De la operación al liderazgo: cómo se
                            construyen carreras dentro del grupo</a
                        >
                        <p>
                            Detrás de cada unidad de negocio hay
                            historias de crecimiento real. Este artículo
                            explora cómo el desarrollo interno y la
                            disciplina operativa impulsan trayectorias
                            que evolucionan hacia roles de liderazgo.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div class="insight-card animate-fade-up delay-2">
                    <a href="#">
                        <img
                            class="insight-card-img"
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/marcas/thumbnails/mcdonalds.png"
                            alt=""
                        />
                    </a>
                    <div class="insight-card-body">
                        <span class="insight-date">1 enero, 2026</span>
                        <a href="#" class="insight-title"
                            >De la operación al liderazgo: cómo se
                            construyen carreras dentro del grupo</a
                        >
                        <p>
                            Detrás de cada unidad de negocio hay
                            historias de crecimiento real. Este artículo
                            explora cómo el desarrollo interno y la
                            disciplina operativa impulsan trayectorias
                            que evolucionan hacia roles de liderazgo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
