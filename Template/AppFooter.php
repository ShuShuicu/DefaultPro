<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>

</div><!-- end .row -->
</div>
</div><!-- end #body -->
<button id="SwitchTheme" onclick="switchTheme()" aria-label="切换主题"></button>
</main>
<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php get_site_url() ?>"><?php get_site_name(); ?></a>.
    <br />由 <a href="https://typecho.org" target="_blank">Typecho</a> & <a href="https://github.com/ShuShuicu/DefaultPro" target="_blank">DefaultPro</a> 强力驱动.
</footer><!-- end #footer -->
<?php TTDF_Hook::do_action('load_foot'); ?>
<script src="<?php get_theme_file_url('Assets/main.js?ver=') . get_theme_version(); ?>"></script>
<script src="<?php get_theme_file_url('Assets/viewer/viewer.min.js?ver=') . get_theme_version(); ?>"></script>
<script src="<?php get_theme_file_url('Assets/prism/clipboard.min.js?ver=') . get_theme_version(); ?>"></script>
<script src="<?php get_theme_file_url('Assets/prism/prism.js?ver=') . get_theme_version(); ?>"></script>
<script src="<?php get_theme_file_url('Assets/nprogress/nprogress.js?ver=') . get_theme_version(); ?>"></script>
</body>

</html>