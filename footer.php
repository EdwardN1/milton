<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<footer class="footer" role="contentinfo">

    <div class="grid-container">
    </div>
    <div id="footer-links-container">
        <div class="grid-x">
            <div class="cell auto"></div>
            <div class="cell shrink">
                <nav role="navigation">
                    <?php joints_footer_links(); ?>
                </nav>
            </div>
            <div class="cell auto"></div>
        </div>
    </div>

</footer> <!-- end .footer -->

</div>  <!-- end .off-canvas-content -->

</div> <!-- end .off-canvas-wrapper -->

<?php wp_footer(); ?>

</body>

</html> <!-- end page -->