<?php

use Classes\Services_List;

if (have_rows('why_choise')) :
    while (have_rows('why_choise')) : the_row();

        $infos2 = [
            'title' => get_sub_field('title'),
            'text' =>  get_sub_field('text')
        ];

        //Query param for method classF
        $query2 = [];

        if (have_rows('services_list')) :
            while (have_rows('services_list')) :

                $services_list_item = [
                    'img_url' =>  get_sub_field('image_url'),
                    'img_alt' => get_sub_field('image_alt'),
                    'title' =>  get_sub_field('title'),
                    'text' =>  get_sub_field('text'),
                ];

                array_push($query2, $services_list_item);

            endwhile;
        endif;

        $services_list2 = new Services_List;

?>
        <div class="element-float-box home-5">
            <style>

            </style>
            <div class="element-float-box-item el-08 rellax" data-rellax-speed="-1" data-aos="zoom-out" data-aos-duration="500"></div>
            <div class="element-float-box-item el-01 rellax" data-rellax-speed="1" data-aos="zoom-out" data-aos-duration="500"></div>
            <?php
            $services_list2 = new Services_List;
            echo $services_list2::get_secondary_list($infos2, $query2);
            ?>
        </div>
<?php
    endwhile;
endif;
