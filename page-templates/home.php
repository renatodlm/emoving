<?php

/**
 * Template Name: Home
 *
 * The template page for Home
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
    get_template_part('template-parts/content',  'hero-page-button');

    /**
     * Como Funciona
     */

    ?>

    <div class="element-float-box home-1">

        <?php /**
         * Como Funciona
         */

        get_template_part('template-parts/content',  ' why-choise-works'); ?>
    </div>

    <?php
    /**
     * Call Action
     */
    get_template_part('template-parts/content',  'call-action');


    /**
     * Soluções
     */
    ?>
    <?php if (have_rows('solucoes')) :
        while (have_rows('solucoes')) : the_row();
    ?>
            <section class="solutions">
                <div class="solutions-container">
                    <h2 class="solutions-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">Nossa soluções corporativas</h2>

                    <?php if (have_rows('beneficio')) :
                        while (have_rows('beneficio')) : the_row();
                            $titulo = get_sub_field('titulo');
                            $texto = get_sub_field('texto');
                            $imagem = get_sub_field('imagem');
                            $src_img = $imagem['sizes']['crop-512'];
                            $botao = get_sub_field('botao');
                    ?>
                            <div class="solutions-container-item rellax" data-rellax-speed="1" style="z-index: 3;position:relative">
                                <div class="element-float-box home-2">

                                    <div class="element-float-box-item el-04 rellax" data-rellax-speed="1" style="" data-aos="zoom-out" data-aos-duration="500"></div>
                                    <div class="element-float-box-item el-011 rellax" data-rellax-speed="-1" style="" data-aos="zoom-out" data-aos-duration="500"></div>

                                    <div class="row d-flex align-items-center">
                                        <div class="col-md-5 d-flex mb-md-0 mb-4">
                                            <img class="solutions-container-item-img" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000" src="<?= $src_img ?>" alt="<?= $imagem['alt'] ?>">
                                        </div>
                                        <div class="col-md-5 offset-md-1" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                                            <h4 class="solutions-container-item-title">
                                                <?= $titulo ?>
                                            </h4>
                                            <p class="solutions-container-item-text"><?= $texto ?></p>
                                            <?php if ($botao) : ?>
                                                <a class="bt bt-secondary" href="<?php echo $botao['url']; ?>" target="<?php echo $botao['target']; ?>">
                                                    <?php echo $botao['title']; ?>
                                                </a>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php endwhile;
                    endif;
                    ?>

                    <?php if (have_rows('sharing')) :
                        while (have_rows('sharing')) : the_row();

                            $titulo = get_sub_field('titulo');
                            $texto = get_sub_field('texto');
                            $imagem = get_sub_field('imagem');
                            $src_img = $imagem['sizes']['crop-512'];
                            $botao = get_sub_field('botao');
                    ?>
                            <div class="solutions-container-item rellax" data-rellax-speed="1" style="z-index: 2;position:relative">
                                <div class="element-float-box home-3">

                                    <div class="element-float-box-item el-07 rellax" data-rellax-speed="1" style="" data-aos="zoom-out" data-aos-duration="500"></div>

                                    <div class="row d-flex align-items-center">
                                        <div class="col-md-5 offset-md-1 order-md-1 order-2" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                                            <h4 class="solutions-container-item-title">
                                                <?= $titulo ?>
                                            </h4>
                                            <p class="solutions-container-item-text"><?= $texto ?></p>
                                            <?php if ($botao) : ?>
                                                <a class="bt bt-secondary" href="<?php echo $botao['url']; ?>" target="<?php echo $botao['target']; ?>">
                                                    <?php echo $botao['title']; ?>
                                                </a>
                                            <?php endif ?>
                                        </div>
                                        <div class="col-md-5 d-flex offset-md-1 order-md-2 mb-md-0 mb-4 order-1">
                                            <img class="solutions-container-item-img" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000" src="<?= $src_img ?>" alt="<?= $imagem['alt'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php endwhile;
                    endif;
                    ?>

                    <?php if (have_rows('4work')) :
                        while (have_rows('4work')) : the_row();

                            $titulo = get_sub_field('titulo');
                            $texto = get_sub_field('texto');
                            $imagem = get_sub_field('imagem');
                            $src_img = $imagem['sizes']['crop-512'];
                            $botao = get_sub_field('botao');
                    ?>
                            <div class="solutions-container-item rellax" data-rellax-speed="1" style="z-index: 1;position:relative">
                                <div class="element-float-box home-4">
                                    <div class="element-float-box-item el-05 rellax" data-rellax-speed="1" style="" data-aos="zoom-out" data-aos-duration="500"></div>
                                    <div class="element-float-box-item el-02 rellax" data-rellax-speed="2" style="" data-aos="zoom-out" data-aos-duration="500"></div>

                                    <div class="row d-flex align-items-center">
                                        <div class="col-md-5 d-flex mb-md-0 mb-4">
                                            <img class="solutions-container-item-img" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000" src="<?= $src_img ?>" alt="<?= $imagem['alt'] ?>">
                                        </div>
                                        <div class="col-md-5 offset-md-1" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                                            <h4 class="solutions-container-item-title">
                                                <?= $titulo ?>
                                            </h4>
                                            <p class="solutions-container-item-text"><?= $texto ?></p>
                                            <?php if ($botao) : ?>
                                                <a class="bt bt-secondary" href="<?php echo $botao['url']; ?>" target="<?php echo $botao['target']; ?>">
                                                    <?php echo $botao['title']; ?>
                                                </a>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php endwhile;
                    endif;
                    ?>

                </div>
            </section>
    <?php endwhile;
    endif;
    ?>

    <?php
    /**
     * Porque escolher
     */
    get_template_part('template-parts/content',  'why-choise');


    /**
     * Contact form
     */

    get_template_part('template-parts/content',  'contact-form');
    ?>

</div><!-- End Main -->

<?php

get_footer();
