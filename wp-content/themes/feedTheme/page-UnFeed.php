<?php
    /*
    Template Name: Universal Page Корма
    */
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Корма</title>
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
                Корма для животных
            </h1>
            <h2 class="name_current_page name_current_feed_type">
                Корма для собак
            </h2>
            <div class="main_content">
                <a href="<?php echo bloginfo('template_url'); ?>/un-feeds/puppies-feed/ " class="fall_menu_page_main">Для щенков</a>
                <a href="<?php echo bloginfo('template_url'); ?>/un-feeds/for-12-month/ " class="fall_menu_page_main">Для собак с 12 месяцев</a>
                <div class="fall_menu_page">
                    <div class="click_menu_element">
                        Ветеринарная линейка
                    </div>
                    <div class="fall_menu_page_content">
                        <div class="ul_green_line"></div>
                        <div class="fall_menu_page_elements">
                            <a href="<?php echo bloginfo('template_url'); ?>/un-feeds/for-steril-dogs/ " class="fall_menu_page_li">Для стерилизованных собак</a>
                            <a href="<?php echo bloginfo('template_url'); ?>/un-feeds/for-white-dogs/ " class="fall_menu_page_li">Для собак с белой шерстью</a>
                            <a href="<?php echo bloginfo('template_url'); ?>/un-feeds/for-vet-diet-dogs/ " class="fall_menu_page_li">Ветеринарная диета</a>
                        </div>
                    </div>
                </div>
                <a href="<?php echo bloginfo('template_url'); ?>/un-feeds/for-baked-dogs/ " class="fall_menu_page_main">Запечёные корма</a>
                <a href="<?php echo bloginfo('template_url'); ?>/un-feeds/for-halfwet-dogs/ " class="fall_menu_page_main">Полувлажные корма</a>
                <a href="<?php echo bloginfo('template_url'); ?>/un-feeds/for-canned-dogs/ " class="fall_menu_page_main">Консервы</a>
            </div>

            <h2 class="name_current_page name_current_feed_type">
                Корма для кошек
            </h2>
            <div class="main_content">
                <a href="<?php echo bloginfo('template_url'); ?>/un-feeds/for-kittens/ " class="fall_menu_page_main">Для котят</a>
                <a href="<?php echo bloginfo('template_url'); ?>/un-feeds/for-cats/ " class="fall_menu_page_main">Для кошек и котов</a>
                <div class="fall_menu_page">
                    <div class="click_menu_element">
                        Ветеринарная линейка
                    </div>
                    <div class="fall_menu_page_content">
                        <div class="ul_green_line"></div>
                        <div class="fall_menu_page_elements">
                            <a href="<?php echo bloginfo('template_url'); ?>/un-feeds/for-steril-cats/ " class="fall_menu_page_li">Для стерилизованных кошек</a>
                            <a href="<?php echo bloginfo('template_url'); ?>/un-feeds/for-urinary/ " class="fall_menu_page_li">Уринари (МКБ)</a>
                            <a href="<?php echo bloginfo('template_url'); ?>/un-feeds/for-w-meat/ " class="fall_menu_page_li">Без мяса</a>
                        </div>
                    </div>
                </div>
                <a href="<?php echo bloginfo('template_url'); ?>/un-feeds/for-baked-cats/ " class="fall_menu_page_main">Запечёные корма</a>
                <a href="<?php echo bloginfo('template_url'); ?>/un-feeds/for-canned-cats/ " class="fall_menu_page_main">Консервы</a>
            </div>
        </main>
    <?php
        get_footer();
    ?>
    </body>
</html>