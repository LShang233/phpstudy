<?php
    header('content-type:text/html;charset="utf-8"');

    /* echo "<h1>hello world</h1>";
    echo("<h1>hello world</h1>");

    print_r("<h1>hello world</h1>"); */

    /* 类似于console.log() */
    /* var_dump(100);
    var_dump("hello"); */

    //* 声明变量 */
    /* $name = "仙女"; */
    /* 字符串拼接 */
    /* echo "我是".$name."<br/>";
    echo "我是{$name}<br/>";

    $num = 1;
    switch($num) {
        case 1:
            echo "我是".$name."<br/>";
        break;
        case 2:
            echo("<h1>hello world</h1>");
        break;
        default:
            echo "错误";
    break;
    }  */

    /* for($i = 0; $i < 5; $i++){
        echo "下标".$i."<br/>";
    } */

    /* function printHello(){
        print "hello <br/>";
    }
    printHello(); */

    /* 
    1、索引数组
    2、关联数组（类似于map
    3、全局数组   
        $_GET     接收通过get提交的所有数据
        $_POST    接收通过post提交的所有数据
    */

    //1
    
    /* $cars = array("1","2","3");
    var_dump($cars);
    //echo $cars[1];
    for($i = 0; $i < count($cars); $i++){
        echo $cars[$i]."hhh<br/>";
    } */
   

    /* //2
    $arr = array("A" => "a", "B" => "b", "C" => "c");
    var_dump($arr);

    foreach($arr as $key => $value){
        echo "下标：{$key},数据：{$value}<br/>";
    } */

    /* $arr = array(
        array("name" => "A", "math" => 100, "english" => 50),
        array("name" => "B", "math" => 80, "english" => 70)
    );

    echo $arr[1]["math"]; */


    //将任何数据，编成一个32位十六进制的字符串，不可逆。同样的字符串加密后长得一样
    /* $str1 = "abc123";
    echo md5($str1);

    echo "<br/>";

    $str2 = "abc123";
    echo md5($str2); */

    /* $str1 = "abc123";
    echo md5(md5(md5($str1).'diyiceng')."dierceng"); */

    //时间戳    存储时间
    /* echo time();
    date()
    Y 四位数的年
    d 日
    H 小时
    i 分数
    s 秒数 */

    /* date_default_timezone_set("PRC");//中国的时间
    echo date("Y年m月d日  H：i：s");
    echo "<br/>";
    echo date("Y/m/d/  H：i：s"); */

    /* $arr1 = array('a','b','c');
    //数据结构转字符串
    echo json_encode($arr1);//["a","b","c"] */

    $arr2 = array('username'=>'a', 'age'=>18);
    //字符串转数据结构
    echo json_encode($arr2);//{"username":"a","age":18}
?>