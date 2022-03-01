<?php

use Classes\Page_Hero;
use Classes\Services_List;

require __DIR__ . "/header.php";

/**
 * Hero
 */

$hero_obj = [
    'title' => 'Seja <mark>bem-vindo</mark> ao <mark>futuro</mark> da <mark>mobilidade</mark> urbana.',
    'text' => 'Somos a primeira empresa no Brasil de assinatura de bikes elétricas! Nascemos em 2015 para resolver o problema de <strong>Mobilidade Urbana</strong> na cidade de São Paulo e levar mais qualidade de vida para as pessoas. Acreditamos que as bikes elétricas são o modal certo para isso. Temos o compromisso de oferecer uma experiência única, gerando economia de tempo e dinheiro de forma prazerosa e sustentável. Já transformamos a vida de mais de 800 clientes, deixamos de emitir 900 ton. de CO² na atmosfera, o equivalente a 9 Maracanãs repletos de árvores plantadas! Transforme o seu estilo de vida através de uma mobilidade inteligente, junte -se a nós e e-reinvente a sua rotina! <br><br> <strong>Continuamos e-reinventando a roda!</strong>',
    'background-image' => './img/quem-somos.png',
    'background-color' => '#444580',
    'before' => false,
    'after' => true,
];
$button = null;

$hero = new Page_Hero;
echo $hero::quemsomos($hero_obj, $button);


?>

<div class="element-float-box">
    <div class="element-float-box-item el-010 rellax" data-rellax-speed="-2" style="top:0px;right:0;margin-top:200px;margin-right: 0;" data-aos="zoom-out" data-aos-duration="500"></div>
    <div class="element-float-box-item el-08 rellax" data-rellax-speed="-2" style="left:0;bottom:0;margin-left:-50px;margin-bottom:200px" data-aos="zoom-out" data-aos-duration="500"></div>
    <div id="videos" class="videos">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <?php
                $video = '<iframe width="560" height="315" src="https://www.youtube.com/embed/raV0IvfCGyg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                preg_match('/src="(.+?)"/', $video, $matches_url);
                $src = $matches_url[1];
                preg_match('/embed(.*?)?feature/', $src, $matches_id);
                $id = $matches_id[1];
                $id = str_replace(str_split('?/'), '', $id);
                $id = 'raV0IvfCGyg';
                $video = '<iframe width="560" height="315" src="https://www.youtube.com/embed/raV0IvfCGyg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                // $video = preg_replace('~<iframe[^>]*\K(?=src)~i', 'data-', $video);
                // $video = str_replace('youtube.com/embed/', 'youtube-nocookie.com/embed/', $video);
                // $video = '<iframe width="560" height="315" src="https://www.youtube.com/embed/raV0IvfCGyg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

                ?>
                <div class="col-lg-8 col-md-10 coluna-video" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?= '1'; ?>00">
                    <div class="videos-box">
                        <div class="videos-thumb shadow-lg" style="background-image: url(https://img.youtube.com/vi/<?= $id; ?>/maxresdefault.jpg)">
                            <div class="videos-thumb-play-button">
                            </div>
                            <div class="videos-thumb-overlay"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php


/**
 * Porque escolher
 */

$infos2 = [
    'title' => 'Nossos <mark>planos</mark> <p><mark>oferecem</mark>:</p>',
    'text' => 'Serviços exclusivos para não te deixar na mão!'
];

$query2 = [
    [
        'img_url' => './img/elements/02.svg',
        'img_alt' => 'E-bike o Tempo Todo com Você',
        'title' => 'E-bike o Tempo Todo com Você',
    ],
    [
        'img_url' => './img/elements/010.svg',
        'img_alt' => 'Atendimento Exclusivo',
        'title' => 'Atendimento Exclusivo',
    ],
    [
        'img_url' => './img/elements/09.svg',
        'img_alt' => 'SOS para Emergências',
        'title' => 'SOS para Emergências',
    ],
    [
        'img_url' => './img/elements/08.svg',
        'img_alt' => 'Manutenção',
        'title' => 'Manutenção',
    ],
    [
        'img_url' => './img/elements/07.svg',
        'img_alt' => 'Proteção contra Roubo',
        'title' => 'Proteção contra Roubo',
    ]
];

$services_list2 = new Services_List;
echo $services_list2::get_secondary_list($infos2, $query2);

?>
<div class="element-float-box">
    <div class="element-float-box-item el-010 rellax" data-rellax-speed="-1" style="top:0px;left:0;margin-top:100px;margin-left:0px" data-aos="zoom-out" data-aos-duration="500"></div>
    <div class="element-float-box-item el-03 rellax" data-rellax-speed="2" style="right:0;top:0;margin-right:-50px;margin-top:100px" data-aos="zoom-out" data-aos-duration="500"></div>
    <div class="element-float-box-item el-05 rellax" data-rellax-speed="1" style="left:0;top:0;margin-left:-50px;margin-top:90%" data-aos="zoom-out" data-aos-duration="500"></div>
    <div class="element-float-box-item el-03 rellax" data-rellax-speed="-2" style="right:0;top:0;margin-right:-100px;margin-top:95%" data-aos="zoom-out" data-aos-duration="500"></div>
    <div class="element-float-box-item el-06 rellax" data-rellax-speed="2" style="right:0;bottom:0;margin-right:50px;margin-bottom:50px" data-aos="zoom-out" data-aos-duration="500"></div>
    <section class="history">
        <div class="container">
            <h3 class="history-title">Nossos história</h3>
            <div class="history-container">
                <div class="history-row history-row-left">
                    <div class="history-col history-col-left">
                        <div class="history-item history-item-left">
                            <div class="history-item-img"><img src="./img/history/2015.png" alt="2015">
                                <div id="js-point-l-line-left-1"></div>
                            </div>
                            <div class="history-item-title">2015</div>
                            <div class="history-item-text">Depois de muito pedalar, Gabriel Arcon e Kleber Piedade fundam juntos a E-Moving com 10 bikes.</div>
                        </div>
                    </div>
                    <div class="history-col history-col-right">
                        <div class="history-item history-item-right">
                            <div class="history-item-img"><img src="./img/history/2016.png" alt="2016">
                                <div id="js-point-l-line-right-1"></div>
                            </div>
                            <div class="history-item-title">2016</div>
                            <div class="history-item-text">Inauguração da Loja Física na Rua Santa Justina, 569 – Vila Olímpia</div>
                        </div>
                    </div>

                    <div id="l-line-left-1" style="margin-top:0px"></div>
                    <div id="r-line-right-1" style="margin-top:400px"></div>

                    <div class="history-col history-col-left">
                        <div class="history-item history-item-left">
                            <div class="history-item-img"><img src="./img/history/2017-1.png" alt="2017-1">
                                <div id="js-point-l-line-left-2"></div>
                            </div>
                            <div class="history-item-title">2017</div>
                            <div class="history-item-text">Criação das e-bikes E-Moving: Comfort, Bolt e Retrô.</div>
                        </div>
                    </div>
                    <div class="history-col history-col-right">
                        <div class="history-item history-item-right">
                            <div class="history-item-img"><img src="./img/history/2017-2.png" alt="2017-2">
                                <div id="js-point-l-line-right-2"></div>
                            </div>
                            <div class="history-item-title">2017</div>
                            <div class="history-item-text">Participação no Shark Tank.</div>
                        </div>
                    </div>

                    <div id="l-line-left-2" style="margin-top:800px"></div>
                    <div id="r-line-right-2" style="margin-top:1200px"></div>

                    <div class="history-col history-col-left">
                        <div class="history-item history-item-left">
                            <div class="history-item-img"><img src="./img/history/2017-3.png" alt="2017-3">
                                <div id="js-point-l-line-left-3"></div>
                            </div>
                            <div class="history-item-title">2017</div>
                            <div class="history-item-text">Homenageados para o Prêmio Empreendedor do Ano EY.</div>
                        </div>
                    </div>
                    <div class="history-col history-col-right">
                        <div class="history-item history-item-right">
                            <div class="history-item-img"><img src="./img/history/2018.png" alt="2018">
                                <div id="js-point-l-line-right-3"></div>
                            </div>
                            <div class="history-item-title">2018</div>
                            <div class="history-item-text">Criação da nova identidade visual.</div>
                        </div>
                    </div>

                    <div id="l-line-left-3" style="margin-top:1700px"></div>
                    <div id="r-line-right-3" style="margin-top:2100px"></div>

                    <div class="history-col history-col-left">
                        <div class="history-item history-item-left">
                            <div class="history-item-img"><img src="./img/history/2020.png" alt="2020">
                                <div id="js-point-l-line-left-4"></div>
                            </div>
                            <div class="history-item-title">2020</div>
                            <div class="history-item-text">Novo posicionamento (E-reinvente a Roda) e Manifesto.</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

<?php
require __DIR__ . "/footer.php";
