<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>php-demo</title>
</head>
<body>
<p><a href="index.php">返回</a></p>

<?php

class customException extends Exception
{
    public function errorMessage()
    {
        //错误信息
        $errorMsg = '错误行号'.$this->getLine()."in".$this->getFile().':<b>'.$this->getMessage().'</b>不是一个合法的Email地址';
        return $errorMsg;
    }
}

$email = "someone@example...com";

try {
    //检测邮箱
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        //如果是不合法邮箱地址，抛出异常
        throw new customException($email);
    }
} catch (customException $e) {
    echo $e->errorMessage();
}

?>

</body>
</html>
