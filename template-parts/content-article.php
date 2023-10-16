<div class="single-post-content">
    <div class="container">
        <div class="heading">




        </div>



        <div class="heading-container">
            <div class="margin"></div>
            <div class="heading-content">
                <div class="tags"><?php the_tags(' <span class="tag">',  '</span>') ?></div>
                <h1><?php the_title() ?></h1>
                <div class="date"> <span class="date"><?php the_date() ?></span></div>
                <div class="content"> <?php
                                        the_content();
                                        ?></div>
            </div>
        </div>
    </div>







    <div class="posts-container">


        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'order' => 'DESC',
            'orderby' => 'date',
        );

        $custom_query = new WP_Query($args);

        if ($custom_query->have_posts()) :
            while ($custom_query->have_posts()) : $custom_query->the_post();
                // Display each post as a card
        ?>
                <div class="news-card-1">
                    <a href="<?php the_permalink() ?>">
                        <div class="news-cover">
                            <img src="<?php the_post_thumbnail_url('large'); ?>" alt="cover img" />
                        </div>
                        <div class="news-info">
                            <h3><?php the_title(); ?></h3>
                            <div class="news-description">
                                <p><?php
                                    the_excerpt();
                                    ?></p>
                            </div>
                            <div class="news-overview">
                                <div class="news-time"><?php the_date(); ?></div>
                                <div class="news-origan">
                                    <a href="<?php the_permalink() ?>" alt="Europe"></a>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
        <?php
            endwhile;
            wp_reset_postdata(); // Reset the query to the main loop
        endif;
        ?>
    </div>

</div>