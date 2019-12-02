<?php

//用interface定义接口,接口中的方法必须是public
interface iTemplate
{
    public function setVariable($name, $var);

    public function getHtml($template);
}

//用abstract定义抽象类,类里面至少一个方法被声明为抽象
abstract class AbstractClass
{
    //强制要求子类定义以下方法
    abstract protected function getValue();

    //普通方法
    public function printOut()
    {
        print $this->getValue().'<br>';
    }
}

//用implements实现接口，类中必须实现接口中定义的所有方法
class Template implements iTemplate
{
    //const定义常量
    const constant = '常量值';
    //static静态属性，可以不实例化类而直接访问
    static $my_static = 'static';

    private $vars = array();

    function showConstant()
    {
        echo self::constant.'<br>';
    }

    function showStatic()
    {
        echo self::$my_static.'<br>';
    }

    public function setVariable($name, $var)
    {
        // TODO: Implement setVariable() method.
        $this->vars[$name] = $var;
    }

    public function getHtml($template)
    {
        // TODO: Implement getHtml() method.
        echo $template.'<br>';

        foreach ($this->vars as $name => $value) {
            //str_replace：把$template里的$name用$value代替
            $template = str_replace($name, $value, $template);
        }

        return $template;
    }
}

//class1继承抽象类AbstractClass
class class1 extends AbstractClass
{

    protected function getValue()
    {
        // TODO: Implement getValue() method.
        return "class1";
    }
}

//用类名调用常量
echo Template::constant.'<br>';

$class = new Template();
$class->showConstant();
//用实例对象调用常量
echo $class::constant.'<br>';

//用类名调用静态变量
print Template::$my_static.'<br>';

$template2 = new Template();
print $template2->showStatic();

//接口测试
$obj = new Template();
$obj->setVariable('World', 'wcy');
echo $obj->getHtml('Hello World!').'<br>';

//抽象类测试
$class1 = new class1();
$class1->printOut();
?>