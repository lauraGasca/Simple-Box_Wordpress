        <!--=========socials==========-->
        <div class="socials">
            <div class="container">
                <div class="section-head style1">
                    <h2>Siguenos</h2>
                </div>
                <ul>
                    <li><a href="https://www.facebook.com/InTic-412488632280555/"><span class="fa fa-facebook"></span></a><h5 class="animated">facebook</h5></li>
                    <li><a href="https://www.facebook.com/InTic-412488632280555/"><span class="fa fa-twitter"></span></a><h5 class="animated">twitter</h5></li>
                    <li><a href="https://www.youtube.com/channel/UCipMZEt2YM-99jF2cG-wOSA/"><span class="fa fa-youtube"></span></a><h5 class="animated">youtube</h5></li>
                </ul>
            </div>
        </div><!--socials-->
        <footer>
            <div class="container">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'menu-abajo',
                        'container'       => 'div',
                        'container_class' => 'row',
                        'menu_class'      => 'site_map',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                    ));
                    ?>
                <div class="row copyrights">
                    <div class="col-xs-12 col-sm-6">
                        Copyright © 2016 <span class="simple"><?php echo bloginfo('name');?></span> - All rights reserved.
                    </div>
                    <div class="col-xs-12 col-sm-6 text-right">Diseñado por <a href="http://elnahual.com.mx" class="simple">El Nahual</a></div>
                </div>
            </div>
            <a class="fa fa-chevron-up toTop" href="#"></a>
        </footer>

        <!--==========================================-->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.sticky.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/masonry.pkgd.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.waitforimages.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.vegas.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/parallax.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>