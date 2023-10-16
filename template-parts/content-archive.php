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