<?php

use Classes\Call_Action;
use Classes\Page_Hero;
use Classes\Services_List;

require __DIR__ . "/header.php";

/**
 * Hero
 */

$hero_obj = [
    'title' => 'Unimos mobilidade e qualidade de vida',
    'text' => 'O primeiro benefício corporativo de mobilidade sustentável pensado para os seus colaboradores.',
    'background-image' => './img/como-funciona.png',
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
<div id="videos" class="videos">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <?php
            $video = 'https://www.youtube.com/watch?v=raV0IvfCGyg';
            preg_match('/src="(.+?)"/', $video, $matches_url);
            $src = $matches_url[1];
            preg_match('/embed(.*?)?feature/', $src, $matches_id);
            $id = $matches_id[1];
            $id = str_replace(str_split('?/'), '', $id);
            $video = preg_replace('~<iframe[^>]*\K(?=src)~i', 'data-', $video);
            $video = str_replace('youtube.com/embed/', 'youtube-nocookie.com/embed/', $video);
            ?>
            <div class="col-lg-4 col-md-6 coluna-video" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?= $n; ?>00">
                <div class="video-thumb" style="background-image: url(https://img.youtube.com/vi/<?= $id; ?>/hqdefault.jpg)">
                    <div class="play-button">
                        <i class="flaticon-play fi"></i>
                    </div>
                    <div class="overlay"></div>
                </div>
                <div class="video-embed">
                    <?= $video; ?>
                </div>
                <h3 class="titulo-video">Olá, nós somos a
                    E-Moving!</h3>
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
        'img_url' => './img/elements/indique.png',
        'img_alt' => 'top-left',
        'title' => 'INDIQUE SUA EMPRESA',
        'text' => 'Oferecemos três soluções corporativas que irão melhorar a realidade de mobilidade de cada empresa e colaborador',
    ],
    [
        'img_url' => './img/elements/card.png',
        'img_alt' => 'top-left',
        'title' => 'RECEBIMENTO DA E-BIKE',
        'text' => 'Após cadastro realizado, o colaborador ou empresa agendará um dia e horário para receber ou retirar a nossa e-bike',
    ],
    [
        'img_url' => './img/elements/recebimento.png',
        'img_alt' => 'top-left',
        'title' => 'RECEBIMENTO DA E-BIKE',
        'text' => 'Após cadastro realizado, o colaborador ou empresa agendará um dia e horário para receber ou retirar a nossa e-bike',
    ],
    [
        'img_url' => './img/elements/bike-02.png',
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
$button =  ['text' => 'Vamos conversar', 'url' => 'http://localhost/emoving/', 'target' => 'blank'];

$call_action = new Call_Action;
echo $call_action::get_call_action($text, $button);


/**
 * E-bikes
 */
?>

<section class="e-bikes">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="e-bikes-item">
                    <div class="e-bikes-item-title">Bolt</div>
                    <div class="e-bikes-item-box">
                        <div class="row justify-content-center">
                            <div class="col-xl-10 px-xl-0">
                                <img class="e-bikes-item-box-img" src="./img/bikes/Bike-Bolt.png" alt="Bolt">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="e-bikes-item mb-5">
                    <div class="e-bikes-item-title">Comfort</div>
                    <div class="e-bikes-item-box">
                        <div class="row justify-content-center">
                            <div class="col-xl-10 px-xl-0">
                                <img class="e-bikes-item-box-img" src="./img/bikes/Bike-comfort.png" alt="Comfort">
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



/**
 * Call Action
 */
$text = 'Quer implementar uma <mark>mobilidade sustentável e inteligente na sua empresa?</mark> Entre em contato com a nossa equipe!';
$button =  ['text' => 'Vamos conversar', 'url' => 'http://localhost/emoving/', 'target' => 'blank'];

$call_action = new Call_Action;
echo $call_action::get_call_action($text, $button);

?>


<?php

require __DIR__ . "/footer.php";
