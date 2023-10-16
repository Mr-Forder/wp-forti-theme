<?php
get_header();
?>




    <?php
    //if we have posts
    if (have_posts()) {
        //create a while loop, while we have posts, 
        while (have_posts()) {
            //execute the_post - makes wp query the db and pull out a single post - once done, we can call other functions...
            the_post();
            //divide up post types - first arg is filepath, second arg is post type - creates a link to content-article.php in template-parts folder
            get_template_part('template-parts/content', 'article');
        }
    };
    ?>






<?php
get_footer();
?>