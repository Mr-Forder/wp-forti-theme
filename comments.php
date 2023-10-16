<div class="comments-wrapper">
    <div class="comments" id="comments">
        <div class="comments-header">
        </div>
        <!-- LIST COMMENTS -->
        <div class="comments-inner">
            <?php
            wp_list_comments(
                array(
                    'avatar_size' => 120,
                    'style' => 'div'
                )

            );
            ?>
        </div>
    </div>
    <hr class="" aria-hidden="true">
    <!-- COMMENT FORM -->
    <?php
    if (comments_open()) {
        comment_form(
            array(
                'class_form' => '',
                'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                'title_reply_after' => '</h2>',
            )
        );
    };
    ?>

</div>