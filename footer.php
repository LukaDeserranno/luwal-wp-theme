<?php
/**
 * The template for displaying the footer
 */
?>
    <footer id="colophon" class="site-footer">
        <div class="site-info">
            <a href="<?php echo esc_url(__('https://wordpress.org/', 'luwal')); ?>">
                <?php printf(esc_html__('Proudly powered by %s', 'luwal'), 'WordPress'); ?>
            </a>
            <span class="sep"> | </span>
            <?php printf(esc_html__('Theme: %1$s by %2$s.', 'luwal'), 'LuWal', '<a href="https://your-website.com">Your Name</a>'); ?>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>