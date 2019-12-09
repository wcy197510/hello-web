<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>php-demo</title>
</head>
<body>
<p><a href="index.php">返回</a></p>

<?php

//try,throw,catch
//创建一个有异常处理的函数
function checkNum($num)
{
    if ($num > 1) {
        throw new Exception("变量值必须小于等于1");
    }
    return true;
}

//在try块触发异常
try {
    checkNum(2);
    //抛出异常，以下文本不输出
    echo '如果输出该内容，说明$num变量';
} //捕获异常
catch (Exception $e) {
    echo 'Message:'.$e->getMessage();
    die();
}

//通过E-Mail发送错误消息
function customError1($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "已通知网站管理员";
    error_log("Error: [$errno] $errstr", 1, "3476827965@qq.com", "From:17863117153@163.com");
    die();
}

set_error_handler("customError1", E_USER_WARNING);

$test = 0;
if ($test <= 1) {
    trigger_error("变量值必须大于1", E_USER_WARNING);
}

//错误处理函数
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "脚本结束";
    die();
}

//设置错误处理函数
set_error_handler("customError", E_USER_WARNING);

//触发错误
$test = 2;
if ($test > 1) {
    trigger_error("变量值必须小于等于1", E_USER_WARNING);
}
?>

</body>
</html>


