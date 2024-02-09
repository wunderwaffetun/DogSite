<?php

    function mainfeedstyle(){
        wp_register_style('mainStyle', get_template_directory_uri() . '/assets/css/mainStyle.css', array(), '1', 'all');
        wp_register_style('pawsStyle', get_template_directory_uri() . '/assets/css/pawsStyle.css', array(), '1', 'all');
        wp_register_style('sliderStyle', get_template_directory_uri() . '/assets/css/sliderStyle.css', array(), '1', 'all');
        wp_register_style('iconsStyle', get_template_directory_uri() . '/assets/css/iconsCommonStyle.css', array(), '1', 'all');
        wp_register_style('infinityStyle', get_template_directory_uri() . '/assets/css/InfinitySlider.css', array(), '1', 'all');
        wp_register_style('patternStyle', get_template_directory_uri() . '/assets/css/pattern_style.css', array(), '1', 'all');
        wp_register_style('searchStyle', get_template_directory_uri() . '/assets/css/Search.css', array(), '1', 'all');
        wp_enqueue_style('mainStyle');
        wp_enqueue_style('pawsStyle');
        wp_enqueue_style('sliderStyle');
        wp_enqueue_style('iconsStyle');
        wp_enqueue_style('infinityStyle');
        wp_enqueue_style('patternStyle');
        wp_enqueue_style('searchStyle');
        
    }
    function mainfeedscripts(){
        wp_register_script('mainScript', get_template_directory_uri() . '/assets/js/themainscript.js', array(), '2', true);
        wp_register_script('sliderScript', get_template_directory_uri() . '/assets/js/sliderScript.js', array(), '2', true);
        wp_register_script('pawsScript', get_template_directory_uri() . '/assets/js/pawsScript.js', array(), '2', true);
        wp_register_script('InfinityScript', get_template_directory_uri() . '/assets/js/InfinitySlider.js', array(), '2', true);
        wp_register_script('SearchScript', get_template_directory_uri() . '/assets/js/Search.js', array(), '2', true);
        wp_enqueue_script('mainScript');
        wp_enqueue_script('sliderScript');
        wp_enqueue_script('pawsScript');
        wp_enqueue_script('InfinityScript');
        wp_enqueue_script('SearchScript');

        
    }
    add_action('wp_enqueue_scripts', 'mainfeedstyle');
    add_action('wp_enqueue_scripts', 'mainfeedscripts');
?>