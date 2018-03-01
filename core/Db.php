<?php
//数据库访问
class Db {

    //连接数据库
    private static function db_connect(){
        require '/config/database.php';
        //创建连接
        $conn = mysqli_connect($db['db_host'],$db['db_user'],$db['db_password'],$db['db_name']); //地址  用户名  密码  数据库名称
        if (!$conn) {
            exit('connection failed: '.mysqli_connect_error());
        }
        return $conn;
    }

    /**
     * 取一条数据
     * @param $table
     * @param array $where
     * @return array|bool
     * @author yyn
     */
    public static function item($table,$where = array()){
        $conn = self::db_connect();
        $rows = false;
        $sql = "select * from {$table}";
        if ($where){
            $sql.= " where ".self::getwhere($where);
        }
        $sql.=" limit 1";
        if ($result = mysqli_query($conn,$sql)){
            while($row = mysqli_fetch_assoc($result)){
                $rows[] = $row;
            }
            mysqli_free_result($result);
        }
        mysqli_close($conn);
        if (!$rows){
            return $rows;
        }
        return $rows[0];
    }

    /**
     * 获取列表
     * @param $table
     * @param $where
     * @param string $order
     * @return array|bool
     * @author yyn
     */
    public static function lists($table, $where, $order = '') {
        $conn = self::db_connect();
        $rows = false;
        $sql = "SELECT * FROM {$table} ";
        if ($where) {
            $sql.=" where ".self::getwhere($where);
        }
        if ($order) {
            $sql.=" ORDER BY {$order} ";
        }
        if ($result = mysqli_query($conn,$sql)) {
            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
            mysqli_free_result($result);
        }
        mysqli_close($conn);
        return $rows;
    }

    /**
     * 自定义列表索引
     * @param $table
     * @param $where
     * @param $index
     * @param string $order
     * @return array|bool
     * @author yyn
     */
    public static function cates($table, $where, $index, $order = ''){
        $lists = self::lists($table,$where,$order);
        if(!$lists){
            return $lists;
        }
        $result = array();
        foreach ($lists as $key => $value) {
            $result[$value[$index]] = $value;
        }
        return $result;
    }

    /**
     * 插入数据
     * @param $table
     * @param $data
     * @return int|string
     * @author yyn
     */
    public static function insert($table, $data) {
        $conn = self::db_connect();
        $fields = $values = [];
        foreach ($data as $key => $item) {
            $item = str_replace("'", '&apos', $item);
            $item = str_replace('"', '&quot' ,$item);
            $fields[] = "`".$key."`";
            $values[] = "'".$item."'";
        }
        $sql = "INSERT INTO {$table} (".implode(',',$fields).") VALUES (".implode(',',$values).")";
        //执行添加操作
        $insert_id = 0;
        if (mysqli_query($conn,$sql)) {
            $insert_id = mysqli_insert_id($conn);
        }
        mysqli_close($conn);
        return $insert_id;
    }

    /**
     * 得到查询总数
     * @param $table
     * @param $where
     * @return int
     * @author yyn
     */
    public static function totals($table, $where) {
        $conn = self::db_connect();
        $sql = "SELECT COUNT(*) AS count FROM {$table} ";
        if ($where) {
            $sql.=" WHERE ".self::getwhere($where);
        }
        $count = 0;
        if ($result = mysqli_query($conn, $sql)){
            $row = mysqli_fetch_assoc($result);
            $count = $row['count'];
            mysqli_free_result($result);
        }
        mysqli_close($conn);
        return $count;
    }

    /**
     * 分页处理
     * @param $table
     * @param $where
     * @param $page
     * @param $num
     * @param $order
     * @return array
     * @author yyn
     */
    public static function pagination($table, $where, $page, $num, $order){
        $conn = self::db_connect();
        $count =self::totals($table, $where);   //总数
        //计算总页数
        $total_page = ceil($count / $num);
        //处理page
        $page = max(1,$page);
        //每页的起始数
        $offset = ($page - 1) * $num;
        $sql = "SELECT * FROM {$table}";
        if ($where) {
            $sql.=" WHERE ".self::getwhere($where);
        }
        if ($order) {
            $sql.=" ORDER BY {$order} ";
        }
        $sql.=" LIMIT ".$offset.','.$num;
        $rows = [];
        if ($result = mysqli_query($conn, $sql)) {
            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
            mysqli_free_result($result);
        }
        mysqli_close($conn);
        return array("total"=>$total_page, 'lists'=>$rows);
    }

    /**
     * 更新操作
     * @param $table
     * @param $data
     * @param array $where
     * @return bool
     * @author yyn
     */
    public static function update($table, $data, $where = array()){
        $conn = self::db_connect();
        //处理data
        $str = "";
        foreach ($data as $key => $item) {
            $item = str_replace("'", '&apos', $item);
            $item = str_replace('"', '&quot',$item);
            $item = gettype($item) == 'string' ? "'".$item."'" : $item;
            $str.=" `".$key."` = ".$item;
        }
        $sql = "UPDATE {$table} set ".$str;
        if ($where) {
            $sql.=" WHERE ".self::getwhere($where);
        }
        $result = mysqli_query($conn, $sql) ? true : false;
        mysqli_close($conn);
        return $result;
    }

    /**
     * where数组条件的处理，如果是age>20这种情况，可以$where["age>20"] = null;这样处理
     * @param $params
     * @return string
     * @author yyn
     */
    private static function getwhere($params){
        $_where = '';
        if (!$params){
            return $_where;
        }
        foreach ($params as $k=>$v){
            $v = gettype($v) == 'string' ? "'".$v."'":$v;
            if ($v){
                $_where .=$k."=".$v.' and ';
            }else{
                $_where.=$k.' and ';
            }
        }
        $_where = rtrim($_where,'and ');
        return $_where;
    }

}