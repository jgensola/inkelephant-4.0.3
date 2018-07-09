    <footer class="site-footer dte">
        <div class="top-section">
            <div class="footer-block footer-links">
                <h3>Products</h3>
                <?php
                $args = array(
                    'theme_location' => 'dte-products'
                );
                ?>
                <?php wp_nav_menu($args); ?>
            </div>
            <div class="footer-block footer-links">
                <h3>Technology</h3>
                <?php
                $args = array(
                    'theme_location' => 'dte-technology'
                );
                ?>
                <?php wp_nav_menu($args); ?>
            </div>
            <div class="footer-block footer-links">
                <h3>Service</h3>
                <?php
                $args = array(
                    'theme_location' => 'dte-service'
                );
                ?>
                <?php wp_nav_menu($args); ?>
            </div>
            <div class="footer-block footer-links">
                <h3>Company</h3>
                <?php
                $args = array(
                    'theme_location' => 'dte-company'
                );
                ?>
                <?php wp_nav_menu($args); ?>
            </div>
        </div>
        <div class="bottom-section">

        </div>
    </footer>

</div> <!-- container -->
<?php wp_footer(); ?>
</body>
</html>