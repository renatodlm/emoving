<?php

/**
 * Template Name: Como Funciona
 *
 * The template page for Como Funciona
 *
 * @package e-moving
 * @since 2.0
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
        'title' => 'Unimos mobilidade e qualidade de vida',
        'text' => 'O primeiro benefício corporativo de mobilidade sustentável pensado para os seus colaboradores.',
        'background-image' =>  get_template_directory_uri() . '/img/como-funciona.png',
        'background-color' => '#444580',
        'before' => false,
        'after' => true,
    ];
    $button = [
        'text' => 'Agende uma apresentação',
        'link' => '#'
    ];

    $hero = new Page_Hero;
    echo $hero::home($hero_obj, $button);

    ?>
    <div class="element-float-box como-funciona-1">
        <style>
            .como-funciona-1 .el-010 {
                top: 0px;
                right: 0;
                margin-top: 200px;
                margin-right: 0;
            }

            @media(max-width:1400px) {
                .como-funciona-1 .el-010 {
                    margin-top: 300px;
                    margin-right: -150px;
                }
            }

            .como-funciona-1 .el-08 {
                left: 0;
                bottom: 0;
                margin-left: -50px;
                margin-bottom: 200px
            }

            @media(max-width:1400px) {
                .como-funciona-1 .el-08 {
                    margin-left: -150px;
                }
            }
        </style>
        <div class="element-float-box-item el-010 rellax" data-rellax-speed="-2" style="" data-aos="zoom-out" data-aos-duration="500"></div>
        <div class="element-float-box-item el-08 rellax" data-rellax-speed="-2" style="" data-aos="zoom-out" data-aos-duration="500"></div>
        <div id="videos" class="videos">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <?php
                    $video = get_field('video');
                    preg_match('/src="(.+?)"/', $video, $matches_url);
                    $src = $matches_url[1];
                    preg_match('/embed(.*?)?feature/', $src, $matches_id);
                    $id = $matches_id[1];
                    $id = str_replace(str_split('?/'), '', $id);
                    $video = preg_replace('~<iframe[^>]*\K(?=src)~i', 'data-', $video);
                    $video = str_replace('youtube.com/embed/', 'youtube-nocookie.com/embed/', $video);
                    ?>
                    <div class="col-lg-8 col-md-10 coluna-video" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?= '1'; ?>00">
                        <div class="videos-box">
                            <div class="videos-thumb shadow-lg" style="background-image: url(https://img.youtube.com/vi/<?= $id; ?>/maxresdefault.jpg)">
                                <div class="videos-thumb-play-button">
                                </div>
                                <div class="videos-thumb-overlay"></div>
                            </div>
                            <div class="videos-embed">
                                <?= $video; ?>
                            </div>
                            <h3 class="videos-title">Olá, nós somos a<br>
                                <mark>E-Moving!</mark>
                            </h3>
                            <p class="videos-text">A primeira empresa de assinatura de bicicletas elétricas do Brasil! Nascemos em 2015 para transformar a mobilidade urbana e levar mais qualidade de vida para as pessoas. Junte-se a nós!</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php

    /**
     * Como Funciona
     */
    $infos = [
        'title' => 'Como funciona a <br>assinatura da nossa e-bike',
        'text' => 'Confira como é fácil assinar sua e-bike e sair pedalando por aí',
        'id' => 'como-funciona'
    ];

    $query = [
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/indique.png',
            'img_alt' => 'top-left',
            'title' => 'INDIQUE SUA EMPRESA',
            'text' => 'Oferecemos três soluções corporativas que irão melhorar a realidade de mobilidade de cada empresa e colaborador',
        ],
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/card.png',
            'img_alt' => 'top-left',
            'title' => 'RECEBIMENTO DA E-BIKE',
            'text' => 'Após cadastro realizado, o colaborador ou empresa agendará um dia e horário para receber ou retirar a nossa e-bike',
        ],
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/recebimento.png',
            'img_alt' => 'top-left',
            'title' => 'RECEBIMENTO DA E-BIKE',
            'text' => 'Após cadastro realizado, o colaborador ou empresa agendará um dia e horário para receber ou retirar a nossa e-bike',
        ],
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/bike-02.png',
            'img_alt' => 'top-left',
            'title' => 'APROVEITE SUA E-BIKE',
            'text' => 'Ao receber a e-bike, empresa e/ou colaborador aproveitarão seu trajeto diáriode forma mais eficiente e nos auxiliando na missão de reduzir o CO²',
        ]
    ];
    $services_list = new Services_List;
    echo $services_list::get_primary_list($infos, $query);


    /**
     * Call Action
     */
    $text = 'Quer implementar uma <mark>mobilidade sustentável e inteligente na sua empresa?</mark> Entre em contato com a nossa equipe!';
    $button =  ['text' => 'Vamos conversar', 'url' => get_home_url() . '/#indique', 'target' => 'blank'];

    $call_action = new Call_Action;
    ?>
    <div class="element-float-box como-funciona-2">
        <style>
            .como-funciona-2 .el-011 {
                top: 0px;
                right: 0;
                margin-top: 100px;
                margin-right: 0px;
            }

            @media(max-width:1400px) {
                .como-funciona-2 .el-011 {
                    margin-top: 250px;
                    margin-right: -50px;
                }
            }
        </style>
        <div class="element-float-box-item el-011 rellax" data-rellax-speed="2" style="" data-aos="zoom-out" data-aos-duration="500"></div>
        <?php
        echo $call_action::get_call_action($text, $button);
        ?>
    </div>
    <?php


    /**
     * E-bikes
     */
    ?>

    <section class="e-bikes">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="element-float-box e-bikes-1">
                        <style>
                            .e-bikes-1 .el-010 {
                                left: 0;
                                bottom: 0;
                                margin-left: -300px;
                                margin-bottom: 300px
                            }

                            .e-bikes-1 .el-03 {
                                right: 0;
                                bottom: 0;
                                margin-bottom: -50px;
                                margin-right: -400px
                            }
                        </style>
                        <div class="element-float-box-item el-010 rellax" data-rellax-speed="2" style="" data-aos="zoom-out" data-aos-duration="500"></div>
                        <div class="element-float-box-item el-03 rellax" data-rellax-speed="2" style="" data-aos="zoom-out" data-aos-duration="500"></div>
                        <div class="e-bikes-item">
                            <div class="e-bikes-item-title" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">Bolt</div>
                            <div class="e-bikes-item-box">
                                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
                                    <div class="col-xl-10 px-xl-0">
                                        <img class="e-bikes-item-box-img" src="<?= get_template_directory_uri() ?>/img/bikes/Bike-Bolt.png" alt="Bolt">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="element-float-box e-bikes-2">
                    <style>
                        .e-bikes-2 .el-04 {
                            left: 0;
                            bottom: 0;
                            margin-left: -300px;
                            margin-bottom: -200px
                        }
                    </style>
                    <div class="element-float-box-item el-04 rellax" data-rellax-speed="2" style="" data-aos="zoom-out" data-aos-duration="500"></div>
                    <div class="e-bikes-item mb-5">
                        <div class="e-bikes-item-title" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">Comfort</div>
                        <div class="e-bikes-item-box">
                            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000">
                                <div class="col-xl-9 px-xl-0">
                                    <img class="e-bikes-item-box-img" src="<?= get_template_directory_uri() ?>/img/bikes/Bike-comfort.png" alt="Comfort">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php


    /**
     * Porque escolher
     */

    $infos2 = [
        'title' => 'Por que <mark>escolher</mark> a <p><mark>E-MOVING</mark></p>',
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
            'text' => 'Solicite uma proposta e contrate um plano de acordo com as suas necessidades.',
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
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et placerat leo. Pellentesque egestas nunc pretium tellus ullamcorper luctus.',
        ],
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/06.svg',
            'img_alt' => 'CUSTOS',
            'title' => 'REDUÇÃO DE CUSTOS',
            'text' => 'Economia com combustível, multas, estacionamento e outras despesas.',
        ]
    ];

    $services_list2 = new Services_List;
    ?>
    <div class="container">
        <div class="element-float-box como-funciona-3">
            <style>
                .como-funciona-3 .el-06 {
                    top: 0px;
                    left: 0;
                    margin-top: 300px;
                    margin-right: 0px;
                }

                @media(max-width:1400px) {}

                .como-funciona-3 .el-07 {
                    right: 0;
                    bottom: 0;
                    margin-left: -200px;
                    margin-bottom: 0px
                }

                @media(max-width:1400px) {}
            </style>
            <div class="element-float-box-item el-06 rellax" data-rellax-speed="2" style="" data-aos="zoom-out" data-aos-duration="500"></div>
            <div class="element-float-box-item el-07 rellax" data-rellax-speed="1" style="" data-aos="zoom-out" data-aos-duration="500"></div>
            <?php
            echo $services_list2::get_secondary_list($infos2, $query2);

            ?>
        </div>
    </div>
    <?php

    /**
     * Call Action
     */
    $text = 'Quer implementar uma <mark>mobilidade sustentável e inteligente na sua empresa?</mark> Entre em contato com a nossa equipe!';
    $button = ['text' => 'Vamos conversar', 'url' => get_home_url() . '/#indique', 'target' => 'blank'];

    $call_action = new Call_Action;
    ?>
    <div class="element-float-box como-funciona-4">
        <style>
            .como-funciona-4 .el-05 {
                left: 0;
                bottom: 0;
                margin-left: -100px;
                margin-bottom: -100px
            }

            @media(max-width:1400px) {
                .como-funciona-4 .el-05 {
                    margin-left: -200px;
                }
            }
        </style>
        <div class="element-float-box-item el-05 rellax" data-rellax-speed="-2" style="" data-aos="zoom-out" data-aos-duration="500"></div>
        <?php
        echo $call_action::get_call_action($text, $button);
        ?>
    </div>

    <div class="element-float-box como-funciona-5">
        <style>
            .como-funciona-5 .el-02 {
                right: 0;
                bottom: 0;
                margin-right: 50px;
                margin-bottom: 300px;
            }

            @media(max-width:1400px) {
                .como-funciona-5 .el-02 {
                    margin-right: -100px;
                }
            }
        </style>
        <div class="element-float-box-item el-02 rellax" data-rellax-speed="2" style="" data-aos="zoom-out" data-aos-duration="500"></div>
        <section class="my-account">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-6 order-md-1 order-2">
                        <div class="my-account-content" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                            <h3 class="my-account-content-title">Você no <mark>controle</mark> da sua <mark>assinatura!</mark></h3>
                            <p class="my-account-content-text">Ao se cadastrar e receber a e-bike você terá 100% de acesso à sua assinatura na área MINHA CONTA! Acesse nosso atendimento e nossos serviços por lá! É muito prático!</p>
                            <a class="bt bt-primary" href="#">Minha conta</a>
                        </div>
                    </div>
                    <div class="col-md-5 order-md-2 order-1">
                        <div class="my-account-img" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                            <img src="<?= get_template_directory_uri() ?>/img/mobile.png" alt="minha conta">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php

get_footer();
