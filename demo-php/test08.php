<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>php-demo</title>
</head>
<body>
<p><a href="index.php">返回</a></p>

<?php
//多维数组
$sites = array(
    'runoob' => array(
        '菜鸟教程',
        'www.runoob.com'
    ),
    'google' => array(
        'Google搜索',
        'www.google.com'
    )
);
print_r($sites);
echo '<br>';
echo $sites['runoob'][0].'地址为：'.$sites['runoob'][1].'<br>';

//php date(string $format)函数-格式化日期(Y一定是大写)
echo date("Y/m/d").'<br>';
echo date("Y-m-d").'<br>';
echo date("Y.m.d").'<br>';

//文件操作

//打开文件
$file = fopen("welcom.txt", "r") or exit("Unable to open file!");

//逐行读取文件
/*
while (!feof($file))
{
    echo fgets($file).'<br>';
}
*/

//逐字符读取文件
while (!feof($file)) {
    echo fgetc($file);
}

//关闭文件
fclose($file);
?>
<!--上传文件-->
<form action="upload_file.php" method="post" enctype="multipart/form-data">
    <label for="file">文件名：</label>
    <input type="file" name="file" id="file"><br>
    <input type="submit" name="submit" value="提交">
</form>

</body>
</html>

