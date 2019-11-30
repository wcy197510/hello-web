<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>php-demo</title>
</head>
<body>
<p><a href="index.php">返回</a></p>

<?php
//数据类型
function int_test()
{
//整型三种格式：十进制（正负数），十六进制（0x为前缀）或八进制（0为前缀）
//var_dump()返回变量的数据类型和值

    //十进制
    //正数
    $x = 2019000000000000000;//19位
    $y = 20190000000000000000;//20位
    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br>";
    //负数
    $x = -9102000000000000000;//19位
    $y = -20190000000000000000;//20位
    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br>";
    //十六进制
    $x = 0x11;
    var_dump($x);
    echo "<br>";
    //八进制
    $x = 0213;
    var_dump($x);
    echo "<br>";
}
function float_test()
{
//浮点型:小数形式和指数形式

    //小数
    $x = 3.14;
    var_dump($x);
    echo "<br>";
    //指数
    //正指数：15位
    $x = 2.1e13;
    $y = 21e13;
    $z = 2.1e14;
    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br>";
    var_dump($z);
    echo "<br>";
    //负指数：5位
    $x = 4e-4;
    $y = 0.4e-4;
    $z = 4e-5;
    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br>";
    var_dump($z);
    echo "<br>";
}
/*布尔型
echo $x=true;
echo "<br>";
var_dump($x);
*/
/*NULL型
echo $x=null;
echo "<br>";
var_dump($x);
*/
//float_test();
//int_test();

//类型比较：松散比较（==值相等），严格比较（===值和类型都相等）
function compare_test($x)
{
    //$x与42比较
    if(42==$x){
        echo "值相等"."<br>";
    }
    if (42===$x){
        echo "类型相等"."<br>";
    }
    else{
        echo "类型不相等"."<br>";
    }
}

//compare_test("42");
//compare_test(42);

//常量（全局变量），使用define()函数设置
//define(string $name,mixed $value [,bool $case_insensitive=false])
//默认大小写敏感

//定义常量
define("Greeting","Hello World!");
define("Greet","Hello!",true);

/*function case_sensitive()
{
    //默认大小写敏感
    echo Greeting;
    echo "<br>";
    echo greeting;
    echo "<br>";
}*/
function case_insensitive()
{
    //大小写不敏感
    echo Greet;
    echo "<br>";
    echo greet;
    echo "<br>";
}

//case_sensitive();
case_insensitive();
?>

</body>
</html>
