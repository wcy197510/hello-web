<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>php-demo</title>
</head>
<body>
<p><a href="index.php">返回</a></p>

<?php
$q = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';
if ($q) {
    if ($q == 'RUNOOB') {
        echo '菜鸟教程<br>http://www.runoob.com';
    } elseif ($q == 'GOOGLE') {
        echo 'Google搜索<br>http://www.google.com';
    } elseif ($q == 'TAOBAO') {
        echo '淘宝<br>http://www.taobao.com';
    }
} else {
    ?>
    <!--获取下拉菜单的数据-->
    <form action="" method="get">
        <select name="q">
            <option value="">选择一个站点:</option>
            <option value="RUNOOB">Runoob</option>
            <option value="GOOGLE">Google</option>
            <option value="TAOBAO">Taobao</option>
        </select>
        <input type="submit" value="提交">
    </form>
    <?php
}
?>

<?php
$q = isset($_POST['q']) ? $_POST['q'] : '';
if (is_array($q)) {
    $sites = array(
        'RUNOOB' => '菜鸟教程：http://www.runoob.com',
        'GOOGLE' => 'Google搜索：http://www.google.com',
        'TAOBAO' => '淘宝：http://www.taobao.com'
    );
    foreach ($q as $val) {
        echo $sites[$val].'<br>';
    }
} else {
    ?>
    <!--获取下拉菜单的数据-->
    <form action="" method="post">
        <select multiple="multiple" name="q[]">
            <option value="">选择一个站点:</option>
            <option value="RUNOOB">Runoob</option>
            <option value="GOOGLE">Google</option>
            <option value="TAOBAO">Taobao</option>
        </select>
        <input type="submit" value="提交">
    </form>
    <?php
}
?>

<?php
$q = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';
if ($q) {
    if ($q == 'RUNOOB') {
        echo '菜鸟教程<br>http://www.runoob.com';
    } elseif ($q == 'GOOGLE') {
        echo 'Google搜索<br>http://www.google.com';
    } elseif ($q == 'TAOBAO') {
        echo '淘宝<br>http://www.taobao.com';
    }
} else {
    ?>
    <!--单选按钮表单-->
    <form action="" method="get">
        <input type="radio" name="q" value="RUNOOB">Runoob
        <input type="radio" name="q" value="GOOGLE">Google
        <input type="radio" name="q" value="TAOBAO">Taobao
        <input type="submit" value="提交">
    </form>
    <?php
}
?>

<?php
$q = isset($_POST['q']) ? $_POST['q'] : '';
if (is_array($q)) {
    $sites = array(
        'RUNOOB' => '菜鸟教程：http://www.runoob.com',
        'GOOGLE' => 'Google搜索：http://www.google.com',
        'TAOBAO' => '淘宝：http://www.taobao.com'
    );
    foreach ($q as $val) {
        echo $sites[$val].'<br>';
    }
} else {
    ?>
    <!--checkbox复选框-->
    <form action="" method="post">
        <input type="checkbox" name="q[]" value="RUNOOB">Runoob<br>
        <input type="checkbox" name="q[]" value="GOOGLE">Google<br>
        <input type="checkbox" name="q[]" value="TAOBAO">Taobao<br>
        <input type="submit" value="提交">
    </form>
    <?php
}
?>
</body>
</html>

