<?php

namespace Classes;

class Page_Hero
{
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
                        <img class="hero-default-background-image" src="<?= $obj['background-image'] ?>" alt="<?= $obj['title'] ?>">
                    </picture>
                <?php endif; ?>
                <div class="container">
                    <?php if (!empty($obj)) : ?>
                        <div class="hero-default-content">
                            <div class="row justify-content-center">
                                <div class="col-xl-5 col-lg-6 col-md-8">
                                    <h1 class="hero-default-content-title"><?= $obj['title'] ?></h1>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-lg-6 col-md-8">
                                    <div class="hero-default-content-text"><?= $obj['text'] ?></div>
                                    <a class="hero-default-content-link" href="<?= $obj['link'] ?>"><i class="hero-default-content-link-icon"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php
                    endif;
                    if (!empty($text)) : ?>
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-8 col-md-10">
                                <p class="hero-default-text"><?= $text ?></p>
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
                        <img class="hero-home-background-image" src="<?= $obj['background-image'] ?>" alt="<?= $obj['title'] ?>">
                    </picture>
                <?php endif; ?>
                <div class="container">
                    <?php if (!empty($obj)) : ?>
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-8 col-md-10">
                                <div class="hero-home-content">
                                    <?php if (!empty($obj['image'])) : ?>
                                        <div class="hero-home-content-img">
                                            <img src="<?= $obj['image'] ?>" alt="<?= $obj['title'] ?>">
                                        </div>
                                    <?php endif; ?>
                                    <h1 class="hero-home-content-title"><?= $obj['title'] ?></h1>
                                    <p class="hero-home-content-text"><?= $obj['text'] ?></p>
                                    <?php if (!empty($button)) : ?>
                                        <a class="hero-home-content-button bt bt-primary" href="<?= $button['link'] ?>"><?= $button['text'] ?></a>
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
                        <img class="hero-quemsomos-background-image" src="<?= $obj['background-image'] ?>" alt="<?= $obj['title'] ?>">
                    </picture>
                <?php endif; ?>
                <div class="container">
                    <?php if (!empty($obj)) : ?>
                        <div class="row justify-content-center">
                            <div class="col-xl-8 px-xl-5 col-lg-8 col-md-10">
                                <div class="hero-quemsomos-content">
                                    <?php if (!empty($obj['image'])) : ?>
                                        <div class="hero-quemsomos-content-img">
                                            <img src="<?= $obj['image'] ?>" alt="<?= $obj['title'] ?>">
                                        </div>
                                    <?php endif; ?>
                                    <h1 class="hero-quemsomos-content-title"><?= $obj['title'] ?></h1>
                                    <p class="hero-quemsomos-content-text"><?= $obj['text'] ?></p>
                                    <?php if (!empty($button)) : ?>
                                        <a class="hero-quemsomos-content-button bt bt-primary" href="<?= $button['link'] ?>"><?= $button['text'] ?></a>
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
