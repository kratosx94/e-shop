<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php get_header(); ?>
<div class="content-area">
    <main>
        <section class="lab-blog">
            <div class="container">
                <div class="row">
                    <?php
                    // if there is any post
                    if (have_posts()):
                        // load the post
                        while(have_posts()): the_post();
                        get_template_part('template-parts/content','search');
                        endwhile;
                        // pagination to the blog page
                        the_posts_pagination(
                            array
                            (
                                'prev_text' => 'Previous',
                                'next_text' => 'Next',
                            )
                        );
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
<?php get_footer(); ?>
</body>
</html>