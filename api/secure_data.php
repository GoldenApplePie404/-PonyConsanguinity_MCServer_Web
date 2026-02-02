<?php
define('DATA_ACCESS_TOKEN', 'fgvbjnhiulo90icdfrijklpu80efhiufehuefhouiefhio'); // 数据访问令牌

function verifyDataAccess($requireToken = true) {
    if (!$requireToken) {
        return;
    }
    $token = $_GET['token'] ?? $_SERVER['HTTP_X_DATA_TOKEN'] ?? '';
    if ($token !== DATA_ACCESS_TOKEN) {
        header('HTTP/1.1 403 Forbidden');
        exit;
    }
}

function secureReadData($file, $requireToken = false) {
    verifyDataAccess($requireToken);
    if (file_exists($file)) {
        return include $file;
    }
    return [];
}

function secureWriteData($file, $data, $requireToken = false) {
    verifyDataAccess($requireToken);
    $dir = dirname($file);
    if (!file_exists($dir)) {
        mkdir($dir, 0755, true);
    }
    // 对于 PHP 文件，使用 include 格式写入
    $content = "<?php\n";
    $content .= "if (!defined('ACCESS_ALLOWED')) {\n";
    $content .= "    header('HTTP/1.1 403 Forbidden');\n";
    $content .= "    exit;\n";
    $content .= "}\n\n";
    $content .= "return " . var_export($data, true) . ";\n";
    $content .= "?>";
    return file_put_contents($file, $content) !== false;
}
?>
