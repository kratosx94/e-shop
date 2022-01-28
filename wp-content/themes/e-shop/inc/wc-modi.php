<?php
function e_shop_wc_mod()
    {
        add_action('woocommerce_before_main_content', 'e_shop_open_container_row', 5);
        function e_shop_open_container_row()
        {
            echo '<div class="container shop-content"> <div class="row">';
        }

        add_action('woocommerce_after_main_content', 'e_shop_close_container_row', 5);
        function e_shop_close_container_row()
        {
            echo '</div> </div>';
        }
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');

        // if its the shop page the user is visiting, it will display the sidebar.
        if (is_shop()){
            add_action('woocommerce_before_main_content', 'e_shop_add_sidebar_tags', 6);
            function e_shop_add_sidebar_tags()
            {
                echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
            }
            add_action('woocommerce_before_main_content', 'woocommerce_get_sidebar', 7);

            add_action('woocommerce_before_main_content', 'e_shop_close_sidebar_tags', 8);
            function e_shop_close_sidebar_tags()
            {
                echo '</div>';
            }
            // showing the product description only on the shop page and hiding it from the home page
            add_action('woocommerce_after_shop_loop_item_title', 'the_excerpt',1);
        }

        add_action('woocommerce_before_main_content', 'e_shop_add_shop_tags', 9);

        function e_shop_add_shop_tags()
            // if the visited page is shop,  will display these classes.
        {   if(is_shop()){
            echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
        }else{// otherwise will display 100% width in the single product page
            echo '<div class="col">';
        }
        }

        add_action('woocommerce_after_main_content', 'e_shop_close_shop_tags', 4);
        function e_shop_close_shop_tags()
        {
            echo '</div>';
        }
        //showing product excerpt on all pages


        //add_filter('woocommerce_show_page_title','e_shop_remove_shop_title');
    //function e_shop_remove_shop_title($var){
    //    $var = false;
    //    return $var;
    //}

    }

add_action('wp','e_shop_wc_mod');