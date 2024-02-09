<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Четыре с хвостиком</title>
    <link rel="icon" href="<?php echo bloginfo('template_url'); ?>/assets/images/logolink.png">
    <?php
        wp_head()
    ?>
</head>

<body style="overflow-y: hidden !important;">
    <a href="http://animalfeed/" class="esc_common_btn">
        <img class="check_mark" src="<?php echo bloginfo('template_url'); ?>/assets/images/check_mark.png" alt=">">
        <div id="esc_text_btn_id" class="esc_text_btn">Вернуться на главную</div>
    </a>
    <div class="not_found">
        страница не найдена
    </div>
    <?php
        get_footer();
    ?>
</body>

</html>