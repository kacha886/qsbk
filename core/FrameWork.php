<?php
class FrameWork{
//内核引导文件

    //拿到请求资源
    static function init(){
        $request_uri = $_SERVER["REQUEST_URI"];
        $request_name = $_SERVER["SCRIPT_NAME"];

         //通过url解析控制器和action

        //http://www.php.mvc/index.php/Home/index?id=3
        $request = str_replace($request_name,"",$request_uri);
        $request = ltrim($request,"/");
        $request_array = explode("?",$request);
        $controller_action = $request_array[0];
        $controller_action = explode("/",$controller_action);
        //当指定控制器和action时
        if (count($controller_action)>=2) {
            $controller = $controller_action[0];
            $action = $controller_action[1];
        }else{
            require_once '/config/config.php';
            $controller = $config["default_controller"];
            $action = $config["default_action"];
        }

        return array("controller"=>$controller,"action"=>$action);
    }

    public static function view($viewname,$data){
        require_once '/App/view/'.$viewname;
    }
}

//助手函数
function dump($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
//数据交给get函数，经过处理后返回
function get($params = false) {
    if (!$params){
        return $_GET ? $_GET : false;
    }
    return isset($_GET[$params]) ? $_GET[$params] : false;
}

function post($params = false){
    if (!$params){
        return $_POST ? $_POST : false;
    }
    return isset($_POST[$params]) ? $_POST[$params] : false;
}
