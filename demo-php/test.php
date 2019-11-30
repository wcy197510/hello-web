<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>php-demo</title>
</head>
<body>
<p><a href="index.php">返回</a></p>

<?php
$x = 3;

function global_test()
{
    //函数内用global引用全局变量
    global $x;

    $y = 3;
    $x = $x + $y;
}
function static_test()
{
    //static存储的变量，函数执行完不删除
    static $x=0;

    echo $x;
    $x++;
    //echo PHP_EOL;未换行？？输出空格
    echo "<br>";//换行
}
function pass_p_test($x){
    //函数传参

    //输出x+1:6
    //echo ++$x;

    //输出x:5，x=x+1:6
    echo $x++;
    echo PHP_EOL;//输出一个空格
    echo $x;
}
function echo_test()
{
    //echo输出（多个）字符串（字符串可以包含HTML标签）
    //连接符.和,都可以
    echo "这是"."一个"."字符串","。";
    echo "<h3>Hello World!</h3>";

    //echo输出（多个）变量
    $x=$y=5;

    echo $x,PHP_EOL,$y,"<br>";
    echo "<br>";
    echo "x=$x,y=$y";
    echo "<br><br>";

    //echo输出数组
    //注：字符串中输出数组某个值要用{}，与变量在字符串中输出区分开
    $family=array("mom","dad","son");

    echo $family[0];
    echo "<br><br>";
    //错误用法 echo "家庭成员$family[0]";
    //正确用法
    echo "家庭成员{$family[0]}";
}
function EOF_test()
{
    $name="wcy";
    //定界符，定义字符串的方法
    //不需要连接符.或,
    //特殊字符不需要转义（eg:"",''）,注：变量值正常输出
    ////是否常用？？
    echo <<<EOF
<h2>标题</h2>
<p>段落</p>

"abc" abc 
"123" 123
$name $$name '$name' 
<br><br>
EOF;//顶格，独自占一行，前后不能衔接任何空白和字符

    echo "abc"."123"."<br>";
    echo "$name"."<br>";
    echo "$$name"."<br>"."<br>";

    echo '变量使用单引号无需转义字符'."<br>";
    echo '$name'."<br>";
    echo "\$name"."<br>";
}

//测试echo_test
EOF_test();

/*测试echo_test
echo_test();
*/

/*测试pass_p_test()
   pass_p_test(5);
*/

/*测试static_test()
static_test();
static_test();
static_test();
*/

/*测试global_test()
global_test();
echo $x;
echo "<br>";
*/
?>

</body>
</html>
