<?php

use Classes\Services_List;

if (have_rows('how_works')) :
    while (have_rows('how_works')) : the_row();

        $infos = [
            'title' => get_sub_field('title'),
            'text' =>  get_sub_field('text'),
            'id' =>  get_sub_field('ancor_id')
        ];

        //Query param for method class
        $query = [];

        if (have_rows('services_list')) :
            while (have_rows('services_list')) :

                $services_list_item = [
                    'img_url' =>  get_sub_field('image_url'),
                    'img_alt' => get_sub_field('image_alt'),
                    'title' =>  get_sub_field('title'),
                    'text' =>  get_sub_field('text'),
                ];

                array_push($query, $services_list_item);

            endwhile;
        endif;

        $services_list = new Services_List;
        echo $services_list::get_why_choise($infos, $query);
    endwhile;
endif;
