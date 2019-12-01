<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>php-demo</title>
</head>
<body>
<p><a href="index.php">返回</a></p>

<?php
//数组
function array_test()
{
    $color = array('red', 'blue', 'pink');
    $age = array('Peter' => 39, 'Jone' => '22');
//遍历数值数组
//count()函数用于返回数组长度
    for ($x = 0; $x < count($color); $x++) {
        echo $color[$x].'<br>';
    }
//遍历关联数组
    foreach ($age as $key => $value) {
        echo "key=$key,value=$value".'<br>';
    }
}

array_test();
//数组排序
function sort_test()
{
    //sort() 升序；rsort() 降序
    $numbers = array(2, 4, 1, 3, 5);

    sort($numbers);
    print_r($numbers);
    echo '<br>';

    rsort($numbers);
    print_r($numbers);
    echo '<br>';
    //asort()根据数组的值进行升序排列，arsort()降序排列
    $age = array('Peter' => '34', 'Jone' => '22', 'Liu' => '50');

    asort($age);
    print_r($age);
    echo '<br>';

    arsort($age);
    print_r($age);
    echo '<br>';
    //ksort()根据数组的键进行升序排列，krsort()降序排列
    ksort($age);
    print_r($age);
    echo '<br>';

    krsort($age);
    print_r($age);
    echo '<br>';
}

sort_test();
//if...elseif...else...
function if_test($age)
{
    if ($age <= 0) {
        echo "年龄不能是负数".'<br>';
    } elseif ($age > 0 && $age < 13) {
        echo "child".'<br>';
    } elseif ($age >= 13 && $age < 19) {
        echo "teenager".'<br>';
    } else {
        echo "adult".'<br>';
    }
}

if_test(-1);
if_test(10);
if_test(15);
if_test(20);
//switch
function switch_test($favcolor)
{
    switch ($favcolor) {
        case 'red':
            echo "your favorite color is red.".'<br>';
            break;
        case 'pink':
            echo "your favorite color is pink.".'<br>';
            break;
        default:
            echo "your favorite color is not red and pink.".'<br>';
    }
}

switch_test("pink");
switch_test("red");
switch_test("blue");
//while
function while_test()
{
    $i = 4;

    while ($i <= 5) {
        echo "The number is ".$i++."<br>";
    }
    echo "<br>";

    $i = 4;

    do {
        echo "The number is ".$i++."<br>";
    } while ($i <= 5);
}

while_test();
//for
//foreach用于遍历数组
function foreach_test()
{
    $x = array("one", "two", "three");
    foreach ($x as $value) {
        echo $value.'<br>';
    }
}

foreach_test();
?>

</body>
</html>
