<?php

/**
 * Template Name: Home
 *
 * The template page for Home
 *
 * @package e-moving
 * @since 1.0
 */


use Classes\Call_Action;
use Classes\Page_Hero;
use Classes\Services_List;

get_header();
?>
<div class="main-body">
    <?php

    /**
     * Hero
     */

    $hero_obj = [
        'title' => 'Unimos <mark>mobilidade</mark> e <mark>qualidade</mark> de vida',
        'text' => 'O primeiro benefício corporativo de <mark>mobilidade sustentável</mark> pensado para os seus colaboradores.',
        'image' =>  get_template_directory_uri() . '/img/bikes/bike-01.png',
        'background-image' =>  get_template_directory_uri() . '/img/hero.png',
        'background-color' => '#444580',
        'before' => false,
        'after' => false,
    ];
    $button = [
        'text' => 'Agende uma apresentação',
        'link' => get_home_url() . '/#indique'
    ];

    $hero = new Page_Hero;
    echo $hero::home($hero_obj, $button);


    /**
     * Como Funciona
     */
    $infos = [
        'title' => 'Como funciona a <p><mark style="color:#FF5D02!important">assinatura E-MOVING</mark></p>',
        'text' => 'Assinatura de bicicleta elétrica para melhorar o deslocamento e a produtividade da sua empresa. Simples assim!',
        'id' => 'como-funciona'
    ];

    $query = [
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/top-left.png',
            'img_alt' => 'top-left',
            'title' => 'ESCOLHA A MELHOR SOLUÇÃO',
            'text' => 'Oferecemos três soluções corporativas para encaixar na realidade da sua empresa.',
        ],
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/calendar.png',
            'img_alt' => 'top-left',
            'title' => 'AGENDE UMA APRESENTAÇÃO',
            'text' => 'Solicite uma proposta e contrate um plano de acordo com as suas necessidades.',
        ],
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/top-right.png',
            'img_alt' => 'top-left',
            'title' => 'CONTRATE E IMPLEMENTE NA SUA EMPRESA',
            'text' => 'Solicite uma proposta e contrate um plano de acordo com as suas necessidades.',
        ],
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/bike-02.png',
            'img_alt' => 'top-left',
            'title' => 'COMECE A PEDALAR',
            'text' => 'Agora é só aproveitar os benefícios de ter uma bike elétrica e os serviços exclusivos E-Moving!',
        ]
    ];

    ?>
    <div class="element-float-box home-1">
        <?php
        $services_list = new Services_List;
        echo $services_list::get_primary_list($infos, $query);
        ?>
        <div class="element-float-box-item el-08 rellax" data-rellax-speed="1" style="" data-aos="zoom-out" data-aos-duration="500"></div>
        <div class="element-float-box-item el-010 rellax" data-rellax-speed="-2" style="" data-aos="zoom-out" data-aos-duration="500"></div>
    </div>
    <?php

    /**
     * Call Action
     */
    $text = 'Quer implementar uma <mark>mobilidade sustentável e inteligente na sua empresa?</mark> Entre em contato com a nossa equipe!';
    $button =  ['text' => 'Vamos conversar', 'url' => get_home_url() . '/#indique', 'target' => 'blank'];

    $call_action = new Call_Action;
    echo $call_action::get_call_action($text, $button);


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

    $infos2 = [
        'title' => 'Por que <mark>escolher</mark> a <p><mark>E-Moving?</mark></p>',
        'text' => 'Uma solução de mobilidade sustentável que traz benefícios para os colaboradores, para a sua empresa e para o planeta.'
    ];

    $query2 = [
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/01.svg',
            'img_alt' => 'SUSTENTABILIDADE',
            'title' => 'SUSTENTABILIDADE',
            'text' => 'Alinhada com as práticas ESG e os ODS da ONU, não emite CO²
        e é uma energia sustentável.',
        ],
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/02.svg',
            'img_alt' => 'PRATICIDADE',
            'title' => 'PRATICIDADE',
            'text' => 'A e-bike fica disponível o tempo todo para uso e conta com suporte da E-Moving.
        ',
        ],
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/03.svg',
            'img_alt' => 'SEGURANÇA',
            'title' => 'SEGURANÇA',
            'text' => 'Transporte individual com proteção contra roubo já incluso em todos os planos.',
        ],
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/04.svg',
            'img_alt' => 'VIDA',
            'title' => 'QUALIDADE DE VIDA',
            'text' => 'Fortalece o employer branding e garante o bem-estar físico e mental dos colaboradores.',
        ],
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/05.svg',
            'img_alt' => 'PREVISÍVEL',
            'title' => 'TRAJETO PREVISÍVEL',
            'text' => 'Substituindo o transporte convencional, você evita trânsito, ganha mais tempo e qualidade de vida.',
        ],
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/06.svg',
            'img_alt' => 'CUSTOS',
            'title' => 'REDUÇÃO DE CUSTOS',
            'text' => 'Economia com combustível, multas, estacionamento e outras despesas.',
        ]
    ];
    ?>
    <div class="element-float-box home-5">
        <style>

        </style>
        <div class="element-float-box-item el-08 rellax" data-rellax-speed="-1" style="" data-aos="zoom-out" data-aos-duration="500"></div>
        <div class="element-float-box-item el-01 rellax" data-rellax-speed="1" style="" data-aos="zoom-out" data-aos-duration="500"></div>
        <?php
        $services_list2 = new Services_List;
        echo $services_list2::get_secondary_list($infos2, $query2);
        ?>
    </div>

    <section class="contact-form">
        <div id="indique"></div>
        <div class="element-float-box home-6">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-md-10">
                        <div class="contact-form-content">
                            <h4 class="contact-form-content-title" data-aos="zoom-out" data-aos-delay="100" data-aos-duration="1000">Quer aproveitar os benefícios que as nossas <mark>e-bikes oferecem?</mark></h4>
                            <p class="contact-form-content-text" data-aos="zoom-out" data-aos-delay="200" data-aos-duration="1000">Para ser nosso assinante, indique a melhor pessoa da sua empresa para apresentarmos nossa solução corporativa e mediante a contratação do nosso benefício, sua empresa disponibilizará para você uma e-bike</p>
                        </div>
                        <div class="contact-form-form">
                            <?php
                            $shortcode = get_field('shortcode');
                            if (!empty($shortcode)) {
                                echo do_shortcode($shortcode);
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="element-float-box-item el-012 rellax" data-rellax-speed="-2" style="" data-aos="zoom-out" data-aos-duration="500"></div>
            <div class="element-float-box-item el-013 rellax" data-rellax-speed="-1" style="" data-aos="zoom-out" data-aos-duration="500"></div>
        </div>
    </section>

</div><!-- End Main -->



<?php

get_footer();
