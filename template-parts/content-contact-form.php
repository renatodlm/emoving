<?php if (have_rows('contat_form')) :
        while (have_rows('contat_form')) :
    ?>
            <section class="contact-form">
                <div class="element-float-box">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-md-10">
                                <div class="contact-form-content rellax" data-rellax-speed="0">
                                    <h4 class="contact-form-content-title" data-aos="zoom-out" data-aos-delay="100" data-aos-duration="1000"><?= get_sub_field('title'); ?></mark></h4>
                                    <p class="contact-form-content-text" data-aos="zoom-out" data-aos-delay="200" data-aos-duration="1000"><?= get_sub_field('text'); ?>
                                    </p>
                                </div>
                                <div class="contact-form-form">
                                    <?php
                                    $shortcode = get_sub_field('shortcode');
                                    if (!empty($shortcode)) {
                                        echo do_shortcode($shortcode);
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-float-box-item el-05 rellax" data-rellax-speed="-2" style="top:0px;left:0;margin-top:-100px;margin-left: -100px;" data-aos="zoom-out" data-aos-duration="500"></div>
                    <div class="element-float-box-item el-03 rellax" data-rellax-speed="-2" style="right:0;top:0;margin-top:200px" data-aos="zoom-out" data-aos-duration="500"></div>
                </div>
            </section>

    <?php endwhile;
    endif; ?>