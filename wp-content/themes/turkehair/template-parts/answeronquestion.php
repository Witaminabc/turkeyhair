<section class="answeronquestion">
    <div class="answeronquestion__container">
        <div class="answeronquestion__content">
            <h1 class="answeronquestion__title">


                <?php echo get_field('answeronquestion_title','option'); ?>
            </h1>


            <div class="answeronquestion__question">
                <h3 class="question__title">  <?php echo get_field('answeronquestion_subtitle','option'); ?></h3>

                <?php $answeronquestionblock= get_field('answeronquestionblock','option'); ?>
                <div class="checkbox-grid">
                    <?php foreach ($answeronquestionblock as $answeronquestionblock_k => $answeronquestionblock_v){ ?>

                        <label class="checkbox-item">
                        <input type="checkbox" name="hair_problem" value="<?php echo $answeronquestionblock_v['icon'] ?>" class="checkbox-input">
                        <div class="checkbox-custom">
                            <span class="checkbox-label"><?php echo $answeronquestionblock_v['text'] ?></span>
                            <div class="checkbox-image">
                                <img src="<?php echo $answeronquestionblock_v['img'] ?>" alt="На голове">
                            </div>

                        </div>
                    </label>
                    <?php } ?>
                </div>
            </div>


            <form class="answeronquestion__form">
                <div class="form-group">
                    <label for="phone" class="form-label">Введите номер вашего телефона</label>
                    <input type="tel" id="phone" name="phone" class="form-input" placeholder="+7 (___) ___ ____" required>
                </div>

                <div class="form-group">
                    <label for="name" class="form-label">Ваше имя</label>
                    <input type="text" id="name" name="name" class="form-input" placeholder="Иван Петров" required>
                </div>

                <button type="submit" class="form-submit">ОТПРАВИТЬ</button>
            </form>
        </div>
    </div>
</section>