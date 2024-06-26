<footer>
    <div class="footer-widgets">
        <?php if (is_active_sidebar('footer-1')) : ?>
            <div class="footer-widget">
                <?php dynamic_sidebar('footer-1'); ?>
            </div>
        <?php endif; ?>
        <?php if (is_active_sidebar('footer-2')) : ?>
            <div class="footer-widget">
                <?php dynamic_sidebar('footer-2'); ?>
            </div>
        <?php endif; ?>
        <?php if (is_active_sidebar('footer-3')) : ?>
            <div class="footer-widget">
                <?php dynamic_sidebar('footer-3'); ?>
            </div>
        <?php endif; ?>
    </div>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
</footer>
<?php wp_footer(); ?>
</body>
</html>
