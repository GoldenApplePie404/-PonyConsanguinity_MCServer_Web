<?php
require_once 'config.php';
require_once 'helper.php';

// 确保 sessions.json 文件存在
if (!file_exists(SESSIONS_FILE)) {
    file_put_contents(SESSIONS_FILE, '{}');
}

// 只允许 POST 请求
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_response(false, '只允许 POST 请求', null, 405);
}

$data = get_post_data();
$username = trim($data['username'] ?? '');
$password = $data['password'] ?? '';

// 验证输入
if (empty($username) || empty($password)) {
    json_response(false, '用户名和密码不能为空', null, 400);
}

// 读取用户数据
$users = read_json(USERS_FILE);

// 验证用户
if (!isset($users[$username])) {
    json_response(false, '用户名或密码错误', null, 401);
}

$user = $users[$username];
if ($user['password'] !== $password) {
    json_response(false, '用户名或密码错误', null, 401);
}

// 创建会话
$sessions = read_json(SESSIONS_FILE);
$token = generate_uuid();
$sessions[$token] = [
    'user_id' => $user['id'],
    'username' => $user['username'],
    'created_at' => date('Y-m-d H:i:s')
];
write_json(SESSIONS_FILE, $sessions);

// 构建响应数据
$response_data = [
    'token' => $token,
    'user' => [
        'id' => $user['id'],
        'username' => $user['username'],
        'email' => $user['email']
    ]
];

// 直接返回响应，确保格式正确
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
http_response_code(200);

echo json_encode([
    'success' => true,
    'message' => '登录成功',
    'token' => $token,
    'user' => [
        'id' => $user['id'],
        'username' => $user['username'],
        'email' => $user['email'],
        'role' => $user['role']
    ]
], JSON_UNESCAPED_UNICODE);
exit;
?>
