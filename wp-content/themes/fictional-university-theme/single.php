<?php

    get_header();

    while(have_posts()) {
        the_post();
        ?>
        <h1><?= the_title(); ?></h1>
        <p><?= the_content(); ?></p>
        <?php
    }

    get_footer();

?>