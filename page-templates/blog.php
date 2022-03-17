<?php

/**
 * Template Name: Blog
 *
 * The template page for blog
 *
 * @package e-moving
 * @since 2.0
 */

get_header();
?>
<div class="main-body">
    <style>
        .swiper {
            width: 100%;
            height: auto;
        }
    </style>

    <section id="blog-header" class="blog-header">
        <div class="container">
            <div class="swiper blog-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="swiper-slide">
                            <div class="swiper-slide">
                                <div class="blog-header-slider-swiper-item">
                                    <a href="./single.php">
                                        <div class="blog-header-slider-swiper-item-image-box">
                                            <picture>
                                                <img class="blog-header-slider-swiper-item-image-box-thumbnail" src="<?= get_template_directory_uri() ?>/img/blog-destaque.png" alt="blog item">
                                            </picture>
                                        </div>
                                    </a>
                                    <h2 class="blog-header-slider-swiper-item-title"><a href="./single.php">Ciclismo seguro: tudo o que você precisa para pedalar em segurança</a></h2>
                                    <div class="blog-header-slider-swiper-item-post-info">
                                        <ul class="blog-header-slider-swiper-item-post-info-tags">
                                            <li><a href="#">Mobilidade urbana</a></li>
                                            <li><a href="#">Na cidade</a></li>
                                        </ul>
                                        <div class="blog-header-slider-swiper-item-post-info-date">
                                            21/01/2022
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide">
                            <div class="swiper-slide">
                                <div class="blog-header-slider-swiper-item">
                                    <a href="./single.php">
                                        <div class="blog-header-slider-swiper-item-image-box">
                                            <picture>
                                                <img class="blog-header-slider-swiper-item-image-box-thumbnail" src="<?= get_template_directory_uri() ?>/img/blog-destaque.png" alt="blog item">
                                            </picture>
                                        </div>
                                    </a>
                                    <h2 class="blog-header-slider-swiper-item-title"><a href="./single.php">Ciclismo seguro: tudo o que você precisa para pedalar em segurança</a></h2>
                                    <div class="blog-header-slider-swiper-item-post-info">
                                        <ul class="blog-header-slider-swiper-item-post-info-tags">
                                            <li><a href="#">Mobilidade urbana</a></li>
                                            <li><a href="#">Na cidade</a></li>
                                        </ul>
                                        <div class="blog-header-slider-swiper-item-post-info-date">
                                            21/01/2022
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide">
                            <div class="swiper-slide">
                                <div class="blog-header-slider-swiper-item">
                                    <a href="./single.php">
                                        <div class="blog-header-slider-swiper-item-image-box">
                                            <picture>
                                                <img class="blog-header-slider-swiper-item-image-box-thumbnail" src="<?= get_template_directory_uri() ?>/img/blog-destaque.png" alt="blog item">
                                            </picture>
                                        </div>
                                    </a>
                                    <h2 class="blog-header-slider-swiper-item-title"><a href="./single.php">Ciclismo seguro: tudo o que você precisa para pedalar em segurança</a></h2>
                                    <div class="blog-header-slider-swiper-item-post-info">
                                        <ul class="blog-header-slider-swiper-item-post-info-tags">
                                            <li><a href="#">Mobilidade urbana</a></li>
                                            <li><a href="#">Na cidade</a></li>
                                        </ul>
                                        <div class="blog-header-slider-swiper-item-post-info-date">
                                            21/01/2022
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide">
                            <div class="swiper-slide">
                                <div class="blog-header-slider-swiper-item">
                                    <a href="./single.php">
                                        <div class="blog-header-slider-swiper-item-image-box">
                                            <picture>
                                                <img class="blog-header-slider-swiper-item-image-box-thumbnail" src="<?= get_template_directory_uri() ?>/img/blog-destaque.png" alt="blog item">
                                            </picture>
                                        </div>
                                    </a>
                                    <h2 class="blog-header-slider-swiper-item-title"><a href="./single.php">Ciclismo seguro: tudo o que você precisa para pedalar em segurança</a></h2>
                                    <div class="blog-header-slider-swiper-item-post-info">
                                        <ul class="blog-header-slider-swiper-item-post-info-tags">
                                            <li><a href="#">Mobilidade urbana</a></li>
                                            <li><a href="#">Na cidade</a></li>
                                        </ul>
                                        <div class="blog-header-slider-swiper-item-post-info-date">
                                            21/01/2022
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </section>

    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-item">
                        <article title="title">
                            <a href="./single.php">
                                <div class="blog-item-image-box">
                                    <picture>
                                        <img class="blog-item-image-box-thumbnail" src="<?= get_template_directory_uri() ?>/img//blog-item.png" alt="blog item">
                                    </picture>
                                </div>
                            </a>
                            <h2 class="blog-item-title"><a href="./single.php">Ciclismo seguro: tudo o que você precisa para pedalar em segurança</a></h2>
                            <div class="blog-item-post-info">
                                <ul class="blog-item-post-info-tags">
                                    <li><a href="#">Mobilidade urbana</a></li>
                                    <li><a href="#">Na cidade</a></li>
                                </ul>
                                <div class="blog-item-post-info-date">
                                    21/01/2022
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="blog-item">
                        <article title="title">
                            <a href="./single.php">
                                <div class="blog-item-image-box">
                                    <picture>
                                        <img class="blog-item-image-box-thumbnail" src="<?= get_template_directory_uri() ?>/img//blog-item.png" alt="blog item">
                                    </picture>
                                </div>
                            </a>
                            <h2 class="blog-item-title"><a href="./single.php">Ciclismo seguro: tudo o que você precisa para pedalar em segurança</a></h2>
                            <div class="blog-item-post-info">
                                <ul class="blog-item-post-info-tags">
                                    <li><a href="#">Mobilidade urbana</a></li>
                                    <li><a href="#">Na cidade</a></li>
                                </ul>
                                <div class="blog-item-post-info-date">
                                    21/01/2022
                                </div>
                            </div>
                        </article>
                    </div>
                    <ul class="blog-pagination">
                        <li class="blog-pagination-item"><a href="#"><i class="blog-pagination-item-prev disabled"></i></a></li>
                        <li class="blog-pagination-item active"><a href="#">1</a></li>
                        <li class="blog-pagination-item"><a href="#">2</a></li>
                        <li class="blog-pagination-item">...</li>
                        <li class="blog-pagination-item"><a href="#">12</a></li>
                        <li class="blog-pagination-item"><a href="#"><i class="blog-pagination-item-next"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-item">
                            <div class="search-default">
                                <form action="" class="search-default-form">
                                    <input class="search-default-form-input" type="text" placeholder="Pesquisar...">
                                    <input class="bt bt-primary" type="submit" value="Pesquisar">
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-item">
                            <div class="categories">
                                <div class="categories-title">Categorias</div>
                                <ul class="categories-list">
                                    <li class="categories-list-item"><a class="categories-list-item-link" href="#">Geral</a></li>
                                    <li class="categories-list-item"><a class="categories-list-item-link" href="#">Mobilidade urbana</a></li>
                                    <li class="categories-list-item"><a class="categories-list-item-link" href="#">cidade</a></li>
                                    <li class="categories-list-item"><a class="categories-list-item-link" href="#">Na empresa</a></li>
                                    <li class="categories-list-item"><a class="categories-list-item-link" href="#">No pedal</a></li>
                                    <li class="categories-list-item"><a class="categories-list-item-link" href="#">Pessoas</a></li>
                                    <li class="categories-list-item"><a class="categories-list-item-link" href="#">Por onde estamos</a></li>
                                    <li class="categories-list-item"><a class="categories-list-item-link" href="#">Qualidade de vida</a></li>
                                    <li class="categories-list-item"><a class="categories-list-item-link" href="#">Saúde</a></li>
                                    <li class="categories-list-item"><a class="categories-list-item-link" href="#">Sustentabilidade</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php

get_footer();
