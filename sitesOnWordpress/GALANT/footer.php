 <!-- footer -->
    <footer class="footer">
        <div class="footer-wrap container">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="GALANT" />
            <?php wp_nav_menu([
	'theme_location'  => 'footer',
	'container'       => false,
	'menu_class'      => 'navigation',
	'echo'            => true,
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	
]);; ?>
            <div class="contact">
                <div class="contact__tel">
                    <img class="contact__img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-tel.svg" alt="" />
                    &nbsp;+7(495)133-75-91
                </div>
                <div class="contact__email">
                    <img class="contact__img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-email.svg" alt="" />
                    &nbsp;info@galant&#8209;cosmetic.ru
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</body>

</html>