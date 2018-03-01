<?php
class Base{

    public function __construct()
    {
        // 判断是否登录
        $this->user = isset($_SESSION['user'])?$_SESSION['user']:false;
        if(!$this->user){
            header('location: /Home/index');
            exit;
        }
    }
}