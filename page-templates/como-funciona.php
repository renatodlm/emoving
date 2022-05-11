<?php

/**
 * Template Name: Como Funciona
 *
 * The template page for Como Funciona
 *
 * @package e-moving
 * @since 2.0
 */


use Classes\Call_Action;
use Classes\Services_List;

get_header();

?>
<div class="main-body">
    <?php

    /**
     * Hero
     */
    get_template_part('template-parts/content',  'hero-page-button');
    ?>

    <?php if (have_rows('video_page')) :
        while (have_rows('video_page')) : the_row();
            $button = get_sub_field('button');
    ?>

            <div class="element-float-box como-funciona-1">

                <div class="element-float-box-item el-010 rellax" data-rellax-speed="-2" data-aos="zoom-out" data-aos-duration="500"></div>
                <div class="element-float-box-item el-08 rellax" data-rellax-speed="-2" data-aos="zoom-out" data-aos-duration="500"></div>
                <div id="videos" class="videos">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <?php
                            $video = get_sub_field('video');
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
                                    <h3 class="videos-title"><?= get_sub_field('title'); ?>
                                    </h3>
                                    <p class="videos-text"><?= get_sub_field('text') ?></p>
                                    <?php if (!empty($button)) : ?>
                                        <a class="bt bt-primary mt-5 mx-auto d-block" target="<?= $button['target'] ?>" style="width: fit-content;" href="<?= $button['url'] ?>"><?= $button['text'] ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        <?php
        endwhile;
    endif;

    /**
     * Como Funciona
     */

    get_template_part('template-parts/content',  ' why-choise-works');

    /**
     * Call Action
     */
    get_template_part('template-parts/content',  'call-action');

    /**
     * E-bikes
     */

    if (have_rows('e_bikes')) :
        while (have_rows('e_bikes')) : the_row();
        ?>
            <section class="e-bikes">
                <div class="container">
                    <div class="row justify-content-center">
                        <div cass="element-float-box e-bikes-2">
                            <div class="element-float-box-item el-04 rellax" data-rellax-speed="2" data-aos="zoom-out" data-aos-duration="500"></div>
                            <?php if (have_rows('e_bikes_item')) :
                                while (have_rows('e_bikes_item')) : the_row();

                                    $image = get_sub_field('img');
                                    $img_src = $image['sizes']['crop-512'];

                                    $icon = get_sub_field('img');
                                    $icon_src = $icon['sizes']['crop-512'];
                            ?>

                                    <div class="e-bikes-item mb-5">
                                        <div class="vire-mobile">
                                            <div class="vire-mobile-icon"><img src="<?= $icon_src; ?>" alt="<?= $icon['alt'] ?>"></div>
                                            <p class="vire-mobile-text"><?= get_sub_field('text'); ?></p>
                                        </div>
                                        <div class="e-bikes-item-title" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000"><?= get_sub_field('title') ?></div>
                                        <div class="e-bikes-item-box">
                                            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000">
                                                <div class="col-xl-9 px-xl-0">
                                                    <img class="e-bikes-item-box-img" src="<?= $img_src; ?>" alt="<?= $image['alt'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            <?php endwhile;
                            endif; ?>

                        </div>
                    </div>
                </div>
            </section>

        <?php endwhile;
    endif;

    /**
     * Porque escolher
     */
    get_template_part('template-parts/content',  'why-choise');

    /**
     * Call Action
     */
    get_template_part('template-parts/content',  'call-action');

    /**
     * My Account Call
     */

    if (have_rows('my_account_call')) :
        while (have_rows('my_account_call')) : the_row();

            $button = get_sub_field('button');

            $image = get_sub_field('image');

            $img_src = $image['sizes']['crop-512'];

        ?>
            <div class="element-float-box como-funciona-5">
                <div class="element-float-box-item el-02 rellax" data-rellax-speed="2" data-aos="zoom-out" data-aos-duration="500"></div>
                <section class="my-account">
                    <div class="container">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-6 order-md-1 order-2">
                                <div class="my-account-content" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                                    <h3 class="my-account-content-title"><?= get_sub_field('title') ?></h3>
                                    <div class="my-account-content-text"><?= get_sub_field('text') ?></div>
                                    <?php if (!empty($button)) : ?>
                                        <a class="bt bt-primary" target="<?= $button['target'] ?>" href="<?= $button['url']; ?>"><?= $button['text']; ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-5 order-md-2 order-1">
                                <div class="my-account-img" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                                    <img src="<?= $img_src ?>" alt="<?= $image['alt'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
    <?php
        endwhile;
    endif; ?>
</div>

<?php

get_footer();
