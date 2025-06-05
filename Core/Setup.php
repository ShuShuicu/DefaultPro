<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
// 定义所有设置项
return [
    '基础设置' => [
        'title' => '基础设置',
        'fields' => [
            [
                // 站点副标题
                'type' => 'Text',
                'name' => 'SubTitle',
                'value' => null,
                'label' => '副标题',
                'description' => '设置网站副标题，如果为空则不显示。'
            ],
            [
                // Logo
                'type' => 'Text',
                'name' => 'LogoUrl',
                'value' => null,
                'label' => '站点 LOGO',
                'description' => '在这里填入一个图片 URL 地址, 以代替 站点标题。'
            ],
            [
                // Logo
                'type' => 'Text',
                'name' => 'IcpCode',
                'value' => null,
                'label' => '备案号',
                'description' => '请输入网站Icp备案号将显示在网站底部。'
            ],
            [
                // 文章代码高亮
                'type' => 'Radio',
                'name' => 'ArchiveStyle',
                'value' => 'excerpt',
                'label' => '首页输出',
                'description' => '设置首页文章列表输出风格是否为简介或全文',
                'options' => [
                    'excerpt' => '简介',
                    'content' => '全文',
                ]
            ],
            [
                // 侧边栏显示
                'type' => 'Checkbox',
                'name' => 'SidebarBlock',
                'value' => ['ShowRecentPosts', 'ShowArchive'],
                'label' => '侧边栏显示',
                'description' => '这是一个多选框~',
                'options' => [
                    'ShowRecentPosts' => '显示最新文章',
                    'ShowRecentComments' => '显示最近回复',
                    'ShowCategory' => '显示分类',
                    'ShowArchive' => '显示归档',
                    'ShowOther' => '显示其它杂项',
                ]
            ],
            [
                // 文章代码高亮
                'type' => 'Radio',
                'name' => 'PrismCss',
                'value' => 'Okaidia.css',
                'label' => '代码高亮',
                'description' => '请选择代码高亮的风格',
                'options' => [
                    'Default.css' => 'Default',
                    'Okaidia.css' => 'Okaidia',
                    'Coy.css' => 'Coy',
                    'SolarizedLight.css' => 'SolarizedLight',
                    'TomorrowNight.css' => 'TomorrowNight',
                    'Twilight.css' => 'Twilight',
                    'Funky.css' => 'Funky',
                    'Dark.css' => 'Dark',
                ]
            ],
        ]
    ],
    '其他设置' => [
        'title' => '其他设置',
        'fields' => [
            [
                'type' => 'Select',
                'name' => 'TTDF_RESTAPI_Switch',
                'value' => 'false',
                'label' => 'REST API',
                'description' => 'TTDF框架内置的 REST API<br/>使用教程可参见 <a href="https://github.com/Typecho-Framework/Typecho-Theme-Development-Framework#rest-api" target="_blank">*这里*</a>',
                'options' => [
                    'true' => '开启',
                    'false' => '关闭'
                ]
            ],
            [
                // 是否启用自定义导航
                'type' => 'Radio',
                'name' => 'CustomNav',
                'value' => 'false',
                'label' => '自定义导航',
                'description' => '是否启用自定义导航以替代默认自动获取页面链接。',
                'options' => [
                    'true' => '启动',
                    'false' => '不启用'
                ]
            ],
            [
                // 自定义导航内容
                'type' => 'Textarea',
                'name' => 'CustomNavContent',
                'value' => '首页|' . get_site_url(false) . "\n" . 'Default Pro|https://github.com/ShuShuicu/DefaultPro',
                'label' => '导航内容',
                'description' => '用于自定义顶部导航链接, 格式为 text|url 多个导航请换行。'
            ]
        ]
    ],
    'About' => [
        'title' => '关于主题',
        // 定义HTML TAB栏
        'html' => [
            [
                // 'Content' => '自定义输出HTML内容',
                'content' => '<h2>Default Pro Theme for Typecho</h2>
            <p>本主题基于Typecho默认主题+TTDF框架二次开发(几乎重写)</p>
            <h3>功能介绍</h3>
            <blockquote style="border-left: 4px solid #ccc; padding-left: 20px; margin: 20px 0;">
                <p>
                    1.代码高亮
                    <br>2.图片灯箱
                    <br>3.渐入渐出
                    <br>4.RESTAPI
                    <br>5.NProgress
                    <br>6.夜间主题模式
                </p>
            </blockquote>'
            ],
        ]
    ],
];
