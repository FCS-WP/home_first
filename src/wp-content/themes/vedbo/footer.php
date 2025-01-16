
        </div><!-- .site-content-wrapper -->
        <?php
        if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
            get_template_part( 'template-parts/footers/footer', 'type-mini' );
        }
        ?>
        <?php get_template_part( 'template-parts/footers/footer-quickview') ?>
    </div><!-- .site-wrapper -->
    <?php get_template_part( 'template-parts/footers/footer-canvas' ) ?>
    <?php get_template_part( 'template-parts/footers/footer-support' ) ?>
    <?php get_template_part( 'template-parts/footers/footer-popup' ) ?>
    <?php get_template_part( 'template-parts/global/svg-icons' ) ?>
    <div class="nova-overlay-global"></div>
    <?php wp_footer(); ?>
</body>
</html>
