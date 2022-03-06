<?php

/**
 * Template Name: Contato
 *
 * The template page for Contato
 *
 * @package e-moving
 * @since 1.0
 */

use Classes\Page_Hero;

get_header();

/**
 * Hero
 */

$default_obj = [
    'title' => 'Contato',
    'text' => 'entre em contato conosco hoje',
    'background-image' =>  get_template_directory_uri() . '/img/contato.png',
    'background-color' => '#444580',
    'before' => false,
    'after' => true,
    'link' => '#contato'
];
$text = null;

$hero = new Page_Hero;
echo $hero::default($default_obj, $text);


?>
<section id="contato" class="contact-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-md-10">
                <div class="contact-form-content">
                    <h4 class="contact-form-content-title">Registre-se agora ou entre em contato!</h4>
                    <p class="contact-form-content-text">Você merece uma melhor experiência de bicicleta! </p>
                </div>
                <div class="contact-form-form">
                    <?php
                    $shortcode = get_field('shortcode');
                    if (!empty($shortcode)) {
                        echo do_shortcode($shortcode);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="imprensa">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="imprensa-box">
                    <div class="imprensa-box-title">Flávia Saraiva</div>
                    <ul class="imprensa-box-contato">
                        <li class="imprensa-box-contato-item"><a href="mailto:flavia@e-moving.com.br">flavia@e-moving.com.br</a></li>
                        <li class="imprensa-box-contato-item"><a href="mailto:ola@e-moving.com.br">ola@e-moving.com.br</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

get_footer();
