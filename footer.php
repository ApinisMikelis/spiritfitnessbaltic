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
        <ul>
            <li class="address">Biekensalas 6, Riga, Latvia</li>
            <li class="phone">+371 67845794, +371 26625388</li>
            <li class="mail"><a href="mailto:info@sportsystems.lv">info@sportsystems.lv</a></li>
            <li class="facebook"><a target="_blank" href="https://www.facebook.com/SportsystemsLtd">SportsystemsLtd</a></li>
            <li class="skype"><a href="skype:sport.systems?call">sport.systems (click to call us)</a></li>
        </ul>
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