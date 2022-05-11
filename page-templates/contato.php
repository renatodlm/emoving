<?php

/**
 * Template Name: Contato
 *
 * The template page for Contato
 *
 * @package e-moving
 * @since 1.0
 */

get_header();
?>
<div class="main-body">
    <?php

    /**
     * Hero
     */
    get_template_part('template-parts/content',  'hero-page-text');

    ?>

    <?php get_template_part('template-parts/content',  'contact-form'); ?>

    <?php if (have_rows('imprensa')) :
        while (have_rows('imprensa')) : the_row();
    ?>
            <section class="imprensa">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <div class="imprensa-box">

                                <div class="imprensa-box-title"><?= get_sub_field('name') ?></div>

                                <ul class="imprensa-box-contato">

                                    <?php if (!empty(get_sub_field('email_1'))) : ?>
                                        <li class="imprensa-box-contato-item"><a href="mailto:<?= get_sub_field('email_1') ?>"><?= get_sub_field('email_1') ?></a></li>
                                    <?php endif;

                                    if (!empty(get_sub_field('email_1'))) : ?>
                                        <li class="imprensa-box-contato-item"><a href="mailto:<?= get_sub_field('email_2') ?>"><?= get_sub_field('email_2') ?></a></li>
                                    <?php endif; ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <?php endwhile;
    endif; ?>

</div>
<?php

get_footer();
