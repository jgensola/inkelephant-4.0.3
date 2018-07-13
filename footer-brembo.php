    <footer class="site-footer brembo">
        <div class="inner-container">
            <div class="footer-block footer-links">
                <h3>About</h3>
                <?php
                $args = array(
                    'theme_location' => 'brembo-about'
                );
                ?>
                <?php wp_nav_menu($args); ?>
            </div>
            <div class="footer-block footer-links">
                <h3>Products</h3>
                <?php
                $args = array(
                    'theme_location' => 'brembo-product'
                );
                ?>
                <?php wp_nav_menu($args); ?>
            </div>
            <div class="footer-block footer-links">
                <h3>Application Lists</h3>
                <?php
                $args = array(
                    'theme_location' => 'brembo-application-list'
                );
                ?>
                <?php wp_nav_menu($args); ?>
            </div>
            <div class="footer-block footer-links">
                <h3>Knowledgebase</h3>
                <?php
                $args = array(
                    'theme_location' => 'brembo-knowledgebase'
                );
                ?>
                <?php wp_nav_menu($args); ?>
            </div>
        </div>
    </footer>

</div> <!-- container -->
<?php wp_footer(); ?>
</body>
</html>