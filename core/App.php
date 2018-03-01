<?php

require_once "/core/FrameWork.php";
require_once '/core/Db.php';
// 内核的引导文件
// 1、内核初始化
$result = FrameWork::init();
$controller =$result["controller"];
$action = $result["action"];
//加载积类
if (file_exists(APP_PATH.'/App/controller/Base.php')){
    require_once '/App/controller/Base.php';
}
// 加载类文件并实例化控制器
// 控制器文件名称和类名称一定要一样
require_once '/App/controller/'.$controller.'.php';
// 开启session
session_start();

//1.实例化
/*$class = new $controller;
$class->$action();*/

//2.通过反射的方式
echo $controller;
$class = new ReflectionClass($controller);          //创建$controller这个类的反射类
$instance = $class->newInstanceArgs();              //相当于实例化$controller这个类
$method = $class->getMethod($action);               //获取$controller类中的$action方法
$method->invoke($instance);                         //执行$action方法