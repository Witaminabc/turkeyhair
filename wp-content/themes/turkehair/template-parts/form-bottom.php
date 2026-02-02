<section class="h-start-form">
    <div class="h-start-form__background">
        <img src="<?php echo get_field('formbottom_img','option'); ?>" alt="Фон формы" class="h-start-form__bg-image">
    </div>

    <div class="h-start-form__container">
        <div class="h-start-form__content">
            <h2 class="h-start-form__title"><?php echo get_field('formbottom_title','option'); ?></h2>

            <p class="h-start-form__description">
                <?php echo get_field('formbottom_subtitle','option'); ?>
            </p>

            <form class="h-start-form__form" action="#" method="POST">
                <div class="form-row">
                    <div class="form-group form-group--phone">
                        <label for="phone" class="form-label">Введите номер вашего телефона</label>
                        <input type="tel" id="phone" name="phone" class="form-input" placeholder="+7 (___) ___ ____" required>
                    </div>

                    <div class="form-group form-group--name">
                        <label for="name" class="form-label">Ваше имя</label>
                        <input type="text" id="name" name="name" class="form-input" placeholder="Иван Петров" required>
                    </div>
                </div>

                <button type="submit" class="form-submit">ОТПРАВИТЬ</button>
            </form>
        </div>
    </div>
</section>