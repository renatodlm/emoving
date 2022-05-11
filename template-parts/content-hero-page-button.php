<?php

use Classes\Page_Hero;

if (have_rows('hero_home')) :
    while (have_rows('hero_home')) : the_row();

        $default_obj = [
            'title' => get_sub_field('title'),
            'text' => get_sub_field('text'),
            'background-image' => get_sub_field('image'),
            'background-color' => get_sub_field('bg_color'),
            'before' => get_sub_field('before_boolean'),
            'after' => get_sub_field('after_boolean'),
            'link' => get_sub_field('link')
        ];

        $button = get_sub_field('button');

        $hero = new Page_Hero;
        echo $hero::home($hero_obj, $button);

?>
<?php endwhile;
endif; ?>