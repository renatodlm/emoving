<?php

namespace Classes;

class Services_List
{
    public static function get_primary_list($infos, $query)
    {
        if (!empty($infos) && !empty($query)) :
?>
            <section id="<?= $infos['id'] ?>" class="service-list-01">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-xxl-7 col-md-10 rellax" data-rellax-speed="1">
                            <?php if (!empty($infos['text'])) : ?>
                                <p class="service-list-01-text mb-5" data-aos="zoom-out" data-aos-delay="200" data-aos-duration="1000">
                                    <?= $infos['text'] ?>
                                </p>
                            <?php endif; ?>
                            <?php if (!empty($infos['title'])) : ?>
                                <h3 class="service-list-01-title" data-aos="zoom-out" data-aos-delay="100" data-aos-duration="1000">
                                    <?= $infos['title'] ?>
                                </h3>
                            <?php endif; ?>

                        </div>
                    </div>
                    <?php
                    if (!empty($query)) :
                    ?>
                        <div class="row service-list-01-row">
                            <?php
                            $i = 0;
                            foreach ($query as $item) : ?>

                                <div class="col-xl-3 col-6">
                                    <div class="service-list-01-box" data-aos="fade-up" data-aos-delay="<?= $i ?>00" data-aos-duration="500">
                                        <div class="service-list-01-box-img">
                                            <img src="<?= $item['img_url'] ?>" alt="<?= $item['img_alt'] ?>">
                                        </div>
                                        <div class="service-list-01-box-title"><?= $item['title'] ?></div>
                                        <div class="service-list-01-box-text"><?= $item['text'] ?></div>
                                    </div>

                                </div>
                            <?php $i++;
                            endforeach; ?>
                        </div>

                    <?php endif; ?>
                </div>
            </section>
        <?php
        endif;
    }

    public static function get_primary_list_pg_como_funciona($infos, $query)
    {
        if (!empty($infos) && !empty($query)) :
        ?>
            <section id="<?= $infos['id'] ?>" class="service-list-01">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-xxl-8 col-md-10 rellax" data-rellax-speed="1">
                            <?php if (!empty($infos['title'])) : ?>
                                <h3 class="service-list-01-title" data-aos="zoom-out" data-aos-delay="100" data-aos-duration="1000">
                                    <?= $infos['title'] ?>
                                </h3>
                            <?php endif; ?>
                            <?php if (!empty($infos['text'])) : ?>
                                <p class="service-list-01-text mb-5" data-aos="zoom-out" data-aos-delay="200" data-aos-duration="1000">
                                    <?= $infos['text'] ?>
                                </p>
                            <?php endif; ?>

                        </div>
                    </div>
                    <?php
                    if (!empty($query)) :
                    ?>
                        <div class="row service-list-01-row">
                            <?php
                            $i = 0;
                            foreach ($query as $item) : ?>

                                <div class="col-xl-3 col-6">
                                    <div class="service-list-01-box" data-aos="fade-up" data-aos-delay="<?= $i ?>00" data-aos-duration="500">
                                        <div class="service-list-01-box-img">
                                            <img src="<?= $item['img_url'] ?>" alt="<?= $item['img_alt'] ?>">
                                        </div>
                                        <div class="service-list-01-box-title"><?= $item['title'] ?></div>
                                        <div class="service-list-01-box-text"><?= $item['text'] ?></div>
                                    </div>

                                </div>
                            <?php $i++;
                            endforeach; ?>
                        </div>

                    <?php endif; ?>
                </div>
            </section>
        <?php
        endif;
    }


    public static function get_primary_list3($infos, $query)
    {
        if (!empty($infos) && !empty($query)) :
        ?>
            <section id="<?= $infos['id'] ?>" class="service-list-01">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="row d-flex justify-content-center">
                                <div class="col-xl-6 col-md-10 rellax" data-rellax-speed="1">
                                    <?php if (!empty($infos['title'])) : ?>
                                        <h3 class="service-list-01-title" data-aos="zoom-out" data-aos-delay="100" data-aos-duration="1000">
                                            <?= $infos['title'] ?>
                                        </h3>
                                    <?php endif; ?>
                                    <?php if (!empty($infos['text'])) : ?>
                                        <p class="service-list-01-text" data-aos="zoom-out" data-aos-delay="200" data-aos-duration="1000">
                                            <?= $infos['text'] ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php
                            if (!empty($query)) :
                            ?>
                                <div class="row service-list-01-row">
                                    <?php
                                    $i = 0;
                                    foreach ($query as $item) : ?>

                                        <div class="col-xl-4 col-6">
                                            <div class="service-list-01-box" data-aos="fade-up" data-aos-delay="<?= $i ?>00" data-aos-duration="500">
                                                <div class="service-list-01-box-img">
                                                    <img src="<?= $item['img_url'] ?>" alt="<?= $item['img_alt'] ?>">
                                                </div>
                                                <div class="service-list-01-box-title"><?= $item['title'] ?></div>
                                                <div class="service-list-01-box-text"><?= $item['text'] ?></div>
                                            </div>

                                        </div>
                                    <?php
                                        $i++;
                                    endforeach; ?>
                                </div>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php
        endif;
    }

    public static function get_secondary_list($infos, $query)
    {
        if (!empty($infos) && !empty($query)) :
        ?>
            <section id="<?= $infos['id'] ?>" class="service-list-02">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-11">
                            <div class="row d-flex justify-content-center">
                                <div class="col-xxl-7 col-md-10 rellax" data-rellax-speed="-1">
                                    <?php if (!empty($infos['title'])) : ?>
                                        <h3 class="service-list-02-title" data-aos="zoom-out" data-aos-delay="100" data-aos-duration="1000">
                                            <?= $infos['title'] ?>
                                        </h3>
                                    <?php endif; ?>
                                    <?php if (!empty($infos['text'])) : ?>
                                        <p class="service-list-02-text" data-aos="zoom-out" data-aos-delay="200" data-aos-duration="1000">
                                            <?= $infos['text'] ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php
                            if (!empty($query)) :
                            ?>
                                <div class="row justify-content-center">
                                    <div class="col-xl-11">
                                        <div class="row service-list-02-row justify-content-center">
                                            <?php $i = 0;
                                            foreach ($query as $item) : ?>

                                                <div class="col-xl-4 col-6 mb-4">
                                                    <div class="service-list-02-box" data-aos="fade-up" data-aos-delay="<?= $i ?>00" data-aos-duration="500">
                                                        <div class="service-list-02-box-img">
                                                            <img src="<?= $item['img_url'] ?>" alt="<?= $item['img_alt'] ?>">
                                                        </div>
                                                        <div class="service-list-02-box-title"><?= $item['title'] ?></div>
                                                        <div class="service-list-02-box-text"><?= $item['text'] ?></div>
                                                    </div>

                                                </div>
                                            <?php $i++;
                                            endforeach; ?>
                                        </div>
                                    </div>
                                </div>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
<?php
        endif;
    }
}
