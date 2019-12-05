<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>php-demo</title>
</head>
<body>
<p><a href="index.php">返回</a></p>

<!--表单验证-->
<h2>PHP 表单验证实例</h2>
<?php
//定义变量并设为空值
$nameErr = $emailErr = $genderErr = '';
$name = $email = $gender = $comment = $website = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //必需字段
    if (empty($_POST["name"])) {
        $nameErr = "名字是必需的";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "邮箱是必需的";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "性别是必需的";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }
}

function test_input($data)
{
    //trim()去除用户输入数据中不必要字符（空格、换行等）
    //stripslashes()去除用户输入数据中的反斜杠（\）
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<!--表单元素-->
<!--$_SERVER["PHP_SELF"]变量：超级全局变量，返回当前正在执行脚本的文件名-->
<!--htmlspecialchars：把一些预定义的字符转换为HTML实体-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <!--文本字段-->
    名字：<input type="text" name="name">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    E-mail：<input type="text" name="email">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    网址：<input type="text" name="website"><br><br>
    备注：<textarea name="comment" rows="5" cols="40"></textarea><br><br>
    <!--单选按钮-->
    性别：
    <input type="radio" name="gender" value="female">女
    <input type="radio" name="gender" value="male">男
    <span class="error">* <?php echo $genderErr; ?></span>
    <br><br>
    <!--提交按钮-->
    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>您输入的内容是：</h2>";
echo $name.'<br>';
echo $email.'<br>';
echo $website.'<br>';
echo $comment.'<br>';
echo $gender.'<br>';
?>
</body>
</html>

