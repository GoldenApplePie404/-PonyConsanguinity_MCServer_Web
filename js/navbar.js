// 导航栏功能

// 初始化导航栏
function initNavbar() {
    // 自动高亮当前页面
    highlightCurrentPage();
    // 更新登录按钮状态
    updateLoginButton();
}

// 高亮当前页面的导航链接
function highlightCurrentPage() {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        const href = link.getAttribute('href');

        // 移除active类
        link.classList.remove('active');

        // 判断是否是当前页面
        if (href === currentPath) {
            link.classList.add('active');
        }
        // 特殊处理首页（在根目录时）
        else if (currentPath === '/' || currentPath.endsWith('/index.html')) {
            if (href === 'index.html' || href === './index.html' || href === '../index.html') {
                link.classList.add('active');
            }
        }
    });
}

// 切换移动端菜单
function toggleMobileMenu() {
    const navMenu = document.querySelector('.nav-menu');
    if (navMenu) {
        navMenu.classList.toggle('active');
    }
}

// 更新登录按钮状态
function updateLoginButton() {
    const loginBtn = document.querySelector('.btn-login');
    if (!loginBtn) return;

    // 检查是否有登录信息
    const currentUser = getCurrentUser();

    if (currentUser) {
        // 已登录状态：显示个人中心
        loginBtn.textContent = currentUser.username;
        loginBtn.setAttribute('href', '/pages/profile.html');
        loginBtn.onclick = (e) => {
            e.preventDefault();
            window.location.href = '/pages/profile.html';
        };
    } else {
        // 未登录状态：显示登录
        loginBtn.textContent = '登录';
        loginBtn.setAttribute('href', '/pages/login.html');
        loginBtn.onclick = null;
    }
}

// 获取当前用户
function getCurrentUser() {
    const user = localStorage.getItem('currentUser');
    return user ? JSON.parse(user) : null;
}

// 确保在页面加载时更新登录按钮状态
window.addEventListener('DOMContentLoaded', updateLoginButton);
