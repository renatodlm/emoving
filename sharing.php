<?php

use Classes\Call_Action;
use Classes\Page_Hero;
use Classes\Services_List;

require __DIR__ . "/header.php";

/**
 * Hero
 */

$default_obj = [
    'title' => 'E-Bike Sharing',
    'text' => '<p><strong>Compartilhando qualidade de vida</strong></p>Um diferencial competitivo no mercado, a mobilidade compartilhada privada melhora o employer branding da empresa proporcionando mais agilidade nos deslocamentos.',
    'background-image' => './img/sharing.png',
    'background-color' => '#444580',
    'before' => false,
    'after' => true,
    'link' => '#junte-sua-energia'
];
$text = 'Plano de assinatura mensal de bicicleta elétrica. Simples assim!
Diversos benefícios em um só transporte.';

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
        'img_url' => './img/elements/calendar-tiem.png',
        'img_alt' => 'top-left',
        'title' => 'TEMPO TODO COM VOCÊ',
        'text' => 'Oferecemos três soluções corporativas para encaixar na realidade da sua empresa.',
    ],
    [
        'img_url' => './img/elements/leva-e-traz.png',
        'img_alt' => 'top-left',
        'title' => 'LEVA E TRAZ',
        'text' => 'Entrega, retirada e substituição de e-bike na empresa, cobrando apenas o valor do frete.',
    ],
    [
        'img_url' => './img/elements/segurança.png',
        'img_alt' => 'top-left',
        'title' => 'PROTEÇÃO CONTRA ROUBO',
        'text' => 'O colaborador está protegido contra furto qualificado e/ou roubo da e-bike.',
    ],
    [
        'img_url' => './img/elements/tools.png',
        'img_alt' => 'top-left',
        'title' => 'MANUTENÇÃO INCLUSA',
        'text' => 'Nossa equipe fornece esse serviço diretamente na empresa, sem custo adicional.',
    ],
    [
        'img_url' => './img/elements/bike-02.png',
        'img_alt' => 'top-left',
        'title' => 'TRANSPORTE IDEAL',
        'text' => 'Feita para deslocamentos diários, para last&first mile, rotas de vendedores e de abastecimento.',
    ],
    [
        'img_url' => './img/elements/personaliza.png',
        'img_alt' => 'top-left',
        'title' => 'PERSONALIZAÇÃO',
        'text' => 'A empresa recebe onboarding, treinamento de boas práticas e acesso a plataforma de controle.',
    ]
];
$services_list = new Services_List;
echo $services_list::get_primary_list3($infos, $query);


/**
 * Call Action
 */
$text = 'Quer implementar uma <mark>mobilidade sustentável e inteligente na sua empresa?</mark> Entre em contato com a nossa equipe!';
$button =  ['text' => 'Vamos conversar', 'url' => 'http://localhost/emoving/', 'target' => 'blank'];

$call_action = new Call_Action;
echo $call_action::get_call_action($text, $button);


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

$services_list2 = new Services_List;
echo $services_list2::get_secondary_list($infos2, $query2);

?>

<section class="contact-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-md-10">
                <div class="contact-form-content">
                    <h4 class="contact-form-content-title">Quer utilizar nossa <mark>e-bike?</mark></h4>
                    <p class="contact-form-content-text">Para ser nosso assinante, indique a melhor pessoa da sua empresa para apresentarmos nossa solução corporativa e mediante a contratação do nosso benefício, sua empresa disponibilizará para você uma e-bike</p>
                </div>
                <div class="contact-form-form">
                    <form action="">
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

                        <input type="submit" class="bt bt-primary" value="Enviar agora">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

require __DIR__ . "/footer.php";
