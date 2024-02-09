<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Описание товара</title>
        <link rel="icon" href="<?php echo bloginfo('template_url'); ?>/assets/images/logolink.png">
        <?php
            wp_head();
        ?>
    </head>
<body>
    <main>
        <a href="javascript:history.go(-1)" class="esc_common_btn">
            <img class="check_mark" src="<?php echo bloginfo('template_url'); ?>/assets/images/check_mark.png" alt=">">
            <div id="esc_text_btn_id" class="esc_text_btn">Вернуться назад</div>
        </a>

        <div style="text-align:center;">
        </div>
            <h1 class="descr_information_title"><? the_title()?></h1>
            <div class="generation_slider_wrapper">
                <div class="generation_slider_img_wrapper">
                    <?php foreach(get_field('Galery_for_Infinity_slider') as $image):?>
                        <div class="slide">
                            <img src="<?php echo $image['url']; ?>" alt="" class="generation_slider_img">
                        </div>
                    <?php endforeach; ?> 
                </div>
                <div class="generation_slider_buttons">
                    <div class="generation_slider_button left_generation_button"></div>
                    <div class="generation_slider_button right_generation_button"></div>
                </div>
            </div>
            <div class="information_description">
                <?php the_field('tekst_posta') ?>
            </div>
        </div>
    </main>
    <?
        get_footer();
    ?>
</body>
</html>