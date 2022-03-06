<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 order-1">
                <div class="footer-about">
                    <img class="footer-about-img" src="<?= get_template_directory_uri() ?>/img/logo-footer.svg" style="width:158.79px;max-width:100%;height:auto" alt="E-mooving">
                    <p class="footer-about-text">Venha com a E-Moving revolucionar a mobilidade urbana e-reinventar a roda.</p>
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

            <div class="col-xl-4 order-xl-2 order-3">
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
            <div class="col-xl-4 offset-xl-1 order-xl-3 order-2">
                <div class="footer-newsletter">
                    <h4 class="footer-newsletter-title">inscreva-se agora!</h4>
                    <form action="" class="footer-newsletter-form">
                        <input type="text" placeholder="Digite seu melhor e-mail"><input class="bt bt-primary" type="submit" value="Enviar agora">
                    </form>
                    <ul class="footer-newsletter-social">
                        <?php if (get_field('email', 'option')) : ?>
                            <li class="footer-newsletter-social-item"><a class="footer-newsletter-social-item-link email" href="mailto:<?= get_field('email', 'option') ?>"><?= get_field('email', 'option') ?></a></li>
                        <?php endif;; ?>
                        <li class="footer-newsletter-social-item"><a class="footer-newsletter-social-item-link whatsapp" href="https://api.whatsapp.com/send/?phone=5511993943475" target="_blank">+55 11 99394-3475</a></li>
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