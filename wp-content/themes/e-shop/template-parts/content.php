<article <?php post_class();?>>
    <h2>
        <a href="<?php the_permalink();?>"> <?php the_title();?></a>
    </h2>
    <div class="post-thumbnail">
        <a href="<?php the_permalink();?>">
            <?php
            if (has_post_thumbnail()):
                the_post_thumbnail('e-shop-blog', array('class' => 'img-fluid'));
            endif;
            ?>
        </a>
    </div>
    <div class="meta">
        <p>
           <?php  _e('published by','e-shop');   the_author_posts_link();?> <?php _e('On','e-shop');  echo get_the_date();?>
            <br />
            <?php if(has_category()):?>
                <?php _e('Categories','e-shop');?>: <span> <?php the_category(' '); ?></span>
            <?php endif;?>
            <br />
            <?php if(has_tag()):?>
                <?php _e('Tags','e-shop'); ?>: <span> <?php the_tags('', ', '); ?></span>
            <?php endif; ?>
        </p>
    </div>
    <div><?php the_excerpt();?></div>
</article>