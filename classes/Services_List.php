<?php

namespace Classes;

class Services_List
{
    public static function get_primary_list($infos, $query)
    {
        if (!empty($infos) && !empty($query)) :
?>
            <section class="service-list-01">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-6 col-md-10">
                            <?php if (!empty($infos['title'])) : ?>
                                <h3 class="service-list-01-title">
                                    <?= $infos['title'] ?>
                                </h3>
                            <?php endif; ?>
                            <?php if (!empty($infos['text'])) : ?>
                                <p class="service-list-01-text">
                                    <?= $infos['text'] ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                    if (!empty($query)) :
                    ?>
                        <div class="row service-list-01-row">
                            <?php foreach ($query as $item) : ?>

                                <div class="col-xl-3 col-md-6">
                                    <div class="service-list-01-box">
                                        <div class="service-list-01-box-img">
                                            <img src="<?= $item['img_url'] ?>" alt="<?= $item['img_alt'] ?>">
                                        </div>
                                        <div class="service-list-01-box-title"><?= $item['title'] ?></div>
                                        <div class="service-list-01-box-text"><?= $item['text'] ?></div>
                                    </div>

                                </div>
                            <?php endforeach; ?>
                        </div>

                    <?php endif; ?>
                </div>
            </section>
        <?php
        endif;
    }

    public static function get_secondary_list($infos, $query)
    {
        if (!empty($infos) && !empty($query)) :
        ?>
            <section class="service-list-02">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-7 col-md-10">
                            <?php if (!empty($infos['title'])) : ?>
                                <h3 class="service-list-02-title">
                                    <?= $infos['title'] ?>
                                </h3>
                            <?php endif; ?>
                            <?php if (!empty($infos['text'])) : ?>
                                <p class="service-list-02-text">
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
                                <div class="row service-list-02-row">
                                    <?php foreach ($query as $item) : ?>

                                        <div class="col-xl-4 col-md-6">
                                            <div class="service-list-02-box">
                                                <div class="service-list-02-box-img">
                                                    <img src="<?= $item['img_url'] ?>" alt="<?= $item['img_alt'] ?>">
                                                </div>
                                                <div class="service-list-02-box-title"><?= $item['title'] ?></div>
                                                <div class="service-list-02-box-text"><?= $item['text'] ?></div>
                                            </div>

                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        
                    <?php endif; ?>
                </div>
            </section>
<?php
        endif;
    }
}
