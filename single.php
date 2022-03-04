<?php

use Classes\Page_Hero;

require __DIR__ . "/header.php";
?>
<div class="main-body">
    <?php
    /**
     * Hero
     */

    $default_obj = [
        'title' => 'Ciclismo seguro: tudo o que você precisa para pedalar em segurança',
        'text' => 'sexta-feira, janeiro 21st, 2022',
        'background-image' => './img/blog-item.png',
        'background-color' => '#444580',
        'before' => false,
        'after' => true,
        'link' => '#post-content',
        'tags' => true
    ];
    $text = null;

    $hero = new Page_Hero;
    ?>
    <?php
    echo $hero::post($default_obj, $text);
    ?>

    <section id="post-content" class="post-content">
        <div class="container">
            <p>
                Você já notou que cada vez mais pessoas aderem as bikes como uma alternativa de locomoção, seja para ir ao trabalho ou passear em família, pedalar é uma prática simples e acessível, mas que como qualquer outra demanda alguns cuidados.
                </br></br>
                Neste artigo, vamos te apresentar algumas dicas para você poder pedalar em segurança e aproveitar esses momentos com tudo o que merece, confira!
            </p>
            <h3>Faróis de iluminação da bicicleta</h3>
            <p>
                Quando o assunto é item de segurança nem sempre as pessoas lembram das luzes, mas acredite, esse é um acessório essencial para evitar situações de risco, além de garantir que tenha condições de pedalar de forma segura.
                </br></br>
                No trânsito, é fundamental observar tudo à sua volta, os motoristas precisam ter tempo de reação caso precisem desviar da sua bicicleta, no ambiente noturno isso é ainda mais necessário.
                </br></br>
                É recomendável fazer o uso da luz branca na parte da frente e a vermelha na parte traseira, assim, os motoristas terão condições de reconhecer qual é o sentido em que você está transitando.
                </br></br>
                Dica de ouro: a luz deve ser piscante, pois, a intensidade das lanternas de bicicleta não é suficiente para fazer manobras em segurança. A luz piscante é mais eficaz para chamar atenção do motorista.
            </p>
            <h3>Sinalize suas manobras</h3>
            <p>
                No trânsito é muito importante que os motoristas possam prever suas manobras, por isso sempre sinalize o que pretende fazer usando sinais feitos com a mão. A boa convivência no trânsito depende do respeito entre todas as partes, seja cordial.
                </br></br>
                Sempre que necessário, sinalize com a mão esquerda em 90º quando for virar à esquerda e com a mão direita quando for virar à direita. Para chamar a atenção, agitar a mão ajuda a tornar o sinal mais visível.
            </p>
            <h3>Equipamentos de segurança para pedalar</h3>
            <p>
                Antes de sair e aproveitar os benefícios do ciclismo, é fundamental conhecer os equipamentos de segurança e a importância de utilizar cada um deles, utilizá-los no seu cotidiano.
                </br></br>
                Capacete – Esse é um equipamento indispensável e tem como função proteger os ciclistas de impactos causados por possíveis quedas durante as atividades.
                </br></br>
                Além disso, o capacete é fundamental para evitar traumas graves e lesões causadas por impactos através de acidentes com a bike; evitando escoriações e cortes na região da cabeça proporcionando mais visibilidade no trânsito.
                </br></br>
                As cores fortes e detalhes reflexivos melhoram a sua visibilidade no trânsito, então já sabe, use sempre!
                </br></br>
                Óculos – Esse é um acessório destinado a proteção da região dos olhos, também tem a função de melhorar seu campo de visão enquanto pedala.
                </br></br>
                Apesar de serem básicos, eles são importantíssimos, afinal evitam que sujeiras, insetos e outros elementos acertem seus olhos durante sua jornada, além disso, também protegem contra os raios solares UVA e UVB, que são altamente prejudiciais para a saúde dos seus olhos.
                </br></br>
                Traje adequado – Parece bobagem, mas usar uma roupa adequada faz toda diferença na sua segurança, como o uso de roupas de ciclismo com cores chamativas para que outras pessoas possam visualizar o ciclista de longe. Quanto maior a distância, menor a chance de acontecer acidentes porque ele conseguirá reduzir a velocidade e frear a tempo.
            </p>
            <h3>Evite ficar próximo das portas dos veículos</h3>
            <p>
                Quando estiver pedalando, é fundamental estar atento aos detalhes, dentre eles, é vital que você tenha cuidado com as portas dos carros parados. Muitos motoristas olham no retrovisor procurando o volume grande de um carro e acabam não vendo o ciclista chegando, principalmente à noite.
                </br></br>
                Por isso, mantenha uma distância que seja suficiente para que uma porta abrindo não te derrube. Fique a pelo menos 1 metro dos carros parados, tentando imaginar até onde iria uma porta aberta. De preferência, ocupe a faixa ao lado.
                </br></br>
                Nem sempre é possível perceber uma pessoa dentro de um carro parado, por isso não se arrisque e dê distância.
            </p>
            <h3>Faça vistorias na sua bicicleta e garanta mais segurança</h3>
            <p>
                Imagine que você esteja em um trajeto a quilômetros de casa e, de repente, sua bike tem algum problema.
                </br></br>
                Para se livrar desses apertos, faça a manutenção com frequência na bicicleta e revise todas as peças antes de sair de casa: pneus, guidão, freios e equipamentos de segurança.
                </br></br>
                Carregue sempre seus documentos
                </br></br>
                Embora essa dica pareça óbvia, muitas pessoas esquecem de levar os documentos para uma volta de bike. É fundamental tê-los sempre em mãos, caso você sofra algum acidente precisa ser identificado, por isso, tenha sempre um olhar preventivo nesse sentido. Lembre-se de que os imprevistos acontecem.
                </br></br>
                Quanto mais preparado você estiver, melhor.
            </p>
            <h3>Opte por ciclovias e ruas mais calmas</h3>
            <p>

                As ciclovias e ciclofaixas foram pensadas justamente para proporcionar um ambiente mais seguro ao ciclista, elas protegem vidas, pelo simples fato de separar os ciclistas do trânsito dos demais veículos.
                </br></br>
                Quando estiver em cruzamentos, esquinas e conversões, redobre a atenção, pois, os motoristas nem sempre dão a preferência ao ciclista, apesar dessa ser uma boa prática. Então, fique ligado!
                </br></br>
                No Brasil, a criação de ciclovias é um feito recente, portanto, não é algo presente em todos os bairros e espaços da cidade. Pensando nisso, trouxemos mais dicas para você poder trafegar em segurança em locais onde não há ciclovia!
            </p>
            <h3>Evite avenidas e ruas com grande fluxo de carros</h3>
            <p>

                Para sua segurança, evite as vias expressas ou avenidas com grande fluxo de veículos, lembre-se também, vias com uma ou duas faixas, só em último caso.
                </br></br>
                As avenidas com várias pistas costumam ser viáveis, mas é sempre bom optar por ruas que sigam em paralelo a elas, principalmente quando você estiver começando a se aventurar no trânsito.
                </br></br>
                Nos horários de pico, fica mais difícil trafegar nas avenidas.
                </br></br>
                Nesses momentos, há pouco espaço sobrando, o que obriga o ciclista a usar o corredor, e sempre há alguns motociclistas impacientes que agem de maneira inadequada buzinando e acelerando atrás do ciclista como se fosse ele o responsável pelo congestionamento.
            </p>
            <h3>Escolha bem o seu trajeto</h3>
            <p>

                A escolha da rota é um item importante de segurança, opte por ruas menores, em que os carros evitam por precisar parar a cada esquina em razão de lombadas, valetas ou semáforos.
                </br></br>
                Uma dica de ouro é pensar no seu trajeto a partir da ótica da bike, não pense no seu trajeto como se estivesse de carro, afinal, o que é ruim para os motoristas costuma ser bom para os ciclistas.
                </br></br>
                Se não estiver totalmente seguro do espaço que irá percorrer, é melhor não ir, prevenção nunca é demais, quando você está inseguro tende a cometer algum erro bobo ou até perder o equilíbrio devido à tensão.
                </br></br>
                Avenidas onde o fluxo de carros segue a uma velocidade alta mesmo na pista da direita são desaconselháveis, fuja de lugares assim. Ruas menores são mais seguras e muito mais agradáveis, mesmo que com isso o percurso aumente um pouco.
                </br></br>
                Seja aonde for, a segurança vem em primeiro lugar, pedale com cuidado!
            </p>
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <h3 class="reviews-title">
                O que você achou dessa publicação?
            </h3>
            <ul class="reviews-starts">
                <li class="reviews-starts-item mark"></li>
                <li class="reviews-starts-item mark"></li>
                <li class="reviews-starts-item mark"></li>
                <li class="reviews-starts-item"></li>
                <li class="reviews-starts-item"></li>
            </ul>
        </div>
    </section>

    <section class="share">
        <div class="container">
            <div class="share-title">
                Não esqueça de compartilhar também!
            </div>
            <ul class="share-list">
                <li class="share-list-item"><a href="#" class="share-list-item-link"><i class="share-list-item-link-icon share-instagram"></i></a></li>
                <li class="share-list-item"><a href="#" class="share-list-item-link"><i class="share-list-item-link-icon share-tiktok"></i></a></li>
                <li class="share-list-item"><a href="#" class="share-list-item-link"><i class="share-list-item-link-icon share-facebook"></i></a></li>
                <li class="share-list-item"><a href="#" class="share-list-item-link"><i class="share-list-item-link-icon share-twitter"></i></a></li>
            </ul>
        </div>
    </section>


    <section class="related-posts">
        <div class="container">
            <h3 class="related-posts-title">
                Veja mais conteúdos:
            </h3>
            <div class="swiper related-posts-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="swiper-slide">
                            <div class="swiper-slide">
                                <div class="related-posts-slider-swiper-item">
                                    <a href="./single.php">
                                        <div class="related-posts-slider-swiper-item-image-box">
                                            <picture>
                                                <img class="related-posts-slider-swiper-item-image-box-thumbnail" src="./img/blog-item.png" alt="blog item">
                                            </picture>
                                        </div>
                                    </a>
                                    <h2 class="related-posts-slider-swiper-item-title"><a href="./single.php">Ciclismo seguro: tudo o que você precisa para pedalar em segurança</a></h2>
                                    <div class="related-posts-slider-swiper-item-post-info">
                                        <ul class="related-posts-slider-swiper-item-post-info-tags">
                                            <li><a href="#">Mobilidade urbana</a></li>
                                            <li><a href="#">Na cidade</a></li>
                                        </ul>
                                        <div class="related-posts-slider-swiper-item-post-info-date">
                                            21/01/2022
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide">
                            <div class="swiper-slide">
                                <div class="related-posts-slider-swiper-item">
                                    <a href="./single.php">
                                        <div class="related-posts-slider-swiper-item-image-box">
                                            <picture>
                                                <img class="related-posts-slider-swiper-item-image-box-thumbnail" src="./img/blog-item.png" alt="blog item">
                                            </picture>
                                        </div>
                                    </a>
                                    <h2 class="related-posts-slider-swiper-item-title"><a href="./single.php">Ciclismo seguro: tudo o que você precisa para pedalar em segurança</a></h2>
                                    <div class="related-posts-slider-swiper-item-post-info">
                                        <ul class="related-posts-slider-swiper-item-post-info-tags">
                                            <li><a href="#">Mobilidade urbana</a></li>
                                            <li><a href="#">Na cidade</a></li>
                                        </ul>
                                        <div class="related-posts-slider-swiper-item-post-info-date">
                                            21/01/2022
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide">
                            <div class="swiper-slide">
                                <div class="related-posts-slider-swiper-item">
                                    <a href="./single.php">
                                        <div class="related-posts-slider-swiper-item-image-box">
                                            <picture>
                                                <img class="related-posts-slider-swiper-item-image-box-thumbnail" src="./img/blog-item.png" alt="blog item">
                                            </picture>
                                        </div>
                                    </a>
                                    <h2 class="related-posts-slider-swiper-item-title"><a href="./single.php">Ciclismo seguro: tudo o que você precisa para pedalar em segurança</a></h2>
                                    <div class="related-posts-slider-swiper-item-post-info">
                                        <ul class="related-posts-slider-swiper-item-post-info-tags">
                                            <li><a href="#">Mobilidade urbana</a></li>
                                            <li><a href="#">Na cidade</a></li>
                                        </ul>
                                        <div class="related-posts-slider-swiper-item-post-info-date">
                                            21/01/2022
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </section>
</div>
<?php

require __DIR__ . "/footer.php";
