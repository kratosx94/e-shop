<?php


function e_shop_customizer($wp_customize)
    {
        // copyrights
        $wp_customize->add_section(
            'copyright_section', array
            (
                'title' => 'Copyright Settings',
                'description' => 'Copyright Sections'
            )
        );
            //copyrights text box
            $wp_customize->add_setting(
                'copyright_settings', array
                (
                    'type' => 'theme_mod',
                    'default' => '',
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );
            $wp_customize->add_control(
                'copyright_settings', array
                (
                    'label' => 'Copyright',
                    'description' => 'type copyright information',
                    'section' => 'copyright_section',
                    'type' => 'text'
                )
            );

    /*----------------------------------------------------------*/
    //slider sections

    $wp_customize->add_section(
        'slider_section', array
        (
            'title' => 'Slider settings',
            'description' => 'Slider section'
        )
    );
    // #1 Slider 1 - page number 1
    $wp_customize->add_setting(
        'slider_settings_page1', array
        (
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );
    $wp_customize->add_control(
        'slider_settings_page1', array
        (
            'label' => 'Slider page 1',
            'description' => 'Slider page 1',
            'section' => 'slider_section',
            'type' => 'dropdown-pages'
        )
    );
    // #2 Slider 1 - slider button text page number 1
    $wp_customize->add_setting(
        'slider_settings_button_text1', array
        (
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'slider_settings_button_text1', array
        (
            'label' => 'Button text page 1',
            'description' => 'Button text page 1',
            'section' => 'slider_section',
            'type' => 'text'
        )
    );

    // #3 Slider 1 - url button page number 1
    $wp_customize->add_setting(
        'slider_settings_button_url1', array
        (
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_control(
        'slider_settings_button_url1', array
        (
            'label' => 'Page 1 url',
            'description' => 'Page 1 url',
            'section' => 'slider_section',
            'type' => 'url'
        )
    );
        // #4 Slider 2 - page number 2
        $wp_customize->add_setting(
            'slider_settings_page2', array
            (
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control(
            'slider_settings_page2', array
            (
                'label' => 'Slider page 2',
                'description' => 'Slider page 2',
                'section' => 'slider_section',
                'type' => 'dropdown-pages'
            )
        );
        // #5 Slider 2 - slider button text page number 2
        $wp_customize->add_setting(
            'slider_settings_button_text2', array
            (
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
        $wp_customize->add_control(
            'slider_settings_button_text2', array
            (
                'label' => 'Button text page 2',
                'description' => 'Button text page 2',
                'section' => 'slider_section',
                'type' => 'text'
            )
        );

        // #6 Slider 2 - url button page number 2
        $wp_customize->add_setting(
            'slider_settings_button_url2', array
            (
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'esc_url_raw'
            )
        );
        $wp_customize->add_control(
            'slider_settings_button_url2', array
            (
                'label' => 'Page 2 url',
                'description' => 'Page 2 url',
                'section' => 'slider_section',
                'type' => 'url'
            )
        );

        // #7 Slider 3 - page number 3
        $wp_customize->add_setting(
            'slider_settings_page3', array
            (
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control(
            'slider_settings_page3', array

            (
                'label' => 'Slider page 3',
                'description' => 'Slider page 3',
                'section' => 'slider_section',
                'type' => 'dropdown-pages'
            )
        );
        // #8 Slider 3 - slider button text page number 3
        $wp_customize->add_setting(
            'slider_settings_button_text3', array
            (
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
        $wp_customize->add_control(
            'slider_settings_button_text3', array
            (
                'label' => 'Button text page 3',
                'description' => 'Button text page 3',
                'section' => 'slider_section',
                'type' => 'text'
            )
        );

        // #9 Slider 3 - url button page number 3
        $wp_customize->add_setting(
            'slider_settings_button_url3', array
            (
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'esc_url_raw'
            )
        );
        $wp_customize->add_control(
            'slider_settings_button_url3', array
            (
                'label' => 'Page 3 url',
                'description' => 'Page 3 url',
                'section' => 'slider_section',
                'type' => 'url'
            )
        );
        //  Home page product and blog settings
    $wp_customize->add_section(
            'home_page_section', array
            (
                'title' => 'Home page product and blog settings',
                'description' => 'Home section'
            )
        );
        // #1 of home page settings
        $wp_customize->add_setting(
            'home_page_settings', array
            (
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control(
            'home_page_settings', array
            (
                'label' => 'popular products max number on the home page',
                'description' => 'home blog and product settings',
                'section' => 'home_page_section',
                'type' => 'number'
            )
        );
        //popular
        $wp_customize->add_setting(
            'set_popular_max', array
            (
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control(
            'set_popular_max', array
            (
                'label' => 'popular products max columns',
                'description' => 'popular products max columns',
                'section' => 'home_page_section',
                'type' => 'number'
            )
        );

        //new arrivals
        $wp_customize->add_setting(
            'home_new_arrivals_settings', array
            (
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control(
            'home_new_arrivals_settings', array
            (
                'label' => 'New arrivals max number',
                'description' => 'New arrivals max number',
                'section' => 'home_page_section',
                'type' => 'number'
            )
        );

        $wp_customize->add_setting(
            'set_new_arrivals_max', array
            (
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control(
            'set_new_arrivals_max', array
            (
                'label' => 'New arrivals products max columns',
                'description' => 'New arrivals products max columns',
                'section' => 'home_page_section',
                'type' => 'number'
            )
        );
        // deal of week on / off
        $wp_customize->add_setting(
            'set_deal_show', array
            (
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'e_shop_sanitize'
            )
        );
        $wp_customize->add_control(
            'set_deal_show', array
            (
                'label' => 'Show deal of the week?',
                'description' => 'if you turn this on you will display deal of the week on the home page',
                'section' => 'home_page_section',
                'type' => 'checkbox'
            )
        );
        // deal of week
        $wp_customize->add_setting(
            'set_deal_week', array
            (
                'type' => 'theme_mod',
                'default' => '',
                'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control(
            'set_deal_week', array
            (
                'label' => 'deal of week id',
                'description' => 'product id',
                'section' => 'home_page_section',
                'type' => 'number'
            )
        );

    }
add_action('customize_register','e_shop_customizer');
function e_shop_sanitize($checked)
{// if the checked parameter is set and its value is true than the return will be true, else false
    return isset($checked) && true == $checked;
}
