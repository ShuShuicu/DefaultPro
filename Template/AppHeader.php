<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<!DOCTYPE html>
<html lang="<?php echo Get::Options('lang', false) ? Get::Options('lang', false) : 'zh-CN' ?>">

<head>
    <?php TTDF_Hook::do_action('load_head'); ?>
    <link rel="stylesheet" href="<?php get_theme_file_url('Assets/main.css?ver=') . get_theme_version(); ?>">
    <link rel="stylesheet" href="<?php get_theme_file_url('Assets/normalize.css?ver=') . get_theme_version(); ?>">
    <link rel="stylesheet" href="<?php get_theme_file_url('Assets/grid.css?ver=') . get_theme_version(); ?>">
    <link rel="stylesheet" href="<?php get_theme_file_url('Assets/style.css?ver=') . get_theme_version(); ?>">
    <link rel="stylesheet" href="<?php get_theme_file_url('Assets/viewer/viewer.min.css?ver=') . get_theme_version(); ?>">
    <link rel="stylesheet" href="<?php get_theme_file_url('Assets/prism/' . get_options('PrismCss') . '?ver=') . get_theme_version(); ?>">
    <link rel="stylesheet" href="<?php get_theme_file_url('Assets/nprogress/nprogress.css?ver=') . get_theme_version(); ?>">
</head>

<body>
    <header id="header" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="site-name col-mb-12 col-9">
                    <?php if (get_options('LogoUrl')) { ?>
                        <a id="logo" href="<?php get_site_url() ?>">
                            <img src="<?php get_options('LogoUrl') ?>" alt="<?php get_site_name() ?>" />
                        </a>
                    <?php } else { ?>
                        <a id="logo" href="<?php get_site_url() ?>"><?php get_site_name()  ?></a>
                        <p class="description"><?php get_site_description() ?></p>
                    <?php }; ?>
                </div>
                <div class="site-search col-3 kit-hidden-tb">
                    <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                        <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                        <input type="text" id="s" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
                        <button type="submit" class="submit"><?php _e('搜索'); ?></button>
                    </form>
                </div>
                <div class="col-mb-12">
                    <nav id="nav-menu" class="clearfix" role="navigation">
                        <?php if (get_options('CustomNav') == 'true') {
                            $CustomNavContent = Get::Options('CustomNavContent');
                            if (empty($CustomNavContent)) {
                                $CustomNavContent = '首页|' . Get::SiteUrl(false);
                            }
                            $MenuItems = explode("\n", $CustomNavContent);
                            foreach ($MenuItems as $item) {
                                $parts = explode('|', trim($item));
                                if (count($parts) == 2) {
                                    list($name, $link) = $parts;
                                    $class = is_page('index') ? ' class="current"' : '';
                                    echo '<a href="' . $link . '"' . $class . ' title="' . $name . '">' . $name . '</a>';
                                }
                            }
                        } else { ?>
                            <a <?php if (is_page('index')) { ?> class="current" <?php }; ?> href="<?php get_site_url(); ?>">首页</a>
                            <?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
                            <?php while ($pages->next()) { ?>
                                <a <?php if ($this->is('page', $pages->slug)): ?> class="current" <?php endif; ?>
                                    href="<?php $pages->permalink(); ?>"
                                    title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                        <?php };
                        } ?>
                    </nav>
                </div>
            </div><!-- end .row -->
        </div>
    </header><!-- end #header -->
    <main id="app">
        <div id="body">
            <div class="container">
                <div class="row">