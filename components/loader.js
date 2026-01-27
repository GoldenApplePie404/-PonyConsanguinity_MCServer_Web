// 组件加载器
// 获取当前页面的基础路径
function getBasePath() {
    const path = window.location.pathname;
    if (path.includes('/pages/')) {
        return '../';
    }
    return '';
}

const basePath = getBasePath();

const components = {
    // 侧边栏音乐播放器
    sidebarPlayer: {
        selector: '#app-sidebar-player',
        template: basePath + 'components/sidebar-player.html?v=3.0',
        callback: () => {
            initSidebarPlayer();
        }
    },
    // 回到顶部按钮
    backToTop: {
        selector: '#app-back-to-top',
        template: basePath + 'components/back-to-top.html?v=1.0',
        callback: () => {
            initBackToTop();
        }
    },
    // 导航栏
    navbar: {
        selector: '#app-navbar',
        template: basePath + 'components/navbar.html?v=1.0',
        callback: () => {
            initNavbar();
        }
    },
    // 页脚
    footer: {
        selector: '#app-footer',
        template: basePath + 'components/footer.html?v=1.0',
        callback: () => {
        }
    }
};

// 加载组件
function loadComponent(config) {
    const container = document.querySelector(config.selector);

    if (!container) {
        console.warn(`组件容器 ${config.selector} 未找到`);
        return;
    }

    fetch(config.template)
        .then(response => {
            if (!response.ok) {
                throw new Error(`加载组件失败: ${response.status}`);
            }
            return response.text();
        })
        .then(html => {
            // 替换BASE_PATH占位符
            html = html.replace(/\{\{BASE_PATH\}\}/g, basePath);

            container.innerHTML = html;

            // 使用双重延迟确保DOM完全更新
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    if (config.callback && typeof config.callback === 'function') {
                        config.callback();
                    }
                });
            });
        })
        .catch(error => {
            console.error('组件加载错误:', error);
        });
}

// 初始化所有组件
function initComponents() {
    const body = document.body;
    const componentsToLoad = body.getAttribute('data-components');

    if (componentsToLoad) {
        const componentNames = componentsToLoad.split(',');

        componentNames.forEach(name => {
            const componentName = name.trim();
            if (components[componentName]) {
                loadComponent(components[componentName]);
            }
        });
    }
}

// 页面加载完成后初始化组件
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initComponents);
} else {
    initComponents();
}
