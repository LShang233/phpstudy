<?php
    header('content-type:text/html;charset="utf-8"');
    $responseData = array("code"=>0, "message"=>"");
    $name = $_POST['name'];
    $english = $_POST['english'];
    $math = $_POST['math'];
    $chinese = $_POST['chinese'];

    //1、打开并链接mysql
    $link = mysql_connect("localhost", "root", "520384");
    //2、是否链接成功
    if(!$link){
        $responseData['code'] = 1;
        $responseData['message'] = "数据库链接失败";
        echo json_encode($responseData);
        exit;
    }

    //3、设置字符集
    mysql_set_charset("utf8");

    //4、选择数据库
    mysql_select_db("ceshi");

    //5、准备sql语句
    $sql = "INSERT INTO students(name,english,math,chinese) VALUES('{$name}',{$english},{$math},{$chinese})";

    //6、发送sql语句
    $res = mysql_query($sql);

    //7、处理结果集
    if(!$res){
        $responseData['code'] = 2;
        $responseData['message'] = "添加失败";
        echo json_encode($responseData);
        exit;
    }else{
        $responseData['message'] = "添加成功";
        echo json_encode($responseData);
    }

    //8、关闭数据库
    mysql_close($link);
?>