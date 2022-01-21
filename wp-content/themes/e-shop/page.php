
<?php
/*
this is a main template for almost all pages by default.
@link https://developer.wordpress.org/themes/basics/template-hierarchy/

@package e-shop
*/


get_header(); ?>
<div class="content-area">
    <main>
            <div class="container">
                <div class="row">
                    <?php
                        // looping into the posts
                        while(have_posts()): the_post();
                            ?>
                            <article class="col">
                                <h1><?php the_title();?></h1>
                                <div><?php the_content();?></div>
                            <?php
                            if(comments_open() || get_comments_number()):
                                // will return the comments
                                comments_template();
                            endif;
                            ?>
                            </article>
                        <?php
                        endwhile;
                        ?>
                </div>
            </div>
    </main>
</div>
<?php get_footer(); ?>
