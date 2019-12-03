<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>php-demo</title>
</head>
<body>
<p><a href="index.php">返回</a></p>

<?php

//面向对象
class Site
{
    //成员变量:var定义
    var $url;
    var $title;

    //构造函数
    function __construct($par1, $par2)
    {
        print "构造函数".'<br>';
        $this->url = $par1;
        $this->title = $par2;
    }

    //析构函数
    function __destruct()
    {
        // TODO: Implement __destruct() method.
        print "析构函数".'<br>';
    }

    //成员函数
    function getUrl()
    {
        echo $this->url.'<br>';
    }

    function getTitle()
    {
        echo $this->title.'<br>';
    }
}

//创建类的实例
$runoob = new Site('www.runoob.com', '菜鸟教程');
$google = new Site('www.google.com', 'Google搜索');

//调用成员函数，获取地址和标题
$runoob->getUrl();
$runoob->getTitle();
$google->getUrl();
$google->getTitle();

?>

</body>
</html>
