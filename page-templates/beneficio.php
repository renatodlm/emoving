<?php

/**
 * Template Name: Benefício
 *
 * The template page for benefício
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

    $default_obj = [
        'title' => 'E-Bike Benefício',
        'text' => '<p><strong>Mais bem-estar a cada pedalada!</strong></p>Um benefício corporativo diferenciado para seus colaboradores e sua empresa, o vale-transporte sustentável é tendência no mercado melhorando o employer branding e apoiando o meio ambiente.',
        'background-image' =>  get_template_directory_uri() . '/img/beneficio.png',
        'background-color' => '#444580',
        'before' => false,
        'after' => true,
        'link' => '#junte-sua-energia'
    ];
    $text = '<p>No modelo BENEFÍCIO, as bikes elétricas proporcionam uma verdadeira mudança na qualidade de vida dos colaboradores da sua empresa que trocam o estresse e o trânsito, por mais tempo ao ar livre, mais saúde e bem-estar.  

    </p><p>Nesta solução, o colaborador pode utilizar a e-bike como e onde quiser: trabalho, atividades diárias, lazer, entre outros. O modelo BENEFÍCIO também pode ser oferecido como substituição do vale transporte, sua empresa estará promovendo melhores condições e incentivando atividades ao ar livre.
    </p>';

    $hero = new Page_Hero;
    echo $hero::default($default_obj, $text);


    /**
     * Junte sua energia
     */
    $infos = [
        'title' => '<p>Junte <mark>sua energia</mark> com a <mark>nossa!</mark></p>',
        'text' => '',
        'id' => 'junte-sua-energia'
    ];

    $query = [
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/people.png',
            'img_alt' => 'top-left',
            'title' => 'BENEFÍCIO DO COLABORADOR',
            'text' => 'A e-bike fica o tempo todo com o colaborador para ser usada quando e onde preferir.',
        ],
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/leva-e-traz.png',
            'img_alt' => 'top-left',
            'title' => 'LEVA E TRAZ',
            'text' => 'Entrega, retirada e substituição de e-bike na empresa, cobrando apenas o valor do frete.',
        ],
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/segurança.png',
            'img_alt' => 'top-left',
            'title' => 'PROTEÇÃO CONTRA ROUBO',
            'text' => 'O colaborador está protegido contra furto qualificado e/ou roubo da e-bike.',
        ],
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/tools.png',
            'img_alt' => 'top-left',
            'title' => 'MANUTENÇÃO INCLUSA',
            'text' => 'Nossa equipe fornece esse serviço diretamente na empresa, sem custo adicional.',
        ],
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/bike-02.png',
            'img_alt' => 'top-left',
            'title' => 'TRANSPORTE IDEAL',
            'text' => 'Feita para deslocamentos diários, para last&first mile, rotas de vendedores e de abastecimento.',
        ],
        [
            'img_url' =>  get_template_directory_uri() . '/img/elements/personaliza.png',
            'img_alt' => 'top-left',
            'title' => 'PERSONALIZAÇÃO',
            'text' => 'A empresa recebe onboarding, treinamento de boas práticas e acesso a plataforma de controle.',
        ]
    ];
    $services_list = new Services_List;
    ?>
    <div class="element-float-box">
        <div class="element-float-box-item el-010 rellax" data-rellax-speed="-2" style="top:0px;right:0;margin-top:100px;margin-right: 0;" data-aos="zoom-out" data-aos-duration="500"></div>
        <div class="element-float-box-item el-09 rellax" data-rellax-speed="2" style="left:0;bottom:0;margin-left:-100px;margin-bottom:400px" data-aos="zoom-out" data-aos-duration="500"></div>
        <?php
        echo $services_list::get_primary_list3($infos, $query);
        ?>
    </div>
    <?php



    /**
     * Call Action
     */
    $text = 'Quer implementar uma <mark>mobilidade sustentável e inteligente na sua empresa?</mark> Entre em contato com a nossa equipe!';
    $button =  ['text' => 'Vamos conversar', 'url' => get_home_url() . '/#indique', 'target' => 'blank'];

    $call_action = new Call_Action;
    ?>
    <div class="element-float-box">
        <div class="element-float-box-item el-011 rellax" data-rellax-speed="2" style="top:0px;right:0;margin-top:100px;margin-right: 0px;" data-aos="zoom-out" data-aos-duration="500"></div>
        <div class="element-float-box-item el-04 rellax" data-rellax-speed="2" style="left:0;bottom:0;margin-left:-200px;margin-bottom:-300px" data-aos="zoom-out" data-aos-duration="500"></div>
        <?php
        echo $call_action::get_call_action($text, $button);
        ?>
    </div>
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

    $services_list2 = new Services_List;
    ?>
    <div class="container">
        <div class="element-float-box">
            <div class="element-float-box-item el-06 rellax" data-rellax-speed="2" style="top:0px;left:0;margin-top:300px;margin-right: 0px;" data-aos="zoom-out" data-aos-duration="500"></div>
            <div class="element-float-box-item el-07 rellax" data-rellax-speed="1" style="right:0;bottom:0;margin-left:-200px;margin-bottom:0px" data-aos="zoom-out" data-aos-duration="500"></div>
            <?php
            echo $services_list2::get_secondary_list($infos2, $query2);
            ?>
        </div>
    </div>

    <section class="contact-form">
        <div class="element-float-box">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-md-10">
                        <div class="contact-form-content rellax" data-rellax-speed="0">
                            <h4 class="contact-form-content-title" data-aos="zoom-out" data-aos-delay="100" data-aos-duration="1000">Quer aproveitar os benefícios que as nossas <mark>e-bikes oferecem?</mark></h4>
                            <p class="contact-form-content-text" data-aos="zoom-out" data-aos-delay="200" data-aos-duration="1000">Quer aproveitar os benefícios que as nossas e-bikes oferecem?
                                <br>Indique para sua empresa nossas soluções corporativas.
                            </p>
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
            <div class="element-float-box-item el-05 rellax" data-rellax-speed="-2" style="top:0px;left:0;margin-top:-100px;margin-left: -100px;" data-aos="zoom-out" data-aos-duration="500"></div>
            <div class="element-float-box-item el-03 rellax" data-rellax-speed="-2" style="right:0;top:0;margin-top:200px" data-aos="zoom-out" data-aos-duration="500"></div>
        </div>
    </section>
</div>
<?php

get_footer();
