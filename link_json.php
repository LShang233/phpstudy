<?php    
header('content-type:text/html;charset="utf-8"');
//1、打开并链接mysql
$link = mysql_connect("localhost", "root", "520384");
//2、是否链接成功
if(!$link){
    echo "链接失败！";
    exit;
}

//3、设置字符集
mysql_set_charset("utf8");

//4、选择数据库
mysql_select_db("ceshi");

//5、准备sql语句
$sql = "SELECT * FROM students";

//6、发送sql语句
$res = mysql_query($sql);

$arr = array();

//7、处理结果集
/* $row = mysql_fetch_assoc($res);//第一条
$row = mysql_fetch_assoc($res);//第二条 */
while($row = mysql_fetch_assoc($res)){
    array_push($arr, $row);
}
echo json_encode($arr);

//8、关闭数据库
mysql_close($link);


?>