<?php

use Classes\Page_Hero;

if (have_rows('hero_page')) :
    while (have_rows('hero_page')) : the_row();

        $default_obj = [
            'title' => get_sub_field('title'),
            'text' => get_sub_field('text'),
            'background-image' => get_sub_field('image'),
            'background-color' => get_sub_field('bg_color'),
            'before' => get_sub_field('before_boolean'),
            'after' => get_sub_field('after_boolean'),
            'link' => get_sub_field('link')
        ];
        $text = get_sub_field('sub_text');

        $hero = new Page_Hero;
        echo $hero::default($default_obj, $text);

    endwhile;
endif;
