<div class="h-results">
    <div class="h-results-wrap">
        <div class="h-results-title">
            <?php echo get_field('result_title','option'); ?>
        </div>
        <div class="h-results__blocks">

            <?php $resultblock= get_field('resultblock','option'); ?>
            <?php foreach ($resultblock as $resultblock_k => $resultblock_v){ ?>
            <div class="h-results__block">

                <div class="before-after-container">
                    <div class="before-after-title">
                        <?php echo $resultblock_v['title']; ?>
                    </div>
                    <div class="before-after">
                        <div class="image-wrapper">
                            <!-- Изображение "После" -->
                            <div class="image-after">
                                <img src=" <?php echo $resultblock_v['img_right']; ?>" alt="После" class="after-img">
                            </div>

                            <!-- Изображение "До" -->
                            <div class="image-before">
                                <img src="<?php echo $resultblock_v['img_left']; ?>" alt="До" class="before-img">
                            </div>

                            <!-- Ползунок -->
                            <div class="slider-handle">
                                <div class="slider-line"></div>
                                <div class="slider-button">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Arrowright.svg" alt="">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Arrowleft.svg" alt="">
                                </div>
                            </div>

                            <!-- Подписи -->

                        </div>
                        <div class="labels">
                            <span class="label-before"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/beforeleft.svg" alt="">ДО</span>
                            <span class="label-after"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/afterright.svg" alt="">ПОСЛЕ</span>
                        </div>
                    </div>
                </div>
            </div>
           <?php } ?>


        </div>
    </div>
</div>