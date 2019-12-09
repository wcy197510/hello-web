<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>php-demo</title>
</head>
<body>
<p><a href="test08.php">返回</a></p>

<?php
//上传文件
if ($_FILES["file"]["error"] > 0) {
    echo "错误：".$_FILES["file"]["error"]."<br>";
} else {
    echo "上传文件名：".$_FILES["file"]["name"]."<br>";
    echo "文件类型：".$_FILES["file"]["type"]."<br>";
    echo "文件大小：".$_FILES["file"]["size"]."<br>";
    echo "文件临时存储的位置：".$_FILES["file"]["tmp_name"]."<br>";

//将文件上传到upload目录下
    if(!is_dir("upload"))
    {
        mkdir("upload");
    }
    if (file_exists("upload/".$_FILES["file"]["name"])) {
        echo $_FILES["file"]["name"]."文件已存在。";
    } else {
        move_uploaded_file($_FILES["file"]["tmp_name"], "upload/".$_FILES["file"]["name"]);
        echo "文件存储在："."upload/".$_FILES["file"]["name"]."<br>";
    }
}


//上传限制

?>

</body>
</html>

