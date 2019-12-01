<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>php-demo</title>
</head>
<body>
<p><a href="index.php">返回</a></p>

<?php
//运算符

//整除运算符 intdiv()
var_dump(intdiv(10, 3));
echo '<br>';

//三元运算符 (expr1)?(expr2):(expr3)
//对expr1求值为真(常量、已声明变量)时值为expr2,对expr1求值为假(未声明变量)时值为expr3
//自身比较两种写法：(expr1)?:(expr3)  (expr1)??(expr3)
function t_operator()
{
    $test = "runoob";

    //普通写法
    //isset用来判断变量是否声明
    $username = isset($test) ? $test : 'no';
    echo $username, '<br>';
    //PHP 5.3+ 版本
    $username = $test ?: 'no';
    echo $username, '<br>';
    //PHP 7+ 版本
    $username = $test ?? 'no';
    echo $username, '<br>';

    $username = $test1 ?? 'no';
    echo $username, '<br>';
}

t_operator();

//组合比较符 $c = $a <=> $b;
//$a > $b,$c = 1; $a = $b,$c = 0; $a < $b,$c = -1;
echo 2 <=> 1, '<br>';
echo 1 <=> 1, '<br>';
echo 1 <=> 2, '<br>';

//数组运算符
function array_operator()
{
    $x = array('a' => 'red', 'b' => 'yellow');
    $y = array('c' => 'green');
    $m = array(1 => 'green',2=>'blue');
    $n = array(2=>'blue',1 => 'green');
    //x+y x和y的集合
    var_dump($x + $y);
    //x!=y,x<>y,x!==y x与y不相等，返回true
    var_dump($m != $n);
    echo '<br>';
    var_dump($m !== $n);
    echo '<br>';
    //==键值对相等，===键值对相等并且顺序相同
    var_dump($m == $n);
    echo '<br>';
    var_dump($m === $n);
    echo '<br>';
}

array_operator();
?>

</body>
</html>
