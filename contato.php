<?php

use Classes\Page_Hero;

require __DIR__ . "/header.php";

/**
 * Hero
 */

$default_obj = [
    'title' => 'Contato',
    'text' => 'entre em contato conosco hoje',
    'background-image' => './img/contato.png',
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
                    <form action="">

                        <div class="mb-3">
                            <input type="text" id="nome" placeholder="Seu nome completo">
                        </div>
                        <div class="mb-3">
                            <input type="text" id="email" placeholder="Digite seu melhor email ( corporativo preferencialmente):">
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" id="telefone" placeholder="Seu telefone/Whatsapp">
                            </div>
                            <div class="col-md-6 mb-3">
                                <select id="assunto">
                                    <option value="" disabled selected>Escolher assunto</option>
                                    <option value="Quero Comprar">Quero Comprar</option>
                                    <option value="Ja sou E-mover">Ja sou E-mover</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <textarea id="mensagem" rows="8" placeholder="Mensagem:"></textarea>
                        </div>

                        <input type="submit" class="bt bt-primary" value="Enviar agora">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

require __DIR__ . "/footer.php";
