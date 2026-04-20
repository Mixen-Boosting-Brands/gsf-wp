<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo("charset"); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="<?php bloginfo("description"); ?>" />
        <title><?php
        wp_title("");
        if (wp_title("", false)) {
            echo " - ";
        }
        bloginfo("name");
        ?></title>

        <link rel="stylesheet" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/assets/css/styles.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Manrope:wght@300;400;500;600;700&display=swap"
            rel="stylesheet"
        />
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo(
            "name",
        ); ?>" href="<?php bloginfo("rss2_url"); ?>" />

        <?php wp_head(); ?>
    </head>

    <body>
        <!-- ═══ NAVBAR ══════════════════════════════════════ -->
        <nav class="navbar navbar-expand-lg" role="navigation">
            <div class="container">
                <!-- Logo -->
                <a
                    class="navbar-brand d-flex align-items-center gap-2"
                    href="<?php echo esc_url(home_url()); ?>"
                >
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/logo@2x.png"
                        alt="<?php bloginfo("name"); ?>"
                    />
                </a>

                <button
                    class="navbar-toggler border-0"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navMain"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navMain">
                    <ul
                        class="navbar-nav ms-auto align-items-lg-center gap-lg-1 py-3 py-lg-0"
                    >
                        <li class="nav-item mb-3 mb-lg-0">
                            <a class="nav-link rounded-pill" href="<?php echo esc_url(
                                home_url("/"),
                            ); ?>nosotros"
                                >Nosotros</a
                            >
                        </li>
                        <li class="nav-item mb-3 mb-lg-0">
                            <a class="nav-link rounded-pill" href="<?php echo esc_url(
                                home_url("/"),
                            ); ?>marcas"
                                >Marcas</a
                            >
                        </li>
                        <li class="nav-item mb-3 mb-lg-0">
                            <a class="nav-link rounded-pill" href="<?php echo esc_url(
                                home_url("/"),
                            ); ?>personas-y-cultura"
                                >Personas y Cultura</a
                            >
                        </li>
                        <li class="nav-item mb-3 mb-lg-0">
                            <a class="nav-link rounded-pill" href="<?php echo esc_url(
                                home_url("/"),
                            ); ?>contacto"
                                >Contacto</a
                            >
                        </li>
                        <li class="nav-item ms-lg-3 mt-2 mt-lg-0 trp-switcher-wrap">
                            <?php echo do_shortcode("[language-switcher]"); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
