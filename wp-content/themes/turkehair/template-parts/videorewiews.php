<div class="video-slider-container">
    <div class="video-slider-title"> <?php echo get_field('videorew_title','option'); ?></div>
    <div class="swiper video-slider">
        <div class="swiper-wrapper">
            <?php $videorewblock= get_field('videorewblock','option'); ?>
            <?php $videorewblock_index=1; ?>
            <?php foreach ($videorewblock as $videorewblock_k => $videorewblock_v){ ?>
            <div class="swiper-slide">
                <a href="<?php echo $videorewblock_v['href']; ?>" class="video-link" data-video-id="video<?php echo $videorewblock_index++ ?>">
                    <div class="video-thumbnail">
                        <img src="<?php echo $videorewblock_v['img']; ?>" alt="">
                        <div class="play-button">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
                                <circle cx="30" cy="30" r="30" fill="rgba(0,0,0,0.7)" />
                                <path d="M25 20L40 30L25 40V20Z" fill="white" />
                            </svg>
                        </div>
                    </div>




                </a>
            </div>
            <?php } ?>


        </div>

        <!-- Навигация -->
        <div class="swiper-button-next"> </div>
        <div class="swiper-button-prev"> </div>

        <!-- Пагинация -->
        <div class="swiper-pagination"></div>
    </div>
</div>

<div id="videoModal" class="video-modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <div id="videoPlayer"></div>
    </div>
</div>


<div class="rating">
    <div class="rating-wrap">
        <div class="rating__value">5,0</div>
        <div class="rating-cont">
            <div class="rating__stars">

                        <span class="rating__star rating__star--filled">
        ★
      </span>

                <span class="rating__star rating__star--filled">
        ★
      </span>

                <span class="rating__star rating__star--filled">
        ★
      </span>

                <span class="rating__star rating__star--filled">
        ★
      </span>

                <span class="rating__star rating__star--filled">
        ★
      </span>

            </div>
            <div class="rating__count"><?php   echo get_field('videorerew_count', 'option');  ?> оценка </div>
        </div>
    </div>
</div>