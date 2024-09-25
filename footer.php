<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
</div>
<footer id="colophon" role="contentinfo">
    <div class="footer-contacts">
        <a href="https://trenazieri.lv">
            Contact dealer
        </a>
    </div>
    <div class="footer-menus">
        <div class="general-map">
            <?php wp_nav_menu(array('menu' => 'footer-menu-2')); ?>
        </div>
        <div class="product-map">
            <?php wp_nav_menu(array('menu' => 'footer-menu-1')); ?>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html> 