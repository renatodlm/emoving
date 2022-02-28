<?php

namespace Classes;

class Call_Action
{
    public static function get_call_action($text, $btn)
    {
?>
        <section class="emoving-call-action rellax" data-rellax-speed="1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-md-10">
                        <div class="row">
                            <?php if (!empty($text)) : ?>
                                <div class="col-12">
                                    <p class="emoving-call-action-text"><?= $text; ?></p>
                                </div>
                            <?php endif;
                            if (!empty($btn)) :
                            ?>
                                <div class="col-12 text-center">
                                    <?php
                                    echo '<a class="bt bt-primary" target="' . $btn['target'] . '" href="' . $btn['url'] . '">' . $btn['text'] . '</a>';
                                    ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
}
