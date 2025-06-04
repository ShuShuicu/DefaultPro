<?php

/**
 * Typecho默认主题增强版
 *
 * @package Default Pro
 * @author 鼠子(Tomoriゞ)
 * @version 1.0.0
 * @link https://github.com/ShuShuicu/DefaultPro
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
get_template('AppHeader');
?>

<div class="col-mb-12 col-8" id="main" role="main">
    <?php get_template('Archive') ?>
</div><!-- end #main-->

<?php
get_template('AppSidebar');
get_template('AppFooter');
?>