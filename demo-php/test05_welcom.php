<!--$_POST变量-->
欢迎 <?php echo $_POST["fname"]; ?> !<br>
你的年龄是 <?php echo $_POST["age"]; ?> 岁。<br>

<!--$_GET变量-->
欢迎 <?php echo $_GET["fname"]; ?> !<br>
你的年龄是 <?php echo $_GET["age"]; ?> 岁。<br>

<!--$_REQUEST变量-->
<!--用来收集通过GET和POST方法发送的表单数据-->
欢迎 <?php echo $_REQUEST["fname"]; ?> !<br>
你的年龄是 <?php echo $_REQUEST["age"]; ?> 岁。<br>

