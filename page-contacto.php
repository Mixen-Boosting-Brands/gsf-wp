<?php
/*
Template Name: Contacto
*/
get_header(); ?>

<!-- ═══ CONTACTO ══════════════════════════════════ -->
<section class="contacto-section">
    <div class="hero-headline container">
        <div class="row">
            <div class="col-lg-6 my-auto animate-fade-up">
                <h1>Ponte en <em>contacto</em></h1>
                <p>
                    Estamos disponibles para resolver dudas, generar
                    alianzas y atender cualquier consulta relacionada
                    con Grupo San Francisco.
                </p>
                <p>
                    Si deseas más información sobre el grupo, nuestras
                    marcas o posibles colaboraciones, completa el
                    siguiente formulario y nuestro equipo se pondrá en
                    contacto contigo.
                </p>
                <ul class="mb-4">
                    <li>
                        <a href="tel:+526144255315">+52 614 425 5315</a>
                    </li>
                    <li>
                        <a href="mailto:comunicacion@gsfcorp.com.mx"
                            >comunicacion@gsfcorp.com.mx</a
                        >
                    </li>
                    <li>
                        <address>
                            Vía Lombardía #5705 Int. 305, 31110,<br />
                            Chihuahua, Chih., México
                        </address>
                    </li>
                </ul>
                <img
                    class="img-fluid"
                    src="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/thumb-contacto.png"
                    alt="Ponte en contacto"
                />
            </div>
            <div class="col-lg-6 my-auto animate-fade-up delay-1">
                <form
                    action="./mailer.php"
                    method="POST"
                    class="row g-3 needs-validation contact-form mt-4"
                    id="ajax-contact"
                    novalidate
                >
                    <div class="row">
                        <div class="col-md-12 form-floating mb-4">
                            <input
                                type="text"
                                class="form-control shadow-none"
                                id="nombre"
                                name="nombre"
                                placeholder="Nombre completo*"
                                pattern=".{5,50}"
                                required
                            />
                            <label for="nombre" class="form-label"
                                >Nombre completo*</label
                            >
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce tu nombre completo.
                            </div>
                        </div>
                        <div class="col-md-6 form-floating mb-4">
                            <input
                                type="text"
                                class="form-control shadow-none"
                                id="empresa"
                                name="empresa"
                                placeholder="Empresa"
                            />
                            <label for="empresa" class="form-label"
                                >Empresa</label
                            >
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce tu empresa.
                            </div>
                        </div>
                        <div class="col-md-6 form-floating mb-4">
                            <select
                                class="form-select form-control shadow-none"
                                id="motivo-contacto"
                                name="motivo-contacto"
                                aria-label="Selecciona una opción"
                            >
                                <option value="" selected disabled>
                                    Selecciona una opción
                                </option>
                                <option value="Información general">
                                    Información general
                                </option>
                                <option value="Alianzas/Negocios">
                                    Alianzas/Negocios
                                </option>
                                <option value="Inversiones">
                                    Inversiones
                                </option>
                                <option value="Medios/Prensa">
                                    Medios/Prensa
                                </option>
                                <option value="Oportunidades laborales">
                                    Oportunidades laborales
                                </option>
                                <option value="Otro">Otro</option>
                            </select>
                            <label for="motivo-contacto"
                                >Motivo de contacto</label
                            >
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor selecciona el motivo de
                                contacto.
                            </div>
                        </div>
                        <div class="col-md-12 form-floating mb-4">
                            <input
                                type="email"
                                class="form-control shadow-none"
                                id="correo"
                                name="correo"
                                placeholder="Correo electrónico*"
                                required
                            />
                            <label for="correo" class="form-label"
                                >Correo electrónico*</label
                            >
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce una dirección de
                                correo válida.
                            </div>
                        </div>
                        <div class="col-md-12 form-floating mb-4">
                            <input
                                type="tel"
                                class="form-control shadow-none"
                                id="telefono"
                                name="telefono"
                                placeholder="Teléfono*"
                                required
                            />
                            <label for="telefono" class="form-label"
                                >Teléfono*</label
                            >
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce un número de
                                teléfono válido.
                            </div>
                        </div>
                        <div class="col-md-12 form-floating mb-4">
                            <textarea
                                class="form-control shadow-none"
                                id="mensaje"
                                name="mensaje"
                                placeholder="Información del proyecto*"
                                style="height: 100px"
                                required
                            ></textarea>
                            <label for="mensaje"
                                >Información del proyecto*</label
                            >
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce la información
                                relevante del proyecto.
                            </div>
                        </div>
                        <div class="col-md-6 my-auto">
                            <div id="hold-on-a-sec">
                                <i
                                    id="contact-spinner"
                                    class="fas fa-spinner fa-spin"
                                ></i>
                                Por favor espera..
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-end">
                            <button
                                type="submit"
                                class="btn btn-lg btn-block rounded-pill"
                            >
                                Enviar mensaje
                            </button>
                        </div>
                    </div>
                    <div id="form-messages" class="mt-4"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
