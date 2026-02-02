<div class="licensia-slider-container">
    <div class="licensia-slider-title"><?php echo get_field('licensia_title','option'); ?> </div>
    <div class="swiper licensia-slider">
        <div class="swiper-wrapper">
            <?php $licensiablock= get_field('licensiablock','option'); ?>
            <?php $licensiablock_index=1; ?>
            <?php foreach ($licensiablock as $licensiablock_k => $licensiablock_v){ ?>
            <div class="swiper-slide">

                <div class="licensia-thumbnail">
                    <img src="<?php echo $licensiablock_v;?>" alt="Видео <?php echo $licensiablock_index++ ?>">


                </div>


            </div>
            <?php } ?>


        </div>

        <!-- Навигация -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Пагинация -->
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- Модальное окно для видео -->



<!-- Модальное окно для видео -->
<div id="videoModal" class="licensia-modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <div id="videoPlayer"></div>
    </div>
</div>