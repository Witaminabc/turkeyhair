<section class="services-section">
    <div class="services-section-container">
        <h2 class="services-section__title"><?php echo get_field('service_title ','option'); ?></h2>


        <div class="services-grids">
            <?php $serviceblock= get_field('serviceblock','option'); ?>
            <?php foreach ($serviceblock as $serviceblock_k => $serviceblock_v){ ?>
            <div class="service-card">
                <div class="service-card__image">

                    <img src="<?php echo $serviceblock_v['img'] ?>" alt="Пересадка волос на голове" class="service-card__img">
                </div>
                <div class="service-card__content">
                    <div class="service-card__title"><span><?php echo $serviceblock_v['text'] ?></span></div>
                    <a href="<?php echo $serviceblock_v['href'] ?>" class="service-card__link">узнать стоимость</a>
                </div>
            </div>
            <?php } ?>


        </div>
    </div>
</section>