<?php
// 检查PHP版本
echo "PHP版本: " . phpversion() . "<br>";

// 检查MySQL扩展
if (extension_loaded('mysqli')) {
    echo "MySQLi扩展已启用<br>";
} else {
    echo "MySQLi扩展未启用<br>";
}

// 检查PDO扩展
if (extension_loaded('pdo_mysql')) {
    echo "PDO MySQL扩展已启用<br>";
} else {
    echo "PDO MySQL扩展未启用<br>";
}

// 尝试连接数据库
$config = array(
    'hostname' => '115.231.176.218',
    'port' => 3306,
    'database' => 'mcsqlserver',
    'username' => 'mcsqlserver',
    'password' => 'gapmcsql_2026'
);

echo "<br>尝试连接数据库...<br>";

$conn = mysqli_connect(
    $config['hostname'],
    $config['username'],
    $config['password'],
    $config['database'],
    $config['port']
);

if (!$conn) {
    echo "连接失败: " . mysqli_connect_error() . "<br>";
} else {
    echo "连接成功!<br>";
    mysqli_close($conn);
}

// 检查错误报告
echo "<br>错误报告级别: " . error_reporting() . "<br>";
echo "显示错误: " . (ini_get('display_errors') ? '是' : '否') . "<br>";
?>
