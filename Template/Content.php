<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<article class="post" itemscope itemtype="http://schema.org/BlogPosting">
    <h1 class="post-title" itemprop="name headline">
        <a itemprop="url"
            href="<?php get_post_permalink() ?>"><?php get_post_title() ?></a>
    </h1>
    <?php if (!is_page('page')) { ?>
        <ul class="post-meta">
            <li itemprop="author" itemscope itemtype="http://schema.org/Person">
                作者: <a itemprop="name"
                    href="<?php GetUser::Permalink() ?>"
                    rel="author"><?php get_post_author() ?></a>
            </li>
            <li>时间:
                <time datetime="<?php get_post_date('c') ?>" itemprop="datePublished"><?php $this->date(); ?></time>
            </li>
            <li>分类: <?php get_post_category() ?></li>
        </ul>
    <?php } ?>
    <div class="post-content" id="PostContent" itemprop="articleBody">
        <?php $this->content(); ?>
    </div>
    <?php if (!is_page('page')) { ?>
        <p itemprop="keywords" class="tags">
            阅读量: <?php Postviews($this); ?> |
            标签: <?php get_post_tags() ?>
        </p>
        <ul class="post-near">
            <li>上一篇: <?php $this->thePrev('%s', '没有了'); ?></li>
            <li>下一篇: <?php $this->theNext('%s', '没有了'); ?></li>
        </ul>
    <?php } else { ?>
        <p itemprop="keywords" class="Postviews">
            阅读量: <?php Postviews($this); ?>
        </p>
    <?php } ?>
</article>