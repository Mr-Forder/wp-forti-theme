<?php
get_header();
?>
<div class="archive-title">
    <h1>Latest News</h1>
</div>
<div class="main-content">
    <div class="archive-posts-container">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/content', 'archive');
            }
        };
        ?>
    </div>
    <div class="pagination">
        <?php
        the_posts_pagination(); ?>
    </div>
</div>
<?php
get_footer();
?>