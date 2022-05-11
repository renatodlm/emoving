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