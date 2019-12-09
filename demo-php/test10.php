<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>php-demo</title>
</head>
<body>
<p><a href="index.php">返回</a></p>

<?php
//过滤器
$int = 123;

if (!filter_var($int, FILTER_VALIDATE_INT)) {
    echo "不是一个合法的整数".'<br>';
} else {
    echo "是个合法的整数".'<br>';
}

//过滤选项
$var = 300;

$int_options = array(
    "options" => array(
        "min_range" => 0,
        "max_range" => 256
    )
);

if (!filter_var($var, FILTER_VALIDATE_INT, $int_options)) {
    echo "不是一个合法的整数".'<br>';
} else {
    echo "是个合法的整数".'<br>';
}

//验证输入
if (!filter_has_var(INPUT_GET, "email")) {
    echo "没有email参数".'<br>';
} else {
    if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)) {
        echo "不是一个合法的E-mail".'<br>';
    } else {
        echo "是一个合法的E-mail".'<br>';
    }
}

//净化输入
if (!filter_has_var(INPUT_GET, "url")) {
    echo "没有url参数<br>";
} else {
    $url = filter_input(INPUT_GET, "url", FILTER_SANITIZE_URL);
    echo $url;
}

//过滤多个输入
$filters = array(
    "name" => array(
        "filter" => FILTER_SANITIZE_STRING
    ),
    "age" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 120
        )
    ),
    "email" => FILTER_VALIDATE_EMAIL
);

$result = filter_input_array(INPUT_GET, $filters);

if (!$result["age"]) {
    echo "年龄必须在1到120之间<br>";
} elseif (!$result["email"]) {
    echo "E-mail不合法<br>";
} else {
    echo "输入正确";
}

//Filter Callback
function convertSpace($string)
{
    return str_replace("_", ".", $string);
}

$string = "www_runoob_com";

echo filter_var($string, FILTER_CALLBACK, array("options" => "convertSpace")).'<br>';

//检测IPv6地址
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo "$ip 是一个IPv6地址".'<br>';
} else {
    echo "$ip 不是一个IPv6地址".'<br>';
}

//URL必须包含查询字符串
$url="http://www.runoob.com";

if (!filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)===false){
    echo "$url 是一个合法的URL".'<br>';
}else{
    echo "$url 不是一个合法的URL".'<br>';
}

//移除ASCII值大于127的字符
$str="<h1>Hello WorldÆØÅ!</h1>";

$newstr=filter_var($str,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
echo $newstr;

?>


</body>
</html>
