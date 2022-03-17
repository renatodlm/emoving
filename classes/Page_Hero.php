<?php

namespace Classes;

class Page_Hero
{

    public static function default_contato($obj, $text)
    {
        if (!empty($obj) || !empty($text)) :
?>
            <section class="hero-default pg-contato <?php if (!empty($obj['after'])) {
                                                        echo ' after-true';
                                                    }
                                                    if (!empty($obj['before'])) {
                                                        echo ' before-true';
                                                    } ?>" style="background-color:<?= $obj['background-color'] ?>;">
                <?php if (!empty($obj['background-image'])) : ?>
                    <picture>
                        <?php if (empty($obj['background-image-mobile'])) : $obj['background-image-mobile'] = $obj['background-image'];
                        endif; ?>
                        <source srcset="<?= $obj['background-image-mobile'] ?>" media="(max-width: 1024px)">
                        <img data-aos="zoom-out" data-aos-delay="0" data-aos-duration="500" class="hero-default-background-image" src="<?= $obj['background-image'] ?>" alt="<?= $obj['title'] ?>">
                    </picture>
                <?php endif; ?>
                <div class="container d-flex flex-wrap h-100">
                    <?php if (!empty($obj)) : ?>
                        <div class="hero-default-content rellax" data-rellax-speed="1">
                            <div class="row justify-content-center">
                                <div class="col-xl-5 col-lg-6 col-md-8">
                                    <h1 class="hero-default-content-title" data-aos="zoom-out" data-aos-delay="100" data-aos-duration="1000"><?= $obj['title'] ?></h1>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-lg-6 col-md-8">
                                    <div class="hero-default-content-text" data-aos="zoom-out" data-aos-delay="200" data-aos-duration="1000"><?= $obj['text'] ?></div>
                                    <?php if (!empty($obj['link'])) : ?>
                                        <a class="hero-default-content-link" data-aos="zoom-out" data-aos-delay="300" data-aos-duration="1000" href="<?= $obj['link'] ?>"><i class="hero-default-content-link-icon"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    endif;
                    if (!empty($text)) : ?>
                        <div class="row justify-content-center mt-auto">
                            <div class="col-xl-6 col-lg-8 col-md-10">
                                <div class="hero-default-text" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000"><?= $text ?></div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php
        endif;
    }

    public static function default($obj, $text)
    {
        if (!empty($obj) || !empty($text)) :
        ?>
            <section class="hero-default <?php if (!empty($obj['after'])) {
                                                echo ' after-true';
                                            }
                                            if (!empty($obj['before'])) {
                                                echo ' before-true';
                                            } ?>" style="background-color:<?= $obj['background-color'] ?>;">
                <?php if (!empty($obj['background-image'])) : ?>
                    <picture>
                        <?php if (empty($obj['background-image-mobile'])) : $obj['background-image-mobile'] = $obj['background-image'];
                        endif; ?>
                        <source srcset="<?= $obj['background-image-mobile'] ?>" media="(max-width: 1024px)">
                        <img data-aos="zoom-out" data-aos-delay="0" data-aos-duration="500" class="hero-default-background-image" src="<?= $obj['background-image'] ?>" alt="<?= $obj['title'] ?>">
                    </picture>
                <?php endif; ?>
                <div class="container d-flex flex-wrap h-100">
                    <?php if (!empty($obj)) : ?>
                        <div class="hero-default-content rellax" data-rellax-speed="1">
                            <div class="row justify-content-center">
                                <div class="col-xl-5 col-lg-6 col-md-8">
                                    <h1 class="hero-default-content-title" data-aos="zoom-out" data-aos-delay="100" data-aos-duration="1000"><?= $obj['title'] ?></h1>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-lg-6 col-md-8">
                                    <div class="hero-default-content-text" data-aos="zoom-out" data-aos-delay="200" data-aos-duration="1000"><?= $obj['text'] ?></div>
                                    <?php if (!empty($obj['link'])) : ?>
                                        <a class="hero-default-content-link" data-aos="zoom-out" data-aos-delay="300" data-aos-duration="1000" href="<?= $obj['link'] ?>"><i class="hero-default-content-link-icon"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    endif;
                    if (!empty($text)) : ?>
                        <div class="row justify-content-center mt-auto">
                            <div class="col-xl-6 col-lg-8 col-md-10">
                                <div class="hero-default-text" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000"><?= $text ?></div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php
        endif;
    }

    public static function post($obj, $text)
    {
        if (!empty($obj) || !empty($text)) :
        ?>
            <section class="hero-default <?php if (!empty($obj['after'])) {
                                                echo ' after-true';
                                            }
                                            if (!empty($obj['before'])) {
                                                echo ' before-true';
                                            } ?>" style="background-color:<?= $obj['background-color'] ?>;">
                <?php if (!empty($obj['background-image'])) : ?>
                    <picture>
                        <?php if (empty($obj['background-image-mobile'])) : $obj['background-image-mobile'] = $obj['background-image'];
                        endif; ?>
                        <source srcset="<?= $obj['background-image-mobile'] ?>" media="(max-width: 1024px)">
                        <img data-aos="zoom-out" data-aos-delay="0" data-aos-duration="500" class="hero-default-background-image" src="<?= $obj['background-image'] ?>" alt="<?= $obj['title'] ?>">
                    </picture>
                <?php endif; ?>
                <div class="container">
                    <?php if (!empty($obj)) : ?>
                        <div class="hero-default-content rellax" data-rellax-speed="1">
                            <div class="row justify-content-center">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <h1 class="hero-default-content-title" data-aos="zoom-out" data-aos-delay="100" data-aos-duration="1000"><?= $obj['title'] ?></h1>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-lg-6 col-md-8 my-5">
                                    <div class="hero-default-content-text" data-aos="zoom-out" data-aos-delay="200" data-aos-duration="1000"><?= $obj['text'] ?></div>
                                    <a class="hero-default-content-link" data-aos="zoom-out" data-aos-delay="300" data-aos-duration="1000" href="<?= $obj['link'] ?>"><i class="hero-default-content-link-icon"></i></a>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-lg-6 col-md-8 mt-5">
                                    <ul class="blog-item-post-info-tags single-post" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                                        <?php $categories = get_the_category(get_the_ID()); ?>
                                        <?php foreach ($categories as $category) : ?>
                                            <li><a href="<?= get_category_link($category->term_id) ?>"><?= $category->name ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php
                    endif;
                    if (!empty($text)) : ?>
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-8 col-md-10">
                                <p class="hero-default-text" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000"><?= $text ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php
        endif;
    }

    public static function home($obj, $button)
    {
        if (!empty($obj)) :
        ?>
            <section class="hero-home <?php if (!empty($obj['after'])) {
                                            echo ' after-true';
                                        }
                                        if (!empty($obj['before'])) {
                                            echo ' before-true';
                                        } ?>" style="background-color:<?= $obj['background-color'] ?>;">
                <?php if (!empty($obj['background-image'])) : ?>
                    <picture>
                        <?php if (empty($obj['background-image-mobile'])) : $obj['background-image-mobile'] = $obj['background-image'];
                        endif; ?>
                        <source srcset="<?= $obj['background-image-mobile'] ?>" media="(max-width: 1024px)">
                        <img data-aos="zoom-out" data-aos-delay="0" data-aos-duration="500" class="hero-home-background-image" src="<?= $obj['background-image'] ?>" alt="<?= $obj['title'] ?>">
                    </picture>
                <?php endif; ?>
                <div class="container">
                    <?php if (!empty($obj)) : ?>
                        <div class="row justify-content-md-center justify-content-end">
                            <div class="col-xxl-6 col-lg-7 col-md-10 <?php if (!empty($obj['image'])) : ?>col-9<?php endif; ?>">
                                <div class="hero-home-content rellax" data-rellax-speed="1">
                                    <?php if (!empty($obj['image'])) : ?>
                                        <div class="hero-home-content-img rellax" data-rellax-horizontal-speed="7   " data-rellax-vertical-scroll-axis="x" data-aos-delay="300" data-aos-duration="1000">
                                            <img data-aos="fade-left" src="<?= $obj['image'] ?>" alt="<?= $obj['title'] ?>">
                                        </div>
                                    <?php endif; ?>
                                    <h1 class="hero-home-content-title" data-aos="zoom-out" data-aos-delay="100" data-aos-duration="1000"><?= $obj['title'] ?></h1>
                                    <p class="hero-home-content-text" data-aos="zoom-out" data-aos-delay="150" data-aos-duration="1000"><?= $obj['text'] ?></p>
                                    <?php if (!empty($button)) : ?>
                                        <div class="" data-aos="zoom-out" data-aos-delay="200" data-aos-duration="1000">
                                            <a class="hero-home-content-button bt bt-primary" href="<?= $button['link'] ?>"><?= $button['text'] ?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    endif; ?>
                </div>
            </section>
        <?php
        endif;
    }
    public static function quemsomos($obj, $button)
    {
        if (!empty($obj)) :
        ?>
            <section class="hero-quemsomos <?php if (!empty($obj['after'])) {
                                                echo ' after-true';
                                            }
                                            if (!empty($obj['before'])) {
                                                echo ' before-true';
                                            } ?>" style="background-color:<?= $obj['background-color'] ?>;">
                <?php if (!empty($obj['background-image'])) : ?>
                    <picture>
                        <?php if (empty($obj['background-image-mobile'])) : $obj['background-image-mobile'] = $obj['background-image'];
                        endif; ?>
                        <source srcset="<?= $obj['background-image-mobile'] ?>" media="(max-width: 1024px)">
                        <img data-aos="zoom-out" data-aos-delay="0" data-aos-duration="500" class="hero-quemsomos-background-image" src="<?= $obj['background-image'] ?>" alt="<?= $obj['title'] ?>">
                    </picture>
                <?php endif; ?>
                <div class="container">
                    <?php if (!empty($obj)) : ?>
                        <div class="row justify-content-center">
                            <div class="col-xl-8 px-xl-5 col-lg-8 col-md-10">
                                <div class="hero-quemsomos-content rellax" data-rellax-speed="1">
                                    <?php if (!empty($obj['image'])) : ?>
                                        <div class="hero-quemsomos-content-img">
                                            <img src="<?= $obj['image'] ?>" alt="<?= $obj['title'] ?>">
                                        </div>
                                    <?php endif; ?>
                                    <h1 class="hero-quemsomos-content-title" data-aos="zoom-out" data-aos-delay="100" data-aos-duration="1000"><?= $obj['title'] ?></h1>
                                    <p class="hero-quemsomos-content-text" data-aos="zoom-out" data-aos-delay="200" data-aos-duration="1000"><?= $obj['text'] ?></p>
                                    <?php if (!empty($button)) : ?>
                                        <a class="hero-quemsomos-content-button bt bt-primary" data-aos="zoom-out" data-aos-delay="300" data-aos-duration="1000" href="<?= $button['link'] ?>"><?= $button['text'] ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    endif; ?>
                </div>
            </section>
<?php
        endif;
    }
}
