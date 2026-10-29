<?php
$contact_email = sanitize_email(get_option('admin_email'));
$site_name = get_bloginfo('name');
?>
<footer class="site-footer">
    <div class="site-footer-content">
        <p class="site-footer-contact">
            Get in touch
            <?php if ($contact_email) : ?>
                <a href="<?php echo esc_attr('mailto:' . $contact_email); ?>"><?php echo esc_html($contact_email); ?></a>
            <?php endif; ?>
        </p>
        <p class="site-footer-copyright">
            &copy; <?php echo esc_html(wp_date('Y')); ?> <?php echo esc_html($site_name); ?>. All rights reserved.
        </p>
    </div>
</footer>
<?php wp_footer(); ?>


</body>

</html>