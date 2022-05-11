<?php

/**
 * Template Name: Quem Somos
 *
 * The template page for Quem Somos
 *
 * @package e-moving
 * @since 2.0
 */
get_header();
?>
<div class="main-body">
    <?php
    /**
     * Hero
     */
    get_template_part('template-parts/content',  'hero-page-button');

    ?>

    <div class="element-float-box quem-somos-1">

        <div class="element-float-box-item el-010 rellax" data-rellax-speed="-2" data-aos="zoom-out" data-aos-duration="500"></div>
        <div class="element-float-box-item el-08 rellax" data-rellax-speed="-2" data-aos="zoom-out" data-aos-duration="500"></div>
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
    get_template_part('template-parts/content',  'why-choise');

    ?>

    <?php

    /**
     * History
     */

    ?>
    <div class="element-float-box history-1">
        <div class="element-float-box-item el-010 rellax" data-rellax-speed="-1" data-aos="zoom-out" data-aos-duration="500"></div>
        <div class="element-float-box-item el-03 el-03-1 rellax" data-rellax-speed="2" data-aos="zoom-out" data-aos-duration="500"></div>
        <div class="element-float-box-item el-05 rellax" data-rellax-speed="1" data-aos="zoom-out" data-aos-duration="500"></div>
        <div class="element-float-box-item el-03 el-03-2 rellax" data-rellax-speed="-2" data-aos="zoom-out" data-aos-duration="500"></div>
        <div class="element-float-box-item el-06 rellax" data-rellax-speed="2" data-aos="zoom-out" data-aos-duration="500"></div>
        <section class="history">
            <div class="container">
                <h3 class="history-title" data-aos="zoom-out" data-aos-delay="0" data-aos-duration="500">Nossos história</h3>
                <div class="history-container">
                    <div class="history-row history-row-left">
                        <div class="history-col history-col-left">
                            <div class="history-item history-item-left">
                                <div class="history-item-img"><img src="<?= get_template_directory_uri() ?>/img/history/2015.png" alt="2015">
                                    <div id="js-point-l-line-left-1"></div>
                                </div>
                                <div class="history-item-title">2015</div>
                                <div class="history-item-text">Depois de muito pedalar, Gabriel Arcon e Kleber Piedade fundam juntos a E-Moving com 10 bikes.</div>
                            </div>
                        </div>
                        <div class="history-col history-col-right">
                            <div class="history-item history-item-right">
                                <div class="history-item-img"><img src="<?= get_template_directory_uri() ?>/img/history/2016.png" alt="2016">
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
                                <div class="history-item-img"><img src="<?= get_template_directory_uri() ?>/img/history/2017-1.png" alt="2017-1">
                                    <div id="js-point-l-line-left-2"></div>
                                </div>
                                <div class="history-item-title">2017</div>
                                <div class="history-item-text">Criação das e-bikes E-Moving: Comfort, Bolt e Retrô.</div>
                            </div>
                        </div>
                        <div class="history-col history-col-right">
                            <div class="history-item history-item-right">
                                <div class="history-item-img"><img src="<?= get_template_directory_uri() ?>/img/history/2017-2.png" alt="2017-2">
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
                                <div class="history-item-img"><img src="<?= get_template_directory_uri() ?>/img/history/2017-3.png" alt="2017-3">
                                    <div id="js-point-l-line-left-3"></div>
                                </div>
                                <div class="history-item-title">2017</div>
                                <div class="history-item-text">Homenageados para o Prêmio Empreendedor do Ano EY.</div>
                            </div>
                        </div>
                        <div class="history-col history-col-right">
                            <div class="history-item history-item-right">
                                <div class="history-item-img"><img src="<?= get_template_directory_uri() ?>/img/history/2018.png" alt="2018">
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
                                <div class="history-item-img"><img src="<?= get_template_directory_uri() ?>/img/history/2020.png" alt="2020">
                                    <div id="js-point-l-line-left-4"></div>
                                </div>
                                <div class="history-item-title">2020</div>
                                <div class="history-item-text">Novo posicionamento (E-reinvente a Roda) e Manifesto.</div>
                            </div>
                        </div>


                        <div class="history-col history-col-right">
                            <div class="history-item history-item-right">
                                <div class="history-item-img"><img src="<?= get_template_directory_uri() ?>/img/history/2021.png" alt="2021">
                                    <div id="js-point-l-line-right-3"></div>
                                </div>
                                <div class="history-item-title">2021</div>
                                <div class="history-item-text">Mudança para B2B e Prêmio Mobilidade Estadão.</div>
                            </div>
                        </div>

                        <div id="l-line-left-3" style="margin-top:2450px"></div>
                        <div id="r-line-right-3" style="margin-top:2850px"></div>

                        <div class="history-col history-col-left">
                            <div class="history-item history-item-left">
                                <div class="history-item-img"><img src="<?= get_template_directory_uri() ?>/img/history/2022.png" alt="2022">
                                    <div id="js-point-l-line-left-4"></div>
                                </div>
                                <div class="history-item-title">2022</div>
                                <div class="history-item-text">Investimento Multilaser.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>

<?php
get_footer();
