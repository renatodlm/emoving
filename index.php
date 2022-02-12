<?php

use Classes\Call_Action;
use Classes\Services_List;

require __DIR__ . "/header.php";

/**
 * Como Funciona
 */
$infos = [
    'title' => 'Como funciona a <p><mark>assinatura E-MOVING</mark></p>',
    'text' => ''
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
$services_list = new Services_List;
echo $services_list::get_primary_list($infos, $query);


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



require __DIR__ . "/footer.php";
