<?php

get_header();
?>

<div id="primary" class="content-area">
    <div id="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-12">

                <?php
                while (have_posts()): the_post();

                get_template_part('template-parts/content', 'single');
                // if commenting is allowed or the post has comments
                if(comments_open() || get_comments_number()):
                    // will return the comments
                    comments_template();
                endif;
                endwhile;;
                ?>
                </div>
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
