<?php

/**
 * Template Name: Business Services
 *
 * The template pages 4work, Benefício, Sharing
 *
 * @package e-moving
 * @since 2.0
 */

use Classes\Services_List;

get_header();

?>
<div class="main-body">
    <?php

    /**
     * Hero
     */
    get_template_part('template-parts/content',  'hero-page-text');

    /**
     * Junte sua energia
     */

    if (have_rows('services')) :
        while (have_rows('services')) : the_row();

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

    ?>
            <div class="element-float-box">
                <div class="element-float-box-item el-010 rellax" data-rellax-speed="-2" style="top:0px;right:0;margin-top:100px;margin-right: 0;" data-aos="zoom-out" data-aos-duration="500"></div>
                <div class="element-float-box-item el-09 rellax" data-rellax-speed="2" style="left:0;bottom:0;margin-left:-100px;margin-bottom:400px" data-aos="zoom-out" data-aos-duration="500">
                </div>
                <?php
                echo $services_list::get_third_list($infos, $query);
                ?>
            </div>
    <?php
        endwhile;
    endif;


    /**
     * Call Action
     */
    get_template_part('template-parts/content',  'call-action');

    /**
     * Porque escolher
     */
    get_template_part('template-parts/content',  'why-choise');

    /**
     * Contact form
     */

    get_template_part('template-parts/content',  'contact-form');
    ?>

</div>
<?php

get_footer();
