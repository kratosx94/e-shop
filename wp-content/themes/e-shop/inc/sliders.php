

<!--      SLIDERS SECTIONS      -->
<section class="slider">
    <!-- Place in the <body> of your page -->
    <div class="flexslider">
        <ul class="slides">
            <?php
            // if $i is less than 4, it will get multiplied by 2
            for ($i=1; $i < 4; $i++):
                $slider_page [$i] = get_theme_mod('slider_settings_page'. $i);
                $slider_settings_button_text[$i] = get_theme_mod('slider_settings_button_text'.$i);
                $slider_settings_button_url[$i] = get_theme_mod('slider_settings_button_url'. $i);
            endfor;
            $args = array
            (
                'post_type' => 'page',
                'posts_per_page' => 3,
                'post__in' => $slider_page,
                'orderby' => 'post__in',
            );
            // Wp_query is used for custom wordpress loops
            $slider_loop = new WP_Query($args);
            $j = 1;
            // if there is posts in the $args, we will loop through them.
            if( $slider_loop->have_posts()):
                while ($slider_loop->have_posts()):
                    $slider_loop->the_post();
                    ?>
                    <li>
                        <?php the_post_thumbnail('e-shop-slider', array('class'=>'img-fluid'));?>
                        <div class="container">
                            <div class="slider-details-container">
                                <div class="slider-title">
                                    <h1>
                                        <?php the_title(); ?>
                                    </h1>
                                    <div class="slider-description">
                                        <div class="subtitle"><?php __(the_content(),'e-shop'); ?></div>
                                        <a href="<?php echo $slider_settings_button_url[$j]; ?>" class="link"><?php echo __($slider_settings_button_text[$j],'e-shop'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
                    $j++;
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </ul>
    </div>
</section>
<?php
if(class_exists('WooCommerce')):
    ?>
    <section class="popular-products">
        <?php
        $popular_limit          = get_theme_mod('home_page_settings',4);
        $popular_col            = get_theme_mod('set_popular_max',4);
        $new_arrivals_limit     = get_theme_mod('home_new_arrivals_settings', 4);
        $new_arrivals_col       = get_theme_mod('set_new_arrivals_max', 4);
        ?>
        <div class="container">
            <div class="section-title">
                <h2>Popular products</h2>
            </div>
            <?php echo do_shortcode('[products limit="'.$popular_limit.'" columns="'.$popular_col.'" orderby="popularity"]'); ?>
        </div>
    </section>
    <section class="new-arrivals">
        <div class="container">
            <div class="section-title">
                <h2>New arrivals</h2>
            </div>
            <?php echo do_shortcode('[products limit ="'.$new_arrivals_limit.'" columns="'.$new_arrivals_col.'" orderby="date"]');?>
        </div>
    </section>
    <?php

    $showdeal = get_theme_mod('set_deal_show',0);
    $deal = get_theme_mod('set_deal_week');
    $currency = get_woocommerce_currency_symbol();
    $regular = get_post_meta($deal,'_regular_price',true);
    $sale = get_post_meta($deal,'_sale_price',true);
    if( $showdeal == 1 && (!empty($deal))):
        $discount_percentage = absint(100 - (($sale/$regular) *100));
        ?>
        <section class="deal-of-the-week">
            <div class="container">
                <div class="section-title"></div>
                <h2>Deal of the week</h2>
                <div class="row d-flex align-items-center">
                    <div class="deal-img col-md-6 col-12 ml-auto text-center">
                        <?php echo get_the_post_thumbnail($deal,'large', array('class' => 'img-fluid'));?>
                    </div>
                    <div class="deal-desc col-md-4 col-12 mr-auto text-center">
                        <?php  if(!empty($sale)) : ?>
                            <span class="discount">
                                    <?php
                                    echo $discount_percentage . '% OFF';
                                    ?>
                                </span>
                        <?php endif; ?>
                        <h3>
                            <a href="<?php get_permalink($deal);?>">
                                <?php echo get_the_title($deal);
                                ?>
                            </a>
                        </h3>
                        <p><?php echo get_the_excerpt($deal); ?></p>
                        <div class="prices">
                                    <span class="regular">
                                       <br>
                                        Regular price
                                        <?php
                                        echo $currency;
                                        echo $regular;
                                        ?>
                                    </span>
                            <?php
                            if(!empty($sale)):
                                ?>
                                <span class="sale">
                                        <br>
                                        sale price
                                         <?php
                                         echo $currency;
                                         echo $sale;
                                         ?>
                                    </span>
                            <?php endif; ?>
                        </div>
                        <a href="<?php echo esc_url('?add-to-cart='. $deal);?>" class="add-to-cart">Add to Cart</a>
                    </div>

                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>