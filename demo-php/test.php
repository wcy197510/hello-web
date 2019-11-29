<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>php-demo</title>
</head>
<body>
<p><a href="index.php">返回</a></p>
<h5>My first php page.</h5>

<?php
echo "Hello World!";
echo "<br>";

$x = 3;

function test()
{
    $y = 3;
    echo 'x=$x';
    echo "<br>";
    echo "x=\$y";
    echo "<br>";
    echo "y=$y";
    echo "<br>";
}

test();
echo "x=$x";
echo "<br>";
// echo "y=$y";
?>

</body>
</html>
