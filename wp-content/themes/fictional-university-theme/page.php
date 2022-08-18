<?php

    get_header();

    while(have_posts()) {
        the_post();
        ?>

       <div class="page-banner">
            <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>)">

            </div>
            <div class="page-banner__content container container--narrow">
                <h1 class="page-banner__title"><?php the_title(); ?></h1>
                <div class="page-banner__intro">
                <p>DONT'T FORGET TO REPLACE ME LATER</p>
            </div>
            </div>
        </div>

        <div class="container container--narrow page-section">

        <?php

        // wp_get_post_parent_id(get_the_ID()) --> will give us the ID of the parent page
        // it will only run if the current page is a child page
        // the_title() --> will output the title of the current page
        // get_the_title() --> allows you to past in id to as parameters to get the title of the post/page

        $theParent = wp_get_post_parent_id(get_the_ID());

        if ($theParent) {
           ?>
           <div class="metabox metabox--position-up metabox--with-home-link">
                <p>
                <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent) ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span>
                </p>
            </div>
           <?php
        }

        ?>

            <!-- <div class="page-links">
                <h2 class="page-links__title"><a href="#">About Us</a></h2>
                <ul class="min-list">
                <li class="current_page_item"><a href="#">Our History</a></li>
                <li><a href="#">Our Goals</a></li>
                </ul>
            </div> -->

            <div class="generic-content">
                <?php the_content(); ?>
            </div>
        </div>

        <?php
    }

    get_footer();

?>