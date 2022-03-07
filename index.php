<?php

use Classes\Page_Hero;

get_header();
?>
<div class="main-body">
    <?php
    /**
     * Hero
     */

    $default_obj = [
        'title' => 'Blog E-moving',
        'text' => 'Descubra muito mais.',
        'background-color' => '#444580',
        'before' => false,
        'after' => true,
        'link' => '#blog-header'
    ];
    $text = null;

    $hero = new Page_Hero;
    ?>
    <div class="blog-hero">
        <?php
        echo $hero::default($default_obj, $text);
        ?>
    </div>
    <style>
        .swiper {
            width: 100%;
            height: auto;
        }
    </style>

    <?php if (!get_query_var('paged') && !empty(get_option('sticky_posts'))) : ?>
        <section id="blog-header" class="blog-header">
            <div class="container">
                <div class="swiper blog-swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php
                        $args = [
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'post__in' =>  get_option('sticky_posts')
                        ];
                        $loop = new WP_Query($args);
                        if ($loop->have_posts()) :
                            while ($loop->have_posts()) : $loop->the_post();
                        ?>
                                <div class="swiper-slide">
                                    <div class="swiper-slide">
                                        <div class="swiper-slide">
                                            <div class="blog-header-slider-swiper-item">
                                                <a href="<?= get_permalink() ?>">
                                                    <div class="blog-header-slider-swiper-item-image-box">
                                                        <picture>
                                                            <img class="blog-header-slider-swiper-item-image-box-thumbnail" src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>">
                                                        </picture>
                                                    </div>
                                                </a>
                                                <h2 class="blog-header-slider-swiper-item-title"><a href="<?= get_permalink() ?>"><?= get_the_title() ?></a></h2>
                                                <div class="blog-header-slider-swiper-item-post-info">
                                                    <ul class="blog-item-post-info-tags">
                                                        <?php $categories = get_the_category(get_the_ID()); ?>
                                                        <?php foreach ($categories as $category) : ?>
                                                            <li><a href="<?= get_category_link($category->term_id) ?>"><?= $category->name ?></a></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                    <div class="blog-header-slider-swiper-item-post-info-date">
                                                        <?= get_the_date('d/m/Y') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php endwhile;
                        endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section>
    <?php endif; ?>

    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = [
                        'posts_per_page' => 2,
                        'paged' => $paged,
                        'post_type' => 'post',
                        'post__not_in' => get_option("sticky_posts"),
                    ];
                    $loop = new WP_Query($args);
                    if ($loop->have_posts()) :
                        while ($loop->have_posts()) : $loop->the_post();
                    ?>
                            <div class="blog-item">
                                <article title="<?= get_the_title(); ?>">
                                    <a href="<?= get_permalink() ?>">
                                        <div class="blog-item-image-box">
                                            <picture>
                                                <img class="blog-item-image-box-thumbnail" src="<?= get_the_post_thumbnail_url() ?>" alt="blog item">
                                            </picture>
                                        </div>
                                    </a>
                                    <h2 class="blog-item-title"><a href="<?= get_permalink() ?>"><?= get_the_title() ?></a></h2>
                                    <div class="blog-item-post-info">
                                        <ul class="blog-item-post-info-tags">
                                            <?php $categories = get_the_category(get_the_ID()); ?>
                                            <?php foreach ($categories as $category) : ?>
                                                <li><a href="<?= get_category_link($category->term_id) ?>"><?= $category->name ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <div class="blog-item-post-info-date">
                                            <?= get_the_date('d/m/Y') ?>
                                        </div>
                                    </div>
                                </article>
                            </div>
                    <?php endwhile;
                    endif; ?>

                    <?php
                    echo new_pagination($loop, $paged) ?>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-item">
                            <div class="search-default">
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                        <div class="sidebar-item">
                            <div class="categories">
                                <div class="categories-title">Categorias</div>
                                <ul class="categories-list">
                                    <?php
                                    $categories = get_categories();
                                    foreach ($categories as $category) :
                                    ?>
                                        <li class="categories-list-item"><a class="categories-list-item-link" href="<?= get_category_link($category->term_id) ?>"><?= $category->name ?></a></li>
                                    <?php endforeach; ?>
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
