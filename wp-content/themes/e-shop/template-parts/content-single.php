<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta">
            <p>
                <?php  esc_html_e('published by','e-shop'); ?> <?php the_author_posts_link(); ?> <?php esc_html_e('On','e-shop'); ?> <?php echo esc_html(get_the_date()); ?><br />
                <?php esc_html_e('Categories','e-shop');?>: <span><?php the_category( ' ' ); ?><br/>
						            <?php if(has_tag()): ?>
                                        <?php esc_html_e('Tags','e-shop'); ?>: <span><?php the_tags( '', ', '); ?></span>
                                    <?php endif; ?>
            </p>
        </div>
        <div class="post-thumbnail">
            <?php
            if( has_post_thumbnail() ):
                the_post_thumbnail( 'e-shop-blog', array( 'class' => 'img-fluid') );
            endif;
            ?>
        </div>
    </header>
    <div class="content">
        <?php the_content(); ?>
    </div>
</article>