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
        'title' => get_the_title(),
        'text' => get_the_date('l, F d, Y'),
        'background-image' => get_the_post_thumbnail_url(),
        'background-color' => '#444580',
        'before' => false,
        'after' => true,
        'link' => '#post-content',
        'tags' => true
    ];
    $text = null;

    $hero = new Page_Hero;
    ?>
    <?php
    echo $hero::post($default_obj, $text);
    ?>
    <section id="post-content" class="post-content">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <?php echo do_shortcode('[ratemypost]'); ?>
        </div>
    </section>

    <section class="share">
        <div class="container">
            <div class="share-title">
                Não esqueça de compartilhar também!
            </div>
            <ul class="share-list">
                <li class="share-list-item"><a href="http://www.facebook.com/sharer.php?u=<?php echo the_permalink(); ?>" class="share-list-item-link"><i class="share-list-item-link-icon share-facebook"></i></a></li>
                <li class="share-list-item"><a href='https://twitter.com/share?url=<?php echo the_permalink(); ?>' class="share-list-item-link"><i class="share-list-item-link-icon share-twitter"></i></a></li>
                <li class="share-list-item"><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo the_permalink(); ?>&title=<?php echo the_title(); ?>&summary=<?php echo the_title(); ?>&source=<?php bloginfo('name'); ?>" class="share-list-item-link"><i class="share-list-item-link-icon share-linkedin"></i></a></li>
            </ul>
        </div>
    </section>

    <?php $related_terms = wp_get_object_terms(get_the_ID(), 'category', array('fields' => 'ids'));

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'order' => 'ASC',
        'orderby' => 'rand',
        'post__not_in' => array(get_the_ID()),
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'id',
                'terms' => $related_terms
            )
        )
    );
    $related_query = new WP_Query($args);
    if ($related_query->have_posts()) : ?>
        <section class="related-posts">
            <div class="container">
                <h3 class="related-posts-title">
                    Veja mais conteúdos:
                </h3>
                <div class="swiper related-posts-swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php
                        while ($related_query->have_posts()) :
                            $related_query->the_post();
                        ?>
                            <div class="swiper-slide">
                                <div class="swiper-slide">
                                    <div class="swiper-slide">
                                        <div class="related-posts-slider-swiper-item">
                                            <a href="<?= get_permalink(); ?>">
                                                <div class="related-posts-slider-swiper-item-image-box">
                                                    <picture>
                                                        <img class="related-posts-slider-swiper-item-image-box-thumbnail" src="<?= get_the_post_thumbnail_url(); ?>" alt="blog item">
                                                    </picture>
                                                </div>
                                            </a>
                                            <h2 class="related-posts-slider-swiper-item-title"><a href="<?= get_permalink() ?>"><?= get_the_title(); ?></a></h2>
                                            <div class="related-posts-slider-swiper-item-post-info">

                                                <ul class="related-posts-slider-swiper-item-post-info-tags">
                                                    <?php $categories = get_the_category(get_the_ID()); ?>
                                                    <?php foreach ($categories as $category) : ?>
                                                        <li><a href="<?= get_category_link($category->term_id) ?>"><?= $category->name ?></a></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <div class="related-posts-slider-swiper-item-post-info-date">
                                                    <?= get_the_date('d/m/Y') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>

                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section>
    <?php else : ?>
        <section class="py-5"></section>
    <?php endif; ?>
</div>
<?php

get_footer();
