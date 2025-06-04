<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * 文章阅读数
 */
function Postviews($archive)
{
    $db = Typecho_Db::get();
    $cid = $archive->cid;
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $db->getPrefix() . 'contents` ADD `views` INT(10) DEFAULT 0;');
    }
    $exist = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid))['views'];
    if ($archive->is('single')) {
        $cookie = Typecho_Cookie::get('contents_views');
        $cookie = $cookie ? explode(',', $cookie) : array();
        if (!in_array($cid, $cookie)) {
            $db->query($db->update('table.contents')
                ->rows(array('views' => (int)$exist + 1))
                ->where('cid = ?', $cid));
            $exist = (int)$exist + 1;
            array_push($cookie, $cid);
            $cookie = implode(',', $cookie);
            Typecho_Cookie::set('contents_views', $cookie);
        }
    }
    echo $exist == 0 ? '暂无阅读' : $exist;
}


/**
 * VueScript
 */
TTDF_Hook::add_action('load_foot', function () {
?>
    <script type="text/javascript">
        const NavMenu = Vue.createApp({
            data() {
                return {
                    links: `<?php Get::Options('CustomNav', true); ?>`,
                };
            },
            computed: {
                parsedLinks() {
                    return this.links.split('\n').map(line => {
                        const [text, url] = line.split('|');
                        return {
                            text,
                            url
                        };
                    });
                }
            },
            template: `
                <a <?php if (is_page('index')) { ?> class="current" <?php }; ?> href="<?php get_site_url(); ?>">首页</a>
                <a v-for="(link, index) in parsedLinks" :key="index" :href="link.url">
                    {{ link.text }}
                </a>
            `,
        });
        NavMenu.mount('#nav-menu');
    </script>
<?php
});
