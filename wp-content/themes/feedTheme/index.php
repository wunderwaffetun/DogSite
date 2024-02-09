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

<body>
    <header>
        <div class="logo_wrapper">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/logo.png" class="logo"></img>
            <div class="logo_name">
                <div class="the_name">ЧЕТЫРЕ с ХВОСТИКОМ</div>
                <div class="the_description">магазин-склад натуральных зоотоваров</div>
            </div>
        </div>
        <div class="cross_menu">
            <div class="cross">
                <div class="cross_element cross_element0"></div>
                <div class="cross_element cross_element1"></div>
                <div class="cross_element cross_element2"></div>
            </div>
            <div class="smart_menu">
                <div class="the_name the_name_smart">ЧЕТЫРЕ с ХВОСТИКОМ</div>
                <a class="a_smart_menu" href="#icons_section">Меню</a>
                <a class="a_smart_menu" href="#about_us_section">О нас</a>
                <a class="a_smart_menu" href="#delivery_section">Доставка</a>
                <a class="a_smart_menu" href="#order_section">Заказать</a>
                <a href="tel:+89538155133" class="phone">
                    <div class="img_phone"></div>
                    <div class="number_phone">8-953-815-51-33</div>
                </a>
            </div>
        </div>
        <nav>
            <ul class="main_menu">
                <a href="#icons_section">Меню</a>
                <a href="#about_us_section">О нас</a>
                <a href="#delivery_section">Доставка</a>
                <a href="#order_section">Заказать</a>
            </ul>
        </nav>
        <div class="phone_wrapper">
            <a href="tel:+89538155133" class="phone">
                <div class="img_phone"></div>
                <div class="number_phone">8-953-815-51-33</div>
            </a>
        </div>
    </header>
    <section class = "main_style_secion" id="slider_section">
        <div class="line_pictures">
            <div class="picture_slider pic1">
                <div class="slider_img first_image"></div>
                <div class="img_text img_text_1"><?php the_field('first_slider_text_wp'); ?></div>
            </div>
            <div class="picture_slider pic2">
                <div class="slider_img second_image"></div>
                <div class="img_text img_text_2"><?php the_field('second_slider_text_wp'); ?></div>
            </div>
            <div class="picture_slider pic3">
                <div class="slider_img third_image"></div>
                <div class="img_text img_text_3"><?php the_field('third_slider_text_wp'); ?></div>
            </div>
        </div>
        <div class="slider_buttons">
            <div class="left_slider_button button"></div>
            <div class="right_slider_button button"></div>
        </div>
        <div class="slider_circles">
            <div class="circle circle1">
                <div class="in_circle in_circle1"></div>
            </div>
            <div class="circle circle2">
                <div class="in_circle in_circle2"></div>
            </div>
            <div class="circle circle3">
                <div class="in_circle in_circle3"></div>
            </div>
        </div>
    </section>
    <section class = "main_style_secion" id='icons_section'>
        <div class="icons_wrapper">
            <a href="<?php echo bloginfo('template_url'); ?>/un-feeds/" class="icon feed">
                <img src="<?php the_field('first_icon_image_wp'); ?>" alt="" class="icon_img">
                <div class="icon_text"><?php the_field('tekst_v_izobrazhenii_ssylki1'); ?></div>
            </a>
            <a href="<?php echo bloginfo('template_url'); ?>/un-lakomstva/" class="icon goodies">
                <img src="<?php the_field('second_icon_image_wp'); ?>" alt="" class="icon_img">
                <div class="icon_text"><?php the_field('tekst_v_izobrazhenii_ssylki2'); ?></div>
            </a>
            <a href="<?php echo bloginfo('template_url'); ?>/igruski/" class="icon toys">
                <img src="<?php the_field('third_icon_image_wp'); ?>" alt="" class="icon_img">
                <div class="icon_text"><?php the_field('tekst_v_izobrazhenii_ssylki3'); ?></div>
            </a>
        </div>
    </section>
    <section class = "main_style_secion" id="about_us_section">
        <div class="about_us_content">
            <h3 class="content_sections_h3">О нас</h3>
            <div class="content_section_info"><?php the_field('o_nas'); ?></div>
        </div>
    </section>
    <section class = "main_style_secion" id="delivery_section">
        <div class="about_us_content">
            <h3 class="content_sections_h3">Доставка</h3>
            <div class="content_section_info"><?php the_field('dostavka'); ?></div>    
        </div>
    </section>
    <section class = "main_style_secion" id="order_section">
        <div class="about_us_content">
            <h3 class="content_sections_h3">Заказать</h3>
            <div class="content_section_info"><?php the_field('zakazat'); ?></div>
        </div>
    </section>
    <?php
        get_footer();
    ?>
</body>

</html>