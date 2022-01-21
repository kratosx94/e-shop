<?php

get_header();

?>

<div class="content-area">
    <main>
        <div class="container">
            <div class="error-404">
                <header>
                    <h2>Oops...Page not found!</h2>
                    <p>The page you're looking for does not exist on this site.</p>

                    <?php
                    the_widget('WP_Widget_Recent_Posts',
                    array
                    (
                        'title' => 'Take a look at our other posts',
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
