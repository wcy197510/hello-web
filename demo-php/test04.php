<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>php-demo</title>
</head>
<body>
<p><a href="index.php">返回</a></p>

<?php
//魔术常量
function constant_test(){
    echo '这是第“'.__LINE__.'”行。';
    echo '<br>';
    echo '该文件位于“'.__FILE__.'”。';
    echo '<br>';
    echo '该文件位于“'.__DIR__.'”。';
    echo '<br>';
    echo '函数名为 : '.__FUNCTION__;
    echo '<br>';
}

constant_test();
?>

</body>
</html>
