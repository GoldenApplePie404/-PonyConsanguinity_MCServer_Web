# 万驹同源服务器官网

<p align="center">
  <a href="#项目简介">项目简介</a> •
  <a href="#功能特性">功能特性</a> •
  <a href="#技术栈">技术栈</a> •
  <a href="#项目结构">项目结构</a> •
  <a href="#快速开始">快速开始</a> •
  <a href="#使用指南">使用指南</a> •
  <a href="#开发流程">开发流程</a> •
  <a href="#开发指导">开发指导</a> •
  <a href="#贡献指南">贡献指南</a>
</p>

## 项目简介

**万驹同源（PonyConsanguinity）官网**是一个完全公益的小马 Minecraft 服务器官网，致力于为广大玩家提供优质的游戏体验。官网采用现代化的前端技术构建，具有响应式设计、动态视觉效果和完整的功能模块。

## 功能特性

### 🎨 视觉体验
- **动态 Banner**：渐变背景动画和粒子效果
- **响应式设计**：适配各种屏幕尺寸
- **流畅动画**：页面加载、滚动和交互动画
- **炫彩按钮**：动态渐变效果和悬停反馈

### 📚 核心功能
- **服务器介绍**：详细的服务器信息和玩法介绍
- **论坛系统**：支持 Markdown 格式的帖子发布和回复
- **用户系统**：注册、登录和个人中心
- **服务器状态**：实时服务器状态监控
- **音乐播放器**：内置音乐播放器，支持进度控制

### 🔧 技术特性
- **环境自适应**：自动检测本地开发和生产环境
- **Mock 模式**：支持无后端开发和测试
- **组件化设计**：导航栏、页脚、播放器等可复用组件
- **Markdown 支持**：完整的 Markdown 渲染和样式
- **实时交互**：字数统计、动态反馈等用户交互


## 技术栈

| 分类 | 技术 | 版本 | 用途 |
|------|------|------|------|
| **前端** | HTML5 | - | 页面结构 |
| | CSS3 | - | 样式设计 |
| | JavaScript (ES6+) | - | 交互逻辑 |
| | marked.js | - | Markdown 渲染 |
| **后端** | PHP | 8.0+ | API 服务 |
| **数据存储** | JSON 文件 | - | 数据持久化 |
| **构建工具** | - | - | 静态文件服务 |
| **外部服务** | Bilibili 播放器 | - | 视频嵌入 |

## 项目结构

```
PC_Web/
├── api/               # PHP API 接口
│   ├── forum.php      # 论坛相关 API
│   ├── login.php      # 登录 API
│   ├── register.php   # 注册 API
│   └── ...            # 其他 API 接口
├── assets/            # 静态资源
│   ├── img/           # 图片资源
│   └── music/         # 音乐资源
├── components/        # 可复用组件
│   ├── navbar.html    # 导航栏
│   ├── footer.html    # 页脚
│   └── sidebar-player.html # 音乐播放器
├── css/               # 样式文件
│   ├── style.css      # 主样式
│   └── ...            # 其他样式文件
├── data/              # 数据文件
│   ├── posts.json     # 帖子数据
│   ├── users.json     # 用户数据
│   └── ...            # 其他数据文件
├── js/                # JavaScript 文件
│   ├── api.js         # API 客户端
│   ├── main.js        # 主脚本
│   └── ...            # 其他脚本文件
├── pages/             # 页面文件
│   ├── forum.html     # 论坛页面
│   ├── status.html    # 状态页面
│   └── ...            # 其他页面
├── templates/         # 模板文件
├── index.html         # 首页
└── README.md          # 项目说明
```

## 快速开始

### 环境要求
- **本地开发**：任意静态文件服务器
- **生产部署**：支持 PHP 的 Web 服务器（如 Apache、Nginx）
- **浏览器**：现代浏览器（Chrome、Firefox、Edge 等）

### 本地开发

1. **克隆项目**
   ```bash
   git clone <repository-url>
   cd PC_Web
   ```

2. **启动本地服务器**
   - 使用 PHP 内置服务器
     ```bash
     php -S localhost:8000
     ```
   - 或使用其他静态文件服务器（如 VS Code Live Server 扩展）

3. **访问网站**
   打开浏览器访问 `http://localhost:8000`

### 生产部署

1. **准备服务器**
   - 确保服务器安装了 PHP 8.0+
   - 配置 Web 服务器（Apache/Nginx）

2. **上传文件**
   将项目文件上传到服务器的 Web 根目录

3. **配置权限**
   - 确保 `data/` 目录可写
   - 确保 `api/` 目录的 PHP 文件可执行

4. **访问网站**
   打开浏览器访问服务器域名

## 使用指南

### 论坛系统

#### 发布帖子
1. 点击导航栏中的「论坛」进入论坛页面
2. 点击「发布新帖」按钮
3. 填写标题和内容（支持 Markdown 格式）
4. 点击「发布」按钮

#### 回复帖子
1. 进入帖子详情页面
2. 在回复框中输入内容（支持 Markdown 格式）
3. 点击「回复」按钮

### 音乐播放器

- **播放/暂停**：点击播放按钮
- **调整音量**：拖动音量滑块
- **进度控制**：点击进度条调整播放位置
- **切换歌曲**：点击歌曲列表中的歌曲

### 用户系统

#### 注册
1. 点击导航栏中的「登录/注册」
2. 选择「注册」选项卡
3. 填写用户名、邮箱和密码
4. 点击「注册」按钮

#### 登录
1. 点击导航栏中的「登录/注册」
2. 选择「登录」选项卡
3. 填写用户名和密码
4. 点击「登录」按钮

## 开发流程

### 1. 环境设置
- 克隆项目到本地
- 启动本地开发服务器
- 确保 `api.js` 中的环境设置正确

### 2. 代码开发
- **前端开发**：修改 HTML/CSS/JavaScript 文件
- **后端开发**：修改 PHP API 文件
- **数据结构**：修改 JSON 数据格式

### 3. 测试
- **功能测试**：确保所有功能正常工作
- **兼容性测试**：在不同浏览器中测试
- **响应式测试**：在不同设备尺寸下测试

### 4. 部署
- **本地测试**：确保本地环境正常
- **生产部署**：上传文件到服务器
- **线上测试**：确保生产环境正常

## 技术实现细节

### API 系统

- **环境自动检测**：
  ```javascript
  const isLocalhost = window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1';
  const API_BASE_URL = isLocalhost ? 'http://localhost:8000/api' : '/api';
  ```

- **Mock 模式**：支持无后端开发和测试

### 论坛系统

- **Markdown 支持**：使用 marked.js 渲染 Markdown 内容
- **数据存储**：使用 JSON 文件存储帖子和回复
- **内容格式**：帖子内容使用 MD 文件存储

### 音乐播放器

- **进度控制**：支持点击进度条调整播放位置
- **事件处理**：防止事件冲突的状态管理

### 视觉效果

- **动态按钮**：使用 CSS 渐变和动画
  ```css
  .btn-primary {
      background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
      background-size: 200% 200%;
      animation: gradientShift 3s ease infinite;
  }
  ```

- **页面加载动画**：平滑的加载过渡效果

## 开发指导

### 页面模板使用

#### 概述

本项目提供了统一的页面模板，用于创建符合网站风格的新页面，避免重复代码。所有页面都应遵循此模板结构。

#### 文件位置

模板文件位于：`templates/page-template.html`

#### 使用方法

1. 复制 `templates/page-template.html` 到 `pages/` 目录
2. 重命名为合适的文件名，如 `new-page.html`
3. 根据需要修改内容

#### 模板结构说明

##### 1. CSS样式引入

```html
<!-- ========== CSS样式文件引入 ========== -->
<link rel="stylesheet" href="../css/style.css?v=3.22">
<link rel="stylesheet" href="../css/sidebar-player.css?v=2.0">
<link rel="stylesheet" href="../css/back-to-top.css?v=1.0">
```

##### 2. 组件配置

```html
<!-- ========== body标签中的data-components属性 ========== -->
<!-- 可用组件：sidebarPlayer, backToTop, navbar, footer -->
<body data-components="sidebarPlayer,backToTop,navbar,footer">
```

根据页面需要，可以移除不需要的组件。

##### 3. Banner区域（可选）

如果页面需要Banner，使用以下代码：

```html
<!-- ========== Banner区域（可选） ========== -->
<section class="subpage-banner">
    <div class="subpage-banner-bg"></div>
    <div class="subpage-banner-particles"></div>
    <div class="container">
        <div class="subpage-banner-content">
            <h1 class="subpage-banner-title">页面标题</h1>
            <p class="subpage-banner-subtitle">副标题描述</p>
        </div>
    </div>
</section>
```

##### 4. 主要内容区域

```html
<!-- ========== 主要内容区域 ========== -->
<div class="section">
    <div class="container">
        <!-- 在这里添加页面主要内容 -->
        <!-- 示例：卡片布局 -->
        <div class="card fade-in">
            <div class="card-header">
                <h2>卡片标题</h2>
            </div>
            <div class="card-body">
                <p>卡片内容...</p>
            </div>
        </div>
    </div>
</div>
```

##### 5. JavaScript脚本引入

**注意：引入顺序很重要，必须按照以下顺序**

```html
<!-- 1. API工具库（如果需要） -->
<script src="../js/api.js"></script>

<!-- 2. 主脚本（包含常用函数） -->
<script src="../js/main.js?v=3.5"></script>

<!-- 3. 回到顶部脚本 -->
<script src="../js/back-to-top.js?v=1.0"></script>

<!-- 4. 导航栏脚本 -->
<script src="../js/navbar.js?v=1.0"></script>

<!-- 5. 音乐播放器脚本 -->
<script src="../js/sidebar-player.js?v=3.0"></script>

<!-- 6. 组件加载器 -->
<script src="../components/loader.js?v=3.0"></script>
```

#### 常用组件说明

##### 卡片组件

```html
<div class="card fade-in">
    <div class="card-header">
        <h2>卡片标题</h2>
    </div>
    <div class="card-body">
        <p>卡片内容...</p>
    </div>
</div>
```

##### 动画效果

- `fade-in`：淡入效果
- `fade-in-delay-1`：延迟淡入（1级延迟）
- `fade-in-delay-2`：延迟淡入（2级延迟）
- 以此类推...

##### 按钮样式

```html
<!-- 主要按钮 -->
<button class="btn btn-primary">按钮文本</button>

<!-- 次要按钮 -->
<button class="btn btn-outline">按钮文本</button>

<!-- 小按钮 -->
<button class="btn btn-sm btn-primary">小按钮</button>
```

#### 常见页面类型示例

##### 1. 简单信息页

```html
<div class="section">
    <div class="container">
        <div class="card fade-in">
            <div class="card-header">
                <h2>页面标题</h2>
            </div>
            <div class="card-body">
                <p>页面内容...</p>
            </div>
        </div>
    </div>
</div>
```

##### 2. 列表页（如公告页）

```html
<div class="section announcement-page">
    <div class="container">
        <div class="announcement-list">
            <!-- 列表项 -->
            <div class="announcement-item fade-in">
                <div class="announcement-header">
                    <h2 class="announcement-title">标题</h2>
                    <div class="announcement-meta">
                        <span class="announcement-type update">类型</span>
                        <span class="announcement-date">日期</span>
                    </div>
                </div>
                <div class="announcement-content">
                    <p>内容...</p>
                </div>
                <div class="announcement-actions">
                    <a href="#" class="announcement-link">查看详情 →</a>
                </div>
            </div>
        </div>
    </div>
</div>
```

##### 3. 表单页

```html
<div class="section">
    <div class="container">
        <div class="card fade-in">
            <div class="card-header">
                <h2>表单标题</h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label>标签</label>
                        <input type="text" placeholder="请输入内容">
                    </div>
                    <div class="form-group">
                        <label>标签</label>
                        <textarea rows="5" placeholder="请输入内容"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">提交</button>
                </form>
            </div>
        </div>
    </div>
</div>
```

#### 注意事项

1. **路径问题**：确保CSS和JS文件的路径正确（通常使用`../`返回上一级目录）
2. **版本号**：在CSS和JS文件名后添加版本号（如`?v=3.22`）以避免缓存问题
3. **响应式设计**：使用已有的CSS类确保页面在不同设备上正常显示
4. **组件顺序**：严格按照模板中的顺序引入JavaScript文件
5. **动画效果**：合理使用动画效果，避免过度使用

#### 示例页面

参考以下页面了解实际应用：
- `pages/announcement.html` - 列表页示例
- `pages/post-detail.html` - 详情页示例
- `pages/forum.html` - 交互页示例

### 音乐播放器开发指导

#### 概述

音乐播放器是网站的一个核心组件，位于页面右侧边栏，提供音乐播放、进度控制、音量调节等功能。

#### 文件结构

```
PC_Web/
├── components/
│   └── sidebar-player.html  # 音乐播放器组件
├── css/
│   └── sidebar-player.css   # 音乐播放器样式
└── js/
    └── sidebar-player.js    # 音乐播放器脚本
```

#### 核心功能

1. **音乐播放控制**：播放/暂停、上一曲/下一曲
2. **进度控制**：进度条显示和点击调整
3. **音量调节**：音量滑块控制
4. **歌曲信息显示**：歌曲标题、艺术家
5. **播放列表**：多首歌曲切换

#### 组件集成

在页面中集成音乐播放器组件：

```html
<!-- 音乐播放器 -->
<div id="app-sidebar-player"></div>
<script src="js/sidebar-player.js?v=3.0"></script>
```

同时，在body标签中添加对应的组件配置：

```html
<body data-components="sidebarPlayer,backToTop,navbar,footer">
```

#### 添加新歌曲

1. **添加音乐文件**：将音乐文件上传到 `assets/music/` 目录
2. **修改播放器组件**：编辑 `components/sidebar-player.html` 文件，在播放列表中添加新歌曲信息：

```html
<!-- 示例：添加新歌曲 -->
<div class="song-item" data-src="../assets/music/NewSong.mp3" data-title="新歌曲" data-artist="艺术家">
    <div class="song-title">新歌曲</div>
    <div class="song-artist">艺术家</div>
</div>
```

## 贡献指南

我们欢迎任何形式的贡献！无论是 bug 修复、功能添加还是文档改进，都可以通过以下方式参与：

### 提交 Issue
- 报告 bug
- 提出新功能建议
- 讨论改进方案

### 提交 Pull Request
1. Fork 项目仓库
2. 创建特性分支
3. 提交代码
4. 推送分支
5. 提交 Pull Request

### 代码规范
- **HTML/CSS**：遵循标准格式，保持代码整洁
- **JavaScript**：使用 ES6+ 语法，添加适当注释
- **PHP**：遵循 PSR 标准，添加适当注释

### 开发建议
- **组件化**：尽量使用组件化思想开发
- **性能优化**：注意代码性能，避免不必要的操作
- **兼容性**：确保代码在不同浏览器中正常运行
- **安全性**：注意用户输入验证，防止安全漏洞


## 许可证

本项目采用 MIT 许可证。详见 [LICENSE](LICENSE) 文件。

## 联系方式
- **QQ 群**：569208814
## 鸣谢

感谢所有为万驹同源服务器做出贡献的开发者和玩家！

---

<p align="center">
  <strong>万驹同源 • PonyConsanguinity</strong>
</p>
<p align="center">
  一个完全公益的小马 Minecraft 服务器
</p>
