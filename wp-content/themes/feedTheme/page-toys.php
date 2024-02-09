<?php
    /*
    Template Name: Игрушки
    */
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Игрушки</title>
        <link rel="icon" href="<?php echo bloginfo('template_url'); ?>/assets/images/logolink.png">
        
        <?php
            wp_head();
        ?>
    </head>
<body>
    
    <a href="<?php echo get_home_url()?>" class="esc_common_btn">
        <img class="check_mark" src="<?php echo bloginfo('template_url'); ?>/assets/images/check_mark.png" alt=">">
        <div id="esc_text_btn_id" class="esc_text_btn">Вернуться на главную</div>
    </a>

    <div class="advice_searcher_element"></div>
    <div class="Default_item">Совпадений не найдено</div>
    <div class="main_search_element">
        <input id="input_of_searcher_id" type="text" class="input_of_searcher" >
        <label class="label_input_of_searcher" for="input_of_searcher_id"></label>
        <button class="button_of_searcher" >
            <img src="<?php echo bloginfo('template_url'); ?>/assets/images/lupa.png" alt="" class="lupa">
        </button>
    </div>

    <h1 class="name_current_page">
        Игрушки
    </h1>

    <h2 class="name_current_page name_current_feed_type">
        Из каучука 
    </h2>

    <section class = "pages_section">
        <?php
            $my_posts = get_posts( array(
                'numberposts' => -1,
                'category_name' => 'caoutchouc_toys_toys-page',
                'orderby' => 'date',
                'order'  => 'ASC',
                'post_type' => 'post',
                'suppress_filters' => true, 
            ) );
            
            foreach( $my_posts as $post ){
                setup_postdata( $post );
                ?>
                <a href="<?php echo get_permalink()?>" style="background: url('<?php the_field('kartinka_posta'); ?>') center no-repeat; background-size: cover;" class="feed_section_element main_section_element" >
                    <span class="productPreview Item"><?php the_title();?></span>
                </a>
                <?php
            }
            wp_reset_postdata(); // сброс
        ?>
    </section>

    <h2 class="name_current_page name_current_feed_type">
        Из прочной резины
    </h2>

    <section class = "pages_section">
        <?php
            $my_posts = get_posts( array(
                'numberposts' => -1,
                'category_name' => 'rubber_toys_toys-page',
                'orderby' => 'date',
                'order'  => 'ASC',
                'post_type' => 'post',
                'suppress_filters' => true, 
            ) );
            
            foreach( $my_posts as $post ){
                setup_postdata( $post );
                ?>
                <a href="<?php echo get_permalink()?>" style="background: url('<?php the_field('kartinka_posta'); ?>') center no-repeat; background-size: cover;" class="feed_section_element main_section_element" >
                    <span class="productPreview Item"><?php the_title();?></span>
                </a>
                <?php
            }
            wp_reset_postdata(); // сброс
        ?>
    </section>


    <?php
        get_footer();
    ?>
</body>
</html>