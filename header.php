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
            <nav class="navbar navbar-expand-md navbar-dark">
                <div class="container-fluid px-2">
                    <a class="navbar-brand" href="<?= get_home_url() ?>">
                        <picture>
                            <?php if (get_field('logo_alternativo', 'option')) :
                                $logo_mobile = get_field('logo_alternativo', 'option');
                                $src_logo_mobil = $logo_mobile['url'];
                            ?>
                                <source media="(max-width: 768px)" srcset="<?= $src_logo_mobil ?>">
                            <?php endif; ?>
                            <img src="<?= get_template_directory_uri() ?>/img/logo.svg" alt="E-moving">
                        </picture>
                    </a>
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

                        <ul class="navbar-nav d-xxl-block d-none">
                            <li class="nav-item"><a class="bt bt-secondary" href="<?= get_home_url(); ?>/#indique">Indique sua empresa</a></li>
                        </ul>
                    </div> <!-- navbar-collapse.// -->
                </div> <!-- container-fluid.// -->
            </nav>

            <nav id="nav-menu-container">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'    => 'menu_header',
                        'menu_class'      => 'nav-menu',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                    )
                );
                ?>
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