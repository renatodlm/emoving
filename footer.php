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
                    <!-- <img class="footer-about-img" src="" style="width:158.79px;max-width:100%;height:auto" alt="E-mooving"> -->
                    <p class="footer-about-text text-center text-md-start">Vamos juntos transformar a mobilidade urbana!</p>
                    <ul class="footer-about-social">
                        <?php if (get_field('facebook', 'option')) : ?>
                            <li class="footer-about-social-item"> <a href="<?= get_field('facebook', 'option') ?>" target="_blank"><img class="footer-about-social-item-icon facebook" src="<?= get_template_directory_uri() ?>/img/Icons/facebook-line.svg" alt="facebook"></a></li>
                        <?php endif; ?>
                        <?php if (get_field('instagram', 'option')) : ?>
                            <li class="footer-about-social-item"><a href="<?= get_field('instagram', 'option') ?>" target="_blank"><img class="footer-about-social-item-icon instagram" src="<?= get_template_directory_uri() ?>/img/Icons/instagram.svg" alt="instagram"></a></li>
                        <?php endif; ?>
                        <?php if (get_field('youtube', 'option')) : ?>
                            <li class="footer-about-social-item"><a href="<?= get_field('youtube', 'option') ?>" target="_blank"><img class="footer-about-social-item-icon youtube" src="<?= get_template_directory_uri() ?>/img/Icons/youtube.svg" alt="youtube"></a></li>
                        <?php endif; ?>
                        <?php if (get_field('linkedin', 'option')) : ?>
                            <li class="footer-about-social-item"><a href="<?= get_field('linkedin', 'option') ?>" target="_blank"><img class="footer-about-social-item-icon linkedin" src="<?= get_template_directory_uri() ?>/img/Icons/linkedin.svg" alt="linkedin"></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 order-lg-2 order-3 d-md-block d-none">
                <div class="footer-liks">
                    <h4 class="footer-liks-title">Links úteis</h4>
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
                    <div class="footer-newsletter-content">
                        <h4 class="footer-newsletter-title">inscreva-se agora!</h4>
                        <?= do_shortcode('[contact-form-7 id="30925" title="Newsletter"]'); ?>
                    </div>
                    <ul class="footer-newsletter-social">
                        <?php if (get_field('email', 'option')) : ?>
                            <li class="footer-newsletter-social-item"><a class="footer-newsletter-social-item-link email" href="mailto:<?= get_field('email', 'option') ?>"><?= get_field('email', 'option') ?></a></li>
                        <?php endif;; ?>
                        <?php
                        $whatsapp_flutuante = get_field('whatsapp_flutuante', 'option');
                        $whatsapp = get_field('whatsapp', 'option');
                        $whatsapp_number = preg_replace('/\D/', '', $whatsapp)
                        ?>
                        <?php if ($whatsapp_flutuante && $whatsapp) : ?>
                            <li class="footer-newsletter-social-item"><a class="footer-newsletter-social-item-link whatsapp" href="https://api.whatsapp.com/send/?phone=<?= $whatsapp_number; ?>" target="_blank"><?= $whatsapp ?></a></li>
                        <?php endif; ?>
                    </ul>
                    <div class="footer-newsletter-cnpj">
                        E-MOVING - CNPJ: 22.102.480/0001-34
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>