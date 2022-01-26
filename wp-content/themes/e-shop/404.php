<?php

get_header();

?>

<div class="content-area">
    <main>
        <div class="container">
            <div class="error-404">
                <header>
                    <h2><?php _e('Oops...Page not found!','e-shop'); ?></h2>
                    <p><?php _e('The page youre looking for does not exist on this site.', 'e-shop');?> </p>
                    <?php
                    the_widget('WP_Widget_Recent_Posts',
                    array
                    (
                        'title' => __('Take a look at our other posts','e-shop'),
                        'number' => 3,
                    ));
                    ?>
                </header>
            </div>
        </div>
    </main>
</div>
<?php
get_footer();
