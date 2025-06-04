<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php get_template('AppHeader'); ?>

<div class="col-mb-12 col-8" id="main" role="main">
    <h2 class="archive-title">
        <?php GetPost::ArchiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ''); ?></h2>
    <?php if ($this->have()) { ?>
        <?php get_template('Archive') ?>
    <?php } else { ?>
        <article class="post">
            <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
        </article>
    <?php }; ?>
</div><!-- end #main -->

<?php
get_template('AppSidebar');
get_template('AppFooter');
?>