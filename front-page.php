<?php
get_header();

?>

<div class="hero-container">



    <hero>
        <article data-index="0" data-status="active">

            <div class="article-image-section article-section"></div>

            <div class="article-description-section article-section">

                <p>
                    <?php echo get_forti_options('slide_1_text_content') ?>
                </p>

            </div>
            <div class="article-title-section article-section">
                <h2><?php echo get_forti_options('slide_1_title') ?></h2>

            </div>

            <div class="article-nav-section article-section">
                <button class="article-nav-button" type="button" onclick="handleLeftClick()">
                    < </button>
                        <button class="article-nav-button" type="button" onclick="handleRightClick()">
                            >
                        </button>
            </div>
        </article>
        <article data-index="1" data-status="inactive">
            <div class="article-image-section article-section"></div>
            <div class="article-description-section article-section">

                <p>
                    <?php echo get_forti_options('slide_2_text_content') ?>
                </p>
            </div>
            <div class="article-title-section article-section">
                <h2><?php echo get_forti_options('slide_2_title') ?></h2>

            </div>
            <div class="article-nav-section article-section">
                <button class="article-nav-button" type="button" onclick="handleLeftClick()">
                    < </button>
                        <button class="article-nav-button" type="button" onclick="handleRightClick()">
                            >
                        </button>
            </div>
        </article>
        <article data-index="2" data-status="inactive">
            <div class="article-image-section article-section"></div>
            <div class="article-description-section article-section">
                <p> <?php echo get_forti_options('slide_3_text_content') ?></p>
            </div>
            <div class="article-title-section article-section">
                <h2><?php echo get_forti_options('slide_3_title') ?></h2>

            </div>
            <div class="article-nav-section article-section">
                <button class="article-nav-button" type="button" onclick="handleLeftClick()">
                    < </button>
                        <button class="article-nav-button" type="button" onclick="handleRightClick()">
                            >
                        </button>
            </div>
        </article>
        <article data-index="3" data-status="inactive">
            <div class="article-image-section article-section"></div>
            <div class="article-description-section article-section">
                <p> <?php echo get_forti_options('slide_4_text_content') ?></p>
            </div>
            <div class="article-title-section article-section">
                <h2><?php echo get_forti_options('slide_4_title') ?></h2>

            </div>
            <div class="article-nav-section article-section">
                <button class="article-nav-button" type="button" onclick="handleLeftClick()">
                    < </button>
                        <button class="article-nav-button" type="button" onclick="handleRightClick()">
                            >
                        </button>
            </div>
        </article>
    </hero>

</div>


<main class="main-content">




    <div class="fullwidth-content">

        <!-- <h1 class="heading"><?php the_title(); ?></h1> -->
        <?php
        //if we have posts
        if (have_posts()) {
            //create a while loop, while we have posts, 
            while (have_posts()) {
                //execute the_post - makes wp query the db and pull out a single post - once done, we can call other functions...
                the_post();
                //such as grabbing the content from that post
                the_content();
            }
        };
        ?>
    </div>
    <!-- <div class="content-sidebar">



            <?php dynamic_sidebar('sidebar-1') ?>



        </div> -->
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

</main> <!-- .main-content -->

<?php
get_footer();
?>