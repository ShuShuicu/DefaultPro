<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php get_template('AppHeader'); ?>

<div class="col-mb-12 col-8" id="main" role="main">
    <h3 class="archive-title">
        <?php GetPost::ArchiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ''); ?></h3>
    <?php if ($this->have()): ?>
        <?php while (get_post_list()): ?>
            <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
                <div class="post-card">
                    <h2 class="post-title" itemprop="name headline">
                        <a itemprop="url"
                            href="<?php get_post_permalink() ?>"><?php get_post_title() ?></a>
                    </h2>
                    <ul class="post-meta">
                        <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a
                                itemprop="name" href="<?php $this->author->permalink(); ?>"
                                rel="author"><?php $this->author(); ?></a></li>
                        <li><?php _e('时间: '); ?>
                            <time datetime="<?php get_post_date() ?>" itemprop="datePublished"><?php $this->date(); ?></time>
                        </li>
                        <li><?php _e('分类: '); ?><?php get_post_category() ?></li>
                        <li itemprop="interactionCount">
                            <a itemprop="discussionUrl"
                                href="<?php get_post_permalink() ?>#comments"><?php $this->commentsNum('暂无评论', '1 条评论', '%d 条评论'); ?></a>
                        </li>
                    </ul>
                    <div class="post-content post-excerpt" itemprop="articleBody">
                        <?php get_post_excerpt('200') ?>
                        <a href="<?php get_post_permalink() ?>">*阅读全文*</a>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else: ?>
        <article class="post">
            <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
        </article>
    <?php endif; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main -->

<?php
get_template('AppSidebar');
get_template('AppFooter');
?>