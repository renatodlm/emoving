<?php

use Classes\Call_Action;

if (have_rows('call_action')) :
    while (have_rows('call_action')) : the_row();

        $text = get_sub_field('text');
        $button =  get_sub_field('button');

        $call_action = new Call_Action;

?>
        <div class="element-float-box call-action-1">
            <div class="element-float-box-item el-011 rellax" data-rellax-speed="2" data-aos="zoom-out" data-aos-duration="500">
            </div>
            <div class="element-float-box-item el-04 rellax" data-rellax-speed="2" data-aos="zoom-out" data-aos-duration="500">
            </div>
            <?php
            echo $call_action::get_call_action($text, $button);
            ?>
        </div>
<?php endwhile;
endif;
