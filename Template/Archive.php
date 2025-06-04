<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
while (get_post_list()) {
?>
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
<?php
};
Get::PageNav('&laquo; 前一页', '后一页 &raquo;');