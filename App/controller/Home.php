<?php
defined('APP_PATH') OR exit('access denied');   //判断如果不是从入口文件进来的，禁止访问

class Home {
    public function __construct(){
        $this->user = false;
        if(isset($_SESSION['user'])){
            $this->user = $_SESSION['user'];
        }
    }

    public function index(){
        // 如何加载html页面？
        // 动态设置html的标题？
        $data['title'] = '糗事百科3';
        $data['site_desc'] = '超搞笑的原创糗事笑话分享社区';

        $data['user'] = $this->user;
        // 导航分类
        $data['cates'] = Db::lists('cates',array());
        // 文章
        $where['status'] = 1;
        $data['cid'] = (int)get('cid');
        if($data['cid']){
            $where['cid'] = $data['cid'];
        }

        $data['page'] = max(1,(int)get('page'));
        $data['num'] = 1;
        $order = 'add_time desc';
        $data['articles'] = Db::pagination('article',$where,$data['page'],$data['num'],$order);

        FrameWork::view('index.php',$data); 	// 实参
    }

    // 登录
    public function login(){
        $data = null;
        FrameWork::view('/home/login.php',$data);
    }

    public function dologin(){
        $username = trim(post('username'));
        $password = trim(post('password'));
        if($username == ''){
            exit(json_encode(array('code'=>1,'msg'=>'用户名不能为空')));
        }
        if($password == ''){
            exit(json_encode(array('code'=>1,'msg'=>'密码不能为空')));
        }

        $user = Db::item('users',array('username'=>$username));
        if(!$user){
            exit(json_encode(array('code'=>1,'msg'=>'用户不存在')));
        }
        if(md5($user['username'].$password)!=$user['password']){
            exit(json_encode(array('code'=>1,'msg'=>'密码不正确')));
        }
        $_SESSION['user'] = $user;
        exit(json_encode(array('code'=>0,'msg'=>'登录成功')));
    }

    // 退出登录
    public function logout(){
        $_SESSION['user'] = null;
        exit(json_encode(array('code'=>0,'msg'=>'退出成功')));
    }

    // 注册
    public function reg(){
        FrameWork::view('/home/reg.php',array());
    }

    public function doreg(){
        $username = trim(post('username'));
        $pwd = trim(post('pwd'));
        if($username==''){
            exit(json_encode(array('code'=>1,'msg'=>'用户名不能为空')));
        }
        if($pwd ==''){
            exit(json_encode(array('code'=>1,'msg'=>'密码不能为空')));
        }
        // 检查用户名是否已被注册
        $user = Db::item('users',array('username'=>$username));
        if($user){
            exit(json_encode(array('code'=>1,'msg'=>'用户名已被注册')));
        }
        $data['username'] = $username;
        $data['password'] = md5($username.$pwd);
        $data['add_time'] = time();
        $res = Db::insert('users',$data);
        if(!$res){
            exit(json_encode(array('code'=>1,'msg'=>'用户注册失败')));
        }
        exit(json_encode(array('code'=>0,'msg'=>'注册成功')));
    }






    //助手函数
    public function helps(){
        $arr = array("id"=>1,"username"=>"admin","password"=>"123456");
        dump($arr);
    }

    //获取单个用户
    public function getItem(){
        $where["id"]="2";
        $where["title"] = '啊啊';
        $result = Db::item('test',$where);
        dump($result);
    }
    //获取用户列表
    public function getList(){
        $where["class>2016"] = null;
        $result = Db::lists("user",$where,"create_time desc");
        dump($result);
    }

    //自定义列表索引
    public function getCates() {
        $where["class>2016"] = null;
        $result = Db::cates('user',$where,'name','create_time desc');
        dump($result);
    }

    //得到总数量
    public function getCount(){
        $where["class>2016"] = null;
        $result = Db::totals('user',$where);
        dump($result);
    }

    //分页
    public function paging(){
        $where["class>2016"] = null;
        $result = Db::pagingaction('user',$where,2,2,'create_time desc');
        dump($result);
    }
    //插入
    public function insert(){
        $data['username'] = "ceshi";
        $data['password'] = "fadfdfdsafdsafds";
        $result = Db::insert('user',$data);
        dump($result);
    }

    //更新
    public function update() {
        $data["title"] = "new";
        $where["id"]=2;
        $result = Db::update("test",$data,$where);
        dump($result);
    }

}