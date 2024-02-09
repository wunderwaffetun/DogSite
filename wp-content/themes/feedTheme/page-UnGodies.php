<?php
    /*
    Template Name: Universal Page Лакомства
    */
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Лакомства</title>
        <link rel="icon" href="<?php echo bloginfo('template_url'); ?>/assets/images/logolink.png">
        
        <?php
            wp_head();
        ?>

    </head>
    <body>
        <main>
            <a href="<?php echo get_home_url()?>" class="esc_common_btn">
                <img class="check_mark" src="<?php echo bloginfo('template_url'); ?>/assets/images/check_mark.png" alt=">">
                <div id="esc_text_btn_id" class="esc_text_btn">Вернуться назад</div>
            </a>
            <h1 class="name_current_page">
                Лакомства
            </h1>
            <div class="main_content">
                <a href="<?php echo bloginfo('template_url'); ?>/un-feeds/for-lak-puppies/ " class="fall_menu_page_main">Для щенков</a>
                <a href="<?php echo bloginfo('template_url'); ?>/un-feeds/for-dressing/ " class="fall_menu_page_main">Для дрессировки</a>
                <a href="<?php echo bloginfo('template_url'); ?>/un-feeds/for-stimulation/ " class="fall_menu_page_main">Для поощрения</a>
                <a href="<?php echo bloginfo('template_url'); ?>/un-feeds/for-long-play/ " class="fall_menu_page_main">Долгоиграющие лакомства</a>
            </div>
        </main>
    <?php
        get_footer();
    ?>
    </body>
</html>