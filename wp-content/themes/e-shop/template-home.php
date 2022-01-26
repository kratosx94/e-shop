<?php
/*
 template name: home page
 */
get_header();
?>
    <div class="content-area">
        <main>
            <!--  POPULAR PRODUCTS & NEW ARRIVALS & DEAL OF THE SECTION           -->
            <?php
            require_once get_template_directory() . '/inc/sliders.php';
            ?>

            <!--  BLOG SECTION          -->
            <?php
            require_once get_template_directory() . '/inc/home-blog.php';
            ?>
<?php get_footer(); ?>