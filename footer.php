<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-1">
                <div class="footer-about">
                    <picture>
                        <?php if (get_field('logo_alternativo', 'option')) :
                            $logo_mobile = get_field('logo_alternativo', 'option');
                            $src_logo_mobil = $logo_mobile['url'];
                        ?>
                            <source media="(max-width: 768px)" srcset="<?= $src_logo_mobil ?>">
                        <?php endif; ?>
                        <img class="footer-about-img" src="<?= get_template_directory_uri() ?>/img/logo-footer.svg" alt="E-mooving">
                    </picture>
                    <p class="footer-about-text text-center text-md-start"><?= get_field('footer_slogan', 'option') ?></p>
                    <?php

                    /**
                     * Social Share
                     */
                    get_template_part('template-parts/content',  'social-share');
                    ?>
                </div>
            </div>

            <div class="col-lg-4 order-lg-2 order-3 d-md-block d-none">
                <div class="footer-liks">
                    <h4 class="footer-liks-title"><?= __('Links úteis', 'emoving'); ?></h4>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location'    => 'menu_uteis',
                            'depth'             => 2,
                            'container'         => 'ul',
                            'container_class'   => 'navbar-nav ms-auto',
                            'container_id'      => 'menu-collapse',
                            'menu_class'        => 'footer-liks-menu',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        )
                    );
                    ?>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1 order-lg-3 order-3">
                <div class="footer-newsletter">

                    <?php $shortcode_newslleter = get_field('footer_newslleter', 'option');
                    if ($shortcode_newslleter) : ?>
                        <div class="footer-newsletter-content">
                            <h4 class="footer-newsletter-title"><?= __('inscreva-se agora!', 'emoving'); ?></h4>
                            <?php
                            echo do_shortcode($shortcode_newslleter);
                            ?>

                        </div>
                    <?php
                    endif;
                    ?>

                    <ul class="footer-newsletter-social">
                        <?php if (!empty(get_field('email', 'option'))) : ?>
                            <li class="footer-newsletter-social-item"><a class="footer-newsletter-social-item-link email" href="mailto:<?= get_field('email', 'option') ?>"><?= get_field('email', 'option') ?></a></li>
                        <?php endif;; ?>
                        <?php
                        $whatsapp_flutuante = get_field('whatsapp_flutuante', 'option');
                        $whatsapp = get_field('whatsapp', 'option');
                        if (!empty($whatsapp)) :
                            $whatsapp_number = preg_replace('/\D/', '', $whatsapp);
                        endif;
                        ?>
                        <?php if (!empty($whatsapp_flutuante) && !empty($whatsapp)) : ?>
                            <li class="footer-newsletter-social-item"><a class="footer-newsletter-social-item-link whatsapp" href="https://api.whatsapp.com/send/?phone=<?= $whatsapp_number; ?>" target="_blank"><?= $whatsapp ?></a></li>
                        <?php endif; ?>
                    </ul>

                    <?php if (!empty(get_field('footer_copy_text', 'option'))) : ?>
                        <div class="footer-newsletter-cnpj">
                            <?= get_field('footer_copy_text', 'option'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>