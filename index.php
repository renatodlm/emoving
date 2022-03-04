<?php

use Classes\Call_Action;
use Classes\Page_Hero;
use Classes\Services_List;

require __DIR__ . "/header.php";
?>
<div class="main-body">
    <?php

    /**
     * Hero
     */

    $hero_obj = [
        'title' => 'Unimos <mark>mobilidade</mark> e <mark>qualidade</mark> de vida',
        'text' => 'O primeiro benefício corporativo de <mark>mobilidade sustentável</mark> pensado para os seus colaboradores.',
        'image' => './img/bikes/bike-01.png',
        'background-image' => './img/hero.png',
        'background-color' => '#444580',
        'before' => false,
        'after' => false,
    ];
    $button = [
        'text' => 'Agende uma apresentação',
        'link' => '#'
    ];

    $hero = new Page_Hero;
    echo $hero::home($hero_obj, $button);


    /**
     * Como Funciona
     */
    $infos = [
        'title' => 'Como funciona a <p><mark>assinatura E-MOVING</mark></p>',
        'text' => '',
        'id' => 'como-funciona'
    ];

    $query = [
        [
            'img_url' => './img/elements/top-left.png',
            'img_alt' => 'top-left',
            'title' => 'ESCOLHA A MELHOR SOLUÇÃO',
            'text' => 'Oferecemos três soluções corporativas para encaixar na realidade da sua empresa.',
        ],
        [
            'img_url' => './img/elements/calendar.png',
            'img_alt' => 'top-left',
            'title' => 'AGENDE UMA APRESENTAÇÃO',
            'text' => 'Solicite uma proposta e contrate um plano de acordo com as suas necessidades.',
        ],
        [
            'img_url' => './img/elements/top-right.png',
            'img_alt' => 'top-left',
            'title' => 'CONTRATE E IMPLEMENTE NA SUA EMPRESA',
            'text' => 'Solicite uma proposta e contrate um plano de acordo com as suas necessidades.',
        ],
        [
            'img_url' => './img/elements/bike-02.png',
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
        <div class="element-float-box-item el-08 rellax" data-rellax-speed="-1" style="" data-aos="zoom-out" data-aos-duration="500"></div>
        <div class="element-float-box-item el-010 rellax" data-rellax-speed="-3" style="" data-aos="zoom-out" data-aos-duration="500"></div>
    </div>
    <?php

    /**
     * Call Action
     */
    $text = 'Quer implementar uma <mark>mobilidade sustentável e inteligente na sua empresa?</mark> Entre em contato com a nossa equipe!';
    $button =  ['text' => 'Vamos conversar', 'url' => 'http://localhost/emoving/', 'target' => 'blank'];

    $call_action = new Call_Action;
    echo $call_action::get_call_action($text, $button);


    /**
     * Soluções
     */
    ?>
    <section class="solutions">
        <div class="solutions-container">
            <h2 class="solutions-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">Nossa soluções corporativas</h2>

            <div class="solutions-container-item rellax" data-rellax-speed="1" style="z-index: 3;position:relative">
                <div class="element-float-box home-2">

                    <div class="element-float-box-item el-04 rellax" data-rellax-speed="3" style="" data-aos="zoom-out" data-aos-duration="500"></div>
                    <div class="element-float-box-item el-011 rellax" data-rellax-speed="-3" style="" data-aos="zoom-out" data-aos-duration="500"></div>

                    <div class="row d-flex align-items-center">
                        <div class="col-md-5 d-flex mb-md-0 mb-4">
                            <img class="solutions-container-item-img" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000" src="./img/bikes/solution-03.png" alt="solutions">
                        </div>
                        <div class="col-md-5 offset-md-1" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                            <h4 class="solutions-container-item-title">
                                E-BIKE BENEFÍCIO
                            </h4>
                            <p class="solutions-container-item-text">Nessa modalidade as bikes elétricas serão utilizadas de maneira coletiva e ficarão disponíveis para compartilhamento interno. Uma solução muito comum em co-working, hotéis e empresas que visam facilitar o deslocamento de seus colaboradores promovendo sustentabilidade e praticidade.</p>
                            <a class="bt bt-secondary" href="./beneficio.php">Quero saber mais</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="solutions-container-item rellax" data-rellax-speed="1" style="z-index: 2;position:relative">
                <div class="element-float-box home-3">

                    <div class="element-float-box-item el-07 rellax" data-rellax-speed="3" style="" data-aos="zoom-out" data-aos-duration="500"></div>

                    <div class="row d-flex align-items-center">
                        <div class="col-md-5 offset-md-1 order-md-1 order-2" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                            <h4 class="solutions-container-item-title">
                                E-BIKE SHARING
                            </h4>
                            <p class="solutions-container-item-text">Nessa modalidade as bikes elétricas proporcionam aos funcionários da sua empresa uma mudança na qualidade de vida com acessos exclusivos à assinatura mensal de uma e-bike. Escolhendo essa solução, cada colaborador realiza o processo de contratação diretamente com a E-Moving.</p>
                            <a class="bt bt-secondary" href="./sharing.php">Quero saber mais</a>
                        </div>
                        <div class="col-md-5 d-flex offset-md-1 order-md-2 mb-md-0 mb-4 order-1">
                            <img class="solutions-container-item-img" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000" src="./img/bikes/solution-02.png" alt="solutions">
                        </div>
                    </div>
                </div>
            </div>

            <div class="solutions-container-item rellax" data-rellax-speed="1" style="z-index: 1;position:relative">
                <div class="element-float-box home-4">
                    <div class="element-float-box-item el-05 rellax" data-rellax-speed="3" style="" data-aos="zoom-out" data-aos-duration="500"></div>
                    <div class="element-float-box-item el-02 rellax" data-rellax-speed="-3" style="" data-aos="zoom-out" data-aos-duration="500"></div>

                    <div class="row d-flex align-items-center">
                        <div class="col-md-5 d-flex mb-md-0 mb-4">
                            <img class="solutions-container-item-img" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000" src="./img/bikes/solution-01.png" alt="solutions">
                        </div>
                        <div class="col-md-5 offset-md-1" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                            <h4 class="solutions-container-item-title">
                                E-BIKE 4 WORK
                            </h4>
                            <p class="solutions-container-item-text">Nessa modalidade as bikes elétricas podem ser utilizadas de maneira individual ou coletiva para uma finalidade em comum como rotas, last mile ou abastecimento. A implementação é feita dentro da empresa e contribui para a redução de custos operacionais, aumenta a produtividade e promove a sustentabilidade com as práticas ESG.</p>
                            <a class="bt bt-secondary" href="./4work.php">Quero saber mais</a>
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
            'img_url' => './img/elements/01.svg',
            'img_alt' => 'SUSTENTABILIDADE',
            'title' => 'SUSTENTABILIDADE',
            'text' => 'Alinhada com as práticas ESG e os ODS da ONU, não emite CO²
        e é uma energia sustentável.',
        ],
        [
            'img_url' => './img/elements/02.svg',
            'img_alt' => 'PRATICIDADE',
            'title' => 'PRATICIDADE',
            'text' => 'A e-bike fica disponível o tempo todo para uso e conta com suporte da E-Moving.
        ',
        ],
        [
            'img_url' => './img/elements/03.svg',
            'img_alt' => 'SEGURANÇA',
            'title' => 'SEGURANÇA',
            'text' => 'Solicite uma proposta e contrate um plano de acordo com as suas necessidades.',
        ],
        [
            'img_url' => './img/elements/04.svg',
            'img_alt' => 'VIDA',
            'title' => 'QUALIDADE DE VIDA',
            'text' => 'Fortalece o employer branding e garante o bem-estar físico e mental dos colaboradores.',
        ],
        [
            'img_url' => './img/elements/05.svg',
            'img_alt' => 'PREVISÍVEL',
            'title' => 'TRAJETO PREVISÍVEL',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et placerat leo. Pellentesque egestas nunc pretium tellus ullamcorper luctus.',
        ],
        [
            'img_url' => './img/elements/06.svg',
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
        <div class="element-float-box-item el-01 rellax" data-rellax-speed="2" style="" data-aos="zoom-out" data-aos-duration="500"></div>
        <?php
        $services_list2 = new Services_List;
        echo $services_list2::get_secondary_list($infos2, $query2);
        ?>
    </div>

    <section class="contact-form">
        <div class="element-float-box home-6">
            <div class="element-float-box-item el-012 rellax" data-rellax-speed="-2" style="" data-aos="zoom-out" data-aos-duration="500"></div>
            <div class="element-float-box-item el-013 rellax" data-rellax-speed="2" style="" data-aos="zoom-out" data-aos-duration="500"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-md-10">
                        <div class="contact-form-content rellax" data-rellax-speed="0">
                            <h4 class="contact-form-content-title" data-aos="zoom-out" data-aos-delay="100" data-aos-duration="1000">Quer utilizar nossa <mark>e-bike?</mark></h4>
                            <p class="contact-form-content-text" data-aos="zoom-out" data-aos-delay="200" data-aos-duration="1000">Para ser nosso assinante, indique a melhor pessoa da sua empresa para apresentarmos nossa solução corporativa e mediante a contratação do nosso benefício, sua empresa disponibilizará para você uma e-bike</p>
                        </div>
                        <div class="contact-form-form">
                            <form action="">
                                <div data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                                    <div class="mb-3">
                                        <input type="text" id="nome" placeholder="Seu nome completo">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" id="email" placeholder="Digite seu melhor email ( corporativo preferencialmente):">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" id="telefone" placeholder="Seu telefone/Whatsapp">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" id="nome-responsavel" placeholder="Nome do responsável da empresa ( o mais indicado para falarmos da implementação das -bikes):">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" id="email-responsavel" placeholder="Email corporativo do responsável:">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" id="telefone-responsavel" placeholder="Telefone/whatsapp corporativo do responsável:">
                                    </div>
                                </div>
                                <div data-aos="zoom-out" data-aos-delay="500" data-aos-duration="1000">
                                    <input type="submit" class="bt bt-primary" value="Enviar agora">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div><!-- End Main -->

<?php

require __DIR__ . "/footer.php";
