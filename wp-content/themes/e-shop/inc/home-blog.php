

<section class="lab-blog">
    <div class="container">
        <h2 class="blog-title"> Our Blog</h2>
        <div class="row">
            <?php
            $args = array
            (
                'post_type' => 'post',
                'posts_per_page' => 2,
            );
            $blog_posts = new WP_Query($args);


            // if there is any post
            if ($blog_posts->have_posts()):
                // load the post
                while($blog_posts->have_posts()): $blog_posts->the_post();
                    ?>

                    <article class="col-12 col-md-6">
                        <a href="<?php the_permalink();?>">
                            <?php
                            if(has_post_thumbnail()):
                                the_post_thumbnail('e-shop-blog', array('class' => 'img-fluid'));
                            endif;
                            ?>
                        </a>

                        <h3>
                            <a href="<?php the_permalink();?>">
                                <?php the_title();?>

                            </a>
                        </h3>
                        <h4 class=""> </h4>
                        <div class="excerpt"><?php the_excerpt();?></div>
                    </article>
                <?php
                endwhile;
                wp_reset_postdata();
            else:
                ?>
                <p> nothing is here </p>
            <?php
            endif;
            ?>
        </div>
    </div>
</section>
</main>
</div>