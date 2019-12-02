<?php

//访问控制
//public:可以在任何地方被访问
//protected:可以被其自身以及其子类和父类访问
//private:只能被其定义所在的类访问
class MyClass
{
    //成员变量
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    //构造函数
    function __construct()
    {

    }

    //析构函数
    function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    //成员函数
    function print()
    {
        echo $this->public.'<br>';
        echo $this->protected.'<br>';
        echo $this->private.'<br>';
    }
}

$obj = new MyClass();
$obj->print();
echo $obj->public.'<br>';//类外只有public变量能被访问
//echo $obj->protected;  //报错
//echo $obj->private;    //报错

Class MyClass2 extends MyClass
{
    //可以对public和protected重定义，private不能
    public $public = 'public2';
    protected $protected = 'protected2';

    function print()
    {
        echo $this->public.'<br>';
        echo $this->protected.'<br>';
        //echo $this->private.'<br>';  //报错
    }
}

$obj2 = new MyClass2();
echo $obj2->public.'<br>';
//echo $obj2->protected;  //报错
//echo $obj2->private;    //报错
$obj2->print();
?>