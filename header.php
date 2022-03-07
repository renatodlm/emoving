<?php require __DIR__ . "/vendor/autoload.php" ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header" class="header">
        <div class="container">
            <nav class="navbar navbar-expand-xl navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?= get_home_url() ?>"><img src="<?= get_template_directory_uri() ?>/img/logo.svg" alt="E-moving"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location'    => 'menu_header',
                                'depth'             => 2,
                                'container'         => 'ul',
                                'container_class'   => 'navbar-nav ms-auto',
                                'container_id'      => 'menu-collapse',
                                'menu_class'        => 'navbar-nav ms-auto menu-header',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            )
                        );
                        ?>

                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="bt bt-secondary" href="<?= get_home_url(); ?>/#indique">Indique sua empresa</a></li>
                        </ul>
                    </div> <!-- navbar-collapse.// -->
                </div> <!-- container-fluid.// -->
            </nav>
        </div>
    </header>
    <?php
    $whatsapp_flutuante = get_field('whatsapp_flutuante', 'option');
    $whatsapp = get_field('whatsapp', 'option');
    $whatsapp_number = preg_replace('/\D/', '', $whatsapp)
    ?>
    <?php if ($whatsapp_flutuante && $whatsapp) : ?>
        <div class="whatsapp-flutuante" data-toggle="tooltip" data-placement="left" title="Fale conosco no Whatsapp">
            <a href="https://wa.me/<?= $whatsapp_number; ?>" target="_blank">
            </a>
        </div>
    <?php endif; ?>