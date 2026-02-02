<section class="hero">
    <div class="hero-container">
        <div class="hero__content">
            <!-- Место для картинки -->
            <div class="hero__left">
                <div class="hero__left-top">
                    <h1 class="hero__title">
                        <div class="hero__title-main"><?php echo get_field('header__logo','option'); ?></div>

                    </h1>

                    <div class="hero__description">

                        <?php echo get_field('banner_subtitle','option'); ?>
                    </div>
                </div>


                <form action="" class="banner-form">
                    <label for="phone">Введите номер телефона</label>
                    <input type="tel" name="phone" placeholder="+7( _ _ _ )  _ _  _ _  _ _">
                    <input type="submit" value="УЗНАТЬ СТОИМОСТЬ">
                    <span>Получите консультацию врача и расчет стоимости</span>
                </form>

            </div>
            <div class="hero__image">
                <div class="image-placeholder">
                    <img src="<?php echo get_field('banner__img','option'); ?>" alt="">
                </div>
                <?php $banner__pluse =get_field('banner__pluse','option'); ?>
                <div class="stats">
                <?php foreach ($banner__pluse as $banner__pluse_k => $banner__pluse_v){?>

                    <div class="stat-item">
                        <img src="<?php echo $banner__pluse_v['img']; ?>" alt="">
                        <span class="stat-label"><?php echo $banner__pluse_v['text']; ?></span>

                    </div>


                <?php }  ?>
                </div>
            </div>

            <div class="hero__right">

                <?php $banner__advantage =get_field('banner__advantage','option'); ?>
                <div class="features">
                    <?php foreach ($banner__advantage as $banner__advantage_k => $banner__advantage_v){?>
                    <div class="feature-item">
                        <img src="<?php echo $banner__advantage_v['img'] ?>" alt="">
                        <span class="feature-text"><?php echo $banner__advantage_v['text'] ?></span>
                    </div>
                    <?php }  ?>

                </div>


            </div>
        </div>
    </div>
</section>