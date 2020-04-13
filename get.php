<?php
header('content-type:text/html;charset="utf-8"');
error_reporting(0);

$username = $_GET['username'];
$password = $_GET["password"];

echo "用户名：{$username}\n密码：{$password}";
?>