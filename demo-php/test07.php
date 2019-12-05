<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>php-demo</title>
</head>
<body>
<p><a href="index.php">返回</a></p>

<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "myDB";

//创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

//检测连接
if ($conn->connect_error) {
    die("连接失败：".$conn->connect_error);
}
echo "连接成功".'<br>';

//创建数据库
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) == true) {
    echo "数据库创建成功".'<br>';
} else {
    echo "Error creating database:".$conn->error.'<br>';
}

//创建数据表
$sql = "CREATE TABLE MyGuests(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
firstname VARCHAR(30) NOT NULL ,
lastname VARCHAR(30) NOT NULL ,
email VARCHAR(50),
reg_date TIMESTAMP 
)";

if ($conn->query($sql) == true) {
    echo "Table MyGuests created successfully";
} else {
    echo "创建数据表错误：".$conn->error.'<br>';
}

//插入记录
//插入多条记录时，每个sql语句必须用分号隔开
/*
$sql="INSERT INTO MyGuests (firstname,lastname,email)
VALUES ('John','Doe','john@example.com');";
$sql.="INSERT INTO MyGuests (firstname,lastname,email)
VALUES ('Mary','Moe','mary@example.com');";
$sql.="INSERT INTO MyGuests (firstname,lastname,email)
VALUES ('Julie','Dooley','julie@example.com')";

if ($conn->multi_query($sql)==TRUE)
{
    echo "新纪录插入成功";
}else{
    echo "Error:".$sql.'<br>'.$conn->error;
}
*/
//使用预处理语句
//预处理及绑定
$stmt = $conn->prepare("INSERT INTO MyGuests(firstname,lastname,email)
VALUES (?,?,?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

//设置参数并执行
$firstname = 'John';
$lastname = 'Doe';
$email = 'john@example.com';
$stmt->execute();

$firstname = 'Mary';
$lastname = 'Moe';
$email = 'mary@example.com';
$stmt->execute();

echo "新纪录插入成功！";

$stmt->close();
$conn->close();
?>
</body>
</html>

