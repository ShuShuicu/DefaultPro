/* 
    Typecho Theme Development Framework
    TTDF · 一个面向小白简单易懂的Typecho主题模板开发框架
    @Author 鼠子Tomoriゞ
    @Link https://github.com/ShuShuicu/Typecho-Theme-Development-Framework
*/
document.addEventListener('DOMContentLoaded', function () {
    // NProgress 配置项
    const nprogressConfig = {
        minimum: 0.1,
        easing: 'ease',
        speed: 800,
        showSpinner: true,
        trickle: true,
        trickleSpeed: 200
    };

    NProgress.configure(nprogressConfig);
    NProgress.start();

    // 页面加载完成后结束进度条
    window.addEventListener('load', function () {
        NProgress.done();
    });
});

document.addEventListener('DOMContentLoaded', function () {
    // 获取文章内容区域
    const postContent = document.getElementById('PostContent');
    
    // 只有当元素存在时才初始化viewer.js
    if (postContent) {
        // 初始化viewer.js
        var gallery = new Viewer(postContent, {
            toolbar: {
                zoomIn: 1,
                zoomOut: 1,
                oneToOne: 1,
                reset: 1,
                prev: 1,
                play: 0, // 关闭自动播放
                next: 1,
                rotateLeft: 1,
                rotateRight: 1,
                flipHorizontal: 1,
                flipVertical: 1,
            },
            title: true, // 标题显示
        });
    }
});

/**
 * 添加行号
 */
(function() {
    var pres = document.querySelectorAll('pre');
    var lineNumberClassName = 'line-numbers';
    pres.forEach(function(item, index) {
        item.className = item.className == '' ? lineNumberClassName : item.className + ' ' + lineNumberClassName;
    });
})();

/**
 * 主题切换
 */
function switchTheme() {
    const body = document.body;
    const currentTheme = body.getAttribute('theme') || 'light';
    const newTheme = currentTheme === 'light' ? 'dark' : 'light';

    // 切换 theme 属性
    body.setAttribute('theme', newTheme);

    // 保存主题状态到 localStorage
    localStorage.setItem('theme', newTheme);
}

// 页面加载时应用保存的主题
document.addEventListener('DOMContentLoaded', () => {
    const savedTheme = localStorage.getItem('theme') || 'light';
    document.body.setAttribute('theme', savedTheme);
});