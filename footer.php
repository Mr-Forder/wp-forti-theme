<footer class="site-footer">


    <div class="posts-container">








    </div>



    <div class="four-col">
        <div class="footer-column no-border">
            <div class="footer-content">
                <div class="footer-branding">
                    <a href="<?php echo site_url(); ?>">
                        <?php

                        if (function_exists('the_custom_logo')) {
                            //grab custom logo data from wp-admin
                            $custom_logo_id = get_theme_mod('custom_logo');
                            //set logo to image path - $logo is now an assoc array full of logo info
                            $logo = wp_get_attachment_image_src($custom_logo_id);
                            //then we echo $logo into the img src - passsing in the first item in the array
                        }
                        ?>
                        <img src="<?php echo $logo[0] ?>" alt="logo">


                        <!-- <div class="branding-copy">
                            <h3> <?php echo get_bloginfo('name') ?></h3>

                        </div> -->
                    </a>

                </div>
            </div>
        </div>
        <div class="footer-column">
            <div class="footer-content"> <?php dynamic_sidebar('footer-1') ?></div>
        </div>
        <div class="footer-column">
            <div class="footer-content"> <?php dynamic_sidebar('footer-2') ?></div>
        </div>
        <div class="footer-column">
            <div class="footer-content"><?php dynamic_sidebar('footer-3') ?></div>
        </div>
    </div>

    <div class="footer-copy">
        <p> <?php echo date("Y"); ?> All rights reserved. </p>
    </div>
    </div>
</footer> <!-- .site-footer -->

</div> <!-- #site-content -->


<?php
wp_footer();
?>




</body>

</html>