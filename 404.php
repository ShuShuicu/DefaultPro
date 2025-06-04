<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
class useSeo
{
    public static function Title() {
        echo '出错啦';
    }
    public static function Description() {
        echo '您访问的页面不存在';
    }
    public static function Keywords() {
        echo '404, error, 错误';
    }
}
get_template('AppHeader'); 
?>

<div class="col-mb-12 col-tb-8 col-tb-offset-2">

    <div class="error-page">
        <h2 class="post-title">404 - <?php _e('页面没找到'); ?></h2>
        <p><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></p>
        <form method="post">
            <p><input type="text" name="s" class="text" autofocus/></p>
            <p>
                <button type="submit" class="submit"><?php _e('搜索'); ?></button>
            </p>
        </form>
    </div>

</div><!-- end #content-->
<?php 
get_template('AppSidebar'); 
get_template('AppFooter');
?>

