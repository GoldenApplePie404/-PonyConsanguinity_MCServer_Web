<?php
require_once 'config.php';
require_once 'helper.php';

// 只允许 POST 请求
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_response(false, '只允许 POST 请求', null, 405);
}

$data = get_post_data();
$token = $data['token'] ?? '';

if (empty($token)) {
    json_response(false, '未提供令牌', null, 400);
}

// 删除会话
$sessions = read_json(SESSIONS_FILE);
if (isset($sessions[$token])) {
    unset($sessions[$token]);
    write_json(SESSIONS_FILE, $sessions);
}

json_response(true, '登出成功', null, 200);
?>
