<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php get_template('AppHeader'); ?>

<div class="col-mb-12 col-8" id="main" role="main">
    <?php 
        get_template('Content');
        get_template('Comments') 
    ?>
</div><!-- end #main-->

<?php
get_template('AppSidebar');
get_template('AppFooter');
?>