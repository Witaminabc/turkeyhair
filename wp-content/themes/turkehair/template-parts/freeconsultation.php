<section class="consultation-section">
    <div class="consultation-section-container">
        <div class="consultation-header">
            <h1 class="consultation-main-title"><?php echo get_field('freeconsult_title','option'); ?></h1>
            <p class="consultation-subtitle"><?php echo get_field('freeconsult_subtitle','option'); ?></p>
        </div>

        <div class="consultation-content">
            <div class="consultation-info">
                <div class="doctor-image">
                    <img src="<?php echo get_field('freeconsult_img','option'); ?>" alt="<?php echo get_field('freeconsult_name','option'); ?>" class="doctor-img">
                </div>
                <div class="doctor-info">
                    <h3 class="doctor-name"><?php echo get_field('freeconsult_name','option'); ?></h3>
                    <?php echo get_field('freeconsult_text','option'); ?>
                </div>
            </div>

            <div class="consultation-form">
                <form class="form">
                    <div class="form-group">
                        <label class="form-label">Введите номер вашего телефона</label>
                        <input type="tel" class="form-input" placeholder="+7 (___) ___ ___ ___">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Ваше имя</label>
                        <input type="text" class="form-input" placeholder="Иван Петров">
                    </div>

                    <button type="submit" class="submit-button">ОТПРАВИТЬ</button>
                </form>
            </div>
        </div>
    </div>
</section>