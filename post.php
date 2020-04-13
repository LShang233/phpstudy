<?php
header('content-type:text/html;charset="utf-8"');
error_reporting(0);

$username = $_POST['username'];
$password = $_POST["password"];

echo "用户名：{$username}\n密码：{$password}";
?>