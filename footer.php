    <?php if (!is_page("contacto")): ?>
        <!-- ═══ CTA CONTACTO ══════════════════════════════════ -->
        <section class="cta-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 animate-fade-up">
                        <h2>Conecta con <em>Grupo San Francisco</em></h2>
                        <p>
                            Si deseas conocer más sobre el grupo o explorar
                            oportunidades de colaboración, estaremos encantados
                            de escucharte.
                        </p>
                        <a href="<?php echo esc_url(
                            home_url("/"),
                        ); ?>contacto" class="btn-rojo rounded-pill"
                            >Contacto Corporativo</a
                        >
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

        <!-- ═══ FOOTER ════════════════════════════════════════ -->
        <footer>
            <div class="container">
                <div class="row g-5">
                    <!-- Col 1: Logo + tagline + redes -->
                    <div class="col-lg-6">
                        <h1 class="footer-tagline">
                            Conectando experiencias,<br />marcas y personas.
                        </h1>
                        <div class="footer-social mt-2">
                            <a href="https://www.instagram.com/gsfcorp/" target="_blank"
                                ><i class="fa-brands fa-instagram"></i
                            ></a>
                            <a href="https://www.facebook.com/p/Grupo-San-Francisco-61560142205094/" target="_blank"
                                ><i class="fa-brands fa-facebook-f"></i
                            ></a>
                        </div>
                    </div>

                    <!-- Col 2: Menú -->
                    <nav class="col-6 col-lg-2">
                        <p class="footer-title">Menú</p>
                        <a href="<?php echo esc_url(
                            home_url("/"),
                        ); ?>" class="footer-link">Inicio</a>
                        <a href="<?php echo esc_url(
                            home_url("/nosotros"),
                        ); ?>" class="footer-link">Nosotros</a>
                        <a href="<?php echo esc_url(
                            home_url("/marcas"),
                        ); ?>" class="footer-link">Marcas</a>
                        <a href="<?php echo esc_url(
                            home_url("/personas-y-cultura"),
                        ); ?>" class="footer-link">Personas y cultura</a>
                    </nav>

                    <!-- Col 3: Contacto -->
                    <div class="col-6 col-lg-4">
                        <p class="footer-title">Contacto</p>
                        <address class="footer-address">
                            Vía Lombardía #5705 Int. 305, 31110,<br />
                            Chihuahua, Chih., México
                            <br /><br />
                            <a href="tel:+526144255315">+52 614 425 5315</a> &nbsp;|&nbsp; <a href="mailto:comunicacion@gsfcorp.com.mx">comunicacion@gsfcorp.com.mx</a>
                        </address>
                    </div>
                </div>

                <hr class="footer-divider" />

                <div class="row">
                    <div
                        class="col-12 footer-bottom d-flex flex-wrap justify-content-between gap-2"
                    >
                        <a href="<?php echo esc_url(
                            home_url("/aviso-de-privacidad"),
                        ); ?>"><span>Aviso de Privacidad</span></a>
                        <span
                            >Design by:
                            <a href="https://mixen.mx/" target="_blank"
                                >Mixen</a
                            ></span
                        >
                    </div>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>

        <script src="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/assets/js/app.bundle.js" defer></script>
    </body>
</html>
