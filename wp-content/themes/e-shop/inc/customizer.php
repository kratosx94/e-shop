<?php


function e_shop_customizer($wp_customize)
    {
        // copyrights
        $wp_customize->add_section(
            'copyright_section', array(
                'title' => __('Copyright Settings','e-shop'),
                'description' => __('Copyright Sections','e-shop'),
            )
        );
            //copyrights text box
            $wp_customize->add_setting(
                'copyright_settings', array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );
            $wp_customize->add_control(
                'copyright_settings', array(
                    'label' => __('Copyright','e-shop'),
                    'description' => __('type copyright information','e-shop'),
                    'section' => 'copyright_section',
                    'type' => 'text'
                )
            );
    /*----------------------------------------------------------*/
    //slider sections
    $wp_customize->add_section(
        'slider_section', array(
            'title' => __('Slider settings','e-shop'),
            'description' => __('Slider section','e-shop')
        )
    );
    // #1 Slider 1 - page number 1
    $wp_customize->add_setting(
        'slider_settings_page1', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );
    $wp_customize->add_control(
        'slider_settings_page1', array(
            'label' => __('Slider page 1','e-shop'),
            'description' => __('Slider page 1','e-shop'),
            'section' => 'slider_section',
            'type' => 'dropdown-pages'
        )
    );
    // #2 Slider 1 - slider button text page number 1
    $wp_customize->add_setting(
        'slider_settings_button_text1', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'slider_settings_button_text1', array(
            'label' => __('Button text page 1','e-shop'),
            'description' => __('Button text page 1','e-shop'),
            'section' => 'slider_section',
            'type' => 'text'
        )
    );
    // #3 Slider 1 - url button page number 1
    $wp_customize->add_setting(
        'slider_settings_button_url1', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_control(
        'slider_settings_button_url1', array(
            'label' => __('Page 1 url','e-shop'),
            'description' => __('Page 1 url','e-shop'),
            'section' => 'slider_section',
            'type' => 'url'
        )
    );
        // #4 Slider 2 - page number 2
        $wp_customize->add_setting(
            'slider_settings_page2', array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control(
            'slider_settings_page2', array(
                'label' => __('Slider page 2','e-shop'),
                'description' => __('Slider page 2','e-shop'),
                'section' => 'slider_section',
                'type' => 'dropdown-pages'
            )
        );
        // #5 Slider 2 - slider button text page number 2
        $wp_customize->add_setting(
            'slider_settings_button_text2', array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
        $wp_customize->add_control(
            'slider_settings_button_text2', array(
                'label' => __('Button text page 2','e-shop'),
                'description' => __('Button text page 2','e-shop'),
                'section' => 'slider_section',
                'type' => 'text'
            )
        );
        // #6 Slider 2 - url button page number 2
        $wp_customize->add_setting(
            'slider_settings_button_url2', array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'esc_url_raw'
            )
        );
        $wp_customize->add_control(
            'slider_settings_button_url2', array(
                'label' => __('Page 2 url','e-shop'),
                'description' => __('Page 2 url','e-shop'),
                'section' => 'slider_section',
                'type' => 'url'
            )
        );
        // #7 Slider 3 - page number 3
        $wp_customize->add_setting(
            'slider_settings_page3', array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control(
            'slider_settings_page3', array(
                'label' => __('Slider page 3','e-shop'),
                'description' => __('Slider page 3','e-shop'),
                'section' => 'slider_section',
                'type' => 'dropdown-pages'
            )
        );
        // #8 Slider 3 - slider button text page number 3
        $wp_customize->add_setting(
            'slider_settings_button_text3', array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
        $wp_customize->add_control(
            'slider_settings_button_text3', array(
                'label' => __('Button text page 3','e-shop'),
                'description' => __('Button text page 3','e-shop'),
                'section' => 'slider_section',
                'type' => 'text'
            )
        );
        // #9 Slider 3 - url button page number 3
        $wp_customize->add_setting(
            'slider_settings_button_url3', array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'esc_url_raw'
            )
        );
        $wp_customize->add_control(
            'slider_settings_button_url3', array(
                'label' => __('Page 3 url','e-shop'),
                'description' => __('Page 3 url','e-shop'),
                'section' => 'slider_section',
                'type' => 'url'
            )
        );
        //  Home page product and blog settings
    $wp_customize->add_section(
            'home_page_section', array
        (
                'title' => __('Home page product and blog settings','e-shop'),
                'description' => __('Home section','e-shop'),
            )
        );
        // #1 of home page settings
        $wp_customize->add_setting(
            'home_page_settings', array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control(
            'home_page_settings', array(
                'label' => __('popular products max number on the home page','e-shop'),
                'description' => __('home blog and product settings','e-shop'),
                'section' => 'home_page_section',
                'type' => 'number'
            )
        );
        //popular
        $wp_customize->add_setting(
            'set_popular_max', array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control(
            'set_popular_max', array(
                'label' => __('popular products max columns','e-shop'),
                'description' => __('popular products max columns','e-shop'),
                'section' => 'home_page_section',
                'type' => 'number'
            )
        );
        //new arrivals
        $wp_customize->add_setting(
            'home_new_arrivals_settings', array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control(
            'home_new_arrivals_settings', array(
                'label' => __('New arrivals max number','e-shop'),
                'description' => __('New arrivals max number','e-shop'),
                'section' => 'home_page_section',
                'type' => 'number'
            )
        );
        $wp_customize->add_setting(
            'set_new_arrivals_max', array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control(
            'set_new_arrivals_max', array(
                'label' => __('New arrivals products max columns','e-shop'),
                'description' => __('New arrivals products max columns','e-shop'),
                'section' => 'home_page_section',
                'type' => 'number'
            )
        );
        // deal of week on / off
        $wp_customize->add_setting(
            'set_deal_show', array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'e_shop_sanitize'
            )
        );
        $wp_customize->add_control(
            'set_deal_show', array(
                'label' => __('Show deal of the week?','e-shop'),
                'description' => __('if you turn this on you will display deal of the week on the home page','e-shop'),
                'section' => 'home_page_section',
                'type' => 'checkbox'
            )
        );
        // deal of week
        $wp_customize->add_setting(
            'set_deal_week', array(
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control(
            'set_deal_week', array(
                'label' => __('deal of week id','e-shop'),
                'description' => 'product id',
                'section' => 'home_page_section',
                'type' => 'number'
            )
        );
    }
add_action('customize_register','e_shop_customizer');
function e_shop_sanitize($checked)
{
    // if the checked parameter is set and its value is true than the return will be true, else false
    return isset($checked) && true == $checked;
}
