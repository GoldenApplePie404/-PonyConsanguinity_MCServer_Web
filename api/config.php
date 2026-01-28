<?php
// MCSManager API 配置
define('MCSM_API_URL', 'https://mcpanel.eqmemory.cn/mcs/api'); // MCSManager API 地址
define('MCSM_API_KEY', '1c02a955c9314814ae1fc0b8419c41fb'); // API 密钥

// 服务器状态 API 配置
define('MCSTATUS_API_URL', 'http://mcstatus.goldenapplepie.xyz/api');
define('MC_SERVER_IP', 'mc.eqmemory.cn');
define('MC_SERVER_PORT', 25565);

// 确保数据目录存在
if (!file_exists(dirname(__DIR__) . '/data')) {
    mkdir(dirname(__DIR__) . '/data', 0755, true);
}

// 数据文件路径配置
define('USERS_FILE', dirname(__DIR__) . '/data/users.json');
define('SESSIONS_FILE', dirname(__DIR__) . '/data/sessions.json');
define('POSTS_FILE', dirname(__DIR__) . '/data/posts.json');
define('CONTENT_DIR', dirname(__DIR__) . '/data/content');
define('REPLIES_DIR', dirname(__DIR__) . '/data/replies');

// 确保content目录存在
if (!file_exists(CONTENT_DIR)) {
    mkdir(CONTENT_DIR, 0755, true);
}

// 确保replies目录存在
if (!file_exists(REPLIES_DIR)) {
    mkdir(REPLIES_DIR, 0755, true);
}

// 确保帖子文件存在
if (!file_exists(POSTS_FILE)) {
    file_put_contents(POSTS_FILE, json_encode(['posts' => []], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
}

// 确保用户文件存在
if (!file_exists(USERS_FILE)) {
    file_put_contents(USERS_FILE, '{}');
}

// 确保会话文件存在
if (!file_exists(SESSIONS_FILE)) {
    file_put_contents(SESSIONS_FILE, '{}');
}
?>