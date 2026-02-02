<header class="header">
    <div class="header__container">
        <div class="header__content">
            <!-- Логотип -->
            <div class="header__logo">
                <a href="/" class="logo-link">
                    <span class="logo-text"><?php echo get_field('header__logo','option'); ?></span>
                </a>
            </div>


            <!-- Контактная информация -->
            <div class="header__address">
                <span class="address-text"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/geo1.svg" alt=""><?php echo get_field('header_adress','option'); ?></span>
            </div>
            <div class="header__contacts">

                <div class="header__phone">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/phone222.svg" alt=""><a href="tel:<?php echo get_field('header_phone','option'); ?>" class="phone-link"><?php echo get_field('header_phone','option'); ?></a>
                </div>
                <div class="header__btn">
                    <div>заказать звонок</div>
                </div>
            </div>
        </div>
    </div>
</header>